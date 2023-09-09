<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link  {{ (\Request::route()->getName() == 'dashboard') ? 'show' : 'collapsed' }}" href="{{route('dashboard')}}">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li><!-- End Dashboard Nav -->



        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="{{url('public/')}}/#">
                <i class="bi bi-journal-text"></i><span>Forms</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="forms-nav" class="nav-content collapse {{ (\Request::route()->getName() == 'form') ? 'show' : '' }}" data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{route('form')}}" class="{{ (\Request::route()->getName() == 'form') ? 'active' : '' }}">
                        <i class="bi bi-circle"></i><span>Form Elements</span>
                    </a>
                </li>

            </ul>
        </li><!-- End Forms Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="{{url('public/')}}/#">
                <i class="bi bi-layout-text-window-reverse"></i><span>Tables</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="tables-nav" class="nav-content collapse @if(\Request::route()->getName() == 'datatable')) show @elseif(\Request::route()->getName() == 'table')) show @endif " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{route('table')}}" class="{{ (\Request::route()->getName() == 'table') ? 'active' : '' }}">
                        <i class="bi bi-circle"></i><span>General Tables</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('datatable')}}" class="{{ (\Request::route()->getName() == 'datatable') ? 'active' : '' }}">
                        <i class="bi bi-circle"></i><span>Data Tables</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Tables Nav -->



        <li class="nav-heading">Pages</li>

        <li class="nav-item">
            <a class="nav-link  {{ (\Request::route()->getName() == 'profile') ? 'show' : 'collapsed' }}" href="{{route('profile')}}">
                <i class="bi bi-person"></i>
                <span>Profile</span>
            </a>
        </li><!-- End Profile Page Nav -->






        <li class="nav-item">
            <a class="nav-link collapsed" href="{{url('login')}}">
                <i class="bi bi-box-arrow-in-right"></i>
                <span>Login</span>
            </a>
        </li><!-- End Login Page Nav -->




    </ul>

</aside><!-- End Sidebar-->
