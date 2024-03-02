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
    <title>Patient Details | DashLite Admin Template</title>
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
                                    <span class="nk-menu-text">Patient</span>
                                </a>
                                <ul class="nk-menu-sub">
                                    <li class="nk-menu-item">
                                        <a href="{{route('Evento/patient-add')}}" class="nk-menu-link"><span class="nk-menu-text">Add Patient</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="{{route('Evento/patient-list')}}" class="nk-menu-link"><span class="nk-menu-text">IPD / OPD Patients</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="{{route('Evento/patient-profile')}}" class="nk-menu-link"><span class="nk-menu-text">Patient Profile</span></a>
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
                <div class="nk-header nk-header-fixed nk-header-fluid is-light">
                    <div class="container-fluid">
                        <div class="nk-header-wrap">
                            <div class="nk-menu-trigger d-xl-none ms-n1">
                                <a href="#" class="nk-nav-toggle nk-quick-nav-icon" data-target="sidebarMenu"><em class="icon ni ni-menu"></em></a>
                            </div>
                            <div class="nk-header-brand d-xl-none">
                                <a href="{{route('index')}}" class="logo-link">
                                    <img class="logo-light logo-img" src="{{asset('images/logo.png')}}" srcset="./images/logo2x.png 2x" alt="logo">
                                    <img class="logo-dark logo-img" src="{{asset('images/logo-dark.png')}}" srcset="./images/logo-dark2x.png 2x" alt="logo-dark">
                                </a>
                            </div><!-- .nk-header-brand -->
                            <div class="nk-header-search ms-3 ms-xl-0">
                                <em class="icon ni ni-search"></em>
                                <input type="text" class="form-control border-transparent form-focus-none" placeholder="Search anything">
                            </div><!-- .nk-header-news -->
                            <div class="nk-header-tools">
                                <ul class="nk-quick-nav">
                                    <li class="nav-item">
                                        <a data-bs-toggle="modal" href="#region" class="nk-quick-nav-icon"><em class="icon ni ni-globe"></em></a>
                                    </li>
                                    <li class="dropdown chats-dropdown hide-mb-xs">
                                        <a href="#" class="dropdown-toggle nk-quick-nav-icon" data-bs-toggle="dropdown">
                                            <div class="icon-status icon-status-na"><em class="icon ni ni-comments"></em></div>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-xl dropdown-menu-end">
                                            <div class="dropdown-head">
                                                <span class="sub-title nk-dropdown-title">Recent Chats</span>
                                                <a href="#">Setting</a>
                                            </div>
                                            <div class="dropdown-body">
                                                <ul class="chat-list">
                                                    <li class="chat-item">
                                                        <a class="chat-link" href="#">
                                                            <div class="chat-media user-avatar">
                                                                <span>IH</span>
                                                                <span class="status dot dot-lg dot-gray"></span>
                                                            </div>
                                                            <div class="chat-info">
                                                                <div class="chat-from">
                                                                    <div class="name">Iliash Hossain</div>
                                                                    <span class="time">Now</span>
                                                                </div>
                                                                <div class="chat-context">
                                                                    <div class="text">You: Please confrim if you got my last messages.</div>
                                                                    <div class="status delivered">
                                                                        <em class="icon ni ni-check-circle-fill"></em>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </li><!-- .chat-item -->
                                                    <li class="chat-item is-unread">
                                                        <a class="chat-link" href="#">
                                                            <div class="chat-media user-avatar bg-pink">
                                                                <span>AB</span>
                                                                <span class="status dot dot-lg dot-success"></span>
                                                            </div>
                                                            <div class="chat-info">
                                                                <div class="chat-from">
                                                                    <div class="name">Abu Bin Ishtiyak</div>
                                                                    <span class="time">4:49 AM</span>
                                                                </div>
                                                                <div class="chat-context">
                                                                    <div class="text">Hi, I am Ishtiyak, can you help me with this problem ?</div>
                                                                    <div class="status unread">
                                                                        <em class="icon ni ni-bullet-fill"></em>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </li><!-- .chat-item -->
                                                    <li class="chat-item">
                                                        <a class="chat-link" href="#">
                                                            <div class="chat-media user-avatar">
                                                                <img src="{{asset('images/avatar/b-sm.jpg')}}" alt="">
                                                            </div>
                                                            <div class="chat-info">
                                                                <div class="chat-from">
                                                                    <div class="name">George Philips</div>
                                                                    <span class="time">6 Apr</span>
                                                                </div>
                                                                <div class="chat-context">
                                                                    <div class="text">Have you seens the claim from Rose?</div>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </li><!-- .chat-item -->
                                                    <li class="chat-item">
                                                        <a class="chat-link" href="#">
                                                            <div class="chat-media user-avatar user-avatar-multiple">
                                                                <div class="user-avatar">
                                                                    <img src="{{asset('images/avatar/c-sm.jpg')}}" alt="">
                                                                </div>
                                                                <div class="user-avatar">
                                                                    <span>AB</span>
                                                                </div>
                                                            </div>
                                                            <div class="chat-info">
                                                                <div class="chat-from">
                                                                    <div class="name">Softnio Group</div>
                                                                    <span class="time">27 Mar</span>
                                                                </div>
                                                                <div class="chat-context">
                                                                    <div class="text">You: I just bought a new computer but i am having some problem</div>
                                                                    <div class="status sent">
                                                                        <em class="icon ni ni-check-circle"></em>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </li><!-- .chat-item -->
                                                    <li class="chat-item">
                                                        <a class="chat-link" href="#">
                                                            <div class="chat-media user-avatar">
                                                                <img src="{{asset('images/avatar/a-sm.jpg')}}" alt="">
                                                                <span class="status dot dot-lg dot-success"></span>
                                                            </div>
                                                            <div class="chat-info">
                                                                <div class="chat-from">
                                                                    <div class="name">Larry Hughes</div>
                                                                    <span class="time">3 Apr</span>
                                                                </div>
                                                                <div class="chat-context">
                                                                    <div class="text">Hi Frank! How is you doing?</div>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </li><!-- .chat-item -->
                                                    <li class="chat-item">
                                                        <a class="chat-link" href="#">
                                                            <div class="chat-media user-avatar bg-purple">
                                                                <span>TW</span>
                                                            </div>
                                                            <div class="chat-info">
                                                                <div class="chat-from">
                                                                    <div class="name">Tammy Wilson</div>
                                                                    <span class="time">27 Mar</span>
                                                                </div>
                                                                <div class="chat-context">
                                                                    <div class="text">You: I just bought a new computer but i am having some problem</div>
                                                                    <div class="status sent">
                                                                        <em class="icon ni ni-check-circle"></em>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </li><!-- .chat-item -->
                                                </ul><!-- .chat-list -->
                                            </div><!-- .nk-dropdown-body -->
                                            <div class="dropdown-foot center">
                                                <a href="#">View All</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="dropdown notification-dropdown">
                                        <a href="#" class="dropdown-toggle nk-quick-nav-icon" data-bs-toggle="dropdown">
                                            <div class="icon-status icon-status-info"><em class="icon ni ni-bell"></em></div>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-xl dropdown-menu-end">
                                            <div class="dropdown-head">
                                                <span class="sub-title nk-dropdown-title">Notifications</span>
                                                <a href="#">Mark All as Read</a>
                                            </div>
                                            <div class="dropdown-body">
                                                <div class="nk-notification">
                                                    <div class="nk-notification-item dropdown-inner">
                                                        <div class="nk-notification-icon">
                                                            <em class="icon icon-circle bg-warning-dim ni ni-curve-down-right"></em>
                                                        </div>
                                                        <div class="nk-notification-content">
                                                            <div class="nk-notification-text">You have requested to <span>Widthdrawl</span></div>
                                                            <div class="nk-notification-time">2 hrs ago</div>
                                                        </div>
                                                    </div>
                                                    <div class="nk-notification-item dropdown-inner">
                                                        <div class="nk-notification-icon">
                                                            <em class="icon icon-circle bg-success-dim ni ni-curve-down-left"></em>
                                                        </div>
                                                        <div class="nk-notification-content">
                                                            <div class="nk-notification-text">Your <span>Deposit Order</span> is placed</div>
                                                            <div class="nk-notification-time">2 hrs ago</div>
                                                        </div>
                                                    </div>
                                                    <div class="nk-notification-item dropdown-inner">
                                                        <div class="nk-notification-icon">
                                                            <em class="icon icon-circle bg-warning-dim ni ni-curve-down-right"></em>
                                                        </div>
                                                        <div class="nk-notification-content">
                                                            <div class="nk-notification-text">You have requested to <span>Widthdrawl</span></div>
                                                            <div class="nk-notification-time">2 hrs ago</div>
                                                        </div>
                                                    </div>
                                                    <div class="nk-notification-item dropdown-inner">
                                                        <div class="nk-notification-icon">
                                                            <em class="icon icon-circle bg-success-dim ni ni-curve-down-left"></em>
                                                        </div>
                                                        <div class="nk-notification-content">
                                                            <div class="nk-notification-text">Your <span>Deposit Order</span> is placed</div>
                                                            <div class="nk-notification-time">2 hrs ago</div>
                                                        </div>
                                                    </div>
                                                    <div class="nk-notification-item dropdown-inner">
                                                        <div class="nk-notification-icon">
                                                            <em class="icon icon-circle bg-warning-dim ni ni-curve-down-right"></em>
                                                        </div>
                                                        <div class="nk-notification-content">
                                                            <div class="nk-notification-text">You have requested to <span>Widthdrawl</span></div>
                                                            <div class="nk-notification-time">2 hrs ago</div>
                                                        </div>
                                                    </div>
                                                    <div class="nk-notification-item dropdown-inner">
                                                        <div class="nk-notification-icon">
                                                            <em class="icon icon-circle bg-success-dim ni ni-curve-down-left"></em>
                                                        </div>
                                                        <div class="nk-notification-content">
                                                            <div class="nk-notification-text">Your <span>Deposit Order</span> is placed</div>
                                                            <div class="nk-notification-time">2 hrs ago</div>
                                                        </div>
                                                    </div>
                                                </div><!-- .nk-notification -->
                                            </div><!-- .nk-dropdown-body -->
                                            <div class="dropdown-foot center">
                                                <a href="#">View All</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="dropdown language-dropdown d-none d-sm-block me-n1">
                                        <a href="#" class="dropdown-toggle nk-quick-nav-icon" data-bs-toggle="dropdown">
                                            <div class="quick-icon border border-light">
                                                <img class="icon" src="{{asset('images/flags/english-sq.png')}}" alt="">
                                            </div>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end dropdown-menu-s1">
                                            <ul class="language-list">
                                                <li>
                                                    <a href="#" class="language-item">
                                                        <img src="{{asset('images/flags/english.png')}}" alt="" class="language-flag">
                                                        <span class="language-name">English</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" class="language-item">
                                                        <img src="{{asset('images/flags/spanish.png')}}" alt="" class="language-flag">
                                                        <span class="language-name">Español</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" class="language-item">
                                                        <img src="{{asset('images/flags/french.png')}}" alt="" class="language-flag">
                                                        <span class="language-name">Français</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" class="language-item">
                                                        <img src="{{asset('images/flags/turkey.png')}}" alt="" class="language-flag">
                                                        <span class="language-name">Türkçe</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li><!-- .dropdown -->
                                    <li class="dropdown user-dropdown">
                                        <a href="#" class="dropdown-toggle me-n1" data-bs-toggle="dropdown">
                                            <div class="user-toggle">
                                                <div class="user-avatar sm">
                                                    <em class="icon ni ni-user-alt"></em>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-md dropdown-menu-end">
                                            <div class="dropdown-inner user-card-wrap bg-lighter">
                                                <div class="user-card">
                                                    <div class="user-avatar">
                                                        <span>AB</span>
                                                    </div>
                                                    <div class="user-info">
                                                        <span class="lead-text">Abu Bin Ishtiyak</span>
                                                        <span class="sub-text">info@softnio.com</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="dropdown-inner">
                                                <ul class="link-list">
                                                    <li><a href="{{route('Evento/user-profile')}}"><em class="icon ni ni-user-alt"></em><span>View Profile</span></a></li>
                                                    <li><a href="{{route('Evento/settings')}}"><em class="icon ni ni-setting-alt"></em><span>Account Setting</span></a></li>
                                                    <li><a href="{{route('Evento/settings-account-log')}}"><em class="icon ni ni-activity-alt"></em><span>Login Activity</span></a></li>
                                                    <li><a class="dark-switch" href="#"><em class="icon ni ni-moon"></em><span>Dark Mode</span></a></li>
                                                </ul>
                                            </div>
                                            <div class="dropdown-inner">
                                                <ul class="link-list">
                                                    <li><a href="{{route('auth/logout')}}"><em class="icon ni ni-signout"></em><span>Sign out</span></a></li>

                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div><!-- .nk-header-wrap -->
                    </div><!-- .container-fliud -->
                </div>
                <!-- main header @e -->
                <!-- content @s -->
                <div class="nk-content ">
                    <div class="container-fluid">
                        <div class="nk-content-inner">
                            <div class="nk-content-body">
                                <div class="nk-block-head">
                                    <div class="nk-block-head-content">
                                        <h3 class="nk-block-title page-title">Patinent/ <strong class="text-primary small">Abu Bin Ishtiyak</strong></h3>
                                    </div>
                                </div>
                                <div class="nk-block nk-block-lg">
                                    <div class="card">
                                        <div class="card-aside-wrap">
                                            <div class="card-content">
                                                <ul class="nav nav-tabs nav-tabs-mb-icon nav-tabs-card">
                                                    <li class="nav-item">
                                                        <a class="nav-link active" data-bs-toggle="tab" href="#tabItem1"><em class="icon ni ni-user-circle-fill"></em><span>Personal information</span></a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" data-bs-toggle="tab" href="#tabItem2"><em class="icon ni ni-property"></em><span>Diagnosis</span></a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" data-bs-toggle="tab" href="#tabItem3"><em class="icon ni ni-capsule-fill"></em><span>Prescription</span></a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" data-bs-toggle="tab" href="#tabItem4"><em class="icon ni ni-money"></em><span>Charges</span></a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" data-bs-toggle="tab" href="#tabItem5"><em class="icon ni ni-wallet-in"></em><span>Payment</span> </a>
                                                    </li>
                                                </ul>
                                                <div class="card-inner">
                                                    <div class="tab-content">
                                                        <div class="tab-pane active" id="tabItem1">
                                                            <div class="nk-block nk-block-between">
                                                                <div class="nk-block-head">
                                                                    <h6 class="title">Personal Information</h6>
                                                                    <p>Patients personal information.</p>
                                                                </div><!-- .nk-block-head -->
                                                                <div class="nk-block">
                                                                    <a class="btn btn-white btn-icon btn-outline-light" data-bs-toggle="modal" href="#editPersonal">
                                                                        <em class="icon ni ni-edit"></em>
                                                                    </a>
                                                                </div>
                                                            </div><!-- .nk-block-between  -->
                                                            <div class="nk-block">
                                                                <div class="profile-ud-list">
                                                                    <div class="profile-ud-item">
                                                                        <div class="profile-ud wider">
                                                                            <span class="profile-ud-label">Name</span>
                                                                            <span class="profile-ud-value">Abu Bin Ishtiyak</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="profile-ud-item">
                                                                        <div class="profile-ud wider">
                                                                            <span class="profile-ud-label">Gender</span>
                                                                            <span class="profile-ud-value">Male</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="profile-ud-item">
                                                                        <div class="profile-ud wider">
                                                                            <span class="profile-ud-label">Age</span>
                                                                            <span class="profile-ud-value">41 years 0 months 3 days</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="profile-ud-item">
                                                                        <div class="profile-ud wider">
                                                                            <span class="profile-ud-label">Mobile</span>
                                                                            <span class="profile-ud-value">+811 847-4958</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="profile-ud-item">
                                                                        <div class="profile-ud wider">
                                                                            <span class="profile-ud-label">Date of Birth</span>
                                                                            <span class="profile-ud-value">10 Aug, 1980</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="profile-ud-item">
                                                                        <div class="profile-ud wider">
                                                                            <span class="profile-ud-label">Patient ID</span>
                                                                            <span class="profile-ud-value">#P7085</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="profile-ud-item">
                                                                        <div class="profile-ud wider">
                                                                            <span class="profile-ud-label">Bed</span>
                                                                            <span class="profile-ud-value">104 - VIP Ward - 1st Floor</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="profile-ud-item">
                                                                        <div class="profile-ud wider">
                                                                            <span class="profile-ud-label">Email Address</span>
                                                                            <span class="profile-ud-value">info@softnio.com</span>
                                                                        </div>
                                                                    </div>
                                                                </div><!-- .profile-ud-list -->
                                                            </div><!-- .nk-block -->
                                                            <div class="nk-block">
                                                                <div class="nk-block-head nk-block-head-line">
                                                                    <h6 class="title overline-title text-base">Additional Information</h6>
                                                                </div><!-- .nk-block-head -->
                                                                <div class="profile-ud-list">
                                                                    <div class="profile-ud-item">
                                                                        <div class="profile-ud wider">
                                                                            <span class="profile-ud-label">Consulant By</span>
                                                                            <span class="profile-ud-value">Ernesto Vargas</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="profile-ud-item">
                                                                        <div class="profile-ud wider">
                                                                            <span class="profile-ud-label">Patient Type</span>
                                                                            <span class="profile-ud-value">In Patient</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="profile-ud-item">
                                                                        <div class="profile-ud wider">
                                                                            <span class="profile-ud-label">Country</span>
                                                                            <span class="profile-ud-value">United State</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="profile-ud-item">
                                                                        <div class="profile-ud wider">
                                                                            <span class="profile-ud-label">Nationality</span>
                                                                            <span class="profile-ud-value">United State</span>
                                                                        </div>
                                                                    </div>
                                                                </div><!-- .profile-ud-list -->
                                                            </div><!-- .nk-block -->
                                                            <div class="nk-divider divider md"></div>
                                                            <div class="nk-block">
                                                                <div class="nk-block-head nk-block-head-sm nk-block-between">
                                                                    <h5 class="title">Doctors Note</h5>
                                                                    <a href="#" class="link link-sm">+ Add Note</a>
                                                                </div><!-- .nk-block-head -->
                                                                <div class="bq-note">
                                                                    <div class="bq-note-item">
                                                                        <div class="bq-note-text">
                                                                            <p>Aproin at metus et dolor tincidunt feugiat eu id quam. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aenean sollicitudin non nunc vel pharetra. </p>
                                                                        </div>
                                                                        <div class="bq-note-meta">
                                                                            <span class="bq-note-added">Added on <span class="date">November 18, 2019</span> at <span class="time">5:34 PM</span></span>
                                                                            <span class="bq-note-sep sep">|</span>
                                                                            <span class="bq-note-by">By <span>Softnio</span></span>
                                                                            <a href="#" class="link link-sm link-danger">Delete Note</a>
                                                                        </div>
                                                                    </div><!-- .bq-note-item -->
                                                                    <div class="bq-note-item">
                                                                        <div class="bq-note-text">
                                                                            <p>Aproin at metus et dolor tincidunt feugiat eu id quam. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aenean sollicitudin non nunc vel pharetra. </p>
                                                                        </div>
                                                                        <div class="bq-note-meta">
                                                                            <span class="bq-note-added">Added on <span class="date">November 18, 2019</span> at <span class="time">5:34 PM</span></span>
                                                                            <span class="bq-note-sep sep">|</span>
                                                                            <span class="bq-note-by">By <span>Softnio</span></span>
                                                                            <a href="#" class="link link-sm link-danger">Delete Note</a>
                                                                        </div>
                                                                    </div><!-- .bq-note-item -->
                                                                </div><!-- .bq-note -->
                                                            </div><!-- .nk-block -->
                                                        </div><!-- tab pane -->
                                                        <div class="tab-pane" id="tabItem2">
                                                            <div class="nk-block nk-block-between">
                                                                <div class="nk-block-head">
                                                                    <h6 class="title">Diagnosis Information</h6>
                                                                    <p>Patients diagnosis information.</p>
                                                                </div><!-- .nk-block-head -->
                                                                <div class="nk-block">
                                                                    <a class="btn btn-icon btn-primary" data-bs-toggle="modal" href="#addDiagnosis">
                                                                        <em class="icon ni ni-plus"></em>
                                                                    </a>
                                                                </div>
                                                            </div><!-- .nk-block-between  -->
                                                            <div class="nk-block">
                                                                <div class="card">
                                                                    <div class="nk-tb-list nk-tb-ulist is-compact">
                                                                        <div class="nk-tb-item nk-tb-head">
                                                                            <div class="nk-tb-col"><span class="sub-text">Report Type</span></div>
                                                                            <div class="nk-tb-col tb-col-sm"><span class="sub-text">Date</span></div>
                                                                            <div class="nk-tb-col tb-col-md"><span class="sub-text">Description</span></div>
                                                                            <div class="nk-tb-col"><span class="sub-text">Status</span></div>
                                                                            <div class="nk-tb-col nk-tb-col-tools text-end"></div>
                                                                        </div><!-- .nk-tb-item -->
                                                                        <div class="nk-tb-item">
                                                                            <div class="nk-tb-col">
                                                                                <span>CT Scan</span>
                                                                            </div>
                                                                            <div class="nk-tb-col tb-col-sm">
                                                                                <span>10 Feb 2020</span>
                                                                            </div>
                                                                            <div class="nk-tb-col tb-col-md">
                                                                                <span>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Modi ipsam molestiae aut.</span>
                                                                            </div>
                                                                            <div class="nk-tb-col">
                                                                                <span class="tb-status text-success">Done</span>
                                                                            </div>
                                                                            <div class="nk-tb-col nk-tb-col-tools">
                                                                                <ul class="nk-tb-actions gx-2">
                                                                                    <li class="nk-tb-action-hidden">
                                                                                        <a href="#" class="btn btn-sm btn-icon btn-trigger" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
                                                                                            <em class="icon ni ni-edit-fill"></em>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li class="nk-tb-action-hidden">
                                                                                        <a href="#" class="btn btn-sm btn-icon btn-trigger" data-bs-toggle="tooltip" data-bs-placement="top" title="Download">
                                                                                            <em class="icon ni ni-download"></em>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li class="nk-tb-action-hidden">
                                                                                        <a href="#" class="btn btn-sm btn-icon btn-trigger" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
                                                                                            <em class="icon ni ni-trash-fill"></em>
                                                                                        </a>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div><!-- .nk-tb-item -->
                                                                        <div class="nk-tb-item">
                                                                            <div class="nk-tb-col">
                                                                                <span>Blood Test</span>
                                                                            </div>
                                                                            <div class="nk-tb-col tb-col-sm">
                                                                                <span>11 Feb 2020</span>
                                                                            </div>
                                                                            <div class="nk-tb-col tb-col-md">
                                                                                <span>Dolor sit amet consectetur adipisicing elit. Modi ipsam molestiae aut.</span>
                                                                            </div>
                                                                            <div class="nk-tb-col">
                                                                                <span class="tb-status text-warning">Pending</span>
                                                                            </div>
                                                                            <div class="nk-tb-col nk-tb-col-tools">
                                                                                <ul class="nk-tb-actions gx-2">
                                                                                    <li class="nk-tb-action-hidden">
                                                                                        <a href="#" class="btn btn-sm btn-icon btn-trigger" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
                                                                                            <em class="icon ni ni-edit-fill"></em>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li class="nk-tb-action-hidden">
                                                                                        <a href="#" class="btn btn-sm btn-icon btn-trigger" data-bs-toggle="tooltip" data-bs-placement="top" title="Download">
                                                                                            <em class="icon ni ni-download"></em>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li class="nk-tb-action-hidden">
                                                                                        <a href="#" class="btn btn-sm btn-icon btn-trigger" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
                                                                                            <em class="icon ni ni-trash-fill"></em>
                                                                                        </a>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div><!-- .nk-tb-item -->
                                                                        <div class="nk-tb-item">
                                                                            <div class="nk-tb-col">
                                                                                <span>Blood Analysis</span>
                                                                            </div>
                                                                            <div class="nk-tb-col tb-col-sm">
                                                                                <span>11 Feb 2020</span>
                                                                            </div>
                                                                            <div class="nk-tb-col tb-col-md">
                                                                                <span>Tempore aut incidunt accusamus accusantium deleniti? Labore odio aperiam mollitia quaerat quos!</span>
                                                                            </div>
                                                                            <div class="nk-tb-col">
                                                                                <span class="tb-status text-warning">Pending</span>
                                                                            </div>
                                                                            <div class="nk-tb-col nk-tb-col-tools">
                                                                                <ul class="nk-tb-actions gx-2">
                                                                                    <li class="nk-tb-action-hidden">
                                                                                        <a href="#" class="btn btn-sm btn-icon btn-trigger" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
                                                                                            <em class="icon ni ni-edit-fill"></em>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li class="nk-tb-action-hidden">
                                                                                        <a href="#" class="btn btn-sm btn-icon btn-trigger" data-bs-toggle="tooltip" data-bs-placement="top" title="Download">
                                                                                            <em class="icon ni ni-download"></em>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li class="nk-tb-action-hidden">
                                                                                        <a href="#" class="btn btn-sm btn-icon btn-trigger" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
                                                                                            <em class="icon ni ni-trash-fill"></em>
                                                                                        </a>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div><!-- .nk-tb-item -->
                                                                        <div class="nk-tb-item">
                                                                            <div class="nk-tb-col">
                                                                                <span>Vascular Sonography</span>
                                                                            </div>
                                                                            <div class="nk-tb-col tb-col-sm">
                                                                                <span>10 Feb 2020</span>
                                                                            </div>
                                                                            <div class="nk-tb-col tb-col-md">
                                                                                <span>Lquia soluta illo sed veniam repudiandae esse sequi qui impedit facilis laboriosam sapiente suscipit!</span>
                                                                            </div>
                                                                            <div class="nk-tb-col">
                                                                                <span class="tb-status text-success">Done</span>
                                                                            </div>
                                                                            <div class="nk-tb-col nk-tb-col-tools">
                                                                                <ul class="nk-tb-actions gx-2">
                                                                                    <li class="nk-tb-action-hidden">
                                                                                        <a href="#" class="btn btn-sm btn-icon btn-trigger" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
                                                                                            <em class="icon ni ni-edit-fill"></em>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li class="nk-tb-action-hidden">
                                                                                        <a href="#" class="btn btn-sm btn-icon btn-trigger" data-bs-toggle="tooltip" data-bs-placement="top" title="Download">
                                                                                            <em class="icon ni ni-download"></em>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li class="nk-tb-action-hidden">
                                                                                        <a href="#" class="btn btn-sm btn-icon btn-trigger" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
                                                                                            <em class="icon ni ni-trash-fill"></em>
                                                                                        </a>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div><!-- .nk-tb-item -->
                                                                    </div><!-- .nk-tb-list -->
                                                                </div><!-- .card -->
                                                            </div><!-- .nk-block -->
                                                        </div><!--tab pane-->
                                                        <div class="tab-pane" id="tabItem3">
                                                            <div class="nk-block nk-block-between">
                                                                <div class="nk-block-head">
                                                                    <h6 class="title">Prescription Information</h6>
                                                                    <p>Patients prescription information.</p>
                                                                </div><!-- .nk-block-head -->
                                                                <div class="nk-block">
                                                                    <a class="btn btn-icon btn-primary" data-bs-toggle="modal" href="#addPrescription">
                                                                        <em class="icon ni ni-plus"></em>
                                                                    </a>
                                                                </div>
                                                            </div><!-- .nk-block-between  -->
                                                            <div class="nk-block">
                                                                <div class="card">
                                                                    <div class="nk-tb-list nk-tb-ulist is-compact">
                                                                        <div class="nk-tb-item nk-tb-head">
                                                                            <div class="nk-tb-col"><span class="sub-text">Medicine</span></div>
                                                                            <div class="nk-tb-col tb-col-sm"><span class="sub-text">Medicine Category</span></div>
                                                                            <div class="nk-tb-col"><span class="sub-text">Dosage</span></div>
                                                                            <div class="nk-tb-col tb-col-md"><span class="sub-text">Instruction</span></div>
                                                                            <div class="nk-tb-col tb-col-md"><span class="sub-text">Prescribed By</span></div>
                                                                            <div class="nk-tb-col tb-col-mb"><span class="sub-text">Status</span></div>
                                                                            <div class="nk-tb-col nk-tb-col-tools text-end"></div>
                                                                        </div><!-- .nk-tb-item -->
                                                                        <div class="nk-tb-item">
                                                                            <div class="nk-tb-col">
                                                                                <span>Erovit plus</span>
                                                                            </div>
                                                                            <div class="nk-tb-col tb-col-sm">
                                                                                <span>Capsule</span>
                                                                            </div>
                                                                            <div class="nk-tb-col">
                                                                                <span class="fw-medium">1 - 0 - 1</span>
                                                                            </div>
                                                                            <div class="nk-tb-col tb-col-md">
                                                                                <span>Take after full meal for 7 days.</span>
                                                                            </div>
                                                                            <div class="nk-tb-col tb-col-md">
                                                                                <span>Ernesto Vargas</span>
                                                                            </div>
                                                                            <div class="nk-tb-col tb-col-mb">
                                                                                <span class="tb-status text-success">Active</span>
                                                                            </div>
                                                                            <div class="nk-tb-col nk-tb-col-tools">
                                                                                <ul class="nk-tb-actions gx-2">
                                                                                    <li class="nk-tb-action-hidden">
                                                                                        <a href="#" class="btn btn-sm btn-icon btn-trigger" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
                                                                                            <em class="icon ni ni-edit-fill"></em>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li class="nk-tb-action-hidden">
                                                                                        <a href="#" class="btn btn-sm btn-icon btn-trigger" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
                                                                                            <em class="icon ni ni-trash-fill"></em>
                                                                                        </a>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div><!-- .nk-tb-item -->
                                                                        <div class="nk-tb-item">
                                                                            <div class="nk-tb-col">
                                                                                <span>Napa Extra</span>
                                                                            </div>
                                                                            <div class="nk-tb-col tb-col-sm">
                                                                                <span>Tablet</span>
                                                                            </div>
                                                                            <div class="nk-tb-col">
                                                                                <span class="fw-medium">1 - 1 - 1</span>
                                                                            </div>
                                                                            <div class="nk-tb-col tb-col-md">
                                                                                <span>Take after full meal for 3 days.</span>
                                                                            </div>
                                                                            <div class="nk-tb-col tb-col-md">
                                                                                <span>Ernesto Vargas</span>
                                                                            </div>
                                                                            <div class="nk-tb-col tb-col-mb">
                                                                                <span class="tb-status text-success">Active</span>
                                                                            </div>
                                                                            <div class="nk-tb-col nk-tb-col-tools">
                                                                                <ul class="nk-tb-actions gx-2">
                                                                                    <li class="nk-tb-action-hidden">
                                                                                        <a href="#" class="btn btn-sm btn-icon btn-trigger" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
                                                                                            <em class="icon ni ni-edit-fill"></em>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li class="nk-tb-action-hidden">
                                                                                        <a href="#" class="btn btn-sm btn-icon btn-trigger" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
                                                                                            <em class="icon ni ni-trash-fill"></em>
                                                                                        </a>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div><!-- .nk-tb-item -->
                                                                        <div class="nk-tb-item">
                                                                            <div class="nk-tb-col">
                                                                                <span>Sergel</span>
                                                                            </div>
                                                                            <div class="nk-tb-col tb-col-sm">
                                                                                <span>Capsule</span>
                                                                            </div>
                                                                            <div class="nk-tb-col">
                                                                                <span class="fw-medium">1 - 0 - 1</span>
                                                                            </div>
                                                                            <div class="nk-tb-col tb-col-md">
                                                                                <span>Take before meal for 15 days.</span>
                                                                            </div>
                                                                            <div class="nk-tb-col tb-col-md">
                                                                                <span>Ernesto Vargas</span>
                                                                            </div>
                                                                            <div class="nk-tb-col tb-col-mb">
                                                                                <span class="tb-status text-success">Active</span>
                                                                            </div>
                                                                            <div class="nk-tb-col nk-tb-col-tools">
                                                                                <ul class="nk-tb-actions gx-2">
                                                                                    <li class="nk-tb-action-hidden">
                                                                                        <a href="#" class="btn btn-sm btn-icon btn-trigger" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
                                                                                            <em class="icon ni ni-edit-fill"></em>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li class="nk-tb-action-hidden">
                                                                                        <a href="#" class="btn btn-sm btn-icon btn-trigger" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
                                                                                            <em class="icon ni ni-trash-fill"></em>
                                                                                        </a>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div><!-- .nk-tb-item -->
                                                                    </div><!-- .nk-tb-list -->
                                                                </div><!-- .card -->
                                                            </div><!-- .nk-block -->
                                                        </div><!--tab pane-->
                                                        <div class="tab-pane" id="tabItem4">
                                                            <div class="nk-block nk-block-between">
                                                                <div class="nk-block-head">
                                                                    <h6 class="title">Charges Information</h6>
                                                                    <p>Patients charges for service.</p>
                                                                </div><!-- .nk-block-head -->
                                                                <div class="nk-block">
                                                                    <a class="btn btn-icon btn-primary" data-bs-toggle="modal" href="#addCharges">
                                                                        <em class="icon ni ni-plus"></em>
                                                                    </a>
                                                                </div>
                                                            </div><!-- .nk-block-between  -->
                                                            <div class="nk-block">
                                                                <div class="card">
                                                                    <div class="nk-tb-list nk-tb-ulist is-compact">
                                                                        <div class="nk-tb-item nk-tb-head">
                                                                            <div class="nk-tb-col tb-col-sm"><span class="sub-text">Date</span></div>
                                                                            <div class="nk-tb-col"><span class="sub-text">Category</span></div>
                                                                            <div class="nk-tb-col tb-col-sm"><span class="sub-text">Charges Type</span></div>
                                                                            <div class="nk-tb-col tb-col-md"><span class="sub-text">Standrad Charges ($)</span></div>
                                                                            <div class="nk-tb-col tb-col-md"><span class="sub-text">TPA Charges ($)</span></div>
                                                                            <div class="nk-tb-col"><span class="sub-text">Applied ($)</span></div>
                                                                        </div><!-- .nk-tb-item -->
                                                                        <div class="nk-tb-item">
                                                                            <div class="nk-tb-col tb-col-sm">
                                                                                <span>10 Feb 2020</span>
                                                                            </div>
                                                                            <div class="nk-tb-col">
                                                                                <span>Eye Check</span>
                                                                            </div>
                                                                            <div class="nk-tb-col tb-col-sm">
                                                                                <span>Procedures</span>
                                                                            </div>
                                                                            <div class="nk-tb-col tb-col-md">
                                                                                <span>35</span>
                                                                            </div>
                                                                            <div class="nk-tb-col tb-col-md">
                                                                                <span>00</span>
                                                                            </div>
                                                                            <div class="nk-tb-col">
                                                                                <span>35</span>
                                                                            </div>
                                                                        </div><!-- .nk-tb-item -->
                                                                        <div class="nk-tb-item">
                                                                            <div class="nk-tb-col tb-col-sm">
                                                                                <span>10 Feb 2020</span>
                                                                            </div>
                                                                            <div class="nk-tb-col">
                                                                                <span>Blood Analysis</span>
                                                                            </div>
                                                                            <div class="nk-tb-col tb-col-sm">
                                                                                <span>Procedures</span>
                                                                            </div>
                                                                            <div class="nk-tb-col tb-col-md">
                                                                                <span>65</span>
                                                                            </div>
                                                                            <div class="nk-tb-col tb-col-md">
                                                                                <span>00</span>
                                                                            </div>
                                                                            <div class="nk-tb-col">
                                                                                <span>65</span>
                                                                            </div>
                                                                        </div><!-- .nk-tb-item -->
                                                                    </div><!-- .nk-tb-list -->
                                                                </div><!-- .card -->
                                                            </div><!-- .nk-block -->
                                                        </div><!--tab pane-->
                                                        <div class="tab-pane" id="tabItem5">
                                                            <div class="nk-block nk-block-between">
                                                                <div class="nk-block-head">
                                                                    <h6 class="title">Payment Information</h6>
                                                                    <p>Patients payment information.</p>
                                                                </div><!-- .nk-block-head -->
                                                                <div class="nk-block">
                                                                    <a class="btn btn-icon btn-primary" data-bs-toggle="modal" href="#addPayment">
                                                                        <em class="icon ni ni-plus"></em>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="nk-block">
                                                                <div class="card">
                                                                    <div class="nk-tb-list nk-tb-ulist is-compact">
                                                                        <div class="nk-tb-item nk-tb-head">
                                                                            <div class="nk-tb-col"><span class="sub-text">Date</span></div>
                                                                            <div class="nk-tb-col tb-col-sm"><span class="sub-text">Payment Method</span></div>
                                                                            <div class="nk-tb-col"><span class="sub-text">Amount ($)</span></div>
                                                                            <div class="nk-tb-col"><span class="sub-text">Status</span></div>
                                                                        </div><!-- .nk-tb-item -->
                                                                        <div class="nk-tb-item">
                                                                            <div class="nk-tb-col">
                                                                                <span>10 Feb 2020</span>
                                                                            </div>
                                                                            <div class="nk-tb-col tb-col-sm">
                                                                                <span>Cash</span>
                                                                            </div>
                                                                            <div class="nk-tb-col">
                                                                                <span>200</span>
                                                                            </div>
                                                                            <div class="nk-tb-col">
                                                                                <span class="tb-status text-success">Paid</span>
                                                                            </div>
                                                                        </div><!-- .nk-tb-item -->
                                                                        <div class="nk-tb-item">
                                                                            <div class="nk-tb-col">
                                                                                <span>11 Feb 2020</span>
                                                                            </div>
                                                                            <div class="nk-tb-col tb-col-sm">
                                                                                <span>Cash</span>
                                                                            </div>
                                                                            <div class="nk-tb-col">
                                                                                <span>1923</span>
                                                                            </div>
                                                                            <div class="nk-tb-col">
                                                                                <span class="tb-status text-warning">Due</span>
                                                                            </div>
                                                                        </div><!-- .nk-tb-item -->
                                                                    </div><!-- .nk-tb-list -->
                                                                </div><!-- .card -->
                                                            </div><!-- .nk-block -->
                                                        </div><!--tab pane-->
                                                    </div><!--tab content-->
                                                </div><!--card inner-->
                                            </div><!-- .card-content -->
                                            <div class="card-aside card-aside-right user-aside toggle-slide toggle-slide-right toggle-break-xxl" data-content="userAside" data-toggle-screen="xxl" data-toggle-overlay="true" data-toggle-body="true">
                                                <div class="card-inner-group" data-simplebar>
                                                    <div class="card-inner">
                                                        <div class="user-card user-card-s2">
                                                            <div class="user-avatar lg bg-primary">
                                                                <span>AB</span>
                                                            </div>
                                                            <div class="user-info">
                                                                <div class="badge bg-outline-light rounded-pill ucap">Patinet</div>
                                                                <h5>Abu Bin Ishtiyak</h5>
                                                                <span class="sub-text">info@softnio.com</span>
                                                            </div>
                                                        </div>
                                                    </div><!-- .card-inner -->
                                                    <div class="card-inner card-inner-sm">
                                                        <ul class="btn-toolbar justify-center gx-1">
                                                            <li><a href="#" class="btn btn-trigger btn-icon"><em class="icon ni ni-shield-off"></em></a></li>
                                                            <li><a href="#" class="btn btn-trigger btn-icon"><em class="icon ni ni-mail"></em></a></li>
                                                            <li><a href="#" class="btn btn-trigger btn-icon"><em class="icon ni ni-download-cloud"></em></a></li>
                                                            <li><a href="#" class="btn btn-trigger btn-icon"><em class="icon ni ni-bookmark"></em></a></li>
                                                        </ul>
                                                    </div><!-- .card-inner -->
                                                    <div class="card-inner">
                                                        <div class="row text-center">
                                                            <div class="col-4">
                                                                <div class="profile-stats">
                                                                    <span class="amount">$2123</span>
                                                                    <span class="sub-text">Total Bill</span>
                                                                </div>
                                                            </div>
                                                            <div class="col-4">
                                                                <div class="profile-stats">
                                                                    <span class="amount">$200</span>
                                                                    <span class="sub-text">Paid</span>
                                                                </div>
                                                            </div>
                                                            <div class="col-4">
                                                                <div class="profile-stats">
                                                                    <span class="amount">$1923</span>
                                                                    <span class="sub-text">Due</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div><!-- .card-inner -->
                                                    <div class="card-inner">
                                                        <h6 class="overline-title-alt mb-2">Additional</h6>
                                                        <div class="row g-3">
                                                            <div class="col-6">
                                                                <span class="sub-text">Patient ID:</span>
                                                                <span>#P7085</span>
                                                            </div>
                                                            <div class="col-6">
                                                                <span class="sub-text">Admit Date</span>
                                                                <span>15 Feb, 2019 01:02 PM</span>
                                                            </div>
                                                            <div class="col-6">
                                                                <span class="sub-text">Condition</span>
                                                                <span class="lead-text text-success">Normal</span>
                                                            </div>
                                                            <div class="col-6">
                                                                <span class="sub-text">Discharged Date</span>
                                                                <span>16 Feb, 2019</span>
                                                            </div>
                                                        </div>
                                                    </div><!-- .card-inner -->
                                                    <div class="card-inner">
                                                        <h6 class="overline-title-alt mb-3">Groups</h6>
                                                        <ul class="g-1">
                                                            <li class="btn-group">
                                                                <a class="btn btn-xs btn-light btn-dim" href="#">surgery</a>
                                                                <a class="btn btn-xs btn-icon btn-light btn-dim" href="#"><em class="icon ni ni-cross"></em></a>
                                                            </li>
                                                            <li class="btn-group">
                                                                <a class="btn btn-xs btn-light btn-dim" href="#">cardiology</a>
                                                                <a class="btn btn-xs btn-icon btn-light btn-dim" href="#"><em class="icon ni ni-cross"></em></a>
                                                            </li>
                                                            <li class="btn-group">
                                                                <a class="btn btn-xs btn-light btn-dim" href="#">another tag</a>
                                                                <a class="btn btn-xs btn-icon btn-light btn-dim" href="#"><em class="icon ni ni-cross"></em></a>
                                                            </li>
                                                        </ul>
                                                    </div><!-- .card-inner -->
                                                </div><!-- .card-inner -->
                                            </div><!-- .card-aside -->
                                        </div><!-- .card-aside-wrap -->
                                    </div><!--card-->
                                </div><!--nk block lg-->
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
    <!-- Edit Patient Personal Info-->
    <div class="modal fade" tabindex="-1" role="dialog" id="editPersonal">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-bs-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                <div class="modal-body modal-body-md">
                    <h5 class="modal-title">Update Personal Info</h5>
                    <form action="#" class="mt-4">
                        <div class="row g-gs">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="editName">Name</label>
                                    <div class="form-control-wrap">
                                        <input type="text" class="form-control" id="editName" value="Abu Bin Isthiyak" placeholder="Name">
                                    </div>
                                </div>
                            </div><!-- .col -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="editEmail">Email</label>
                                    <div class="form-control-wrap">
                                        <input type="email" class="form-control" id="editEmail" value="info@softnio.com" placeholder="example@email.com">
                                    </div>
                                </div>
                            </div><!-- .col -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="editMobile">Mobile Number</label>
                                    <div class="form-control-wrap">
                                        <input type="text" class="form-control" id="editMobile" placeholder="Mobile No." value="+811 847-4958">
                                    </div>
                                </div>
                            </div><!-- .col -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Gender</label>
                                    <div class="form-control-wrap">
                                        <select class="form-select js-select2" data-placeholder="Select Gender">
                                            <option value="">Select</option>
                                            <option value="option_select_sex">Male</option>
                                            <option value="option_select_sex">Female</option>
                                            <option value="option_select_sex">Others</option>
                                        </select>
                                    </div>
                                </div>
                            </div><!-- .col -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Date of Birth</label>
                                    <div class="form-control-wrap">
                                        <div class="form-icon form-icon-right">
                                            <em class="icon ni ni-calendar"></em>
                                        </div>
                                        <input type="text" class="form-control date-picker" data-date-format="dd-mm-yyyy" placeholder="dd-mm-yyyy">
                                    </div>
                                </div>
                            </div><!-- .col -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Bed Group</label>
                                    <div class="form-control-wrap">
                                        <select class="form-select js-select2" data-placeholder="Select Bed Group">
                                            <option value="">Select</option>
                                            <option value="option_select_bed">Cabin - 4th Floor</option>
                                            <option value="option_select_bed">Male Ward - 1st Floor</option>
                                            <option value="option_select_bed">Female Ward - 1st Floor</option>
                                            <option value="option_select_bed">Private Ward - 2nd Floor</option>
                                            <option value="option_select_bed">Cabin - 4th Floor</option>
                                            <option value="option_select_bed">ICU - 3rd Floor</option>
                                            <option value="option_select_bed">NICU - 3rd Floor</option>
                                        </select>
                                    </div>
                                </div>
                            </div><!-- .col -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Bed Number</label>
                                    <div class="form-control-wrap">
                                        <select class="form-select js-select2" data-placeholder="Select Bed Number">
                                            <option value="">Select</option>
                                            <option value="default_option">201</option>
                                            <option value="option_select_bednum">101</option>
                                            <option value="option_select_bednum">102</option>
                                            <option value="option_select_bednum">103</option>
                                            <option value="option_select_bednum">105</option>
                                            <option value="option_select_bednum">201</option>
                                            <option value="option_select_bednum">202</option>
                                        </select>
                                    </div>
                                </div>
                            </div><!-- .col -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Consulant By</label>
                                    <div class="form-control-wrap">
                                        <select class="form-select js-select2" data-placeholder="Select Doctor">
                                            <option value="">Select</option>
                                            <option value="default_option">Ernesto Vargas</option>
                                            <option value="option_select_consulant">Ernesto Vargas</option>
                                            <option value="option_select_consulant">Janet Snyder</option>
                                            <option value="option_select_consulant">Amelia Grant</option>
                                            <option value="option_select_consulant">Debra Grant</option>
                                            <option value="option_select_consulant">Snyder Debra</option>
                                        </select>
                                    </div>
                                </div>
                            </div><!-- .col -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Admit Date</label>
                                    <div class="form-control-wrap">
                                        <div class="form-icon form-icon-right">
                                            <em class="icon ni ni-calendar"></em>
                                        </div>
                                        <input type="text" class="form-control date-picker" data-date-format="dd-mm-yyyy" placeholder="dd-mm-yyyy" value="10-02-2020">
                                    </div>
                                </div>
                            </div><!-- .col -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Discharged Date</label>
                                    <div class="form-control-wrap">
                                        <div class="form-icon form-icon-right">
                                            <em class="icon ni ni-calendar"></em>
                                        </div>
                                        <input type="text" class="form-control date-picker" data-date-format="dd-mm-yyyy" placeholder="dd-mm-yyyy" value="10-02-2020">
                                    </div>
                                </div>
                            </div><!-- .col -->
                            <div class="col-12">
                                <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                    <li>
                                        <button data-bs-dismiss="modal" class="btn btn-primary">Update</button>
                                    </li>
                                    <li>
                                        <a href="#" class="link link-light" data-bs-dismiss="modal">Cancel</a>
                                    </li>
                                </ul>
                            </div><!-- .col -->
                        </div>
                    </form>
                </div><!-- .modal-body -->
            </div><!-- .modal-content -->
        </div><!-- .modal-dialog -->
    </div><!-- .modal -->
    <!-- Add Diagnosis  Info-->
    <div class="modal fade" tabindex="-1" role="dialog" id="addDiagnosis">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-bs-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                <div class="modal-body modal-body-md">
                    <h5 class="modal-title">Diagnosis Info</h5>
                    <form action="#" class="mt-4">
                        <div class="row g-gs">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="reportType">Report Type</label>
                                    <div class="form-control-wrap">
                                        <input type="text" class="form-control" id="reportType" placeholder="Report Type">
                                    </div>
                                </div>
                            </div><!-- .col -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Date</label>
                                    <div class="form-control-wrap">
                                        <div class="form-icon form-icon-right">
                                            <em class="icon ni ni-calendar"></em>
                                        </div>
                                        <input type="text" class="form-control date-picker" data-date-format="dd-mm-yyyy" placeholder="dd-mm-yyyy">
                                    </div>
                                </div>
                            </div><!-- .col -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Status</label>
                                    <div class="form-control-wrap">
                                        <select class="form-select js-select2" data-placeholder="Select Status">
                                            <option value="">Select</option>
                                            <option value="option_select_status">Done</option>
                                            <option value="option_select_status">Pending</option>
                                        </select>
                                    </div>
                                </div>
                            </div><!-- .col -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Test Report</label>
                                    <div class="form-control-wrap">
                                        <div class="form-file">
                                            <input type="file" multiple class="form-file-input" id="testReport">
                                            <label class="form-file-label" for="testReport">Choose files</label>
                                        </div>
                                    </div>
                                </div>
                            </div><!--col-->
                            <div class="col-12">
                                <div class="form-group">
                                    <label class="form-label">Description</label>
                                    <div class="form-control-wrap">
                                        <div class="quill-basic">
                                            <p>Hello World!</p>
                                        </div>
                                    </div>
                                </div>
                            </div><!--col-->
                            <div class="col-12">
                                <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                    <li>
                                        <button data-bs-dismiss="modal" class="btn btn-primary">Add Diagnosis</button>
                                    </li>
                                    <li>
                                        <a href="#" class="link link-light" data-bs-dismiss="modal">Cancel</a>
                                    </li>
                                </ul>
                            </div><!-- .col -->
                        </div>
                    </form>
                </div><!-- .modal-body -->
            </div><!-- .modal-content -->
        </div><!-- .modal-dialog -->
    </div><!-- .modal -->
    <!-- Add Prescription  Info-->
    <div class="modal fade" tabindex="-1" role="dialog" id="addPrescription">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-bs-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                <div class="modal-body modal-body-md">
                    <h5 class="modal-title">Prescription Info</h5>
                    <form action="#" class="mt-4">
                        <div class="row g-gs">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="medicineCategory">Medicine Category</label>
                                    <div class="form-control-wrap">
                                        <input type="text" class="form-control" id="medicineCategory" placeholder="Medicine Category">
                                    </div>
                                </div>
                            </div><!-- .col -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="medicine">Medicine</label>
                                    <div class="form-control-wrap">
                                        <input type="text" class="form-control" id="medicine" placeholder="Medicine">
                                    </div>
                                </div>
                            </div><!-- .col -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="dosage">Dosage</label>
                                    <div class="form-control-wrap">
                                        <input type="text" class="form-control" id="dosage" placeholder="0 - 0 - 0">
                                    </div>
                                </div>
                            </div><!-- .col -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Prescribed By</label>
                                    <div class="form-control-wrap">
                                        <select class="form-select js-select2" data-placeholder="Select Doctor">
                                            <option value="">Select</option>
                                            <option value="option_select_consulant">Ernesto Vargas</option>
                                            <option value="option_select_consulant">Janet Snyder</option>
                                            <option value="option_select_consulant">Amelia Grant</option>
                                            <option value="option_select_consulant">Debra Grant</option>
                                            <option value="option_select_consulant">Snyder Debra</option>
                                        </select>
                                    </div>
                                </div>
                            </div><!-- .col -->
                            <div class="col-12">
                                <div class="form-group">
                                    <label class="form-label">Instruction</label>
                                    <div class="form-control-wrap">
                                        <div class="quill-basic">
                                            <p>Hello World!</p>
                                        </div>
                                    </div>
                                </div>
                            </div><!--col-->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Status</label>
                                    <div class="form-control-wrap">
                                        <select class="form-select js-select2" data-placeholder="Select Status">
                                            <option value="">Select Status</option>
                                            <option value="option_select_status">Active</option>
                                            <option value="option_select_status">Inactive</option>
                                        </select>
                                    </div>
                                </div>
                            </div><!-- .col -->
                            <div class="col-12">
                                <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                    <li>
                                        <button data-bs-dismiss="modal" class="btn btn-primary">Add Prescription</button>
                                    </li>
                                    <li>
                                        <a href="#" class="link link-light" data-bs-dismiss="modal">Cancel</a>
                                    </li>
                                </ul>
                            </div><!-- .col -->
                        </div>
                    </form>
                </div><!-- .modal-body -->
            </div><!-- .modal-content -->
        </div><!-- .modal-dialog -->
    </div><!-- .modal -->
    <!-- Add Charges  Info-->
    <div class="modal fade" tabindex="-1" role="dialog" id="addCharges">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-bs-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                <div class="modal-body modal-body-md">
                    <h5 class="modal-title">Charges Info</h5>
                    <form action="#" class="mt-4">
                        <div class="row g-gs">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Date</label>
                                    <div class="form-control-wrap">
                                        <div class="form-icon form-icon-right">
                                            <em class="icon ni ni-calendar"></em>
                                        </div>
                                        <input type="text" class="form-control date-picker" data-date-format="dd-mm-yyyy" placeholder="dd-mm-yyyy">
                                    </div>
                                </div>
                            </div><!-- .col -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="category">Category</label>
                                    <div class="form-control-wrap">
                                        <input type="text" class="form-control" id="category" placeholder="Category">
                                    </div>
                                </div>
                            </div><!-- .col -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="chargesType">Charges Type</label>
                                    <div class="form-control-wrap">
                                        <input type="text" class="form-control" id="chargesType" placeholder="Charges Type">
                                    </div>
                                </div>
                            </div><!-- .col -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="standradChargesType">Standrad Charges</label>
                                    <div class="form-control-wrap">
                                        <input type="text" class="form-control" id="standradChargesType" placeholder="Standrad Charges">
                                    </div>
                                </div>
                            </div><!-- .col -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="tpaChargesType">TPA Charges</label>
                                    <div class="form-control-wrap">
                                        <input type="text" class="form-control" id="tpaChargesType" placeholder="TPA Charges">
                                    </div>
                                </div>
                            </div><!-- .col -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="applied ChargesType">Applied Charges</label>
                                    <div class="form-control-wrap">
                                        <input type="text" class="form-control" id="applied ChargesType" placeholder="Applied Charges">
                                    </div>
                                </div>
                            </div><!-- .col -->
                            <div class="col-12">
                                <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                    <li>
                                        <button data-bs-dismiss="modal" class="btn btn-primary">Add Charges</button>
                                    </li>
                                    <li>
                                        <a href="#" class="link link-light" data-bs-dismiss="modal">Cancel</a>
                                    </li>
                                </ul>
                            </div><!-- .col -->
                        </div>
                    </form>
                </div><!-- .modal-body -->
            </div><!-- .modal-content -->
        </div><!-- .modal-dialog -->
    </div><!-- .modal -->
    <!-- Add Payment  Info-->
    <div class="modal fade" tabindex="-1" role="dialog" id="addPayment">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-bs-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                <div class="modal-body modal-body-md">
                    <h5 class="modal-title">Payment Info</h5>
                    <form action="#" class="mt-4">
                        <div class="row g-gs">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Date</label>
                                    <div class="form-control-wrap">
                                        <div class="form-icon form-icon-right">
                                            <em class="icon ni ni-calendar"></em>
                                        </div>
                                        <input type="text" class="form-control date-picker" data-date-format="dd-mm-yyyy" placeholder="dd-mm-yyyy">
                                    </div>
                                </div>
                            </div><!-- .col -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Payment Method</label>
                                    <div class="form-control-wrap">
                                        <select class="form-select js-select2" data-placeholder="Select Method">
                                            <option value="">Select</option>
                                            <option value="option_select_method">Cash</option>
                                            <option value="option_select_method">Card</option>
                                        </select>
                                    </div>
                                </div>
                            </div><!-- .col -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="amount">Amount</label>
                                    <div class="form-control-wrap">
                                        <input type="text" class="form-control" id="amount" placeholder="Amount">
                                    </div>
                                </div>
                            </div><!-- .col -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Status</label>
                                    <div class="form-control-wrap">
                                        <select class="form-select js-select2" data-placeholder="Select Status">
                                            <option value="">Select</option>
                                            <option value="option_select_status">Paid</option>
                                            <option value="option_select_status">Due</option>
                                        </select>
                                    </div>
                                </div>
                            </div><!-- .col -->
                            <div class="col-12">
                                <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                    <li>
                                        <button data-bs-dismiss="modal" class="btn btn-primary">Add Payment</button>
                                    </li>
                                    <li>
                                        <a href="#" class="link link-light" data-bs-dismiss="modal">Cancel</a>
                                    </li>
                                </ul>
                            </div><!-- .col -->
                        </div>
                    </form>
                </div><!-- .modal-body -->
            </div><!-- .modal-content -->
        </div><!-- .modal-dialog -->
    </div><!-- .modal -->
    <!-- JavaScript -->
     <script src="{{asset('js/bundle.js')}}"></script>
    
    <script src="{{asset('js/scripts.js')}}"></script>
    <link rel="stylesheet" href="./assets/css/editors/quill.css?ver=3.2.3">
    <script src="./assets/js/libs/editors/quill.js?ver=3.2.3"></script>
    <script src="./assets/js/editors.js?ver=3.2.3"></script>
</body>

</html>