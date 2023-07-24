<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="index.html" class="app-brand-link">
            <span class="app-brand-logo demo">
                <svg width="32" height="22" viewBox="0 0 32 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M0.00172773 0V6.85398C0.00172773 6.85398 -0.133178 9.01207 1.98092 10.8388L13.6912 21.9964L19.7809 21.9181L18.8042 9.88248L16.4951 7.17289L9.23799 0H0.00172773Z"
                        fill="#7367F0" />
                    <path opacity="0.06" fill-rule="evenodd" clip-rule="evenodd"
                        d="M7.69824 16.4364L12.5199 3.23696L16.5541 7.25596L7.69824 16.4364Z" fill="#161616" />
                    <path opacity="0.06" fill-rule="evenodd" clip-rule="evenodd"
                        d="M8.07751 15.9175L13.9419 4.63989L16.5849 7.28475L8.07751 15.9175Z" fill="#161616" />
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M7.77295 16.3566L23.6563 0H32V6.88383C32 6.88383 31.8262 9.17836 30.6591 10.4057L19.7824 22H13.6938L7.77295 16.3566Z"
                        fill="#7367F0" />
                </svg>
            </span>
            <span class="app-brand-text demo menu-text fw-bold">Vuexy</span>
        </a>

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
                <i class="menu-icon tf-icons ti ti-smart-home"></i>
                <div data-i18n="Index">Index</div>
            </a>
        </li>
        @endcan

        @can('dashboard.checked.index')
        <li class="menu-item {{ (request()->is('dashboard-checked')) ? 'active' : '' }}">
            <a href="{{ route('dashboard.checked') }}" class="menu-link">
                <i class="menu-icon tf-icons ti ti-smart-home"></i>
                <div data-i18n="Checked"> Checked</div>
            </a>
        </li>
        @endcan

        @can('dashboard.approve.index')
        <li class="menu-item {{ (request()->is('dashboard-approve')) ? 'active' : '' }}">
            <a href="{{ route('dashboard.approve') }}" class="menu-link">
                <i class="menu-icon tf-icons ti ti-smart-home"></i>
                <div data-i18n="Approve">Approve</div>
            </a>
        </li>
        @endcan

        @can('dashboard.general.index')
        <li class="menu-item {{ (request()->is('dashboard-general')) ? 'active' : '' }}">
            <a href="{{ route('dashboard.general') }}" class="menu-link">
                <i class="menu-icon tf-icons ti ti-smart-home"></i>
                <div data-i18n="Admin">Admin</div>
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
                <i class="menu-icon tf-icons ti ti-mail"></i>
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
                <i class="menu-icon tf-icons ti ti-folder"></i>
                <div data-i18n="Form Checked">Form Checked </div>
            </a>
        </li>
        @endcan

        @can('form-approve.index')
        <li class="menu-item {{ (request()->is('form-approve')) ? 'active' : '' }}">
            <a href="{{ route('form-approve.index') }}" class="menu-link">
                <i class="menu-icon tf-icons ti ti-folder"></i>
                <div data-i18n="Form Approve">Form Approve</div>
            </a>
        </li>
        @endcan

        @can('form-list.index')
        <li class="menu-item {{ (request()->is('form-list')) ? 'active' : '' }}">
            <a href="{{ route('form-list.index') }}" class="menu-link">
                <i class="menu-icon tf-icons ti ti-folder"></i>
                <div data-i18n="Form List">Form List</div>
            </a>
        </li>
        @endcan


        @canany(['bank.index','norek.index'])
        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Settings</span>
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
                <i class="menu-icon tf-icons ti ti-book"></i>
                <div data-i18n="Norek">Norek</div>
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