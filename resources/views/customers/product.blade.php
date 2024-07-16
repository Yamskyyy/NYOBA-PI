<x-customer-layout>
    <div class="ltr:flex flex-1 rtl:flex-row-reverse">
        <div class="page-wrapper relative  duration-300 pt-0 w-full">
            <div class="xl:w-full  min-h-[calc(100vh-0px)] relative pb-0">
                <div class="container my-4">
                    <div class="grid grid-cols-12 sm:grid-cols-12 md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12 gap-4">
                        <div class="col-span-12 sm:col-span-4 md:col-span-3 lg:col-span-3 xl:col-span-3">
                            <div class="bg-white shadow-sm  rounded-md w-full relative">
                                <div class="border-b border-dashed border-slate-200 py-4 px-4">
                                    <h4 class="font-medium flex-1 self-center mb-2 md:mb-0 text-xxl">Filter</h4>
                                </div>
                                <div class="flex-auto p-4">
                                    <x-customers.filter-category></x-customers.filter-category>
                                </div> <!--end card-body-->
                            </div> <!--end inner-grid-->
                        </div> <!--end col-->

                        <div class="col-span-12 sm:col-span-8 md:col-span-9 lg:col-span-9 xl:col-span-9">
                            @if ($products->count() > 0)
                                <div class="grid md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12 gap-4 mb-4">
                                    @foreach ($products as $item)
                                        <div class="sm:col-span-12  md:col-span-4 lg:col-span-3 xl:col-span-3 ">
                                            <div class="bg-white border border-slate-200  rounded-md w-full relative">
                                                <div class="flex-auto  text-center">
                                                    <div class="flex-auto text-center bg-gray-100">
                                                        <span
                                                            href="{{ route('customer.product-detail', ['slug' => $item->slug]) }}">
                                                            <img src="{{ asset('storage/' . $item->image) }}" alt=""
                                                                class="h-44 inline-block my-4 transition ease-in-out delay-50  hover:-translate-y-1 hover:scale-110 duration-500">
                                                        </a>
                                                    </div>
                                                    <div class="flex-auto  text-center p-4">
                                                        <span
                                                            class="focus:outline-none text-[12px] text-slate-500 border border-slate-200 rounded font-medium py-0 px-2 mb-5 inline-block">{{ $item->product_category->name }}</span>
                                                        <a href="{{ route('customer.product-detail', ['slug' => $item->slug]) }}"
                                                            class="text-xl font-semibold text-slate-500 leading-3 block mb-2 truncate">{{ $item->name }}</a>
                                                        <div class="mb-4">
                                                            <i class="icofont-star text-yellow-400 inline-block"></i>
                                                            <i class="icofont-star text-yellow-400 inline-block"></i>
                                                            <i class="icofont-star text-yellow-400 inline-block"></i>
                                                            <i class="icofont-star text-yellow-400 inline-block"></i>
                                                            <i class="icofont-star text-yellow-400 inline-block"></i>
                                                            <span class="text-slate-800 font-semibold">4.8</span>
                                                        </div>
                                                        <h4 class="text-3xl font-medium mb-4"><sup
                                                                class="text-sm text-slate-500">
                                                        </h4>
                                                        <button type="button"
                                                            class="px-4 py-1 lg:px-4 bg-transparent  text-brand text-base  transition hover:bg-brand-500/10 hover:text-brand-500 border border-slate-200 border-dashed font-medium w-full"
                                                            onclick="location.href='{{ route('customer.product-detail', ['slug' => $item->slug]) }}'">Buy
                                                            Now</button>
                                                    </div>
                                                </div>
                                            </div> <!--end card-->
                                        </div>
                                    @endforeach
                                </div><!--end inner-grid-->
                            @else
                                <p>Products not found.</p>
                            @endif
                            {{ $products->links() }}
                        </div><!--end col-->
                    </div> <!--end grid-->
                </div><!--end container-->

            </div><!--end main-->
        </div><!--end page-wrapper-->
    </div><!--end div-->
</x-customer-layout>
