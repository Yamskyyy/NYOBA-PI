<ul id="sidenav-list" class="navbar-nav">
    <li
        class="uppercase text-[11px]  text-primary-500 mt-0 leading-4 mb-2 group-data-[sidebar=dark]:text-primary-400 group-data-[sidebar=brand]:text-primary-300">
        <span
            class="text-[9px] text-slate-600 group-data-[sidebar=dark]:text-slate-500 group-data-[sidebar=brand]:text-slate-400">Master</span>
    </li>
    <li>
        <div id="product-accordion" data-fc-type="accordion">
            <a href="#"
                class="nav-link hover:bg-transparent hover:text-black  rounded-md   flex items-center  decoration-0 px-3 py-3 cursor-pointer group-data-[sidebar=dark]:hover:text-slate-200 group-data-[sidebar=brand]:hover:text-slate-200"
                data-fc-type="collapse" data-fc-parent="product-accordion">
                <span data-lucide="file-spreadsheet"
                    class="w-5 h-5 text-center text-slate-800 me-2 group-data-[sidebar=dark]:text-slate-400 group-data-[sidebar=brand]:text-slate-400"></span>
                <span>Master Products</span>
                <i
                    class="icofont-thin-down ms-auto inline-block text-[14px] transform transition-transform duration-300 text-slate-800 group-data-[sidebar=dark]:text-slate-400 group-data-[sidebar=brand]:text-slate-400 fc-collapse-open:rotate-180 "></i>
            </a>

            <div id="product-flush" class=" overflow-hidden">
                <ul class="nav flex-col flex flex-wrap ps-0 mb-0 ms-2">
                    <li class="nav-item relative block">
                        <a href="{{ route('admin.product-categories.index') }}"
                            class="nav-link hover:text-primary-500 rounded-md relative  flex items-center decoration-0 px-3 py-3 group-data-[sidebar=brand]:hover:text-slate-200">
                            <i
                                class="icofont-dotted-right me-2 text-slate-600 text-[8px] group-data-[sidebar=brand]:text-slate-400 "></i>
                            Product Categories
                        </a>
                    </li>
                    <li class="nav-item relative block">
                        <a href="{{ route('admin.product.index') }}"
                            class="nav-link hover:text-primary-500 rounded-md relative   flex items-center decoration-0 px-3 py-3 group-data-[sidebar=brand]:hover:text-slate-200">
                            <i
                                class="icofont-dotted-right me-2 text-slate-600 text-[8px] group-data-[sidebar=brand]:text-slate-400 "></i>
                            Products
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div id="user-accordion" data-fc-type="accordion">
            <a href="#"
                class="nav-link hover:bg-transparent hover:text-black  rounded-md   flex items-center  decoration-0 px-3 py-3 cursor-pointer group-data-[sidebar=dark]:hover:text-slate-200 group-data-[sidebar=brand]:hover:text-slate-200"
                data-fc-type="collapse" data-fc-parent="user-accordion">
                <span data-lucide="user"
                    class="w-5 h-5 text-center text-slate-800 me-2 group-data-[sidebar=dark]:text-slate-400 group-data-[sidebar=brand]:text-slate-400"></span>
                <span>Master Users</span>
                <i
                    class="icofont-thin-down ms-auto inline-block text-[14px] transform transition-transform duration-300 text-slate-800 group-data-[sidebar=dark]:text-slate-400 group-data-[sidebar=brand]:text-slate-400 fc-collapse-open:rotate-180 "></i>
            </a>

            <div id="user-flush" class=" overflow-hidden">
                <ul class="nav flex-col flex flex-wrap ps-0 mb-0 ms-2">
                    <li class="nav-item relative block">
                        <a href="{{ route('admin.users.index') }}"
                            class="nav-link hover:text-primary-500 rounded-md relative   flex items-center decoration-0 px-3 py-3 group-data-[sidebar=brand]:hover:text-slate-200">
                            <i
                                class="icofont-dotted-right me-2 text-slate-600 text-[8px] group-data-[sidebar=brand]:text-slate-400 "></i>
                            Users
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </li>
</ul>
