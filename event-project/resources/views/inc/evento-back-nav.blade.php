<div class="nk-header nk-header-fixed nk-header-fluid is-light">
    <div class="container-fluid">
        <div class="nk-header-wrap">
            <div class="nk-menu-trigger d-xl-none ms-n1">
                <a href="#" class="nk-nav-toggle nk-quick-nav-icon" data-target="sidebarMenu"><em class="icon ni ni-menu"></em></a>
            </div>
            <div class="nk-header-brand d-xl-none">
                <a href="{{ route('index') }}" class="logo-link">
                    <img class="logo-light logo-img" src="{{ asset('images/logo.png') }}" srcset="./images/logo2x.png 2x" alt="logo">
                    <img class="logo-dark logo-img" src="{{ asset('images/logo-dark.png') }}" srcset="./images/logo-dark2x.png 2x" alt="logo-dark">
                </a>
            </div><!-- .nk-header-brand -->
           
            <div class="nk-header-tools">
                <ul class="nk-quick-nav">
                    
                    
                    <li class="dropdown notification-dropdown">
                        <a href="#" class="dropdown-toggle nk-quick-nav-icon" data-bs-toggle="dropdown">
                            <div class="icon-status icon-status-info"><em class="icon ni ni-bell"></em></div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-xl dropdown-menu-end">
                            {{-- <div class="dropdown-head">
                                <span class="sub-title nk-dropdown-title">Notifications</span>
                                <a href="#">Mark All as Read</a>
                            </div> --}}
                            <div class="dropdown-body">
                                <div class="nk-notification">

                                    @foreach ($reservation as $item)
                                    @if ($item->status == 'cancelled')
                                    @continue
                                    @endif
                                    <div class="nk-notification-item dropdown-inner">
                                        @if ($item->status == 'pending')
                                        <div class="nk-notification-icon">
                                            <a href="{{route('approuve/reservation',['id'=>$item->id])}}">
                                                
                                                <em class="icon icon-circle bg-success-dim ni ni-curve-down-left"></em>
                                            </a>
                                            <a href="{{route('cancel/reservation',['id'=>$item->id])}}">
                                            
                                                <em class="icon icon-circle bg-warning-dim ni ni-curve-down-right"></em>
                                            </a>
                                            {{-- @elseif ($item->status == 'approved') --}}
                                            
                                        </div>
                                        <div class="nk-notification-content">
                                            <div class="nk-notification-text">You have a <span class="change up text-danger">reservation</span> request</div>
                                            
                                            <div class="nk-notification-time">2 hrs ago</div>
                                        </div>
                                        @endif
                                    </div>
                                    @endforeach
                                    
                                    
                                </div><!-- .nk-notification -->
                            </div><!-- .nk-dropdown-body -->
                            {{-- <div class="dropdown-foot center">
                                <a href="#">View All</a>
                            </div> --}}
                        </div>
                    </li>
                    
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
                                    <li><a href="{{ route('Evento/settings') }}"><em class="icon ni ni-setting-alt"></em><span>Account Setting</span></a></li>
                                    <li><a class="dark-switch" href="#"><em class="icon ni ni-moon"></em><span>Dark Mode</span></a></li>
                                </ul>
                            </div>
                            <div class="dropdown-inner">
                                <ul class="link-list">
                                    <li><a href="{{ route('auth/logout') }}"><em class="icon ni ni-signout"></em><span>Sign out</span></a></li>

                                </ul>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div><!-- .nk-header-wrap -->
    </div><!-- .container-fliud -->
</div>