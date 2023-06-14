<nav class="navbar navbar-expand-lg navbar-light bg-light container-fluid">
    <a class="navbar-brand ml-5" href="/"><img src="/images/logo.png" style="width: 100px;" /></a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link {{ ($active === 'home') ? 'active' : ''}}" href="/">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ ($active === 'about') ? 'active' : ''}}" href="/about">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('discover*')? 'active' : '' }}" href="/discover">Discover</a>
            </li>
            @auth
                <li class="nav-item">
                    <a class="nav-link " href="/dashboard">Your Tasks</a>
                </li>
            @endauth
        </ul>
        <ul class="navbar-nav ml-auto mr-5">
            @auth
                <ul>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Welcome back, {{ auth()->user()->name }}
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="/dashboard"><i class="bi bi-clipboard-fill"></i> Dashboard</a>
                            <form action="/logout" method="post">
                                @csrf
                                <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-in-right"></i>
                                    Logout</button>
                            </form>

                        </div>
                    </li>
                </ul>
            @else
                <li class="nav-item">
                    <a href="/login" class="nav-link {{ ($active === 'login') ? 'active' : ''}}"><i class="bi bi-box-arrow-in-right"></i> Login</a>
                </li>
            @endauth
        </ul>
    </div>
</nav>