<nav id="sidebar">
    <div class="d-flex justify-content-between sidebar-header">
        <h3><span class="dashboard-menu">Tripo</span>Panel</h3>
    </div>

    <ul class="list-unstyled components">
        <li>
            <a href="{{ URL::route('admin.dashboard')}}">
                <i class="fa fa-tachometer-alt" aria-hidden="true"></i>
                <span class="dashboard-menu">Dashboard</span>
            </a>
        </li>
        <li>
            <a href="{{route('admin.homepage')}}">
                <i class="fa fa-home" aria-hidden="true"></i>
                <span class="dashboard-menu">Home Page</span>
            </a>
        </li>

    </ul>
</nav>
