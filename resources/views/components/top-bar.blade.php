<div>
    <nav id="topbar"
    class="topbar border-b   fixed inset-x-0  duration-300
         block print:hidden z-50">
    <div
        class="mx-0 flex max-w-full flex-wrap items-center lg:mx-auto relative top-[50%] start-[50%] transform -translate-x-1/2 -translate-y-1/2">
        <div class="ltr:mx-2  rtl:mx-2">
            <button id="toggle-menu-hide" class="button-menu-mobile flex rounded-full md:me-0 relative">
                <i data-lucide="menu" class="top-icon w-5 h-5"></i>
            </button>
        </div>

        <div class="order-1 ltr:ms-auto rtl:ms-0 rtl:me-auto flex items-center md:order-2">
            <div class="ltr:me-2 ltr:md:me-4 rtl:me-0 rtl:ms-2 rtl:lg:me-0 rtl:md:ms-4">
                <button id="toggle-theme" class="flex rounded-full md:me-0 relative">
                    <span data-lucide="moon" class="top-icon w-5 h-5 light "></span>
                    <span data-lucide="sun" class="top-icon w-5 h-5 dark hidden"></span>
                </button>
            </div>
            <div class="me-2  dropdown relative">
                <button type="button"
                    class="dropdown-toggle flex items-center rounded-full text-sm
                focus:bg-none focus:ring-0 md:me-0"
                    id="user-profile" aria-expanded="false" data-fc-autoclose="both" data-fc-type="dropdown">
                    <img class="h-8 w-8 rounded-full"
                        src="{{ asset('design-system/assets/images/users/avatar-1.png') }}" alt="user photo" />
                    <span class="ltr:ms-2 rtl:ms-0 rtl:me-2 hidden text-left xl:block">
                        <span class="block font-medium text-slate-600">Maria Gibson</span>
                        <span class="-mt-0.5 block text-xs text-slate-500">Admin</span>
                    </span>
                </button>

                <div class="left-auto right-0 z-50 my-1 hidden list-none
                divide-y divide-gray-100 rounded border border-slate-700/10
                text-base shadow bg-white w-40"
                    id="navUserdata">

                    <ul class="py-1" aria-labelledby="navUserdata">
                        <li>
                            <a href="#"
                                class="flex items-center py-2 px-3 text-sm text-gray-700 hover:bg-gray-50
                     
                     ">
                                <span data-lucide="user"
                                    class="w-4 h-4 inline-block text-slate-800 me-2"></span>
                                Profile</a>
                        </li>
                        <li>
                            <a href="#"
                                class="flex items-center py-2 px-3 text-sm text-gray-700 hover:bg-gray-50
                     
                     ">
                                <span data-lucide="settings"
                                    class="w-4 h-4 inline-block text-slate-800 me-2"></span>
                                Settings</a>
                        </li>
                        <li>
                            <a href="auth-lockscreen.html"
                                class="flex items-center py-2 px-3 text-sm text-red-500 hover:bg-gray-50 hover:text-red-600
                     
                     ">
                                <span data-lucide="power"
                                    class="w-4 h-4 inline-block text-red-500 me-2"></span>
                                Sign out</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</nav>
</div>