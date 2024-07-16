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
    <link rel="shortcut icon" href="{{ asset('design-system/assets/images/favicon.ico') }}" />
    <!-- Css -->
    <link rel="stylesheet" href="{{ asset('design-system/assets/libs/nice-select2/css/nice-select2.css') }}">
    <link rel="stylesheet" href="{{ asset('design-system/assets/libs/swiper/swiper-bundle.min.css') }}">
    <!-- Main Css -->
    <link rel="stylesheet" href="{{ asset('design-system/assets/libs/icofont/icofont.min.css') }}">
    <link href="{{ asset('design-system/assets/libs/flatpickr/flatpickr.min.css') }}" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('design-system/assets/css/tailwind.min.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/notyf@3/notyf.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.7/css/dataTables.dataTables.css">
    @vite(['resources/js/app.js'])
</head>

<body data-layout-mode="light" data-sidebar-size="default" data-theme-layout="vertical" class="bg-[#EEF0FC]">
    <!-- leftbar-tab-menu -->
    <header class="relative z-40 w-full bg-white print:hidden">
        <div class="hidden border-b sm:block py-1 bg-black">
            <div class="container mx-auto">
                <div class="-mx-4 flex flex-wrap">
                    <div class="w-full px-4 md:w-1/2 lg:w-1/2 self-center">
                        <ul class="-mx-3 flex items-center">
                            <li class="mx-1">
                                <a href="javascript:void(0)"
                                    class="inline-block  px-2 text-sm font-medium text-gray-400 border border-slate-500/40 rounded-full text-body-color hover:text-white">
                                    About Us
                                </a>
                            </li>
                            <li class="mx-1">
                                <a href="customers-wishlist.html"
                                    class="inline-block  px-2 text-sm font-medium text-gray-400 border border-slate-500/40 rounded-full text-body-color hover:text-white">
                                    Wishlist <span
                                        class="bg-green-600/5 text-green-600 text-[11px] font-medium px-1 py-0.5 rounded-full h-5">3</span>
                                </a>
                            </li>
                            <li class="mx-1">
                                <a href="customers-order-track.html"
                                    class="inline-block  px-2 text-sm font-medium text-gray-400 border border-slate-500/40 rounded-full text-body-color hover:text-white">
                                    Order Tracking
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="w-full px-4 md:w-1/2 lg:w-1/2">
                        <div class="-mx-3 hidden items-center justify-end md:flex">
                            <div class="me-2">
                                <div class="hidden items-center pe-1 md:flex">
                                    <div class="me-3">
                                        <i data-lucide="phone" class="w-4 h-4 stroke-slate-300"></i>
                                    </div>
                                    <div>
                                        <p class="text-sm font-medium text-gray-400">
                                            Need Help?
                                            <span class="text-gray-300">+001 123 456 789</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="me-2">
                                <div class="relative z-20 border border-slate-500/40 rounded-full px-2">
                                    <select
                                        class="relative z-20 w-full appearance-none text-slate-200  bg-transparent ps-2 pe-4 text-sm font-medium  outline-none transition">
                                        <option value="" class="text-slate-700">English</option>
                                        <option value="" class="text-slate-700">Urdu</option>
                                        <option value="" class="text-slate-700">Hindi</option>
                                    </select>
                                    <span
                                        class="absolute right-2 top-1/2 z-10 mt-[-2px] h-2 w-2 -translate-y-1/2 rotate-45 border-r border-b border-slate-400"></span>
                                </div>
                            </div>
                            <div class="me-2">
                                <div class="relative z-20 border border-slate-500/40 rounded-full px-2">
                                    <select
                                        class="relative z-20 w-full appearance-none text-slate-200  bg-transparent ps-2 pe-4 text-sm font-medium  outline-none transition">
                                        <option value="" class="text-slate-700">USD</option>
                                        <option value="" class="text-slate-700">INR</option>
                                        <option value="" class="text-slate-700">ERU</option>
                                    </select>
                                    <span
                                        class="absolute right-2 top-1/2 z-10 mt-[-2px] h-2 w-2 -translate-y-1/2 rotate-45 border-r border-b border-slate-400"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="border-b lg:py-3 bg-[#EEF0FC]">
            <div class="container mx-auto">
                <div class="relative -mx-4 flex items-center justify-center sm:justify-between">
                    <div class="w-64 max-w-full px-4 sm:w-60 lg:w-48">
                        <a href="index.html" class="block w-full py-5 lg:py-3">
                            <img src="{{ public('design-system/assets/images/Log.jpg') }}" alt="logo"
                                class="w-6 md:w-8 inline-block">
                            <img src="{{ asset('design-system/assets/images/Logo-dark.png') }}" alt="logo"
                                class="w-20 md:w-24 inline-block">
                        </a>
                    </div>
                    <div class="w-full items-center justify-end px-4 sm:flex lg:justify-between">
                        <div class="hidden w-full lg:flex">
                            <form class="relative flex w-full items-center rounded-md border bg-[#fff]" method="POST"
                                action="{{ route('product.search') }}
                            >
                            @php
                                $search_value = '';
                                if (isset($search_req) || $search_req != null) {
                                    $search_value = $search_req;
                                }
                            @endphp
                            <input type="text"
                                name="search" value="{{ $search_value }}" placeholder="I'm shopping for..."
                                class="w-full bg-transparent py-3 ps-6 pe-[200px] text-base font-medium text-body-color outline-none">
                                <button type="submit"
                                    class="absolute top-0 right-0 flex h-full w-[52px] items-center justify-center rounded-tr-md rounded-br-md border-s">
                                    <i data-lucide="search" class="w-6 h-6"></i>
                                </button>
                            </form>
                        </div>
                        <div class="flex w-full items-center justify-end space-x-2 md:space-x-4">
                            <div class=" dropdown relative block lg:hidden">
                                <button type="button"
                                    class="dropdown-toggle flex rounded-full md:me-0 h-10 w-10 items-center justify-center  border-[.5px] bg-[#f4f7ff] text-dark"
                                    aria-expanded="false" data-fc-autoclose="both" data-fc-type="dropdown">
                                    <span data-lucide="search" class="w-5 h-5"></span>
                                </button>
                                <div class="-left-40 md:left-auto right-0 z-50 my-1 hidden min-w-[300px] sm:min-w-[400px] md:min-w-[400px] lg:min-w-[500px] max-w-full
                        list-none divide-y  divide-gray-100 rounded-md border-slate-700
                        md:border-white text-base shadow bg-white
                       "
                                    onclick="event.stopPropagation()">
                                    <form class="relative flex w-full items-center rounded-md border bg-[#f4f7ff] ">
                                        <div class="relative z-20 border-r border-[#d9d9d9] px-2 hidden lg:block">
                                            <select id="default"
                                                class="nice-select border-0 relative z-20 appearance-none bg-transparent ps-2 pe-6 font-medium text-black outline-none">
                                                <option>All</option>
                                                <option>Best matches</option>
                                                <option>Newest</option>
                                            </select>
                                        </div>
                                        <input type="text" placeholder="I'm shopping for..."
                                            class="w-full bg-transparent py-3 ps-6 pe-[58px] text-base font-medium text-body-color outline-none">
                                        <a href="javascript:void(0)"
                                            class="absolute top-0 right-0 flex h-full w-[52px] items-center justify-center rounded-tr-md rounded-br-md border-s ">
                                            <i data-lucide="search" class="w-6 h-6"></i>
                                        </a>
                                    </form>
                                </div>
                            </div>
                            @if (Auth::user() != null)
                                <div class="dropdown relative">
                                    <x-customers.cart></x-customers.cart>
                                </div>
                                <div class="me-2  dropdown relative">
                                    <button type="button"
                                        class="dropdown-toggle flex items-center rounded-full text-sm focus:bg-none focus:ring-0 md:me-0"
                                        id="user-profile" aria-expanded="false" data-fc-autoclose="both"
                                        data-fc-type="dropdown">
                                        <img class="h-8 w-8 rounded-full"
                                            src="{{ asset('design-system/assets/images/users/avatar-10.png') }}"
                                            alt="user photo" />
                                        <span class="ltr:ms-2 rtl:ms-0 rtl:me-2 hidden text-left xl:block">
                                            <span
                                                class="block font-medium text-slate-600">{{ Auth::user()->name }}</span>
                                        </span>
                                    </button>
                                    <div class="left-auto right-0 z-50 my-1 hidden list-none divide-y divide-gray-100 rounded border-slate-700 md:border-white text-base shadow bg-white w-40"
                                        id="navUserdata">
                                        <ul class="py-1" aria-labelledby="navUserdata">
                                            <li>
                                                <a href="{{ route('dashboard') }}"
                                                    class="flex items-center py-2 px-3 text-sm text-gray-700 hover:bg-gray-50">
                                                    <span data-lucide="user"
                                                        class="w-4 h-4 inline-block text-slate-800 me-2"></span>
                                                    Profile</a>
                                            </li>
                                            <li>
                                                <form action="{{ route('logout') }}" method="POST">
                                                    @csrf
                                                    <button type="submit"
                                                        class="flex items-center py-2 px-3 text-sm text-red-400 hover:bg-gray-50 hover:text-red-500 w-full">
                                                        <span data-lucide="power"
                                                            class="w-4 h-4 inline-block text-red-400 me-2"></span>
                                                        Sign out</button>
                                                </form>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            @else
                                <a href="{{ route('login') }}"
                                    class="flex items-center py-2 px-3 text-sm hover:bg-gray-50">
                                    <span data-lucide="user" class="w-4 h-4 inline-block me-2"></span>
                                    Login</a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div class="container mx-auto">
                <div class="relative -mx-4 flex items-center justify-between">
                    <div class="flex w-full items-center justify-between px-4">

                        <div class="w-full">
                            <button data-collapse-toggle="mobile-menu-2" type="button" id="toggle-menu"
                                class=" block ms-auto h-10 w-10 leading-10 border rounded-full  ring-brand focus:ring-1 lg:hidden"
                                aria-controls="mobile-menu-2" aria-expanded="false">
                                <span class="sr-only">Open main menu</span>
                                <i data-lucide="menu" class="w-5 h-5 mx-auto stroke-slate-600 "></i>
                                <i data-lucide="x" class="w-5 h-5 hidden mx-auto stroke-slate-600 "></i>
                            </button>
                            <nav id="mobile-menu-2"
                                class="order-2 hidden w-full items-center justify-between md:order-1 md:ms-5 lg:flex md:w-auto">
                                <ul class="blcok items-center lg:flex px-4 md:px-0">
                                    <li>

                                        <a href="{{ route('customer.home') }}"
                                            class="flex justify-between py-2 text-base font-medium {{ Route::is('customer.home') ? 'text-brand' : '' }} hover:text-brand lg:mx-5 lg:inline-flex lg:py-6 2xl:mx-6">
                                            Home
                                        </a>
                                    </li>
                                    <li>

                                        <a href="{{ route('customer.products') }}"
                                            class="flex justify-between py-2 text-base font-medium {{ Route::is('customer.products') ? 'text-brand' : 'text-dark' }} hover:text-brand lg:mx-5 lg:inline-flex lg:py-6 2xl:mx-6">
                                            Products
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('customer.transaction.index') }}"
                                            class="flex justify-between py-2 text-base font-medium {{ Route::is('customer.transaction.index') ? 'text-brand' : 'text-dark' }} hover:text-brand lg:mx-5 lg:inline-flex lg:py-6 2xl:mx-6">
                                            Transaction
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="ltr:flex flex-1 rtl:flex-row-reverse">
        <div class="page-wrapper relative  duration-300 pt-0 w-full">
            <div class="xl:w-full  min-h-[calc(100vh-0px)] relative pb-0">
                {{ $slot }}
            </div><!--end main-->
        </div><!--end page-wrapper-->
    </div><!--end div-->
    <!-- footer -->
    <div class="relative bottom-0 -left-0 -right-0 block print:hidden border-t p-4 bg-black">
        <div class="container">
            <!-- Footer Start -->
            <div class="grid  grid-cols-1 md:grid-cols-2 lg:grid-cols-2 xl:grid-cols-4 gap-4 pt-10">
                <div class="w-full relative mb-4">
                    <div class="flex-auto p-4">
                        <div class="mb-5">
                            <a href="customers-home.html">
                                <img src="{{ asset('design-system/assets/images/logo-sm.png') }}" alt=""
                                    class="h-8 inline-block me-3">
                                <img src="{{ asset('design-system/assets/images/logo.png') }}" alt=""
                                    class="h-8 inline-block">
                            </a>
                        </div>
                        <p class="text-slate-500 text-lg">It is a long established fact that a reader will
                            be distracted by the readable content of a page when looking at its layout. </p>
                    </div><!--end card-body-->
                </div> <!--end card-->
                <div class="w-full relative mb-4">
                    <div class="flex-auto p-4">
                        <h5 class="text-xl font-semibold text-slate-300 mb-6">Customers</h5>
                        <ul class="list-none footer-links">
                            <li class="mb-2">
                                <a href="#"
                                    class="border-b border-solid border-transparent text-slate-400 hover:border-white hover:text-white">Home</a>
                            </li>
                            <li class="mb-2">
                                <a href="#"
                                    class="border-b border-solid border-transparent text-slate-400 hover:border-white hover:text-white">Product
                                    details</a>
                            </li>
                            <li class="mb-2">
                                <a href="#"
                                    class="border-b border-solid border-transparent text-slate-400 hover:border-white hover:text-white">Cart</a>
                            </li>
                            <li class="mb-2">
                                <a href="#"
                                    class="border-b border-solid border-transparent text-slate-400 hover:border-white hover:text-white">Checkout</a>
                            </li>
                            <li class="mb-2">
                                <a href="#"
                                    class="border-b border-solid border-transparent text-slate-400 hover:border-white hover:text-white">Wishlist</a>
                            </li>
                            <li class="mb-2">
                                <a href="#"
                                    class="border-b border-solid border-transparent text-slate-400 hover:border-white hover:text-white">Invoice</a>
                            </li>
                        </ul>
                    </div><!--end card-body-->
                </div> <!--end card-->
                <div class="w-full relative mb-4">
                    <div class="flex-auto p-4">
                        <h5 class="text-xl font-semibold text-slate-300 mb-6">Admin</h5>
                        <ul class="list-none footer-links">
                            <li class="mb-2">
                                <a href="#"
                                    class="border-b border-solid border-transparent text-slate-400 hover:border-white hover:text-white">Dashboard</a>
                            </li>
                            <li class="mb-2">
                                <a href="#"
                                    class="border-b border-solid border-transparent text-slate-400 hover:border-white hover:text-white">Add
                                    product</a>
                            </li>
                            <li class="mb-2">
                                <a href="#"
                                    class="border-b border-solid border-transparent text-slate-400 hover:border-white hover:text-white">Orders</a>
                            </li>
                            <li class="mb-2">
                                <a href="#"
                                    class="border-b border-solid border-transparent text-slate-400 hover:border-white hover:text-white">Customers</a>
                            </li>
                            <li class="mb-2">
                                <a href="#"
                                    class="border-b border-solid border-transparent text-slate-400 hover:border-white hover:text-white">Order
                                    details</a>
                            </li>
                            <li class="mb-2">
                                <a href="#"
                                    class="border-b border-solid border-transparent text-slate-400 hover:border-white hover:text-white">Refund</a>
                            </li>
                        </ul>
                    </div><!--end card-body-->
                </div> <!--end card-->
                <div class="w-full relative mb-4">
                    <div class="flex-auto p-4">
                        <h5 class="text-xl font-semibold text-slate-300 mb-6 sm:text-center xl:text-left">
                            Contact Us</h5>
                        <div class="mb-5">
                            <p class="text-slate-400 font-semibold">1884 George Avenue<br>
                                Mobile, AL 36603
                            </p>
                        </div>
                        <div class="flex sm:justify-center xl:justify-start">
                            <a href=""
                                class="w-8 h-8 leading-7 border-2 border-gray-500 rounded-full text-center duration-300 text-gray-400 hover:text-white hover:bg-blue-600 hover:border-blue-600">
                                <i class="icofont-facebook"></i>
                            </a>
                            <a href=""
                                class="w-8 h-8 leading-7 border-2 border-gray-500 rounded-full text-center duration-300 ml-2 text-gray-400 hover:text-white hover:bg-blue-400 hover:border-blue-400">
                                <i class="icofont-twitter"></i>
                            </a>
                            <a href=""
                                class="w-8 h-8 leading-7 border-2 border-gray-500 rounded-full text-center duration-300 ml-2 text-gray-400 hover:text-white hover:bg-red-600 hover:border-red-600">
                                <i class="icofont-google-plus"></i>
                            </a>
                        </div>
                    </div><!--end card-body-->
                </div> <!--end card-->
            </div>
            <footer class="footer bg-transparent  text-center  font-medium text-slate-400 md:text-left ">
                &copy;
                <script>
                    var year = new Date();
                    document.write(year.getFullYear());
                </script>
                Dayanti Craft
                <span class="float-right hidden text-slate-400 md:inline-block">Crafted
                    with <i class="ti ti-heart text-red-500"></i> by
                    Mannatthemes</span>
            </footer>
            <!-- end Footer -->
        </div>
    </div>
    <!-- JAVASCRIPTS -->
    <!-- <div class="menu-overlay"></div> -->
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
        crossorigin="anonymous"></script>
    <script src="{{ asset('design-system/assets/libs/lucide/umd/lucide.min.js') }}"></script>
    <script src="{{ asset('design-system/assets/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('design-system/assets/libs/flatpickr/flatpickr.min.js') }}"></script>
    {{-- <script src="{{ asset('design-system/assets/libs/@frostui/tailwindcss/frostui.js') }}"></script> --}}

    <script src="{{ asset('design-system/assets/libs/nice-select2/js/nice-select2.js') }}"></script>
    <script src="{{ asset('design-system/assets/libs/swiper/swiper-bundle.min.js') }}"></script>

    @@ -441,6 +441,27 @@ function loader() {

    <script src="{{ asset('design-system/assets/js/app.js') }}"></script>
    <script>
        NiceSelect.bind(document.querySelector(".nice-select"));
        var swiper = new Swiper(".defaultSwiper", {
            autoplay: {
                delay: 3500,
                disableOnInteraction: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/notyf@3/notyf.min.js"></script>
    <script>
        let notyf;
        $(document).ready(function() {
            notyf = new Notyf()
        })

        function number_format(number) {
            return Intl.NumberFormat("id-ID", {
                style: "currency",
                currency: "IDR"
            }).format(number)
        }

        function loader() {
            return `<div class="border-t-transparent border-solid animate-spin  rounded-full border-primary-500 border-2 h-4 w-4 inline-block"></div>`;
        }
    </script>

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
        }
    </script>
    <!-- JAVASCRIPTS -->
</body>

</html>
