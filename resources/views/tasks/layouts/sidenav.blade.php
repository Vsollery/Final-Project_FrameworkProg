<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3 sidebar-sticky">
        @if (Auth::user()->email != 'admin@gmail.com')
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" aria-current="page"
                        href="/dashboard">
                        <span data-feather="home" class="align-text-bottom"></span>
                        Dashboard
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('dashboard/mytasks') ? 'active' : '' }}" href="/dashboard/mytasks">
                        <span data-feather="list" class="align-text-bottom"></span>
                        My Tasks
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('dashboard/mytasks/finished') ? 'active' : '' }}"
                        href="/dashboard/mytasks/finished">
                        <span data-feather="check-square" class="align-text-bottom"></span>
                        Finished
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('dashboard/mytasks/unfinished') ? 'active' : '' }}"
                        href="/dashboard/mytasks/unfinished">
                        <span data-feather="x-square" class="align-text-bottom"></span>
                        Unfinished
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="/about">
                        <span data-feather="user" class="align-text-bottom"></span>
                        About
                    </a>
                </li>
            </ul>
        @endif
        @can('admin')
            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                <span>ADMINISTRATOR</span>
            </h6>
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('/manage-users*') ? 'active' : '' }}" href="/manage-users">
                        <span data-feather="grid" class="align-text-bottom"></span>
                        Manage Users
                    </a>
                </li>

            </ul>
        @endcan
    </div>
</nav>
