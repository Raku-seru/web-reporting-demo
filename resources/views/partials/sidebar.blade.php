<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column layout-fixed" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
        <li class="nav-item">
            <a href="/home" class="nav-link">
                <i class="nav-icon fas fa-home"></i>
                <p>Dashboard</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="/user/{{Auth::id()}}" class="nav-link">
                <i class="nav-icon fas fa-user-edit"></i>
                <p>Profile</p>
            </a>
        </li>
    </ul>
</nav>