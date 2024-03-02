<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
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
        return view('Evento/patient-add');
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
        return view('Evento/doctor-nurse-list');
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
        return view('Evento/department');
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
}
