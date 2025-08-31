<div class="side-nav">
    <div class="side-nav-inner">
        <ul class="side-nav-menu scrollable">

            <li class="nav-item {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
                <a href="{{ route('admin.dashboard') }}">
                    <span class="icon-holder">
                        <i class="anticon anticon-dashboard"></i>
                    </span>
                    <span class="title">Dashboard</span>
                </a>
            </li>

            <li class="nav-item {{ request()->routeIs('admin.users.*') ? 'active' : '' }}">
                <a href="{{ route('admin.users.index') }}">
                    <span class="icon-holder">
                        <i class="anticon anticon-user"></i>
                    </span>
                    <span class="title">Users</span>
                </a>
            </li>

            <li class="nav-item {{ request()->routeIs('admin.packages.*') ? 'active' : '' }}">
                <a href="{{ route('admin.packages.index') }}">
                    <span class="icon-holder">
                        <i class="anticon anticon-gift"></i>
                    </span>
                    <span class="title">Packages</span>
                </a>
            </li>

            {{-- NEW: Blog Management Dropdown --}}
            <li class="nav-item dropdown {{ request()->routeIs('admin.posts.*') || request()->routeIs('admin.categories.*') || request()->routeIs('admin.tags.*') ? 'open' : '' }}">
                <a class="dropdown-toggle" href="javascript:void(0);">
                    <span class="icon-holder">
                        <i class="anticon anticon-read"></i>
                    </span>
                    <span class="title">Blog Management</span>
                    <span class="arrow">
                        <i class="arrow-icon"></i>
                    </span>
                </a>
                <ul class="dropdown-menu">
                    <li class="{{ request()->routeIs('admin.posts.*') ? 'active' : '' }}">
<a href="{{ route('admin.posts.index') }}">Posts</a>
                    </li>
                    <li class="{{ request()->routeIs('admin.categories.*') ? 'active' : '' }}">
<a href="{{ route('admin.categories.index') }}">Categories</a>
                    </li>
                    <li class="{{ request()->routeIs('admin.tags.*') ? 'active' : '' }}">
<a href="{{ route('admin.tags.index') }}">Tags</a>
                    </li>
                </ul>
            </li>

            <li class="nav-item {{ request()->routeIs('admin.settings') ? 'active' : '' }}">
                <a href="{{ route('admin.settings') }}">
                    <span class="icon-holder">
                        <i class="anticon anticon-setting"></i>
                    </span>
                    <span class="title">Settings</span>
                </a>
            </li>

            {{-- Logout Item --}}
            <li class="nav-item">
                <a href="{{ route('admin.logout') }}"
                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <span class="icon-holder">
                        <i class="anticon anticon-logout"></i>
                    </span>
                    <span class="title">Logout</span>
                </a>

                <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </li>
        </ul>
    </div>
</div>