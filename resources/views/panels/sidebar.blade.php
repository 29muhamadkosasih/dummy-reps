<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        {{-- <span class="app-brand-logo demo"> --}}
            <img src="{{ asset('assets/img/favicon/lgo.png') }}" width="110" height="90" alt
                class="me-3 ms-3 h-auto text-right" />

            <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
                <i class="ti menu-toggle-icon d-none d-xl-block ti-sm align-middle"></i>
                <i class="ti ti-x d-block d-xl-none ti-sm align-middle"></i>
            </a>
    </div>

    <div class="menu-inner-shadow"></div>
    <ul class="menu-inner py-1">
        <!-- Dashboards -->
        @can('home.index')
        <li class="menu-item {{ (request()->is('home')) ? 'active' : '' }}">
            <a href="{{ route('home') }}" class="menu-link">
                <i class="menu-icon tf-icons ti ti-smart-home"></i>
                <div data-i18n="Home">Home</div>
            </a>
        </li>
        @endcan

        @can('dashboard.index')
        <li class="menu-item {{ (request()->is('dashboard')) ? 'active' : '' }}">
            <a href="{{ route('dashboard.index') }}" class="menu-link">
                <i class="menu-icon tf-icons ti ti-layout-sidebar"></i>
                <div data-i18n="Dashboard">Dashboard</div>
            </a>
        </li>
        @endcan

        @can('dashboard.checked.index')
        <li class="menu-item {{ (request()->is('dashboard-checked')) ? 'active' : '' }}">
            <a href="{{ route('dashboard.checked') }}" class="menu-link">
                <i class="menu-icon tf-icons ti ti-3d-cube-sphere"></i>
                <div data-i18n="Dashboard"> Dashboard</div>
            </a>
        </li>
        @endcan

        @can('dashboard.approve.index')
        <li class="menu-item {{ (request()->is('dashboard-approve')) ? 'active' : '' }}">
            <a href="{{ route('dashboard.approve') }}" class="menu-link">
                <i class="menu-icon tf-icons ti ti-atom-2"></i>
                <div data-i18n="Dashboard">Dashboard</div>
            </a>
        </li>
        @endcan

        @can('dashboard.general.index')
        <li class="menu-item {{ (request()->is('dashboard-general')) ? 'active' : '' }}">
            <a href="{{ route('dashboard.general') }}" class="menu-link">
                <i class="menu-icon tf-icons ti ti-layout-kanban"></i>
                <div data-i18n="Dashboard">Dashboard</div>
            </a>
        </li>
        @endcan
        <!-- Apps & Pages -->
        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Apps &amp; Pages</span>
        </li>

        @can('layout.empty.index')
        <li class="menu-item {{ Route::currentRouteNamed('layout.empty') ? 'active' : '' }}">
            <a href="{{ route('layout.empty') }}" class="menu-link">
                <i class="menu-icon tf-icons ti ti-mail"></i>
                <div data-i18n="Layout Empty">Layout Empty</div>
            </a>
        </li>
        @endcan

        @can('profile.index')
        <li class="menu-item {{  (request()->is('me')) ? 'active' : ''  }}">
            <a href="{{ route('me.index') }}" class="menu-link">
                <i class="menu-icon tf-icons ti ti-user"></i>
                <div data-i18n="Profile">Profile</div>
            </a>
        </li>
        @endcan

        @can('form.index')
        <li class="menu-item {{ (request()->is('form')) ? 'active' : '' }}">
            <a href="{{ route('form.index') }}" class="menu-link">
                <i class="menu-icon tf-icons ti ti-folder"></i>
                <div data-i18n="Form">Form</div>
            </a>
        </li>
        @endcan

        @can('form-checked.index')
        <li class="menu-item {{ (request()->is('form-checked')) ? 'active' : '' }}">
            <a href="{{ route('form-checked.index') }}" class="menu-link">
                <i class="menu-icon tf-icons ti ti-chart-pie"></i>
                <div data-i18n="Checked">Checked </div>
            </a>
        </li>
        @endcan

        @can('form-approve.index')
        <li class="menu-item {{ (request()->is('form-approve')) ? 'active' : '' }}">
            <a href="{{ route('form-approve.index') }}" class="menu-link">
                <i class="menu-icon tf-icons ti ti-atom-2"></i>
                <div data-i18n="Approve">Approve</div>
            </a>
        </li>
        @endcan

        @can('form-list.index')
        <li class="menu-item {{ (request()->is('form-list')) ? 'active' : '' }}">
            <a href="{{ route('form-list.index') }}" class="menu-link">
                <i class="menu-icon tf-icons ti ti-list"></i>
                <div data-i18n="List">List</div>
            </a>
        </li>
        @endcan

        @can('form-list.paid')
        <li class="menu-item {{ Route::currentRouteNamed('list') ? 'active' : '' }}">
            <a href="{{ route('list') }}" class="menu-link">
                <i class="menu-icon tf-icons ti ti-checkbox"></i>
                <div data-i18n="Paid">Paid</div>
            </a>
        </li>
        @endcan

        @canany(['report.today.index','report.resumeRf.index'])
        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Report</span>
        </li>

        @can('report.today.index')
        <li class="menu-item {{ Route::currentRouteNamed('today') ? 'active' : '' }}">
            <a href="{{ route('today') }}" class="menu-link">
                <i class="menu-icon tf-icons ti ti-shield"></i>
                <div data-i18n="Resume Rf">Resume Rf</div>
            </a>
        </li>
        @endcan

        @can('report.resumeRf.index')
        <li class="menu-item {{ Route::currentRouteNamed('resumeRf') ? 'active' : '' }}">
            <a href="{{ route('resumeRf') }}" class="menu-link">
                <i class="menu-icon tf-icons ti ti-color-swatch"></i>
                <div data-i18n="Report RF">Report RF</div>
            </a>
        </li>
        @endcan
        @endcanany

        @can('listAdvance.index')
        <li class="menu-item {{ (request()->is('listAdvance')) ? 'active' : '' }}">
            <a href="{{ route('listAdvance') }}" class="menu-link">
                <i class="menu-icon tf-icons ti ti-checkbox"></i>
                <div data-i18n="List Advance">List Advance</div>
            </a>
        </li>
        @endcan


        @canany(['bank.index','norek.index','keperluan.index','kpengajuan.index','rujukan.index'])
        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Master Data</span>
        </li>

        @can('bank.index')
        <li class="menu-item {{ (request()->is('bank')) ? 'active' : '' }}">
            <a href="{{ route('bank.index') }}" class="menu-link">
                <i class="menu-icon tf-icons ti ti-tool"></i>
                <div data-i18n="Bank">Bank</div>
            </a>
        </li>
        @endcan

        @can('norek.index')
        <li class="menu-item {{ (request()->is('norek')) ? 'active' : '' }}">
            <a href="{{ route('norek.index') }}" class="menu-link">
                <i class="menu-icon tf-icons ti ti-file-dollar"></i>
                <div data-i18n="Nomor Rekening">Nomor Rekening</div>
            </a>
        </li>
        @endcan

        @can('keperluan.index')
        <li class="menu-item {{ (request()->is('keperluan')) ? 'active' : '' }}">
            <a href="{{ route('keperluan.index') }}" class="menu-link">
                <i class="menu-icon tf-icons ti ti-text-wrap-disabled"></i>
                <div data-i18n="Keperluan">Keperluan</div>
            </a>
        </li>
        @endcan

        @can('kpengajuan.index')
        <li class="menu-item {{ (request()->is('kpengajuan')) ? 'active' : '' }}">
            <a href="{{ route('kpengajuan.index') }}" class="menu-link">
                <i class="menu-icon tf-icons ti ti-layout-navbar"></i>
                <div data-i18n="Kategori Pengajuan">Kategori Pengajuan</div>
            </a>
        </li>
        @endcan


        @can('rujukan.index')
        <li class="menu-item {{ (request()->is('rujukan')) ? 'active' : '' }}">
            <a href="{{ route('rujukan.index') }}" class="menu-link">
                <i class="menu-icon tf-icons ti ti-id"></i>
                <div data-i18n="Rujukan">Rujukan</div>
            </a>
        </li>
        @endcan

        @endcanany

        @canany(['users.index','roles.index','permissions.index'])
        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Users Management</span>
        </li>

        @can('users.index')
        <li class="menu-item {{ (request()->is('users')) ? 'active' : '' }}">
            <a href="{{ route('users.index') }}" class="menu-link">
                <i class="menu-icon tf-icons ti ti-users"></i>
                <div data-i18n="Users">Users</div>
            </a>
        </li>
        @endcan

        @can('roles.index')
        <li class="menu-item {{ (request()->is('roles')) ? 'active' : '' }}">
            <a href="{{ route('roles.index') }}" class="menu-link">
                <i class="menu-icon tf-icons ti ti-settings"></i>
                <div data-i18n="Roles">Roles</div>
            </a>
        </li>
        @endcan


        @can('permissions.index')
        <li class="menu-item {{ (request()->is('permissions')) ? 'active' : '' }}">
            <a href="{{ route('permissions.index') }}" class="menu-link">
                <i class="menu-icon tf-icons ti ti-checkbox"></i>
                <div data-i18n="Permissions">Permissions</div>
            </a>
        </li>
        @endcan

        @endcanany
    </ul>
</aside>