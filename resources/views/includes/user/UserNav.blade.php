  <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached
  justify-content-start bg-navbar-theme shadow  mt-3 rounded-3" id="layout-navbar">
    <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
        <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
        <i class="bx bx-menu bx-sm"></i>
        </a>
    </div>

    <div class="navbar-nav d-flex align-items-center" id="navbar-collapse">


        <ul class="navbar-nav flex-row align-items-center me-auto">


        <!-- User -->
        <li class="nav-item navbar-dropdown dropdown-user dropdown " style="direction: rtl;">
            <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
            <div class="avatar avatar-online">
                <img src="{{ asset('uploads/avaters/client/'.Auth::user()->avater) }}" alt class="w-px-40 h-auto rounded-circle" />
            </div>
            </a>
            <ul class="dropdown-menu dropdown-menu-start">
            <li>
                <a class="dropdown-item" href="#">
                <div class="d-flex">
                    <div class="flex-shrink-0 ms-1">
                    <div class="avatar avatar-online">
                        <img src="{{ asset('uploads/avaters/client/'.Auth::user()->avater) }}" alt class="w-px-40 h-auto rounded-circle" />
                    </div>
                    </div>
                    <div class="flex-grow-1">
                    <span class="fw-semibold d-block">{{ Auth::user()->name }}</span>
                    <small class="text-muted">صيدلية</small>
                    </div>
                </div>
                </a>
            </li>
            <li>
                <div class="dropdown-divider"></div>
            </li>
            <li>
                <a class="dropdown-item" href="{{ route('client-dashboard') }}">
                <i class="bx bx-user ms-1"></i>
                <span class="align-middle">حسابي</span>
                </a>
            </li>
            <li>
                <a class="dropdown-item" href="{{ route('client-settings') }}">
                <i class="bx bx-cog ms-1"></i>
                <span class="align-middle">الاعدادات</span>
                </a>
            </li>

            <li>
                <div class="dropdown-divider"></div>
            </li>
            <li>
                <a class="dropdown-item" href="{{ route('logout') }}">
                <i class="bx bx-power-off ms-2"></i>
                <span class="align-middle">تسجيل خروج </span>
                </a>
            </li>
            </ul>
        </li>
        <!--/ User -->
        </ul>
    </div>
</nav>
