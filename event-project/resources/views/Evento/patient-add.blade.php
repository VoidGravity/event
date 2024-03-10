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
    <title>Add Event - Evento</title>
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
                    @include('inc.sidebar')





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
                                <div class="nk-block-head nk-block-head-sm">
                                    <div class="nk-block-between">
                                        <div class="nk-block-head-content">
                                            <h3 class="nk-block-title page-title">Add Event</h3>
                                            <div class="nk-block-des text-soft">
                                                <p>Input new Event information carefully.</p>
                                            </div>
                                        </div><!-- .nk-block-head-content -->
                                    </div><!-- .nk-block-between -->
                                </div><!-- .nk-block-head -->
                                <div class="nk-block">
                                    <div class="card card-bordered">
                                        <form action="" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <div class="card-inner-group">


                                                <div class="card-inner">
                                                    <div class="nk-block-head">
                                                        <div class="nk-block-head-content">
                                                            <h5 class="title nk-block-title">Event Details</h5>
                                                            <p>Details information about the Event.
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="nk-block">
                                                        <div class="row gy-4">
                                                            <div class="col-xxl-6 col-md-8">
                                                                <div class="form-group">
                                                                    <label class="form-label">Event Title</label>
                                                                    <div class="form-control-wrap">
                                                                        <input name="title" type="text"
                                                                            class="form-control" id="Event"
                                                                            placeholder="title">

                                                                    </div>
                                                                </div>
                                                            </div><!--col-->
                                                            <div class="col-xxl-3 col-md-4">
                                                                <div class="form-group">
                                                                    <label class="form-label">Event Category</label>
                                                                    <div class="form-control-wrap">
                                                                        <select name="category_id"
                                                                            class="form-select js-select2"
                                                                            data-placeholder="Select Event Category">
                                                                            <option value="">Select</option>
                                                                            @foreach ($category as $item)
                                                                                <option value="{{ $item->id }}">
                                                                                    {{ $item->name }}</option>
                                                                           @endforeach
                                                                            
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div><!--col-->
                                                            <div class="col-xxl-3 col-md-4">
                                                                <div class="form-group">
                                                                    <label class="form-label">Location</label>
                                                                    <div class="form-control-wrap">
                                                                        <input type="text" name="location"
                                                                            id="location" class="form-control"
                                                                            placeholder="type your location">
                                                                    </div>
                                                                </div>
                                                            </div><!--col-->
                                                            {{-- todo: working on the user profile --}}

                                                            <div class="col-xxl-3 col-md-4">
                                                                <div class="form-group">
                                                                    <div class="form-control-wrap">
                                                                        <div class="form-group"> <label
                                                                                class="form-label">Ticket price</label>
                                                                            <div
                                                                                class="form-control-wrap number-spinner-wrap">
                                                                                <p class="btn btn-icon btn-outline-light number-spinner-btn number-minus"
                                                                                    data-number="minus"><em
                                                                                        class="icon ni ni-minus"></em>
                                                                                </p>
                                                                                <input name="price" type="price"
                                                                                    class="form-control number-spinner"
                                                                                    value="0">
                                                                                <p class="btn btn-icon btn-outline-light number-spinner-btn number-plus"
                                                                                    data-number="plus"><em
                                                                                        class="icon ni ni-plus"></em>
                                                                                </p>
                                                                            </div>
                                                                        </div>



                                                                    </div>
                                                                </div>
                                                            </div><!--col-->
                                                            <div class="col-xxl-3 col-md-4">
                                                                <div class="form-group">
                                                                    <label class="form-label">Payment Method</label>

                                                                    <ul
                                                                        class="custom-control-group custom-control-vertical w-100">
                                                                        <li>
                                                                            <div
                                                                                class="custom-control custom-control-sm custom-radio custom-control-pro">
                                                                                <input type="radio"
                                                                                    class="custom-control-input"
                                                                                    name="payment_methode"
                                                                                    id="paymentCheck1" value="paypal"
                                                                                    {{ old('payment_methode') == 'paypal' ? 'checked' : '' }}>
                                                                                <label class="custom-control-label"
                                                                                    for="paymentCheck1"> <em
                                                                                        class="icon icon-lg ni ni-cc-paypal"></em><span>Paypal</span>
                                                                                </label>
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div
                                                                                class="custom-control custom-control-sm custom-radio custom-control-pro">
                                                                                <input type="radio"
                                                                                    class="custom-control-input"
                                                                                    name="payment_methode"
                                                                                    id="paymentCheck2" value="stripe"
                                                                                    {{ old('payment_methode') == 'stripe' ? 'checked' : '' }}>
                                                                                <label class="custom-control-label"
                                                                                    for="paymentCheck2"> <em
                                                                                        class="icon icon-lg ni ni-cc-stripe"></em><span>Stripe</span>
                                                                                </label>
                                                                            </div>
                                                                        </li>
                                                                    </ul>

                                                                </div>
                                                            </div>
                                                            <div class="col-xxl-3 col-md-4">
                                                                <div class="form-group">
                                                                    <label class="form-label">Auto Reserve</label>

                                                                    <ul
                                                                        class="custom-control-group custom-control-vertical w-100">
                                                                        <li>
                                                                            <div
                                                                                class="custom-control custom-control-sm custom-radio custom-control-pro">
                                                                                <input type="radio"
                                                                                    class="custom-control-input"
                                                                                    name="auto_reserve"
                                                                                    id="reserve1" value="ON"
                                                                                    {{ old('auto_reserve') == 'ON' ? 'checked' : '' }}>
                                                                                <label class="custom-control-label"
                                                                                    for="reserve1"> </em><span>ON</span>
                                                                                </label>
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div
                                                                                class="custom-control custom-control-sm custom-radio custom-control-pro">
                                                                                <input type="radio"
                                                                                    class="custom-control-input"
                                                                                    name="auto_reserve"
                                                                                    id="reserve2" value="OFF"
                                                                                    {{ old('auto_reserve') == 'OFF' ? 'checked' : '' }}>
                                                                                <label class="custom-control-label"
                                                                                    for="reserve2"> <span>OFF</span>
                                                                                </label>
                                                                            </div>
                                                                        </li>
                                                                    </ul>

                                                                </div>
                                                            </div>
                                                            <div class="col-xxl-3 col-md-4">
                                                                <div class="form-group">
                                                                    <label class="form-label">Event Date</label>
                                                                    <div class="form-control-wrap">
                                                                        
                                                                        <input name="start_date" type="date"
                                                                            class="form-control"
                                                                            placeholder="dd-mm-yyyy"
                                                                            value="{{ old('start_date') }}">
                                                                    </div>
                                                                </div>

                                                            </div><!--col-->

                                                            <div class="col-xxl-3 col-md-4">
                                                                <div class="form-group">
                                                                    <label class="form-label">Capacity</label>
                                                                    <div class="form-control-wrap">
                                                                        <select name="capacity"
                                                                            class="form-select js-select2"
                                                                            data-placeholder="Select capacity">
                                                                            <option value="">Select</option>
                                                                            <option value="4-10">4-10
                                                                            </option>
                                                                            <option value="0-99">10-99
                                                                            </option>
                                                                            <option value="99-1000">
                                                                                99-1000
                                                                            </option>
                                                                            <option value="1000-9999">
                                                                                1000-9999
                                                                            </option>
                                                                            <option value="9999-100k">
                                                                                9999-100k
                                                                            </option>
                                                                            <option value="100k+">100k+
                                                                            </option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div><!-- .col -->
                                                            <div class="col-xxl-3 col-md-4">
                                                                <div class="form-group">
                                                                    <label class="form-label">Event image</label>
                                                                    <div class="form-control-wrap">
                                                                        <div class="form-file">
                                                                            <input type="file" multiple
                                                                                class="form-file-input"
                                                                                id="testReport" name="image">
                                                                            <label class="form-file-label"
                                                                                for="testReport">Choose an
                                                                                image</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div><!--col-->
                                                            <div class="col-12">
                                                                <div class="form-group">
                                                                    <label class="form-label">Event Description</label>
                                                                    <div class="form-control-wrap">
                                                                        <input type="text" name="description"
                                                                            id="description" class="form-control">
                                                                    </div>


                                                                </div>
                                                            </div>

                                                            <div class="col-12">
                                                                <div class="form-group">
                                                                    <button type="submit" class="btn btn-primary">Add
                                                                        Event</button>
                                                                </div>
                                                            </div><!--col-->
                                                        </div><!--row-->
                                                    </div>
                                                </div><!-- .card-inner -->
                                            </div>

                                        </form>
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

    <link rel="stylesheet" href="{{ asset('css/editors/quill.css?ver=3.2.3') }}">
    <script src="{{ asset('js/libs/editors/quill.js?ver=3.2.3') }}"></script>
    <script src="{{ asset('js/editors.js?ver=3.2.3') }}"></script>

</body>

</html>
