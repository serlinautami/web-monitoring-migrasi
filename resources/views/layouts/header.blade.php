<header class="header header-sticky mb-4">
    <div class="container-fluid">
        <button class="header-toggler px-md-0 me-md-3" type="button"
            onclick="coreui.Sidebar.getInstance(document.querySelector('#sidebar')).toggle()">
            <svg class="icon icon-lg">
                <use xlink:href="/icons/sprites/free.svg#cil-menu"></use>
            </svg>
        </button><a class="header-brand d-md-none" href="#">
            <svg width="118" height="46" alt="CoreUI Logo">
                <use xlink:href="/assets/brand/coreui.svg#full"></use>
            </svg></a>

        <ul class="header-nav ms-3">
            <li class="nav-item dropdown"><a class="nav-link py-0" data-coreui-toggle="dropdown" href="#" role="button"
                    aria-haspopup="true" aria-expanded="false">
                    <div class="avatar avatar-md"><img class="avatar-img" src="/assets/img/ic-user.png"
                            alt="{{ Auth::user()->email ?? '' }}"></div>
                </a>
                <div class="dropdown-menu dropdown-menu-end pt-0">
                    <div class="dropdown-header bg-light py-2">
                        <div class="fw-semibold">{{ Auth::user()->name ?? '' }}</div>
                    </div>
                    <a class="dropdown-item" href="/profile">
                        <svg class="icon me-2">
                            <use xlink:href="/icons/sprites/free.svg#cil-user"></use>
                        </svg>
                        Profile
                    </a>

                    <a class="dropdown-item" href="/logout">
                        <svg class="icon me-2">
                            <use xlink:href="/icons/sprites/free.svg#cil-account-logout"></use>
                        </svg>
                        Logout
                    </a>
                </div>
            </li>
        </ul>
    </div>
    <div class="header-divider"></div>
    @yield('breadcrumb')
</header>
