<nav class="navbar sticky-top  navbar-expand navbar-dark bg-dark" aria-label="Second navbar example">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">RESERV.atiion</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample02" aria-controls="navbarsExample02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExample02">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{ route('home') }}">Home</a>
                </li>
                @role('super-admin')
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="{{ route('roles.index') }}">Roles</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="{{ route('users.index') }}">Users</a>
                    </li>
                @endrole
                @if (Route::has('login'))
                    @auth
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="#">Messages</a>
                        </li>
                    @endauth
                @endif
            </ul>
                @if (Route::has('login'))
                    <div class="btn-group">
                        @auth
                            <ul class="navbar-nav me-auto">
                                <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">{{ Auth::user()->name }}</a>
                                    <ul class="dropdown-menu text-small shadow" style="position: absolute; inset: 0px 0px auto auto; margin: 0px; transform: translate(0px, 34px);" data-popper-placement="bottom-end">
                                        <li><a class="dropdown-item" href="{{ route('dashboard') }}">Dashboard</a></li>
                                        <li><a class="dropdown-item" href="{{ route('profile.edit') }}">Профиль</a></li>
                                        <li><hr class="dropdown-divider"></li>
                                        <li><a class="dropdown-item" href="{{ route('logout') }}">Выход</a></li>
                                    </ul>
                                </li>
                            </ul>
                        @else
                            <button class="btn btn-outline-light me-2"><a class="nav-link" href="{{ route('login') }}">Вход</a></button>
                            @if (Route::has('register'))
                                <button class="btn btn-warning"><a class="nav-link" href="{{ route('register') }}">Регистрация</a></button>
                            @endif
                        @endauth
                    </div>
                @endif
        </div>
    </div>
</nav>
