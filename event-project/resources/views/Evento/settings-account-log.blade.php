<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    <base href="../../">
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="A powerful and conceptual apps base dashboard template that especially build for developers and programmers.">
    <!-- Fav Icon  -->
    <link rel="shortcut icon" href="./images/favicon.png">
    <!-- Page Title  -->
    <title>Account Log | DashLite Admin Template</title>
    <!-- StyleSheets  -->
    <link rel="stylesheet" href="{{asset('css/dashlite.css')}}">


    <link id="skin-default" rel="stylesheet" href="./assets/css/theme.css?ver=3.2.3">
</head>

<body class="nk-body ui-rounder npc-default has-sidebar ">
    <div class="nk-app-root">
        <div class="nk-sidebar" data-content="sidebarMenu">
                        {{-- nav was here --}}
            <div class="nk-sidebar-main is-light">
                <div class="nk-sidebar-inner" data-simplebar>
                    <div class="nk-menu-content" data-content="navPharmacy">
                        <h5 class="title">Pharmacy</h5>
                        <ul class="nk-menu">
                            <li class="nk-menu-item">
                                <a href="{{route('index')}}" class="nk-menu-link">
                                    <span class="nk-menu-icon"><em class="icon ni ni-dashboard-fill"></em></span>
                                    <span class="nk-menu-text">Dashboard</span>
                                </a>
                            </li><!-- .nk-menu-item -->
                            <li class="nk-menu-item has-sub">
                                <a href="#" class="nk-menu-link nk-menu-toggle">
                                    <span class="nk-menu-icon"><em class="icon ni ni-users-fill"></em></span>
                                    <span class="nk-menu-text">Customer</span>
                                </a>
                                <ul class="nk-menu-sub">
                                    <li class="nk-menu-item">
                                        <a href="{{route('add-customer')}}" class="nk-menu-link"><span class="nk-menu-text">Add Customer</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="{{route('customer')}}" class="nk-menu-link"><span class="nk-menu-text">Customer List</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="{{route('customer-ledger')}}" class="nk-menu-link"><span class="nk-menu-text">Customer Ledger</span></a>
                                    </li>
                                </ul><!-- .nk-menu-sub -->
                            </li><!-- .nk-menu-item -->
                            <li class="nk-menu-item has-sub">
                                <a href="#" class="nk-menu-link nk-menu-toggle">
                                    <span class="nk-menu-icon"><em class="icon ni ni-capsule-fill"></em></span>
                                    <span class="nk-menu-text">Medicine</span>
                                </a>
                                <ul class="nk-menu-sub">
                                    <li class="nk-menu-item">
                                        <a href="{{route('add-medicine')}}" class="nk-menu-link"><span class="nk-menu-text">Add Medicine</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="{{route('medicine-list')}}" class="nk-menu-link"><span class="nk-menu-text">Medicine List</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="{{route('medicine-details')}}" class="nk-menu-link"><span class="nk-menu-text">Medicine Details</span></a>
                                    </li>
                                </ul><!-- .nk-menu-sub -->
                            </li><!-- .nk-menu-item -->
                            <li class="nk-menu-item has-sub">
                                <a href="#" class="nk-menu-link nk-menu-toggle">
                                    <span class="nk-menu-icon"><em class="icon ni ni-home-fill"></em></span>
                                    <span class="nk-menu-text">Manufacturer</span>
                                </a>
                                <ul class="nk-menu-sub">
                                    <li class="nk-menu-item">
                                        <a href="{{route('manufacturer')}}" class="nk-menu-link"><span class="nk-menu-text">Manufacturer List</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="{{route('manufacturer-ledger')}}" class="nk-menu-link"><span class="nk-menu-text">Manufacturer Ledger</span></a>
                                    </li>
                                </ul><!-- .nk-menu-sub -->
                            </li><!-- .nk-menu-item -->
                            <li class="nk-menu-item has-sub">
                                <a href="#" class="nk-menu-link nk-menu-toggle">
                                    <span class="nk-menu-icon"><em class="icon ni ni-repeat"></em></span>
                                    <span class="nk-menu-text">Return</span>
                                </a>
                                <ul class="nk-menu-sub">
                                    <li class="nk-menu-item">
                                        <a href="{{route('add-wastage-return')}}" class="nk-menu-link"><span class="nk-menu-text">Add Wastage Return</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="{{route('wastage-return')}}" class="nk-menu-link"><span class="nk-menu-text">Wastage Return List</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="{{route('add-manufacturer-return')}}" class="nk-menu-link"><span class="nk-menu-text">Add Manufacture Return</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="{{route('manufacturer-return')}}" class="nk-menu-link"><span class="nk-menu-text">Manufacturer Return List</span></a>
                                    </li>
                                </ul><!-- .nk-menu-sub -->
                            </li><!-- .nk-menu-item -->
                            <li class="nk-menu-item has-sub">
                                <a href="#" class="nk-menu-link nk-menu-toggle">
                                    <span class="nk-menu-icon"><em class="icon ni ni-user-circle-fill"></em></span>
                                    <span class="nk-menu-text">Human resource</span>
                                </a>
                                <ul class="nk-menu-sub">
                                    <li class="nk-menu-item">
                                        <a href="{{route('member')}}" class="nk-menu-link"><span class="nk-menu-text">Member</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="{{route('members-profile-regular')}}" class="nk-menu-link"><span class="nk-menu-text">Members Profile</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="{{route('attendence')}}" class="nk-menu-link"><span class="nk-menu-text">Attendence</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="{{route('salary')}}" class="nk-menu-link"><span class="nk-menu-text">Salary</span></a>
                                    </li>
                                </ul><!-- .nk-menu-sub -->
                            </li><!-- .nk-menu-item -->
                            <li class="nk-menu-item has-sub">
                                <a href="#" class="nk-menu-link nk-menu-toggle">
                                    <span class="nk-menu-icon"><em class="icon ni ni-coin-alt-fill"></em></span>
                                    <span class="nk-menu-text">Finance</span>
                                </a>
                                <ul class="nk-menu-sub">
                                    <li class="nk-menu-item">
                                        <a href="{{route('income-list')}}" class="nk-menu-link"><span class="nk-menu-text">Income</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="{{route('expense-list')}}" class="nk-menu-link"><span class="nk-menu-text">Expence</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="{{route('invoice-list')}}" class="nk-menu-link"><span class="nk-menu-text">Invoice List</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="{{route('invoice-details')}}" class="nk-menu-link"><span class="nk-menu-text">Invoice Details</span></a>
                                    </li>
                                </ul><!-- .nk-menu-sub -->
                            </li><!-- .nk-menu-item -->
                            <li class="nk-menu-item has-sub">
                                <a href="#" class="nk-menu-link nk-menu-toggle">
                                    <span class="nk-menu-icon"><em class="icon ni ni-activity-round-fill"></em></span>
                                    <span class="nk-menu-text">Report</span>
                                </a>
                                <ul class="nk-menu-sub">
                                    <li class="nk-menu-item">
                                        <a href="{{route('sales-report')}}" class="nk-menu-link"><span class="nk-menu-text">Sales Report</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="{{route('purchase-report')}}" class="nk-menu-link"><span class="nk-menu-text">Purchase Report</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="{{route('stock-report')}}" class="nk-menu-link"><span class="nk-menu-text">Stock Report</span></a>
                                    </li>
                                </ul><!-- .nk-menu-sub -->
                            </li><!-- .nk-menu-item -->
                            <li class="nk-menu-item">
                                <a href="{{route('support')}}" class="nk-menu-link">
                                    <span class="nk-menu-icon"><em class="icon ni ni-msg-fill"></em></span>
                                    <span class="nk-menu-text">Support</span>
                                </a>
                            </li><!-- .nk-menu-item -->
                            <li class="nk-menu-item">
                                <a href="{{route('general-settings')}}" class="nk-menu-link">
                                    <span class="nk-menu-icon"><em class="icon ni ni-setting-fill"></em></span>
                                    <span class="nk-menu-text">Setting</span>
                                </a>
                            </li><!-- .nk-menu-item -->
                        </ul><!-- .nk-menu -->
                    </div>
                    <div class="nk-menu-content menu-active" data-content="navHospital">
                        <h5 class="title">Hospital Manegment</h5>
                        <ul class="nk-menu">
                            <li class="nk-menu-item">
                                <a href="{{route('Evento/index')}}" class="nk-menu-link">
                                    <span class="nk-menu-icon"><em class="icon ni ni-dashboard-fill"></em></span>
                                    <span class="nk-menu-text">Dashboard</span>
                                </a>
                            </li><!-- .nk-menu-item -->
                            <li class="nk-menu-item">
                                <a href="{{route('Evento/appointment')}}" class="nk-menu-link">
                                    <span class="nk-menu-icon"><em class="icon ni ni-note-add-fill"></em></span>
                                    <span class="nk-menu-text">Appointment List</span>
                                </a>
                            </li><!-- .nk-menu-item -->
                            <li class="nk-menu-item has-sub">
                                <a href="#" class="nk-menu-link nk-menu-toggle">
                                    <span class="nk-menu-icon"><em class="icon ni ni-users-fill"></em></span>
                                    <span class="nk-menu-text">Event</span>
                                </a>
                                <ul class="nk-menu-sub">
                                    <li class="nk-menu-item">
                                        <a href="{{route('Evento/patient-add')}}" class="nk-menu-link"><span class="nk-menu-text">Add Event</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="{{route('Evento/patient-list')}}" class="nk-menu-link"><span class="nk-menu-text">IPD / OPD Patients</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="{{route('Evento/patient-profile')}}" class="nk-menu-link"><span class="nk-menu-text">Patient Profile</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="{{route('Evento/doctor-nurse-list')}}" class="nk-menu-link"><span class="nk-menu-text">Doctors / Nurses</span></a>
                                    </li>
                                </ul><!-- .nk-menu-sub -->
                            </li><!-- .nk-menu-item -->
                            <li class="nk-menu-item has-sub">
                                <a href="#" class="nk-menu-link nk-menu-toggle">
                                    <span class="nk-menu-icon"><em class="icon ni ni-plus-medi-fill"></em></span>
                                    <span class="nk-menu-text">Doctors / Nurses</span>
                                </a>
                                <ul class="nk-menu-sub">
                                    <li class="nk-menu-item">
                                        <a href="{{route('Evento/doctor-nurse-add')}}" class="nk-menu-link"><span class="nk-menu-text">Add Doctor / Nurses</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="{{route('Evento/doctor-nurse-list')}}" class="nk-menu-link"><span class="nk-menu-text">Doctors / Nurses</span></a>
                                    </li>
                                </ul><!-- .nk-menu-sub -->
                            </li><!-- .nk-menu-item -->
                            <li class="nk-menu-item has-sub">
                                <a href="#" class="nk-menu-link nk-menu-toggle">
                                    <span class="nk-menu-icon"><em class="icon ni ni-coin-alt-fill"></em></span>
                                    <span class="nk-menu-text">Finance</span>
                                </a>
                                <ul class="nk-menu-sub">
                                    <li class="nk-menu-item">
                                        <a href="{{route('Evento/income-list')}}" class="nk-menu-link"><span class="nk-menu-text">Income</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="{{route('Evento/expense-list')}}" class="nk-menu-link"><span class="nk-menu-text">Expense</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="{{route('Evento/invoice-list')}}" class="nk-menu-link"><span class="nk-menu-text">Invoice List</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="{{route('Evento/invoice-details')}}" class="nk-menu-link"><span class="nk-menu-text">Invoice Details</span></a>
                                    </li>
                                </ul><!-- .nk-menu-sub -->
                            </li><!-- .nk-menu-item -->
                            <li class="nk-menu-item has-sub">
                                <a href="#" class="nk-menu-link nk-menu-toggle">
                                    <span class="nk-menu-icon"><em class="icon ni ni-activity-round-fill"></em></span>
                                    <span class="nk-menu-text">Monitor Hospital</span>
                                </a>
                                <ul class="nk-menu-sub">
                                    <li class="nk-menu-item">
                                        <a href="{{route('Evento/birth-report')}}" class="nk-menu-link"><span class="nk-menu-text">Birth Report</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="{{route('Evento/blood-bank')}}" class="nk-menu-link"><span class="nk-menu-text">Blood Bank</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="{{route('Evento/inventory-items')}}" class="nk-menu-link"><span class="nk-menu-text">Inventory Items Reports</span></a>
                                    </li>
                                </ul><!-- .nk-menu-sub -->
                            </li><!-- .nk-menu-item -->
                            <li class="nk-menu-item has-sub">
                                <a href="#" class="nk-menu-link nk-menu-toggle">
                                    <span class="nk-menu-icon"><em class="icon ni ni-panel-fill"></em></span>
                                    <span class="nk-menu-text">Misc Pages</span>
                                </a>
                                <ul class="nk-menu-sub">
                                    <li class="nk-menu-item">
                                        <a href="{{route('Evento/bed-group')}}" class="nk-menu-link"><span class="nk-menu-text">Bed Group</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="{{route('Evento/bed-allotment')}}" class="nk-menu-link"><span class="nk-menu-text">Bed Allotment</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="{{route('Evento/department')}}" class="nk-menu-link"><span class="nk-menu-text">Department</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="{{route('Evento/death-report')}}" class="nk-menu-link"><span class="nk-menu-text">Death Report</span></a>
                                    </li>
                                </ul><!-- .nk-menu-sub -->
                            </li><!-- .nk-menu-item -->
                            <li class="nk-menu-item">
                                <a href="{{route('Evento/user-profile')}}" class="nk-menu-link">
                                    <span class="nk-menu-icon"><em class="icon ni ni-user-fill"></em></span>
                                    <span class="nk-menu-text">User Profile</span>
                                </a>
                            </li><!-- .nk-menu-item -->
                            <li class="nk-menu-item">
                                <a href="{{route('Evento/settings')}}" class="nk-menu-link">
                                    <span class="nk-menu-icon"><em class="icon ni ni-setting-fill"></em></span>
                                    <span class="nk-menu-text">Setting</span>
                                </a>
                            </li><!-- .nk-menu-item -->
                        </ul><!-- .nk-menu -->
                    </div>
                    
                    
                    
                    
                    
                </div>
            </div>
        </div>
        <!-- main @s -->
        <div class="nk-main ">
            <!-- wrap @s -->
            <div class="nk-wrap ">
                <!-- main header @s -->
                                @include('inc.evento-back-nav')

                <!-- main header @e -->
                <!-- content @s -->
                <div class="nk-content ">
                    <div class="container-fluid">
                        <div class="nk-content-inner">
                            <div class="nk-content-body">
                                <div class="nk-block">
                                    <div class="card card-bordered">
                                        <div class="card-aside-wrap">
                                            <div class="card-inner card-inner-lg">
                                                <div class="nk-block-head nk-block-head-lg">
                                                    <div class="nk-block-between">
                                                        <div class="nk-block-head-content">
                                                            <h5 class="title fw-medium">Account Activity</h5>
                                                            <div class="nk-block-des">
                                                                <p>Here is your last 20 login activities log. <span class="text-soft"><em class="icon ni ni-info text-danger"></em></span></p>
                                                            </div>
                                                        </div>
                                                        <div class="nk-block-head-content align-self-start d-lg-none">
                                                            <a href="#" class="toggle btn btn-icon btn-trigger mt-n1" data-target="userAside"><em class="icon ni ni-menu-alt-r"></em></a>
                                                        </div>
                                                    </div>
                                                </div><!-- .nk-block-head -->
                                                <div class="nk-block card card-bordered">
                                                    <table class="table table-ulogs">
                                                        <thead class="table-light">
                                                            <tr>
                                                                <th class="tb-col-os"><span class="overline-title">Browser <span class="d-sm-none">/ IP</span></span></th>
                                                                <th class="tb-col-ip"><span class="overline-title">IP</span></th>
                                                                <th class="tb-col-time"><span class="overline-title">Time</span></th>
                                                                <th class="tb-col-time"><span class="overline-title">Activity</span></th>
                                                                <th class="tb-col-action"><span class="overline-title">&nbsp;</span></th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td class="tb-col-os">Chrome on Window</td>
                                                                <td class="tb-col-ip"><span class="sub-text">192.149.122.128</span></td>
                                                                <td class="tb-col-time"><span class="sub-text">11:34 PM</span></td>
                                                                <td class="tb-col-time"><span class="sub-text"><span class="badge bg-danger ms-0">Deleted</span></span></td>
                                                                <td class="tb-col-action"><a href="#" class="link-cross me-sm-n1"><em class="icon ni ni-cross"></em></a></td>
                                                            </tr>
                                                            <tr>
                                                                <td class="tb-col-os">Mozilla on Window</td>
                                                                <td class="tb-col-ip"><span class="sub-text">86.188.154.225</span></td>
                                                                <td class="tb-col-time"><span class="sub-text">11:34 PM</span></td>
                                                                <td class="tb-col-time"><span class="sub-text"><span class="badge bg-success ms-0">Updated</span></span></td>
                                                                <td class="tb-col-action"><a href="#" class="link-cross me-sm-n1"><em class="icon ni ni-cross"></em></a></td>
                                                            </tr>
                                                            <tr>
                                                                <td class="tb-col-os">Chrome on iMac</td>
                                                                <td class="tb-col-ip"><span class="sub-text">192.149.122.128</span></td>
                                                                <td class="tb-col-time"><span class="sub-text">11:34 PM</span></td>
                                                                <td class="tb-col-time"><span class="sub-text"><span class="badge bg-danger ms-0">Deleted</span></span></td>
                                                                <td class="tb-col-action"><a href="#" class="link-cross me-sm-n1"><em class="icon ni ni-cross"></em></a></td>
                                                            </tr>
                                                            <tr>
                                                                <td class="tb-col-os">Chrome on Window</td>
                                                                <td class="tb-col-ip"><span class="sub-text">192.149.122.128</span></td>
                                                                <td class="tb-col-time"><span class="sub-text">11:34 PM</span></td>
                                                                <td class="tb-col-time"><span class="sub-text"><span class="badge bg-primary ms-0">Created</span></span></td>
                                                                <td class="tb-col-action"><a href="#" class="link-cross me-sm-n1"><em class="icon ni ni-cross"></em></a></td>
                                                            </tr>
                                                            <tr>
                                                                <td class="tb-col-os">Mozilla on Window</td>
                                                                <td class="tb-col-ip"><span class="sub-text">86.188.154.225</span></td>
                                                                <td class="tb-col-time"><span class="sub-text">11:34 PM</span></td>
                                                                <td class="tb-col-time"><span class="sub-text"><span class="badge bg-success ms-0">Updated</span></span></td>
                                                                <td class="tb-col-action"><a href="#" class="link-cross me-sm-n1"><em class="icon ni ni-cross"></em></a></td>
                                                            </tr>
                                                            <tr>
                                                                <td class="tb-col-os">Chrome on iMac</td>
                                                                <td class="tb-col-ip"><span class="sub-text">192.149.122.128</span></td>
                                                                <td class="tb-col-time"><span class="sub-text">11:34 PM</span></td>
                                                                <td class="tb-col-time"><span class="sub-text"><span class="badge bg-primary ms-0">Created</span></span></td>
                                                                <td class="tb-col-action"><a href="#" class="link-cross me-sm-n1"><em class="icon ni ni-cross"></em></a></td>
                                                            </tr>
                                                            <tr>
                                                                <td class="tb-col-os">Chrome on Window</td>
                                                                <td class="tb-col-ip"><span class="sub-text">192.149.122.128</span></td>
                                                                <td class="tb-col-time"><span class="sub-text">11:34 PM</span></td>
                                                                <td class="tb-col-time"><span class="sub-text"><span class="badge bg-success ms-0">Updated</span></span></td>
                                                                <td class="tb-col-action"><a href="#" class="link-cross me-sm-n1"><em class="icon ni ni-cross"></em></a></td>
                                                            </tr>
                                                            <tr>
                                                                <td class="tb-col-os">Mozilla on Window</td>
                                                                <td class="tb-col-ip"><span class="sub-text">86.188.154.225</span></td>
                                                                <td class="tb-col-time"><span class="sub-text">11:34 PM</span></td>
                                                                <td class="tb-col-time"><span class="sub-text"><span class="badge bg-danger ms-0">Deleted</span></span></td>
                                                                <td class="tb-col-action"><a href="#" class="link-cross me-sm-n1"><em class="icon ni ni-cross"></em></a></td>
                                                            </tr>
                                                            <tr>
                                                                <td class="tb-col-os">Chrome on iMac</td>
                                                                <td class="tb-col-ip"><span class="sub-text">192.149.122.128</span></td>
                                                                <td class="tb-col-time"><span class="sub-text">11:34 PM</span></td>
                                                                <td class="tb-col-time"><span class="sub-text"><span class="badge bg-primary ms-0">Created</span></span></td>
                                                                <td class="tb-col-action"><a href="#" class="link-cross me-sm-n1"><em class="icon ni ni-cross"></em></a></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div><!-- .nk-block-head -->
                                            </div><!-- .card-inner -->
                                            <div class="card-aside card-aside-left user-aside toggle-slide toggle-slide-left toggle-break-lg" data-content="userAside" data-toggle-screen="lg" data-toggle-overlay="true">
                                                <div class="card-inner-group" data-simplebar>
                                                    <div class="card-inner">
                                                        <h3 class="nk-block-title page-title">Settings</h3>
                                                        <div class="nk-block-des text-soft">
                                                            <p>Here you can change and edit your needs</p>
                                                        </div>
                                                    </div><!-- .card-inner -->
                                                    <div class="card-inner p-0">
                                                        <ul class="link-list-menu">
                                                            <li><a href="{{route('Evento/settings')}}"><em class="icon ni ni-user-fill-c"></em><span>General</span></a></li>
                                                            <li><a href="{{route('Evento/settings-member')}}"><em class="icon ni ni-bell-fill"></em><span>Users</span></a></li>
                                                            <li><a href="{{route('Evento/settings-email')}}"><em class="icon ni ni-lock-alt-fill"></em><span>E-mail</span></a></li>
                                                            <li><a href="{{route('Evento/settings-security')}}"><em class="icon ni ni-shield-star-fill"></em><span>Security</span></a></li>
                                                            <li><a class="active" href="{{route('Evento/settings-account-log')}}"><em class="icon ni ni-activity-round-fill"></em><span>Account activity</span></a></li>
                                                        </ul>
                                                    </div><!-- .card-inner -->
                                                </div><!-- .card-inner-group -->
                                            </div><!-- card-aside -->
                                        </div><!-- card-aside-wrap -->
                                    </div><!-- .card -->
                                </div><!-- .nk-block -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- content @e -->
            </div>
            <!-- wrap @e -->
        </div>
        <!-- main @e -->
    </div>
    <!-- app-root @e -->
    <!-- select region modal -->
    <div class="modal fade" tabindex="-1" role="dialog" id="region">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-bs-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                <div class="modal-body modal-body-md">
                    <h5 class="title mb-4">Select Your Country</h5>
                    <div class="nk-country-region">
                        <ul class="country-list text-center gy-2">
                            <li>
                                <a href="#" class="country-item">
                                    <img src="{{asset('images/flags/arg.png')}}" alt="" class="country-flag">
                                    <span class="country-name">Argentina</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="{{asset('images/flags/aus.png')}}" alt="" class="country-flag">
                                    <span class="country-name">Australia</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="{{asset('images/flags/bangladesh.png')}}" alt="" class="country-flag">
                                    <span class="country-name">Bangladesh</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="{{asset('images/flags/canada.png')}}" alt="" class="country-flag">
                                    <span class="country-name">Canada <small>(English)</small></span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="{{asset('images/flags/china.png')}}" alt="" class="country-flag">
                                    <span class="country-name">Centrafricaine</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="{{asset('images/flags/china.png')}}" alt="" class="country-flag">
                                    <span class="country-name">China</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="{{asset('images/flags/french.png')}}" alt="" class="country-flag">
                                    <span class="country-name">France</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="{{asset('images/flags/germany.png')}}" alt="" class="country-flag">
                                    <span class="country-name">Germany</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="{{asset('images/flags/iran.png')}}" alt="" class="country-flag">
                                    <span class="country-name">Iran</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="{{asset('images/flags/italy.png')}}" alt="" class="country-flag">
                                    <span class="country-name">Italy</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="{{asset('images/flags/mexico.png')}}" alt="" class="country-flag">
                                    <span class="country-name">México</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="{{asset('images/flags/philipine.png')}}" alt="" class="country-flag">
                                    <span class="country-name">Philippines</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="{{asset('images/flags/portugal.png')}}" alt="" class="country-flag">
                                    <span class="country-name">Portugal</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="{{asset('images/flags/s-africa.png')}}" alt="" class="country-flag">
                                    <span class="country-name">South Africa</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="{{asset('images/flags/spanish.png')}}" alt="" class="country-flag">
                                    <span class="country-name">Spain</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="{{asset('images/flags/switzerland.png')}}" alt="" class="country-flag">
                                    <span class="country-name">Switzerland</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="{{asset('images/flags/uk.png')}}" alt="" class="country-flag">
                                    <span class="country-name">United Kingdom</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="{{asset('images/flags/english.png')}}" alt="" class="country-flag">
                                    <span class="country-name">United State</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div><!-- .modal-content -->
        </div><!-- .modla-dialog -->
    </div><!-- .modal -->
    <!-- JavaScript -->
     <script src="{{asset('js/bundle.js')}}"></script>
    
    <script src="{{asset('js/scripts.js')}}"></script>
</body>

</html>