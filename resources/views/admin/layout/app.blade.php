<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.partials.head')
    
    <!-- Core Styles -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    
    <!-- Additional Styles -->
    @stack('styles')

    <!-- Core Scripts -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    
</head>

<body>
    <div class="app">
        <div class="layout">
                @include('admin.partials.toast-message')

            <!-- Header START -->
            @include('admin.partials.header')
            <!-- Header END -->

            <!-- Side Nav START -->
          @include('admin.partials.sidebar')
            <!-- Side Nav END -->

            {{-- <!-- Page Container START -->
            <div class="page-container"> --}}
                

                <!-- Content Wrapper START -->
              @yield('content')

                <!-- Content Wrapper END -->

                <!-- Footer START -->
               @include('admin.partials.footer')
                <!-- Footer END -->

            {{-- </div> --}}
            <!-- Page Container END -->

        </div>
    </div>

    <!-- Page Level Scripts -->
    @stack('scripts')

</body>
</html>