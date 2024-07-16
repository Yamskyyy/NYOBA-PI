<x-customer-layout>
    <div class="xl:w-full  min-h-[calc(100vh-0px)] relative pb-0">
        <div class="container my-4">
            <div class="grid md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12 gap-4 mb-4">
                <div class="sm:col-span-12  md:col-span-12 lg:col-span-8 xl:col-span-8 ">
                    <div
                        class="bg-white dark:bg-gray-900 border border-slate-200 dark:border-slate-700/40  rounded-md w-full relative">
                        <div class="grid grid-cols-1 p-4">
                            <div class="sm:-mx-6 lg:-mx-8">
                                <div class="relative overflow-x-auto block w-full sm:px-6 lg:px-8">
                                    <div class="">
                                        <table class="w-full">
                                            <thead class="bg-slate-100 dark:bg-slate-700/20">
                                                <tr>
                                                    <th scope="col"
                                                        class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                                        Product
                                                    </th>
                                                    <th scope="col"
                                                        class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                                        Quantity
                                                    </th>
                                                    <th scope="col"
                                                        class="p-3 text-xs font-medium tracking-wider text-right text-gray-700 uppercase dark:text-gray-400">
                                                        Action
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody id="table-cart">
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!--end card-->
                </div><!--end col-->
                <div class="sm:col-span-12  md:col-span-12 lg:col-span-4 xl:col-span-4 ">
                    <div
                        class="bg-black dark:bg-gray-900 shadow border border-slate-700/40 dark:border-slate-700/40  rounded-md w-full relative ">
                        <div class="flex-auto p-4">
                           
                            <div class="grid grid-cols-1 p-4 bg-slate-700/20 rounded-md">
                                <div class="sm:-mx-6 lg:-mx-8">
                                    <div class="relative overflow-x-auto block w-full sm:px-6 lg:px-8">
                                        <table class="min-w-full">
                                            <tbody>
                                             
                                                
                                                <!-- 4 -->
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="flex gap-4 mb-4">
                                    <button
                                        class="px-3 py-2 lg:px-4 bg-brand-500 collapse:bg-green-100 text-white text-sm font-semibold rounded hover:bg-brand-600 hover:text-white w-1/2 mt-4 lg:mb-0 inline-block"
                                        onclick="window.location.href = `{{ route('customer.products') }}`">Continue
                                        shopping</button>

                                </div>
                                <p class="text-[11px] text-slate-400"> <span class="text-slate-200">Note
                                        :</span> Untuk Continue Silahkan Lanjutkan dan Tambahkan Pesanan Anda.</p>
                            </div>
                        </div><!--end card-body-->
                    </div> <!--end card-->
                </div><!--end col-->
            </div><!--end inner-grid-->
        </div><!--end container-->
    </div><!--end main-->
</x-customer-layout>

<script>
    $(document).ready(function() {
        getCartData()
    })

    function changeQty(e) {
        let id = $(e).data('id');
        let qty = $(e).val();
        let price = $(e).parent().siblings().eq(1).data('price');

        let total = price * qty

        $(e).parent().siblings().eq(2).html(
            `${Intl.NumberFormat("id-ID", { style: "currency", currency: "IDR" }).format(total)}`)

        let form = new FormData()
        form.append('id', id)
        form.append('qty', qty)

        $('#total-cart').html(loader())

        $.ajax({
            data: form,
            url: `{{ route('customer.cart.change-cart') }}`,
            type: 'POST',
            contentType: false,
            cache: false,
            processData: false,
            headers: {
                'X-CSRF-TOKEN': `{{ csrf_token() }}`
            },
            success: function(data) {
                notyf.success(data.message)
                getTotalCart()
            },
            error: function(data) {
                notyf.error(data.responseJSON.message)
            }
        })
    }

    function getTotalCart() {
        $.ajax({
            url: `{{ route('customer.cart.total-cart') }}`,
            type: 'GET',
            contentType: false,
            cache: false,
            processData: false,
            headers: {
                'X-CSRF-TOKEN': `{{ csrf_token() }}`
            },
            success: function(data) {
                $('#total-cart').html(
                    `${number_format(data.total)}`
                )
            },
            error: function(data) {
                notyf.error(data.responseJSON.message)
            }
        })
    }

    function getCartData() {
        $('#table-cart').html(loader())

        $.ajax({
            url: `{{ route('customer.cart.get-cart') }}`,
            type: 'GET',
            contentType: false,
            cache: false,
            processData: false,
            headers: {
                'X-CSRF-TOKEN': `{{ csrf_token() }}`
            },
            success: function(res) {
                $('#table-cart').html(`Empty Cart`)
                let html;

                $('#cart-total').html(res.data.length)

                if (res.data.length > 0) {
                    res.data.forEach(item => {
                        html +=
                            `
                    <tr class="bg-white border-b border-dashed dark:bg-gray-900 dark:border-gray-700/40">
                                                        <td
                                                            class="p-3 text-sm font-medium whitespace-nowrap dark:text-white">
                                                            <div class="flex items-center">
                                                                <img src="${item.image}" alt=""
                                                                    class="mr-2 h-8 inline-block">
                                                                <div class="self-center">
                                                                    <h5
                                                                        class="text-sm font-semibold text-slate-700 dark:text-gray-400">
                                                                        ${item.name}</h5>
                                                                    <span
                                                                        class="block  font-medium text-slate-500">${item.description.substring(0, 10)}</span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td
                                                            class="p-3 text-sm text-gray-600 font-medium whitespace-nowrap dark:text-gray-400">
                                                            <input
                                                                class="form-input border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent  rounded-md mt-1 border-gray-200 px-3 py-1 text-sm focus:outline-none focus:ring-0 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary-500  dark:hover:border-slate-700"
                                                                style="width:100px;" type="number" min="0"
                                                                value="${item.total_qty}"
                                                                onchange="changeQty(this)" id="example-number-input"
                                                                data-id="${item.id}">
                                                        </td>
                                                       
                                                        <td
                                                            class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400 text-right">
                                                            <button type="button" class="text-red-500" onclick="deleteCart(this, ${item.id})">
                                                                <i data-lucide="trash" class="top-icon w-5 h-5 text-red-500"></i>
                                                            </button>
                                                        </td>
                                                    </tr>
                    `
                    });

                    $('#table-cart').html(html)

                    lucide.createIcons();

                    $('#btn-checkout').attr('disabled', false)
                    $('#btn-checkout').removeClass('bg-gray-600')
                    $('#btn-checkout').addClass('bg-brand-500')
                    $('#btn-checkout').addClass('hover:bg-brand-600')
                } else {
                    $('#btn-checkout').attr('disabled', true)
                    $('#btn-checkout').addClass('bg-gray-600')
                    $('#btn-checkout').removeClass('bg-brand-500')
                    $('#btn-checkout').removeClass('hover:bg-brand-600')
                }


                getTotalCart()
            },
            error: function(data) {
                notyf.error(data.responseJSON.message)
            }
        })
    }

    function deleteCart(e, id) {
        $(e).html(loader())

        let form = new FormData()

        form.append('_method', 'DELETE')
        form.append('id', id)

        $.ajax({
            url: `{{ route('customer.cart.delete-cart') }}`,
            type: 'POST',
            contentType: false,
            cache: false,
            processData: false,
            data: form,
            headers: {
                'X-CSRF-TOKEN': `{{ csrf_token() }}`
            },
            success: function(res) {
                getCartData()
                notyf.success(res.message)
            },
            error: function(data) {
                notyf.error(data.responseJSON.message)
            }
        })
    }
</script>
