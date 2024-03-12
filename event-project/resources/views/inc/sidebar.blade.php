<div class="nk-menu-content menu-active" data-content="navHospital">
    <h5 class="title">Evento</h5>
    <ul class="nk-menu">
        <li class="nk-menu-item">
            <a href="{{ route('Evento/index') }}" class="nk-menu-link">
                <span class="nk-menu-icon"><em class="icon ni ni-dashboard-fill"></em></span>
                <span class="nk-menu-text">Dashboard</span>
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
                    <a href="{{ route('Evento/doctor-nurse-list') }}" class="nk-menu-link"><span
                            class="nk-menu-text">Event List</span></a>
                </li>
            </ul><!-- .nk-menu-sub -->
        </li><!-- .nk-menu-item -->
       
        @if ($currentRole == 'admin')
         
        <li class="nk-menu-item has-sub">
            <a href="#" class="nk-menu-link nk-menu-toggle">
                <span class="nk-menu-icon"><em class="icon ni ni-panel-fill"></em></span>
                <span class="nk-menu-text">Event Administration</span>
            </a>
            <ul class="nk-menu-sub">
                
                <li class="nk-menu-item">
                    <a href="{{ route('Evento/department') }}" class="nk-menu-link"><span
                            class="nk-menu-text">Category list</span></a>
                </li>
               
            </ul><!-- .nk-menu-sub -->
        </li><!-- .nk-menu-item -->
        <li class="nk-menu-item">
           
        </li><!-- .nk-menu-item -->
    
        
        <li class="nk-menu-item">
            <a href="{{ route('Evento/settings') }}" class="nk-menu-link">
                <span class="nk-menu-icon"><em class="icon ni ni-setting-fill"></em></span>
                <span class="nk-menu-text">Setting</span>
            </a>
        </li><!-- .nk-menu-item -->
        @endif
    </ul><!-- .nk-menu -->
</div>
