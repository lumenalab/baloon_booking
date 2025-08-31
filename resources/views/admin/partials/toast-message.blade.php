{{-- @php
    // Define an array of notification types
    $notifications = [
        'success' => Session::get('success'),
        'error' => Session::get('error'),
        'info' => Session::get('info'),
        'warning' => Session::get('warning'),
    ];
@endphp

@if (Arr::first($notifications) || $errors->any())
<script>
    document.addEventListener("DOMContentLoaded", function() {
        // --- Central Toastr Options ---
        toastr.options = {
            "closeButton": true,
            "debug": false,
            "newestOnTop": true,
            "progressBar": true,
            "positionClass": "toast-top-right",
            "preventDuplicates": false,
            "onclick": null,
            "showDuration": "300",
            "hideDuration": "1000",
            "timeOut": "8000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        };

        // --- Session-based Notifications ---
        @foreach ($notifications as $type => $message)
            @if ($message)
                toastr.{{ $type }}("{{ $message }}", "{{ ucfirst($type) }}!");
            @endif
        @endforeach

        // --- Validation Error Notifications ---
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                toastr.error("{{ $error }}", "Validation Error!");
            @endforeach
        @endif
    });
</script>
@endif --}}
