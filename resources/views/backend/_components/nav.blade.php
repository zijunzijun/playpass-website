<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">
                Foundry
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link @if(isset($active) && $active === 'user') active @endif"
                           href="{{route('backend.user.index')}}">Users</a>
                    </li>
                </ul>
                <ul class="navbar-nav me-0 mb-2 mb-lg-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle @if(isset($active) && $active === 'account') active @endif"
                           href="#" id="user" role="button" data-bs-toggle="dropdown"
                           aria-expanded="false">
                            <i class="far fa-user-circle"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="user">
                            <li><a class="dropdown-item"
                                   href="{{route('backend.administrator.index')}}">Administrators</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="{{route('backend.account.profile')}}">Profile</a></li>
                            @if(Auth::guard('backend')->check())
                                <li><a class="dropdown-item" href="{{route('backend.login.destroy')}}">Logout</a></li>
                            @else
                                <li><a class="dropdown-item" href="{{route('backend.login.show')}}">Login</a></li>
                            @endif
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
