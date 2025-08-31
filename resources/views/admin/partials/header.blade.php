<div class="header">
    <div class="logo logo-dark">
        <a href="{{ route('admin.dashboard') }}">
            {{-- USE YOUR LOGO HERE --}}
            <img src="{{ asset('dubai_logo.png') }}" alt="Logo" style="max-height: 45px; padding: 5px 0;">
            {{-- For the folded logo, you can use the same one or a smaller square version --}}
            <img class="logo-fold" src="{{ asset('dubai_logo.png') }}" alt="Logo" style="max-height: 40px; padding: 5px 0;">
        </a>
    </div>
    <div class="logo logo-white">
        <a href="{{ route('admin.dashboard') }}">
             {{-- USE YOUR LOGO HERE (for dark theme) --}}
            <img src="{{ asset('dubai_logo.png') }}" alt="Logo" style="max-height: 45px; padding: 5px 0;">
            <img class="logo-fold" src="{{ asset('dubai_logo.png') }}" alt="Logo" style="max-height: 40px; padding: 5px 0;">
        </a>
    </div>
    <div class="nav-wrap">
        <ul class="nav-left">
            <li class="desktop-toggle">
                <a href="javascript:void(0);">
                    <i class="anticon"></i>
                </a>
            </li>
            <li class="mobile-toggle">
                <a href="javascript:void(0);">
                    <i class="anticon"></i>
                </a>
            </li>
        </ul>
        <ul class="nav-right">
            {{-- We can re-enable notifications later if you need them --}}
            
            <li class="dropdown dropdown-animated scale-left">
                <div class="pointer" data-toggle="dropdown">
                    <div class="avatar avatar-image  m-h-10 m-r-15">
                        @if (Auth::check())
                            {{-- This generates the user's initials, e.g., "JD" for "John Doe" --}}
                            <span class="avatar-text"  style="color: black;">{{ strtoupper(substr(Auth::user()->first_name, 0, 1) . substr(Auth::user()->last_name, 0, 1)) }}</span>
                        @endif
                    </div>
                </div>
                <div class="p-b-15 p-t-20 dropdown-menu pop-profile">
                    {{-- IMPROVEMENT: Show User's Name and Email --}}
                    <div class="p-h-20 p-b-15 m-b-10 border-bottom">
                        <div class="d-flex m-r-50">
                            <div class="avatar avatar-lg avatar-image">
                                @if (Auth::check())
                                    <span class="avatar-text"  style="color: black;">{{ strtoupper(substr(Auth::user()->first_name, 0, 1) . substr(Auth::user()->last_name, 0, 1)) }}</span>
                                @endif
                            </div>
                            <div class="m-l-10">
                                <p class="m-b-0 text-dark font-weight-semibold">{{ Auth::user()->first_name . ' ' . Auth::user()->last_name }}</p>
                                <p class="m-b-0 opacity-07">{{ Auth::user()->email }}</p>
                            </div>
                        </div>
                    </div>
                  
                    <a href="#" class="dropdown-item d-block p-h-15 p-v-10"> {{-- Note: Update this route later --}}
                        <div class="d-flex align-items-center justify-content-between">
                            <div>
                                <i class="anticon opacity-04 font-size-16 anticon-user"></i>
                                <span class="m-l-10">Edit Profile</span>
                            </div>
                            <i class="anticon font-size-10 anticon-right"></i>
                        </div>
                    </a>
                   
                    {{-- IMPROVEMENT: Cleaner Logout Link --}}
                    <a href="{{ route('admin.logout') }}" class="dropdown-item d-block p-h-15 p-v-10"
                       onclick="event.preventDefault(); document.getElementById('admin-logout-form').submit();">
                        <div class="d-flex align-items-center justify-content-between">
                            <div>
                                <i class="anticon opacity-04 font-size-16 anticon-logout"></i>
                                <span class="m-l-10">Logout</span>
                            </div>
                            <i class="anticon font-size-10 anticon-right"></i>
                        </div>
                    </a>
                    <form id="admin-logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>

                </div>
            </li>
            {{-- This can be re-enabled later if you have a quick-view panel --}}
            {{-- <li>
                <a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">
                    <i class="anticon anticon-appstore"></i>
                </a>
            </li> --}}
        </ul>
    </div>
</div>