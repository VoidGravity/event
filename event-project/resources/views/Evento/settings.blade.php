<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    <base href="../../">
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description"
        content="A powerful and conceptual apps base dashboard template that especially build for developers and programmers.">
    <!-- Fav Icon  -->
    <link rel="shortcut icon" href="./images/favicon.png">
    <!-- Page Title  -->
    <title>Setting | DashLite Admin Template</title>
    <!-- StyleSheets  -->
    <link rel="stylesheet" href="{{ asset('css/dashlite.css') }}">


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
                                <a href="{{ route('index') }}" class="nk-menu-link">
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
                                        <a href="{{ route('add-customer') }}" class="nk-menu-link"><span
                                                class="nk-menu-text">Add Customer</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="{{ route('customer') }}" class="nk-menu-link"><span
                                                class="nk-menu-text">Customer List</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="{{ route('customer-ledger') }}" class="nk-menu-link"><span
                                                class="nk-menu-text">Customer Ledger</span></a>
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
                                        <a href="{{ route('add-medicine') }}" class="nk-menu-link"><span
                                                class="nk-menu-text">Add Medicine</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="{{ route('medicine-list') }}" class="nk-menu-link"><span
                                                class="nk-menu-text">Medicine List</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="{{ route('medicine-details') }}" class="nk-menu-link"><span
                                                class="nk-menu-text">Medicine Details</span></a>
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
                                        <a href="{{ route('manufacturer') }}" class="nk-menu-link"><span
                                                class="nk-menu-text">Manufacturer List</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="{{ route('manufacturer-ledger') }}" class="nk-menu-link"><span
                                                class="nk-menu-text">Manufacturer Ledger</span></a>
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
                                        <a href="{{ route('add-wastage-return') }}" class="nk-menu-link"><span
                                                class="nk-menu-text">Add Wastage Return</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="{{ route('wastage-return') }}" class="nk-menu-link"><span
                                                class="nk-menu-text">Wastage Return List</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="{{ route('add-manufacturer-return') }}" class="nk-menu-link"><span
                                                class="nk-menu-text">Add Manufacture Return</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="{{ route('manufacturer-return') }}" class="nk-menu-link"><span
                                                class="nk-menu-text">Manufacturer Return List</span></a>
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
                                        <a href="{{ route('member') }}" class="nk-menu-link"><span
                                                class="nk-menu-text">Member</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="{{ route('members-profile-regular') }}" class="nk-menu-link"><span
                                                class="nk-menu-text">Members Profile</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="{{ route('attendence') }}" class="nk-menu-link"><span
                                                class="nk-menu-text">Attendence</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="{{ route('salary') }}" class="nk-menu-link"><span
                                                class="nk-menu-text">Salary</span></a>
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
                                        <a href="{{ route('income-list') }}" class="nk-menu-link"><span
                                                class="nk-menu-text">Income</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="{{ route('expense-list') }}" class="nk-menu-link"><span
                                                class="nk-menu-text">Expence</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="{{ route('invoice-list') }}" class="nk-menu-link"><span
                                                class="nk-menu-text">Invoice List</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="{{ route('invoice-details') }}" class="nk-menu-link"><span
                                                class="nk-menu-text">Invoice Details</span></a>
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
                                        <a href="{{ route('sales-report') }}" class="nk-menu-link"><span
                                                class="nk-menu-text">Sales Report</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="{{ route('purchase-report') }}" class="nk-menu-link"><span
                                                class="nk-menu-text">Purchase Report</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="{{ route('stock-report') }}" class="nk-menu-link"><span
                                                class="nk-menu-text">Stock Report</span></a>
                                    </li>
                                </ul><!-- .nk-menu-sub -->
                            </li><!-- .nk-menu-item -->
                            <li class="nk-menu-item">
                                <a href="{{ route('support') }}" class="nk-menu-link">
                                    <span class="nk-menu-icon"><em class="icon ni ni-msg-fill"></em></span>
                                    <span class="nk-menu-text">Support</span>
                                </a>
                            </li><!-- .nk-menu-item -->
                            <li class="nk-menu-item">
                                <a href="{{ route('general-settings') }}" class="nk-menu-link">
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
                                <a href="{{ route('Evento/index') }}" class="nk-menu-link">
                                    <span class="nk-menu-icon"><em class="icon ni ni-dashboard-fill"></em></span>
                                    <span class="nk-menu-text">Dashboard</span>
                                </a>
                            </li><!-- .nk-menu-item -->
                            <li class="nk-menu-item">
                                <a href="{{ route('Evento/appointment') }}" class="nk-menu-link">
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
                                        <a href="{{ route('Evento/patient-add') }}" class="nk-menu-link"><span
                                                class="nk-menu-text">Add Event</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="{{ route('Evento/patient-list') }}" class="nk-menu-link"><span
                                                class="nk-menu-text">IPD / OPD Patients</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="{{ route('Evento/patient-profile') }}" class="nk-menu-link"><span
                                                class="nk-menu-text">Patient Profile</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="{{ route('Evento/doctor-nurse-list') }}" class="nk-menu-link"><span
                                                class="nk-menu-text">Doctors / Nurses</span></a>
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
                                        <a href="{{ route('Evento/doctor-nurse-add') }}" class="nk-menu-link"><span
                                                class="nk-menu-text">Add Doctor / Nurses</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="{{ route('Evento/doctor-nurse-list') }}" class="nk-menu-link"><span
                                                class="nk-menu-text">Doctors / Nurses</span></a>
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
                                        <a href="{{ route('Evento/income-list') }}" class="nk-menu-link"><span
                                                class="nk-menu-text">Income</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="{{ route('Evento/expense-list') }}" class="nk-menu-link"><span
                                                class="nk-menu-text">Expense</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="{{ route('Evento/invoice-list') }}" class="nk-menu-link"><span
                                                class="nk-menu-text">Invoice List</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="{{ route('Evento/invoice-details') }}" class="nk-menu-link"><span
                                                class="nk-menu-text">Invoice Details</span></a>
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
                                        <a href="{{ route('Evento/birth-report') }}" class="nk-menu-link"><span
                                                class="nk-menu-text">Birth Report</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="{{ route('Evento/blood-bank') }}" class="nk-menu-link"><span
                                                class="nk-menu-text">Blood Bank</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="{{ route('Evento/inventory-items') }}" class="nk-menu-link"><span
                                                class="nk-menu-text">Inventory Items Reports</span></a>
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
                                        <a href="{{ route('Evento/bed-group') }}" class="nk-menu-link"><span
                                                class="nk-menu-text">Bed Group</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="{{ route('Evento/bed-allotment') }}" class="nk-menu-link"><span
                                                class="nk-menu-text">Bed Allotment</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="{{ route('Evento/department') }}" class="nk-menu-link"><span
                                                class="nk-menu-text">Department</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="{{ route('Evento/death-report') }}" class="nk-menu-link"><span
                                                class="nk-menu-text">Death Report</span></a>
                                    </li>
                                </ul><!-- .nk-menu-sub -->
                            </li><!-- .nk-menu-item -->
                            <li class="nk-menu-item">
                                <a href="{{ route('Evento/user-profile') }}" class="nk-menu-link">
                                    <span class="nk-menu-icon"><em class="icon ni ni-user-fill"></em></span>
                                    <span class="nk-menu-text">User Profile</span>
                                </a>
                            </li><!-- .nk-menu-item -->
                            <li class="nk-menu-item">
                                <a href="{{ route('Evento/settings') }}" class="nk-menu-link">
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
                                <a href="#" class="nk-nav-toggle nk-quick-nav-icon"
                                    data-target="sidebarMenu"><em class="icon ni ni-menu"></em></a>
                            </div>
                            <div class="nk-header-brand d-xl-none">
                                <a href="{{ route('index') }}" class="logo-link">
                                    <img class="logo-light logo-img" src="{{ asset('images/logo.png') }}"
                                        srcset="./images/logo2x.png 2x" alt="logo">
                                    <img class="logo-dark logo-img" src="{{ asset('images/logo-dark.png') }}"
                                        srcset="./images/logo-dark2x.png 2x" alt="logo-dark">
                                </a>
                            </div><!-- .nk-header-brand -->
                            <div class="nk-header-search ms-3 ms-xl-0">
                                <em class="icon ni ni-search"></em>
                                <input type="text" class="form-control border-transparent form-focus-none"
                                    placeholder="Search anything">
                            </div><!-- .nk-header-news -->
                            <div class="nk-header-tools">
                                <ul class="nk-quick-nav">
                                    <li class="nav-item">
                                        <a data-bs-toggle="modal" href="#region" class="nk-quick-nav-icon"><em
                                                class="icon ni ni-globe"></em></a>
                                    </li>
                                    <li class="dropdown chats-dropdown hide-mb-xs">
                                        <a href="#" class="dropdown-toggle nk-quick-nav-icon"
                                            data-bs-toggle="dropdown">
                                            <div class="icon-status icon-status-na"><em
                                                    class="icon ni ni-comments"></em></div>
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
                                                                    <div class="text">You: Please confrim if you got
                                                                        my last messages.</div>
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
                                                                    <div class="text">Hi, I am Ishtiyak, can you help
                                                                        me with this problem ?</div>
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
                                                                <img src="{{ asset('images/avatar/b-sm.jpg') }}"
                                                                    alt="">
                                                            </div>
                                                            <div class="chat-info">
                                                                <div class="chat-from">
                                                                    <div class="name">George Philips</div>
                                                                    <span class="time">6 Apr</span>
                                                                </div>
                                                                <div class="chat-context">
                                                                    <div class="text">Have you seens the claim from
                                                                        Rose?</div>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </li><!-- .chat-item -->
                                                    <li class="chat-item">
                                                        <a class="chat-link" href="#">
                                                            <div class="chat-media user-avatar user-avatar-multiple">
                                                                <div class="user-avatar">
                                                                    <img src="{{ asset('images/avatar/c-sm.jpg') }}"
                                                                        alt="">
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
                                                                    <div class="text">You: I just bought a new
                                                                        computer but i am having some problem</div>
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
                                                                <img src="{{ asset('images/avatar/a-sm.jpg') }}"
                                                                    alt="">
                                                                <span class="status dot dot-lg dot-success"></span>
                                                            </div>
                                                            <div class="chat-info">
                                                                <div class="chat-from">
                                                                    <div class="name">Larry Hughes</div>
                                                                    <span class="time">3 Apr</span>
                                                                </div>
                                                                <div class="chat-context">
                                                                    <div class="text">Hi Frank! How is you doing?
                                                                    </div>
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
                                                                    <div class="text">You: I just bought a new
                                                                        computer but i am having some problem</div>
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
                                        <a href="#" class="dropdown-toggle nk-quick-nav-icon"
                                            data-bs-toggle="dropdown">
                                            <div class="icon-status icon-status-info"><em
                                                    class="icon ni ni-bell"></em></div>
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
                                                            <em
                                                                class="icon icon-circle bg-warning-dim ni ni-curve-down-right"></em>
                                                        </div>
                                                        <div class="nk-notification-content">
                                                            <div class="nk-notification-text">You have requested to
                                                                <span>Widthdrawl</span></div>
                                                            <div class="nk-notification-time">2 hrs ago</div>
                                                        </div>
                                                    </div>
                                                    <div class="nk-notification-item dropdown-inner">
                                                        <div class="nk-notification-icon">
                                                            <em
                                                                class="icon icon-circle bg-success-dim ni ni-curve-down-left"></em>
                                                        </div>
                                                        <div class="nk-notification-content">
                                                            <div class="nk-notification-text">Your <span>Deposit
                                                                    Order</span> is placed</div>
                                                            <div class="nk-notification-time">2 hrs ago</div>
                                                        </div>
                                                    </div>
                                                    <div class="nk-notification-item dropdown-inner">
                                                        <div class="nk-notification-icon">
                                                            <em
                                                                class="icon icon-circle bg-warning-dim ni ni-curve-down-right"></em>
                                                        </div>
                                                        <div class="nk-notification-content">
                                                            <div class="nk-notification-text">You have requested to
                                                                <span>Widthdrawl</span></div>
                                                            <div class="nk-notification-time">2 hrs ago</div>
                                                        </div>
                                                    </div>
                                                    <div class="nk-notification-item dropdown-inner">
                                                        <div class="nk-notification-icon">
                                                            <em
                                                                class="icon icon-circle bg-success-dim ni ni-curve-down-left"></em>
                                                        </div>
                                                        <div class="nk-notification-content">
                                                            <div class="nk-notification-text">Your <span>Deposit
                                                                    Order</span> is placed</div>
                                                            <div class="nk-notification-time">2 hrs ago</div>
                                                        </div>
                                                    </div>
                                                    <div class="nk-notification-item dropdown-inner">
                                                        <div class="nk-notification-icon">
                                                            <em
                                                                class="icon icon-circle bg-warning-dim ni ni-curve-down-right"></em>
                                                        </div>
                                                        <div class="nk-notification-content">
                                                            <div class="nk-notification-text">You have requested to
                                                                <span>Widthdrawl</span></div>
                                                            <div class="nk-notification-time">2 hrs ago</div>
                                                        </div>
                                                    </div>
                                                    <div class="nk-notification-item dropdown-inner">
                                                        <div class="nk-notification-icon">
                                                            <em
                                                                class="icon icon-circle bg-success-dim ni ni-curve-down-left"></em>
                                                        </div>
                                                        <div class="nk-notification-content">
                                                            <div class="nk-notification-text">Your <span>Deposit
                                                                    Order</span> is placed</div>
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
                                        <a href="#" class="dropdown-toggle nk-quick-nav-icon"
                                            data-bs-toggle="dropdown">
                                            <div class="quick-icon border border-light">
                                                <img class="icon" src="{{ asset('images/flags/english-sq.png') }}"
                                                    alt="">
                                            </div>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end dropdown-menu-s1">
                                            <ul class="language-list">
                                                <li>
                                                    <a href="#" class="language-item">
                                                        <img src="{{ asset('images/flags/english.png') }}"
                                                            alt="" class="language-flag">
                                                        <span class="language-name">English</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" class="language-item">
                                                        <img src="{{ asset('images/flags/spanish.png') }}"
                                                            alt="" class="language-flag">
                                                        <span class="language-name">Español</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" class="language-item">
                                                        <img src="{{ asset('images/flags/french.png') }}"
                                                            alt="" class="language-flag">
                                                        <span class="language-name">Français</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" class="language-item">
                                                        <img src="{{ asset('images/flags/turkey.png') }}"
                                                            alt="" class="language-flag">
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
                                                    <li><a href="{{ route('Evento/user-profile') }}"><em
                                                                class="icon ni ni-user-alt"></em><span>View
                                                                Profile</span></a></li>
                                                    <li><a href="{{ route('Evento/settings') }}"><em
                                                                class="icon ni ni-setting-alt"></em><span>Account
                                                                Setting</span></a></li>
                                                    <li><a href="{{ route('Evento/settings-account-log') }}"><em
                                                                class="icon ni ni-activity-alt"></em><span>Login
                                                                Activity</span></a></li>
                                                    <li><a class="dark-switch" href="#"><em
                                                                class="icon ni ni-moon"></em><span>Dark Mode</span></a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="dropdown-inner">
                                                <ul class="link-list">
                                                    <li><a href="{{ route('auth/logout') }}"><em
                                                                class="icon ni ni-signout"></em><span>Sign
                                                                out</span></a></li>

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
                                <div class="nk-block">
                                    <div class="card card-bordered">
                                        <div class="card-aside-wrap">
                                            <div class="card-inner card-inner-lg">
                                                <div class="nk-block-head nk-block-head-lg">
                                                    <div class="nk-block-between">
                                                        <div class="nk-block-head-content">
                                                            <h5 class="title fw-medium">General settings</h5>
                                                            <span>These settings helps you modify site settings.</span>
                                                        </div><!-- .nk-block-head-content -->
                                                        @if (session('status'))
                                                        <div class="alert alert-success">
                                                            {{ session('status') }}
                                                        </div>
                                                        @elseif(session('error'))
                                                        <div class="alert alert-danger">
                                                            {{ session('error') }}
                                                        </div>
                                                        @endif
                                                        
                                                        <div class="nk-block-head-content align-self-start d-lg-none">
                                                            <a href="#"
                                                                class="toggle btn btn-icon btn-trigger mt-n1"
                                                                data-target="userAside"><em
                                                                    class="icon ni ni-menu-alt-r"></em></a>
                                                        </div>
                                                    </div><!-- .nk-block-between -->
                                                </div><!-- .nk-block-head -->
                                                <div class="nk-block">
                                                    <form action="{{route('updateSettings')}}" class="form-settings" method="POST">
                                                        @csrf
                                                        <div class="row g-3 align-center">
                                                            <div class="col-lg-5">
                                                                <div class="form-group">
                                                                    <label class="form-label">Auto Reservation</label>
                                                                    <span class="form-note">Enable or disable
                                                                        registration from site.</span>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-7">
                                                                <ul
                                                                    class="custom-control-group g-3 align-center flex-wrap">
                                                                    <li>
                                                                        <div class="custom-control custom-radio">
                                                                            <input type="radio"
                                                                                class="custom-control-input"
                                                                                name="autoReservation" id="autoReservation" value="on">
                                                                            <label class="custom-control-label"
                                                                                for="autoReservation">Enable</label>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="custom-control custom-radio">
                                                                            <input type="radio"
                                                                                class="custom-control-input"
                                                                                name="autoReservation" id="reg-disable" value="off">
                                                                            <label class="custom-control-label"
                                                                                for="reg-disable">Disable</label>
                                                                        </div>
                                                                    </li>

                                                                </ul>
                                                            </div>
                                                        </div>
                                                        
                                                       
                                                        <div class="row g-3 align-center">
                                                            <div class="col-lg-5">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="site-off"> Auto
                                                                        Approval</label>
                                                                    <span class="form-note">Enable to auto approve event requests
                                                                        .</span>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-7">
                                                                <div class="form-group">
                                                                    <div class="custom-control custom-switch">
                                                                        <input type="checkbox"
                                                                            class="custom-control-input"
                                                                            name="autoApproval" id="autoApproval">
                                                                        <label class="custom-control-label"
                                                                            for="autoApproval">on/off</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row g-3 align-center">
                                                            <div class="col-lg-5">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="event-off">Event
                                                                        Creation
                                                                    </label>
                                                                    <span class="autoCreation">Enable to make Project make
                                                                        offline.</span>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-7">
                                                                <div class="form-group">
                                                                    <div class="custom-control custom-switch">
                                                                        <input type="checkbox"
                                                                            class="custom-control-input"
                                                                            name="autoCreation" id="autoCreation">
                                                                        <label class="custom-control-label"
                                                                            for="autoCreation">on/off</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row g-3">
                                                            <div class="col-lg-7">
                                                                <div class="form-group mt-2">
                                                                    <button type="submit"
                                                                        class="btn btn-lg btn-primary">Update</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div><!-- .nk-block-head -->
                                            </div><!-- .card-inner -->
                                            <div class="card-aside card-aside-left user-aside toggle-slide toggle-slide-left toggle-break-lg"
                                                data-content="userAside" data-toggle-screen="lg"
                                                data-toggle-overlay="true">
                                                <div class="card-inner-group" data-simplebar>
                                                    <div class="card-inner">
                                                        <h3 class="nk-block-title page-title">Settings</h3>
                                                        <div class="nk-block-des text-soft">
                                                            <p>Here you can change and edit your needs</p>
                                                        </div>
                                                    </div><!-- .card-inner -->
                                                    <div class="card-inner p-0">
                                                        <ul class="link-list-menu">
                                                            <li><a class="active"
                                                                    href="{{ route('Evento/settings') }}"><em
                                                                        class="icon ni ni-user-fill-c"></em><span>General</span></a>
                                                            </li>
                                                            <li><a href="{{ route('Evento/settings-member') }}"><em
                                                                        class="icon ni ni-bell-fill"></em><span>Users</span></a>
                                                            </li>
                                                            <li><a href="{{ route('Evento/settings-email') }}"><em
                                                                        class="icon ni ni-lock-alt-fill"></em><span>E-mail</span></a>
                                                            </li>
                                                            <li><a href="{{ route('Evento/settings-security') }}"><em
                                                                        class="icon ni ni-shield-star-fill"></em><span>Security</span></a>
                                                            </li>
                                                            <li><a href="{{ route('Evento/settings-account-log') }}"><em
                                                                        class="icon ni ni-activity-round-fill"></em><span>Account
                                                                        activity</span></a></li>
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
                                    <img src="{{ asset('images/flags/arg.png') }}" alt=""
                                        class="country-flag">
                                    <span class="country-name">Argentina</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="{{ asset('images/flags/aus.png') }}" alt=""
                                        class="country-flag">
                                    <span class="country-name">Australia</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="{{ asset('images/flags/bangladesh.png') }}" alt=""
                                        class="country-flag">
                                    <span class="country-name">Bangladesh</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="{{ asset('images/flags/canada.png') }}" alt=""
                                        class="country-flag">
                                    <span class="country-name">Canada <small>(English)</small></span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="{{ asset('images/flags/china.png') }}" alt=""
                                        class="country-flag">
                                    <span class="country-name">Centrafricaine</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="{{ asset('images/flags/china.png') }}" alt=""
                                        class="country-flag">
                                    <span class="country-name">China</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="{{ asset('images/flags/french.png') }}" alt=""
                                        class="country-flag">
                                    <span class="country-name">France</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="{{ asset('images/flags/germany.png') }}" alt=""
                                        class="country-flag">
                                    <span class="country-name">Germany</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="{{ asset('images/flags/iran.png') }}" alt=""
                                        class="country-flag">
                                    <span class="country-name">Iran</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="{{ asset('images/flags/italy.png') }}" alt=""
                                        class="country-flag">
                                    <span class="country-name">Italy</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="{{ asset('images/flags/mexico.png') }}" alt=""
                                        class="country-flag">
                                    <span class="country-name">México</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="{{ asset('images/flags/philipine.png') }}" alt=""
                                        class="country-flag">
                                    <span class="country-name">Philippines</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="{{ asset('images/flags/portugal.png') }}" alt=""
                                        class="country-flag">
                                    <span class="country-name">Portugal</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="{{ asset('images/flags/s-africa.png') }}" alt=""
                                        class="country-flag">
                                    <span class="country-name">South Africa</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="{{ asset('images/flags/spanish.png') }}" alt=""
                                        class="country-flag">
                                    <span class="country-name">Spain</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="{{ asset('images/flags/switzerland.png') }}" alt=""
                                        class="country-flag">
                                    <span class="country-name">Switzerland</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="{{ asset('images/flags/uk.png') }}" alt=""
                                        class="country-flag">
                                    <span class="country-name">United Kingdom</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="{{ asset('images/flags/english.png') }}" alt=""
                                        class="country-flag">
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
    <script src="{{ asset('js/bundle.js') }}"></script>

    <script src="{{ asset('js/scripts.js') }}"></script>
</body>

</html>
