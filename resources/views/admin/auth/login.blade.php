<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin Login - Dubai Ballooning</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">

    <!-- Toastr CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    
    <!-- Core css -->
    <link href="{{ asset('assets/css/app.min.css') }}" rel="stylesheet">

</head>

<body>
    <div class="app">
        <div class="container-fluid p-0 h-100">
            <div class="row no-gutters h-100 full-height">
                
                {{-- 1. LEFT PANEL: Updated background image and content --}}
                <div class="col-lg-4 d-none d-lg-flex bg position-relative" style="overflow: hidden;">
                    <!-- Blurred background -->
                    <div style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background-image:url('{{ asset('img/home-2.jpg') }}'); background-size: cover; filter: blur(4px); -webkit-filter: blur(4px); transform: scale(1.1);"></div>
                    <!-- Content with clear text -->
                    <div class="d-flex h-100 p-h-40 p-v-15 flex-column justify-content-between position-relative">
                        <!-- Logo -->
                        <a class="navbar-brand d-flex align-items-center" href="{{ url('/') }}">
                            <div class="logo-container">
                                <img src="{{ asset('dubai_logo.png') }}" alt="Dubai Ballooning Logo" class="logo-image" style="max-width: 150px;">
                            </div>
                        </a>
                        <div>
                            <h1 class="text-white m-b-20 font-weight-normal">Admin Dashboard</h1>
                            <p class="text-white font-size-16 lh-2 w-80 opacity-08">Manage bookings, packages, and settings from this centralized control panel.</p>
                        </div>
                        <div class="d-flex justify-content-between">
                            <span class="text-white">© {{ date('Y') }} Dubai Ballooning</span>
                        </div>
                    </div>
                </div>

                {{-- 2. RIGHT PANEL: Login Form --}}
                <div class="col-lg-8 bg-white">
                    <div class="container h-100">
                        <div class="row no-gutters h-100 align-items-center">
                            <div class="col-md-8 col-lg-7 col-xl-6 mx-auto">
                                <h2>Sign In</h2>
                                <p class="m-b-30">Enter your credentials to access the admin panel.</p>
                                
                                <form method="POST" action="{{ route('admin.login') }}">
                                    @csrf
                                    <div class="form-group">
                                        <label class="font-weight-semibold" for="email">Email:</label>
                                        <div class="input-affix">
                                            <i class="prefix-icon anticon anticon-user"></i>
                                            <input type="email" class="form-control @error('email') is-invalid @enderror" 
                                                name="email" id="email" value="{{ old('email') }}" placeholder="Email" required>
                                        </div>
                                        @error('email')
                                            <span class="invalid-feedback d-block" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label class="font-weight-semibold" for="password">Password:</label>

                                        {{-- 3. IMPROVED PASSWORD FIELD with Eye Icon --}}
                                        <div class="input-affix m-b-10">
                                            <i class="prefix-icon anticon anticon-lock"></i>
                                            <input type="password" class="form-control @error('password') is-invalid @enderror" 
                                                name="password" id="password" placeholder="Password" required>
                                            
                                            {{-- The Toggle Button --}}
                                            <a href="javascript:void(0);" class="suffix-icon" id="togglePassword" style="cursor: pointer;">
                                                <i class="anticon anticon-eye-invisible"></i>
                                            </a>
                                        </div>
                                        @error('password')
                                            <span class="invalid-feedback d-block" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <button type="submit" class="btn btn-primary">Sign In</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>  
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Core Vendors JS -->
    <script src="{{ asset('assets/js/vendors.min.js') }}"></script>
    
    <!-- Core JS -->
    <script src="{{ asset('assets/js/app.min.js') }}"></script>
    
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    
    <!-- Toastr JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    
    {{-- 4. CLEANED UP SCRIPT SECTION --}}
    <script>
        $(document).ready(function() {
            // --- Password Toggle Functionality ---
            $('#togglePassword').on('click', function() {
                const passwordInput = $('#password');
                const icon = $(this).find('i');

                // Toggle input type
                if (passwordInput.attr('type') === 'password') {
                    passwordInput.attr('type', 'text');
                    icon.removeClass('anticon-eye-invisible').addClass('anticon-eye');
                } else {
                    passwordInput.attr('type', 'password');
                    icon.removeClass('anticon-eye').addClass('anticon-eye-invisible');
                }
            });

            // --- Toastr Notification Logic ---
            toastr.options = {
                "closeButton": true,
                "progressBar": true,
                "positionClass": "toast-top-right",
                "timeOut": "8000",
            };
            
            @if(session('success'))
                toastr.success("{{ session('success') }}", "Success!");
            @endif
            
            @if(session('error'))
                toastr.error("{{ session('error') }}", "Error!");
            @endif

            @if($errors->any())
                @foreach($errors->all() as $error)
                    toastr.error("{{ $error }}", "Validation Error!");
                @endforeach
            @endif
        });
    </script>

</body>
</html>