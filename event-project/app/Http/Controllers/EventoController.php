<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Event;
use App\Models\UserSetting;
use Illuminate\Http\Request;

class EventoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
    public function showLanding()
    {
        $event = Event::with('category')->get();

        return view('front/events', compact('event'));
    }
    public function showaddCategory()
    {
        return view('Evento/addCategory');
    }
    public function addCategory(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);
        $user = auth()->user();
        $User_id = $user->id;
        $Settings = UserSetting::where('_id', $User_id)->first();

        if ($Settings->autoCreation == "on") {
            $category = new Category();
            $category->name = $request->name;
            $category->save();
            return redirect()->back()->with('status', 'Category created successfully.');
        } else {
            return redirect()->back()->with('error', 'You are not allowed to create category.');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
    public function SaveEvent(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'price' => 'required',
            'payment_methode' => 'required',
            'description' => 'required',
            'start_date' => 'required',
            'location' => 'required',
            'capacity' => 'required',
            'image' => 'image|mimes:jpeg,jpg,png,gif|max:10000', // Combine image validation with other validations
        ]);

        $data = $request->except('image'); // Exclude image from mass assignment

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $image_name = time() . '.' . $image->getClientOriginalExtension(); // Use getClientOriginalExtension() to get file extension
            $image->move(public_path('EventImages'), $image_name);
            $data['image'] = $image_name; // Assign image name to data array
        }

        // Mass assignment with setting the value of the user 
        $event = Event::create($data + ['user_id' => auth()->id()]);

        return redirect()->back()->with('success', 'Event created successfully.');
    }
    public function delateEvent($id)
    {
        $event = Event::find($id);
        $event->delete();
        return redirect()->back()->with('success', 'Event deleted successfully.');
    }
    public function ShoweditEvent($id)
    {
        $event = Event::find($id);
        $category = Category::all();
        return view('Evento/editEvent', compact('event', 'category'));
    }
    public function editEvent($id, Request $request)
    {
        $event = Event::find($id);
        $event->title = $request->title;
        $event->price = $request->price;
        $event->payment_methode = $request->payment_methode;
        $event->description = $request->description;
        $event->start_date = $request->start_date;
        $event->location = $request->location;
        $event->capacity = $request->capacity;
        $event->category_id = $request->category_id;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $image_name = time() . '.' . $image->getClientOriginalExtension(); // Use getClientOriginalExtension() to get file extension
            $image->move(public_path('EventImages'), $image_name);
            $event->image = $image_name; // Assign image name to data array
        }
        $event->save();
        return redirect()->back()->with('success', 'Event updated successfully.');
    }

    public function editCategory($id, Request $request)
    {
        $category = Category::find($id);
        $category->name = $request->name;
        $category->save();
        return redirect()->back()->with('success', 'Category updated successfully.');
    }

    public function DeleteCategory($id)
    {
        $category = Category::find($id);
        $category->delete();
        return redirect()->back()->with('success', 'Category deleted successfully.');
    }
    public function showeditCategory($id)
    {
        $category = Category::find($id);
        return view('Evento/editCategory', compact('category'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function showEventoIndex()
    {
        return view('Evento/index');
    }

    public function showEventoAppointment()
    {
        return view('Evento/appointment');
    }

    public function showEventoPatientAdd()
    {
        $category = Category::all();
        return view('Evento/patient-add', compact('category'));
    }

    public function showEventoPatientList()
    {
        return view('Evento/patient-list');
    }

    public function showEventoPatientProfile()
    {
        return view('Evento/patient-profile');
    }

    public function showEventoDoctorNurseAdd()
    {
        return view('Evento/doctor-nurse-add');
    }

    public function showEventoDoctorNurseList()
    {
        //event with category
        $event = Event::with('category')->get();
        return view('Evento/doctor-nurse-list', compact('event'));
    }

    public function showEventoIncomeList()
    {
        return view('Evento/income-list');
    }

    public function showEventoExpenseList()
    {
        return view('Evento/expense-list');
    }

    public function showEventoInvoiceList()
    {
        return view('Evento/invoice-list');
    }

    public function showEventoInvoiceDetails()
    {
        return view('Evento/invoice-details');
    }

    public function showEventoBirthReport()
    {
        return view('Evento/birth-report');
    }

    public function showEventoBloodBank()
    {
        return view('Evento/blood-bank');
    }

    public function showEventoInventoryItems()
    {
        return view('Evento/inventory-items');
    }

    public function showEventoBedGroup()
    {
        return view('Evento/bed-group');
    }

    public function showEventoBedAllotment()
    {
        return view('Evento/bed-allotment');
    }

    public function showEventoDepartment()
    {
        $category = Category::all();
        return view('Evento/department', compact('category'));
    }

    public function showEventoDeathReport()
    {
        return view('Evento/death-report');
    }

    public function showEventoUserProfile()
    {
        return view('Evento/user-profile');
    }

    public function showEventoSettings()
    {
        return view('Evento/settings');
    }

    public function showEventoSettingsAccountLog()
    {
        return view('Evento/settings-account-log');
    }

    public function showEventoInvoicePrint()
    {
        return view('Evento/invoice-print');
    }

    public function showEventoSettingsMember()
    {
        return view('Evento/settings-member');
    }

    public function showEventoSettingsEmail()
    {
        return view('Evento/settings-email');
    }

    public function showEventoSettingsSecurity()
    {
        return view('Evento/settings-security');
    }
    public function frontSearch(Request $request)
    {
        //dd($request->all());
        
            $event = Event::where('title', 'like', '%' . $request->title . '%')
                ->with('category')
             ->get();
        
        if ($request->has('start_date') && $request->start_date != null) {
            $event = Event::where('title', 'like', '%' . $request->title . '%')
            ->orWhere('start_date', 'like', '%' . $request->start_date . '%')
                ->with('category')
             ->get();
        }
        return view('front/events', compact('event'));
    }
}
