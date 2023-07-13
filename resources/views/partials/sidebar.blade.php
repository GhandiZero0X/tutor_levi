<div class="container-fluid">
    <div class="row">
        <div class="col-2 sidebar bg-primary ">
            <div class="d-flex align-items-center justify-content-center mt-3 mb-4">
                <img src="images/logoTitle/logoweb.png" alt="Logo" width="40" height="40" class="mr-2"
                    style="margin-right: 10px;">
                <h4 class="text-white" style="font-size: 24px;">StudyBuddy</h4>
            </div>
            <hr class="sidebar-divider">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link btn-primary border text-white rounded {{ $title === 'Home' ? 'active' : '' }}"
                        href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn-success border text-white rounded {{ $title === 'Notifikasi' ? 'active' : '' }}"
                        href="{{ route('notifikasi') }}">Notifikasi</a>
                </li>
            </ul>
            <div style="margin-top: auto; margin-bottom: 400px;"></div>
            <ul class="nav flex-column">
                <li class="nav-item text-center">
                    <a class="nav-link btn btn-danger rounded ml-2" href="{{ route('logout') }}">Logout</a>
                </li>
            </ul>
        </div>
            <div class="col-10">
                @yield('content')
            </div>
        </div>
    </div>
</div>
