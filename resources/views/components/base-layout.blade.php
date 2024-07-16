<div>
    <!DOCTYPE html>
    <html lang="en" class="scroll-smooth group" data-sidebar="brand" dir="ltr">

    <head>
        <title>{{ $title }}</title>
        <x-partials.head></x-partials.head>
    </head>

    <body data-layout-mode="light" data-sidebar-size="default" data-theme-layout="vertical"
        class="bg-[#EEF0FC]">

        <x-left-bar></x-left-bar>
        <x-top-bar></x-top-bar>
        <x-content titlePage="Ini Judul Halaman"></x-content>

        <!-- JAVASCRIPTS -->
        <!-- <div class="menu-overlay"></div> -->
        <script src="{{ asset('design-system/assets/libs/lucide/umd/lucide.min.js') }}"></script>
        <script src="{{ asset('design-system/assets/libs/simplebar/simplebar.min.js') }}"></script>
        <script src="{{ asset('design-system/assets/libs/flatpickr/flatpickr.min.js') }}"></script>
        <script src="{{ asset('design-system/assets/libs/@frostui/tailwindcss/frostui.js') }}"></script>
        <script src="{{ asset('design-system/assets/libs/apexcharts/apexcharts.min.js') }}"></script>
        <script src="{{ asset('design-system/assets/js/pages/analytics-index.init.js') }}"></script>
        <script src="{{ asset('design-system/assets/js/app.js') }}"></script>
        <!-- JAVASCRIPTS -->
    </body>

    </html>

</div>