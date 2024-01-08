<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
</head>

<body class="font-sans text-gray-900 antialiased">
    <div class="min-h-screen flex flex-col w-full pt-6 sm:pt-0 bg-gray-100">
        <div class="w-full mx-auto mt-6 px-6 py-4 overflow-hidden sm:rounded-lg">
            {{ $slot }}
        </div>
    </div>
</body>

<script>
    $(document).ready(function() {
        $("#dropdownNavbarLink").click(function() {
            $("#dropdownNavbar").toggle();
            $("#dropdownIcon").toggleClass('transform rotate-180');
        });

        $(document).click(function(event) {
            if (!$(event.target).closest("#dropdownNavbarLink, #dropdownNavbar").length) {
                $("#dropdownNavbar").hide();
                $("#dropdownIcon").removeClass('transform rotate-180');
            }
        });
    });
</script>

</html>
