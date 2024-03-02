<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\EventoController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\AddCustomerController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\CustomerLedgerController;
use App\Http\Controllers\AddMedicineController;
use App\Http\Controllers\MedicineListController;
use App\Http\Controllers\MedicineDetailsController;
use App\Http\Controllers\ManufacturerController;
use App\Http\Controllers\ManufacturerLedgerController;
use App\Http\Controllers\AddWastageReturnController;
use App\Http\Controllers\WastageReturnController;
use App\Http\Controllers\AddManufacturerReturnController;
use App\Http\Controllers\ManufacturerReturnController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\MembersProfileRegularController;
use App\Http\Controllers\AttendenceController;
use App\Http\Controllers\SalaryController;
use App\Http\Controllers\IncomeListController;
use App\Http\Controllers\ExpenseListController;
use App\Http\Controllers\InvoiceListController;
use App\Http\Controllers\InvoiceDetailsController;
use App\Http\Controllers\SalesReportController;
use App\Http\Controllers\PurchaseReportController;
use App\Http\Controllers\StockReportController;
use App\Http\Controllers\SupportController;
use App\Http\Controllers\GeneralSettingsController;
use App\Http\Controllers\UserProfileController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

Route::get('/auth/login', [AuthController::class, 'showAuthLogin'])->name('auth/login');
Route::post('/auth/login', [AuthController::class, 'login'])->name('auth/login');
Route::get('/auth/register', [AuthController::class, 'showAuthRegister'])->name('auth/register');
Route::post('/auth/register', [AuthController::class, 'register'])->name('auth/register');
Route::get('/Evento/index', [EventoController::class, 'showEventoIndex'])->name('Evento/index');
Route::get('/Evento/appointment', [EventoController::class, 'showEventoAppointment'])->name('Evento/appointment');
Route::get('/Evento/patient-add', [EventoController::class, 'showEventoPatientAdd'])->name('Evento/patient-add');
Route::get('/Evento/patient-list', [EventoController::class, 'showEventoPatientList'])->name('Evento/patient-list');
Route::get('/Evento/patient-profile', [EventoController::class, 'showEventoPatientProfile'])->name('Evento/patient-profile');
Route::get('/Evento/doctor-nurse-add', [EventoController::class, 'showEventoDoctorNurseAdd'])->name('Evento/doctor-nurse-add');
Route::get('/Evento/doctor-nurse-list', [EventoController::class, 'showEventoDoctorNurseList'])->name('Evento/doctor-nurse-list');
Route::get('/Evento/income-list', [EventoController::class, 'showEventoIncomeList'])->name('Evento/income-list');
Route::get('/Evento/expense-list', [EventoController::class, 'showEventoExpenseList'])->name('Evento/expense-list');
Route::get('/Evento/invoice-list', [EventoController::class, 'showEventoInvoiceList'])->name('Evento/invoice-list');
Route::get('/Evento/invoice-details', [EventoController::class, 'showEventoInvoiceDetails'])->name('Evento/invoice-details');
Route::get('/Evento/birth-report', [EventoController::class, 'showEventoBirthReport'])->name('Evento/birth-report');
Route::get('/Evento/blood-bank', [EventoController::class, 'showEventoBloodBank'])->name('Evento/blood-bank');
Route::get('/Evento/inventory-items', [EventoController::class, 'showEventoInventoryItems'])->name('Evento/inventory-items');
Route::get('/Evento/bed-group', [EventoController::class, 'showEventoBedGroup'])->name('Evento/bed-group');
Route::get('/Evento/bed-allotment', [EventoController::class, 'showEventoBedAllotment'])->name('Evento/bed-allotment');
Route::get('/Evento/department', [EventoController::class, 'showEventoDepartment'])->name('Evento/department');
Route::get('/Evento/death-report', [EventoController::class, 'showEventoDeathReport'])->name('Evento/death-report');
Route::get('/Evento/user-profile', [EventoController::class, 'showEventoUserProfile'])->name('Evento/user-profile');
Route::get('/Evento/settings', [EventoController::class, 'showEventoSettings'])->name('Evento/settings');
Route::get('/index', [IndexController::class, 'showIndex'])->name('index');
Route::get('/Evento/settings-account-log', [EventoController::class, 'showEventoSettingsAccountLog'])->name('Evento/settings-account-log');
Route::get('/auth/logout', [AuthController::class, 'logout'])->name('auth/logout');
Route::get('/add-customer', [AddCustomerController::class, 'showAddCustomer'])->name('add-customer');
Route::get('/customer', [CustomerController::class, 'showCustomer'])->name('customer');
Route::get('/customer-ledger', [CustomerLedgerController::class, 'showCustomerLedger'])->name('customer-ledger');
Route::get('/add-medicine', [AddMedicineController::class, 'showAddMedicine'])->name('add-medicine');
Route::get('/medicine-list', [MedicineListController::class, 'showMedicineList'])->name('medicine-list');
Route::get('/medicine-details', [MedicineDetailsController::class, 'showMedicineDetails'])->name('medicine-details');
Route::get('/manufacturer', [ManufacturerController::class, 'showManufacturer'])->name('manufacturer');
Route::get('/manufacturer-ledger', [ManufacturerLedgerController::class, 'showManufacturerLedger'])->name('manufacturer-ledger');
Route::get('/add-wastage-return', [AddWastageReturnController::class, 'showAddWastageReturn'])->name('add-wastage-return');
Route::get('/wastage-return', [WastageReturnController::class, 'showWastageReturn'])->name('wastage-return');
Route::get('/add-manufacturer-return', [AddManufacturerReturnController::class, 'showAddManufacturerReturn'])->name('add-manufacturer-return');
Route::get('/manufacturer-return', [ManufacturerReturnController::class, 'showManufacturerReturn'])->name('manufacturer-return');
Route::get('/member', [MemberController::class, 'showMember'])->name('member');
Route::get('/members-profile-regular', [MembersProfileRegularController::class, 'showMembersProfileRegular'])->name('members-profile-regular');
Route::get('/attendence', [AttendenceController::class, 'showAttendence'])->name('attendence');
Route::get('/salary', [SalaryController::class, 'showSalary'])->name('salary');
Route::get('/income-list', [IncomeListController::class, 'showIncomeList'])->name('income-list');
Route::get('/expense-list', [ExpenseListController::class, 'showExpenseList'])->name('expense-list');
Route::get('/invoice-list', [InvoiceListController::class, 'showInvoiceList'])->name('invoice-list');
Route::get('/invoice-details', [InvoiceDetailsController::class, 'showInvoiceDetails'])->name('invoice-details');
Route::get('/sales-report', [SalesReportController::class, 'showSalesReport'])->name('sales-report');
Route::get('/purchase-report', [PurchaseReportController::class, 'showPurchaseReport'])->name('purchase-report');
Route::get('/stock-report', [StockReportController::class, 'showStockReport'])->name('stock-report');
Route::get('/support', [SupportController::class, 'showSupport'])->name('support');
Route::get('/general-settings', [GeneralSettingsController::class, 'showGeneralSettings'])->name('general-settings');
Route::get('/Evento/invoice-print', [EventoController::class, 'showEventoInvoicePrint'])->name('Evento/invoice-print');
Route::get('/Evento/settings-member', [EventoController::class, 'showEventoSettingsMember'])->name('Evento/settings-member');
Route::get('/Evento/settings-email', [EventoController::class, 'showEventoSettingsEmail'])->name('Evento/settings-email');
Route::get('/Evento/settings-security', [EventoController::class, 'showEventoSettingsSecurity'])->name('Evento/settings-security');
Route::get('/user-profile', [UserProfileController::class, 'showUserProfile'])->name('user-profile');
Route::get('/login', [LoginController::class, 'showLogin'])->name('login');
Route::get('/register', [RegisterController::class, 'showRegister'])->name('register');
//socialite
Route::get('/auth/{provider}/redirect', function ($provider) {

    return Socialite::driver($provider)->redirect();
});
 
Route::get('/auth/{provider}/callback', function ($provider) {
    try {
    $SocialiteUser = Socialite::driver($provider)->user();

    } catch(\Exception $e){
        return redirect()->route('auth/login');
    }
    $user= User::where([
        'provider'=>$provider,
        'provider_id'=>$SocialiteUser->getId()
        ])->first();
    if(!$user){
        if(User::where('email',$SocialiteUser->getEmail())->exists()){
            return redirect()->route('auth/login')->withErrors('Email already exists');
        }
        $user= User::create([    
            'name'=>$SocialiteUser->getNickname(),
            'email'=>$SocialiteUser->getEmail(),
            'provider'=>$provider,
            'provider_id'=>$SocialiteUser->getId(),
            'password'=>bcrypt('12345678'),
            'role'=>'admin',
            'email_verified_at'=>now()
        ]);
    }
    Auth::login($user);
    return redirect()->route('Evento/index');
    

});


// Route::get('/auth/github/callback', function () {
//     $user = Socialite::driver($provider)->user();
 
//     // $user->token
// });