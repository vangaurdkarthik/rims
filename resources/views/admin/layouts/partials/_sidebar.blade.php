@section('sidebar')
    <li class="nav-item nav-dropdown">
        <a class="nav-link nav-dropdown-toggle" href="#">
            <i class="icon-link"></i> Categories
        </a>
        <ul class="nav-dropdown-items">
            <li class="nav-item">
                <a class="nav-link{{ return_if(on_page('admin.categories.create'), ' active') }}"
                   href="{{ route('admin.categories.create') }}">
                    <i class="icon-plus"></i> Add Category
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link{{ return_if(on_page('admin.categories.index'), ' active') }}"
                   href="{{ route('admin.categories.index') }}">
                    <i class="icon-link"></i> Categories
                </a>
            </li>
        </ul>
    </li>
    <li class="nav-item nav-dropdown">
        <a class="nav-link nav-dropdown-toggle" href="#">
            <i class="icon-map"></i> Areas
        </a>
        <ul class="nav-dropdown-items">
            <li class="nav-item">
                <a class="nav-link{{ return_if(on_page('admin.areas.create'), ' active') }}"
                   href="{{ route('admin.areas.create') }}">
                    <i class="icon-plus"></i> Add Area
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link{{ return_if(on_page('admin.areas.index'), ' active') }}"
                   href="{{ route('admin.areas.index') }}">
                    <i class="icon-map"></i> Areas
                </a>
            </li>
        </ul>
    </li>
    <li class="nav-item nav-dropdown">
        <a class="nav-link nav-dropdown-toggle" href="#">
            <i class="fa fa-money"></i> Currencies
        </a>
        <ul class="nav-dropdown-items">
            <li class="nav-item">
                <a class="nav-link{{ return_if(on_page('admin.currencies.create'), ' active') }}"
                   href="{{ route('admin.currencies.create') }}">
                    <i class="icon-plus"></i> Add Currency
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link{{ return_if(on_page('admin.currencies.index'), ' active') }}"
                   href="{{ route('admin.currencies.index') }}">
                    <i class="fa fa-money"></i> Currencies
                </a>
            </li>
        </ul>
    </li>
    <li class="nav-title">USERS & ACCESS CONTROL</li>
    <!-- Users -->
    <li class="nav-item nav-dropdown">
        <a class="nav-link nav-dropdown-toggle" href="#">
            <i class="icon-people"></i> Users
        </a>
        <ul class="nav-dropdown-items">
            <li class="nav-item">
                <a class="nav-link{{ return_if(on_page('admin.users.create'), ' active') }}"
                   href="{{ route('admin.users.create') }}">
                    <i class="icon-plus"></i> Add User
                </a>
            </li>
            <!-- Impersonate User -->
            @role('admin-root')
                <li class="nav-item">
                    <a class="nav-link{{ return_if(on_page('admin.users.impersonate.index'), ' active') }}"
                       href="{{ route('admin.users.impersonate.index') }}">
                        <i class="icon-user"></i> Impersonate User
                    </a>
                </li>
            @endrole
            <li class="nav-item">
                <a class="nav-link{{ return_if(on_page('admin.users.index'), ' active') }}"
                   href="{{ route('admin.users.index') }}">
                    <i class="icon-people"></i> Users
                </a>
            </li>
        </ul>
    </li>

    <!-- Permissions -->
    <li class="nav-item nav-dropdown">
        <a class="nav-link nav-dropdown-toggle" href="#">
            <i class="icon-flag"></i> Permissions
        </a>
        <ul class="nav-dropdown-items">
            <li class="nav-item">
                <a class="nav-link{{ return_if(on_page('admin.permissions.create'), ' active') }}"
                   href="{{ route('admin.permissions.create') }}">
                    <i class="icon-plus"></i> Add Permission
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link{{ return_if(on_page('admin.permissions.index'), ' active') }}"
                   href="{{ route('admin.permissions.index') }}">
                    <i class="icon-flag"></i> Permissions
                </a>
            </li>
        </ul>
    </li>

    <!-- Roles -->
    <li class="nav-item nav-dropdown">
        <a class="nav-link nav-dropdown-toggle" href="#">
            <i class="icon-lock"></i> Roles
        </a>
        <ul class="nav-dropdown-items">
            <li class="nav-item">
                <a class="nav-link{{ return_if(on_page('admin.roles.create'), ' active') }}"
                   href="{{ route('admin.roles.create') }}">
                    <i class="icon-plus"></i> Add Role
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link{{ return_if(on_page('admin.roles.index'), ' active') }}"
                   href="{{ route('admin.roles.index') }}">
                    <i class="icon-lock"></i> Roles
                </a>
            </li>
        </ul>
    </li>
@endsection