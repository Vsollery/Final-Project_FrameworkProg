<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3 sidebar-sticky">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard')? 'active' : '' }}" aria-current="page" href="/dashboard">
                    <span data-feather="home" class="align-text-bottom"></span>
                    Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/mytasks')? 'active' : '' }}" href="/dashboard/mytasks">
                    <span data-feather="list" class="align-text-bottom"></span>
                    My Tasks
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/mytasks/finished')? 'active' : '' }}" href="/dashboard/mytasks/finished">
                    <span data-feather="check-square" class="align-text-bottom"></span>
                    Finished
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/mytasks/unfinished')? 'active' : '' }}" href="/dashboard/mytasks/unfinished">
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
    </div>
</nav>