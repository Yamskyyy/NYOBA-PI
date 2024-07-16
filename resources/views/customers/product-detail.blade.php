<x-customer-layout>
    <div class="xl:w-full  min-h-[calc(100vh-0px)] relative pb-0">
        <div class="container my-4">
            <div class="grid md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12 gap-4 mb-4">
                <div class="sm:col-span-12  md:col-span-12 lg:col-span-12 xl:col-span-12 ">
                    <div
                        class="bg-white dark:bg-gray-900 border border-slate-200 dark:border-slate-700/40  rounded-md w-full relative">
                        <div class="border-b border-slate-200 dark:border-slate-700/40 py-3 px-4 dark:text-slate-300/70">
                            <h4 class="font-medium">Title</h4>
                        </div><!--end header-title-->
                        <x-alert></x-alert>
                        <div class="flex-auto p-4">
                            <div class="grid md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12 gap-4">
                                <div class="sm:col-span-12  md:col-span-12 lg:col-span-6 xl:col-span-6 text-center">
                                    <div id="img-container" class="w-[400px] text-center inline-block mx-auto">
                                        <img src="{{ asset('storage/' . $product->image) }}" alt="" class="inline-block">
                                    </div>
                                </div>
                                <div class="sm:col-span-12  md:col-span-12 lg:col-span-6 xl:col-span-6 self-center">
                                    <span
                                        class="bg-green-600/5 text-green-500 text-[14px] font-medium px-2.5 py-0.5 rounded h-5">{{ $product->product_category->name }}</span>
                                    <div class="">
                                        <h5 class="dark:text-slate-200 font-medium text-[30px] leading-9 mt-4">
                                            {{ $product->name }}</h5>
                                        <p tabindex="0"
                                            class="focus:outline-none text-primary-500 dark:text-gray-400 text-base font-medium">
                                            Morden and good look model 2023.</p>
                                        <ul class="mb-4">
                                            <li class="inline-block">
                                                <i class="icofont-star text-xl text-yellow-400 inline-block"></i>
                                            </li>
                                            <li class="inline-block">
                                                <i class="icofont-star text-xl text-yellow-400 inline-block"></i>
                                            </li>
                                            <li class="inline-block">
                                                <i class="icofont-star text-xl text-yellow-400 inline-block"></i>
                                            </li>
                                            <li class="inline-block">
                                                <i class="icofont-star text-xl text-yellow-400 inline-block"></i>
                                            </li>
                                            <li class="inline-block">
                                                <i class="icofont-star text-xl text-yellow-400 inline-block"></i>
                                            </li>

                                        
                                        </ul>
                                        <h6 class="text-sm font-medium text-slate-800 dark:text-slate-400">Detail :</h6>
                                        <p
                                            class="focus:outline-none text-gray-500 dark:text-gray-400 text-sm font-medium mb-4">
                                            Product ini dapat di request dan di pesan melalui whatssapp 
                                        </p>

                                        <form id="form-cart" action="{{ route('customer.product-add-to-cart') }}"
                                            method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <input type="hidden" name="product_id" value="{{ $product->id }}" />
                                            <input
                                                class="form-input border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent  rounded-md mt-1 border-gray-200 px-3 py-2 text-sm focus:outline-none focus:ring-0 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-brand-500  dark:hover:border-slate-700"
                                                style="width:100px;" type="number" min="0" value="0"
                                                id="example-number-input" name="qty">
                                            <button id="btn-add-to-cart" type="submit"
                                                class="inline-block focus:outline-none text-slate-600 hover:bg-brand-500 hover:text-white bg-transparent border border-gray-200 dark:bg-transparent dark:text-slate-400 dark:hover:text-white dark:border-gray-700 dark:hover:bg-brand-500  text-sm font-medium py-2 px-3 rounded"><i
                                                    class="ti ti-shopping-cart"></i> Add to cart</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div><!--end card-body-->
                    </div> <!--end card-->
                </div><!--end col-->
            </div><!--end inner-grid-->
            <div class="grid md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12 gap-4 mb-4">
                <div class="sm:col-span-12  md:col-span-12 lg:col-span-12 xl:col-span-12">
                    <div class="w-full relative">
                        <div class="flex-auto ">
                            <div class="mb-4 border-b border-gray-200 dark:border-slate-700" data-fc-type="tab">
                                <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" aria-label="Tabs">
                                    <li class="me-2" role="presentation">
                                        <button class="inline-block p-4 rounded-t-lg border-b-2 active "
                                            id="description-tab" data-fc-target="#description" type="button"
                                            role="tab" aria-controls="description"
                                            aria-selected="false">Description</button>
                                    </li>
                                    <li class="me-2" role="presentation">
                                        <button
                                            class="inline-block p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
                                            id="additional-tab" data-fc-target="#additional" type="button"
                                            role="tab" aria-controls="additional" aria-selected="false">Additional
                                            Info</button>
                                    </li>
                                    <li class="me-2" role="presentation">
                                        <button
                                            class="inline-block p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
                                            id="reviews-tab" data-fc-target="#reviews" type="button" role="tab"
                                            aria-controls="reviews" aria-selected="false">Ratings & reviews</button>
                                    </li>
                                </ul>
                            </div>
                            <div id="myTabContent">
                                <div class="active  p-4 bg-gray-50 rounded-lg dark:bg-gray-800" id="description"
                                    role="tabpanel" aria-labelledby="description-tab">
                                    <p class="text-base text-gray-500 dark:text-gray-400">
                                        {{ $product->description }}
                                    </p>
                                </div>
                                <div class="hidden p-4 bg-gray-50 rounded-lg dark:bg-gray-800" id="additional"
                                    role="tabpanel" aria-labelledby="additional-tab">
                                    <div class="grid md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12 gap-4">
                                        <div class="sm:col-span-12  md:col-span-6 lg:col-span-6 xl:col-span-6 ">
                                            <div class=" w-full relative">
                                                <div class="flex-auto  text-center">
                                                    <table class="table border rounded-lg w-full">
                                                        <thead>
                                                            <tr>
                                                                <th class="w-[40%]"> </th>
                                                                <th class="w-[60%]"></th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr
                                                                class="bg-white  border-b border-dashed dark:bg-gray-900 dark:border-gray-700/40">
                                                                <td
                                                                    class="bg-brand-400/5 align-middle border-e border-dashed">
                                                                    <h6
                                                                        class="mb-0 text-slate-800 uppercase font-semibold px-4 text-lg">
                                                                        Brand name</h6>
                                                                </td>
                                                                <td class="p-4 mb-0">Dayanti Craft air zoom terra kiger
                                                                    7
                                                                </td>
                                                            </tr>
                                                            <tr
                                                                class="bg-white border-b border-dashed dark:bg-gray-900 dark:border-gray-700/40">
                                                                <td
                                                                    class="bg-brand-400/5 align-middle border-e border-dashed">
                                                                    <h6
                                                                        class="mb-0 text-slate-800 uppercase font-semibold px-4 text-lg">
                                                                        Size</h6>
                                                                </td>
                                                                <td class="p-4 mb-0">UK 5</td>
                                                            </tr>
                                                            <tr
                                                                class="bg-white border-b border-dashed dark:bg-gray-900 dark:border-gray-700/40">
                                                                <td
                                                                    class="bg-brand-400/5 align-middle border-e border-dashed">
                                                                    <h6
                                                                        class="mb-0 text-slate-800 uppercase font-semibold px-4 text-lg">
                                                                        Color</h6>
                                                                </td>
                                                                <td class="p-4 mb-0"><i
                                                                        class="icofont-brand-mts text-pink-500"></i>
                                                                    Pink</td>
                                                            </tr>
                                                            <tr class="bg-white dark:bg-gray-900">
                                                                <td
                                                                    class="bg-brand-400/5 align-middle border-e border-dashed">
                                                                    <h6
                                                                        class="mb-0 text-slate-800 uppercase font-semibold px-4 text-lg">
                                                                        Country</h6>
                                                                </td>
                                                                <td class="p-4 mb-0">USA</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div> <!--end card-->
                                        </div><!--end col-->
                                        <div class="sm:col-span-12  md:col-span-6 lg:col-span-6 xl:col-span-6 ">
                                            <div class=" w-full relative">
                                                <div class="flex-auto  text-center">
                                                    <table class="table border rounded-lg w-full">
                                                        <thead>
                                                            <tr>
                                                                <th class="w-[40%]"> </th>
                                                                <th class="w-[60%]"></th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr
                                                                class="bg-white  border-b border-dashed dark:bg-gray-900 dark:border-gray-700/40">
                                                                <td
                                                                    class="bg-brand-400/5 align-middle border-e border-dashed">
                                                                    <h6
                                                                        class="mb-0 text-slate-800 uppercase font-semibold px-4 text-lg">
                                                                        Department</h6>
                                                                </td>
                                                                <td class="p-4 mb-0">Mens</td>
                                                            </tr>
                                                            <tr
                                                                class="bg-white border-b border-dashed dark:bg-gray-900 dark:border-gray-700/40">
                                                                <td
                                                                    class="bg-brand-400/5 align-middle border-e border-dashed">
                                                                    <h6
                                                                        class="mb-0 text-slate-800 uppercase font-semibold px-4 text-lg">
                                                                        Item Weight</h6>
                                                                </td>
                                                                <td class="p-4 mb-0">400gm</td>
                                                            </tr>
                                                            <tr
                                                                class="bg-white border-b border-dashed dark:bg-gray-900 dark:border-gray-700/40">
                                                                <td
                                                                    class="bg-brand-400/5 align-middle border-e border-dashed">
                                                                    <h6
                                                                        class="mb-0 text-slate-800 uppercase font-semibold px-4 text-lg">
                                                                        Net Quantity</h6>
                                                                </td>
                                                                <td class="p-4 mb-0">1 Set</td>
                                                            </tr>
                                                            <tr class="bg-white dark:bg-gray-900">
                                                                <td
                                                                    class="bg-brand-400/5 align-middle border-e border-dashed">
                                                                    <h6
                                                                        class="mb-0 text-slate-800 uppercase font-semibold px-4 text-lg">
                                                                        Customer Reviews</h6>
                                                                </td>
                                                                <td class="p-4 mb-0">
                                                                    <div class="">
                                                                        <i
                                                                            class="icofont-star text-yellow-400 inline-block"></i>
                                                                        <i
                                                                            class="icofont-star text-yellow-400 inline-block"></i>
                                                                        <i
                                                                            class="icofont-star text-yellow-400 inline-block"></i>
                                                                        <i
                                                                            class="icofont-star text-yellow-400 inline-block"></i>
                                                                        <i
                                                                            class="icofont-star text-yellow-400 inline-block"></i>
                                                                        <span
                                                                            class="text-slate-800 font-semibold">4.8</span>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div> <!--end card-->
                                        </div><!--end col-->
                                    </div><!--end grid-->
                                </div>
                                <div class="hidden p-4 bg-gray-50 rounded-lg dark:bg-gray-800" id="reviews"
                                    role="tabpanel" aria-labelledby="reviews-tab">
                                    <div class="grid md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12 gap-4">
                                        <div class="sm:col-span-12  md:col-span-6 lg:col-span-6 xl:col-span-6 ">
                                            <div class=" w-full relative">
                                                <div class="flex-auto p-4 text-center">
                                                    <h3 class="my-4 font-semibold text-[34px] dark:text-slate-200">4.8
                                                    </h3>
                                                    <p class="text-gray-600 font-semibold dark:text-slate-400">Overall
                                                        Rating</p>
                                                    <div class="">
                                                        <i
                                                            class="icofont-star text-xl text-yellow-400 inline-block"></i>
                                                        <i
                                                            class="icofont-star text-xl text-yellow-400 inline-block"></i>
                                                        <i
                                                            class="icofont-star text-xl text-yellow-400 inline-block"></i>
                                                        <i
                                                            class="icofont-star text-xl text-yellow-400 inline-block"></i>
                                                        <i
                                                            class="icofont-star text-xl text-yellow-400 inline-block"></i>
                                                        <span class="text-slate-800 font-semibold">4.8 (9885
                                                            reviews)</span>
                                                    </div>
                                                    <div class="mb-4">
                                                        <div class="flex justify-between">
                                                            <span class="font-medium text-sm dark:text-slate-400">5
                                                                Star</span>
                                                            <span
                                                                class="text-sm font-medium text-slate-500 dark:text-gray-400">9180</span>
                                                        </div>
                                                        <div class="w-full">
                                                            <div
                                                                class="w-full h-[5px] relative bg-gray-200 dark:bg-slate-600/30 rounded-full">
                                                                <div class="h-[5px] bg-yellow-400 rounded-full"
                                                                    style="width: 80%"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="mb-4">
                                                        <div class="flex justify-between">
                                                            <span class="font-medium text-sm dark:text-slate-400">4
                                                                Star</span>
                                                            <span
                                                                class="text-sm font-medium text-slate-500 dark:text-gray-400">84</span>
                                                        </div>
                                                        <div class="w-full">
                                                            <div
                                                                class="w-full h-[5px] relative bg-gray-200 dark:bg-slate-600/30 rounded-full">
                                                                <div class="h-[5px] bg-yellow-400 rounded-full"
                                                                    style="width: 70%"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="mb-4">
                                                        <div class="flex justify-between">
                                                            <span class="font-medium text-sm dark:text-slate-400">3
                                                                Star</span>
                                                            <span
                                                                class="text-sm font-medium text-slate-500 dark:text-gray-400">24</span>
                                                        </div>
                                                        <div class="w-full">
                                                            <div
                                                                class="w-full h-[5px] relative bg-gray-200 dark:bg-slate-600/30 rounded-full">
                                                                <div class="h-[5px] bg-yellow-400 rounded-full"
                                                                    style="width: 60%"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="mb-4">
                                                        <div class="flex justify-between">
                                                            <span class="font-medium text-sm dark:text-slate-400">2
                                                                Star</span>
                                                            <span
                                                                class="text-sm font-medium text-slate-500 dark:text-gray-400">12</span>
                                                        </div>
                                                        <div class="w-full">
                                                            <div
                                                                class="w-full h-[5px] relative bg-gray-200 dark:bg-slate-600/30 rounded-full">
                                                                <div class="h-[5px] bg-yellow-400 rounded-full"
                                                                    style="width: 50%"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="mb-4">
                                                        <div class="flex justify-between">
                                                            <span class="font-medium text-sm dark:text-slate-400">1
                                                                Star</span>
                                                            <span
                                                                class="text-sm font-medium text-slate-500 dark:text-gray-400">3</span>
                                                        </div>
                                                        <div class="w-full">
                                                            <div
                                                                class="w-full h-[5px] relative bg-gray-200 dark:bg-slate-600/30 rounded-full">
                                                                <div class="h-[5px] bg-yellow-400 rounded-full"
                                                                    style="width: 40%"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> <!--end card-->
                                        </div><!--end col-->
                                        <div class="sm:col-span-12  md:col-span-6 lg:col-span-6 xl:col-span-6 ">
                                            <div class=" w-full relative">
                                                <div class="flex-auto">
                                                    <h5 class="text-slate-800 text-3xl font-semibold">Be the first to
                                                        review “Dayanti Craft Shoe”</h5>
                                                    <form action="">
                                                        <div class="mb-2">
                                                            <label for="name-input"
                                                                class="font-medium text-sm text-slate-600 dark:text-slate-400">Name
                                                                <span class="text-red-500 text-lg">*</span></label>
                                                            <input type="text" id="name-input"
                                                                class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-2 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-base text-lg hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500  dark:hover:border-slate-700">
                                                        </div>
                                                        <div class="mb-2">
                                                            <label for="email-input"
                                                                class="font-medium text-sm text-slate-600 dark:text-slate-400">Email
                                                                <span class="text-red-500 text-lg">*</span></label>
                                                            <input type="text" id="email-input"
                                                                class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-2 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-base text-lg hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500  dark:hover:border-slate-700">
                                                        </div>
                                                        <label for="email-input"
                                                            class="font-medium text-sm text-slate-600 dark:text-slate-400">Your
                                                            rating <span class="text-red-500 text-lg">*</span></label>
                                                        <div class="starability-basic min-h-[30px] block mb-2">
                                                            <input type="radio" id="rate5" name="rating"
                                                                value="5" />
                                                            <label for="rate5" title="Amazing">5 stars</label>

                                                            <input type="radio" id="rate4" name="rating"
                                                                value="4" />
                                                            <label for="rate4" title="Very good">4 stars</label>

                                                            <input type="radio" id="rate3" name="rating"
                                                                value="3" />
                                                            <label for="rate3" title="Average">3 stars</label>

                                                            <input type="radio" id="rate2" name="rating"
                                                                value="2" />
                                                            <label for="rate2" title="Not good">2 stars</label>

                                                            <input type="radio" id="rate1" name="rating"
                                                                value="1" />
                                                            <label for="rate1" title="Terrible">1 star</label>
                                                        </div>
                                                        <div class="mb-2">
                                                            <label for="message"
                                                                class="font-medium text-sm text-slate-600 dark:text-slate-400">Your
                                                                message</label>
                                                            <textarea id="message" rows="4"
                                                                class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-1 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500  dark:hover:border-slate-700"
                                                                placeholder="Leave a comment..."></textarea>
                                                        </div>
                                                        <button type="button"
                                                            class="px-4 py-2 lg:px-4 bg-brand-500  text-white text-base  transition hover:bg-brand-500 hover:text-white border border-brand border-dashed font-medium mb-2">Submit</button>
                                                    </form>
                                                </div>
                                            </div> <!--end card-->
                                        </div><!--end col-->
                                    </div><!--end grid-->
                                </div>
                            </div>
                        </div>
                    </div> <!--end card-->
                </div><!--end col-->
            </div><!--end grid-->
        </div><!--end container-->
    </div><!--end main-->
</x-customer-layout>
<script>
    $(document).ready(function() {

        $('#form-cart').submit(function(e) {
            e.preventDefault();

            let form = new FormData(this)

            $('#btn-add-to-cart').html(
                '<div class="border-t-transparent border-solid animate-spin  rounded-full border-primary-500 border-2 h-4 w-4 inline-block"></div>'
            )
            $('#btn-add-to-cart').attr('disabled', true)

            $.ajax({
                data: form,
                url: `{{ route('customer.product-add-to-cart') }}`,
                type: 'POST',
                contentType: false,
                cache: false,
                processData: false,
                headers: {
                    'X-CSRF-TOKEN': `{{ csrf_token() }}`
                },
                success: function(data) {
                    $('#btn-add-to-cart').html('Add to cart')
                    $('#btn-add-to-cart').attr('disabled', false)

                    $('#cart-total').html(data.cart_count)
                    notyf.success(data.message)
                },
                error: function(data) {
                    $('#btn-add-to-cart').html('Add to cart')
                    $('#btn-add-to-cart').attr('disabled', false)
                    notyf.error(data.responseJSON.message)
                }
            })
        })
    })
</script>
