<!DOCTYPE html>
<html lang="en" class="scroll-smooth group" data-sidebar="brand" dir="ltr">

<head>
    <meta charset="utf-8" />
    <title>Dayanti Craft - Admin & Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta content="Tailwind Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="" name="Mannatthemes" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="design-system/assets/images/favicon.ico" />

    <!-- Css -->
    <!-- Main Css -->
    <link rel="stylesheet" href="{{ asset('design-system/assets/libs/icofont/icofont.min.css') }}">
    <link href="{{ asset('design-system/assets/libs/flatpickr/flatpickr.min.css') }}" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('design-system/assets/css/tailwind.min.css') }}">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.7/css/dataTables.dataTables.css">

    <script id="frostui" src="{{ asset('design-system/assets/libs/@frostui/tailwindcss/frostui.js') }}"></script>
    @vite(['resources/js/app.js'])

</head>

<body data-layout-mode="light" data-sidebar-size="default" data-theme-layout="vertical" class="bg-[#EEF0FC]">

    <!-- leftbar-tab-menu -->

    <div
        class="min-h-full z-[99]  fixed inset-y-0 print:hidden bg-gradient-to-t from-[#06090f] from-10% via-[#06090f] via-40% to-[#5c3dc3] to-100% main-sidebar duration-300 group-data-[sidebar=dark]:bg-[#06090f] group-data-[sidebar=brand]:bg-brand group-[.dark]:group-data-[sidebar=brand]:bg-[#06090f]">
        <div
            class=" text-center border-b bg-[#06090f] border-r h-[64px] flex justify-center items-center brand-logo group-data-[sidebar=dark]:bg-[#06090f] group-data-[sidebar=dark]:border-slate-700/40 group-data-[sidebar=brand]:bg-brand group-[.dark]:group-data-[sidebar=brand]:bg-[#06090f] group-data-[sidebar=brand]:border-slate-700/40">
            <a href="index.html" class="logo">
                <span>
                    <img src="{{ asset('design-system/assets/images/logo-sm.png') }}" alt="logo-small"
                        class="logo-sm align-middle inline-block mt-6" width="100" height="100">
                </span>
            </a>
        </div>
        <div class="border-r pb-14 h-[100vh] group-data-[sidebar=dark]:border-slate-700/40 group-data-[sidebar=brand]:border-slate-700/40"
            data-simplebar>
            <div class="p-4 block">
                @include('layouts.admin.sidenav')
            </div>
        </div>
    </div>

    @include('layouts.admin.navbar')

    <div class="ltr:flex flex-1 rtl:flex-row-reverse">
        <div
            class="page-wrapper relative ltr:ml-auto rtl:mr-auto rtl:ml-0 w-[calc(100%-260px)] px-4 pt-[64px] duration-300">
            <div class="xl:w-full">
                <div class="flex flex-wrap">
                    <div class="flex items-center py-4 w-full">
                        <div class="w-full">
                            <div class="">
                                <div class="flex flex-wrap justify-between">
                                    <div class="items-center ">
                                        <h1 class="font-medium text-3xl block">@yield('title_page')
                                        </h1>
                                        <ol class="list-reset flex text-sm">
                                            @yield('breadcrumb')
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--end container-->

            <div class="xl:w-full  min-h-[calc(100vh-138px)] relative pb-14">
                @yield('content')
            </div><!--end container-->
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
        crossorigin="anonymous"></script>
    <!-- JAVASCRIPTS -->
    <!-- <div class="menu-overlay"></div> -->
    <script src="{{ asset('design-system/assets/libs/lucide/umd/lucide.min.js') }}"></script>
    <script src="{{ asset('design-system/assets/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('design-system/assets/libs/flatpickr/flatpickr.min.js') }}"></script>

    <script src="{{ asset('design-system/assets/libs/apexcharts/apexcharts.min.js') }}"></script>

    <script src="{{ asset('design-system/assets/js/app.js') }}"></script>
    <script src="https://cdn.datatables.net/2.0.7/js/dataTables.js"></script>

    <script>
        function reinitializeScript() {
            function appendScript() {
                let head = document.getElementsByTagName("head")[0]
                let script = document.createElement("script")

                script.id = "frostui"
                script.src = `{{ asset('design-system/assets/libs/@frostui/tailwindcss/frostui.js') }}`
                head.appendChild(script)
            }

            let id = document.getElementById("frostui")

            if (id) {
                id.remove()
                appendScript()
            } else {
                appendScript()
            }

            reinitializeSidenav()
        }

        function reinitializeSidenav() {
            $('#sidenav-list').html($('#sidenav-list').html())
        }

        function number_format(number) {
            return Intl.NumberFormat("id-ID", {
                style: "currency",
                currency: "IDR"
            }).format(number)
        }
    </script>
    @yield('script')
    <!-- JAVASCRIPTS -->
</body>

</html>
