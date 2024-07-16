<x-customer-layout>
    <div class="page-wrapper relative  duration-300 pt-0 w-full">
        <div class="xl:w-full  min-h-[calc(100vh-56px)] relative pb-0">
            <div class="container my-4 bg-white">
                <div class="grid grid-cols-12 sm:grid-cols-12 md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12 gap-4">
                    <div class="col-span-12 sm:col-span-12 md:col-span-12 lg:col-span-12 xl:col-span-12">
                        <div class="grid grid-cols-1">
                            <div class="sm:-mx-6 lg:-mx-8">
                                <div class="relative overflow-x-auto block w-full sm:px-6 lg:px-8">
                                    <table id="data-table" class="w-full" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>ID Transaction</th>
                                                <th>Status</th>
                                                <th>Total Checkout</th>
                                                <th>Shipping Cost</th>
                                                <th>Receipt</th>
                                            </tr>
                                        </thead>
                                    </table>
                                </div><!--end div-->
                            </div><!--end div-->
                        </div><!--end grid-->
                    </div><!--end col-->
                </div> <!--end grid-->
            </div><!--end container-->
        </div>
    </div><!--end page-wrapper-->

    <div class="modal animate-ModalSlide hidden" id="modalcenter">
        <div
            class="relative w-auto pointer-events-none sm:max-w-lg sm:my-0 sm:mx-auto z-[99] flex items-center h-[calc(100%-3.5rem)]">
            <form action="{{ route('customer.transaction.upload-receipt') }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                <div
                    class="relative flex flex-col w-full pointer-events-auto bg-white dark:bg-slate-800 bg-clip-padding rounded">
                    <div
                        class="flex shrink-0 items-center justify-between py-2 px-4 rounded-t border-b border-solid dark:border-gray-700 bg-slate-800">
                        <h6 class="mb-0 leading-4 text-base font-semibold text-slate-300 mt-0"
                            id="staticBackdropLabel1">
                            Upload Receipt</h6>
                        <button type="button"
                            class="box-content w-4 h-4 p-1 bg-slate-700/60 rounded-full text-slate-300 leading-4 text-xl close"
                            aria-label="Close" data-fc-dismiss>&times;</button>
                    </div>
                    <div class="relative flex-auto p-4 text-slate-600 dark:text-gray-300 leading-relaxed">
                        <input type="hidden" name="transaction_id" id="transaction_id">
                        <input type="file" name="receipt" />
                    </div>
                    <div
                        class="flex flex-wrap shrink-0 justify-end p-3  rounded-b border-t border-dashed dark:border-gray-700">
                        <button type="button"
                            class="inline-block focus:outline-none text-red-500 hover:bg-red-500 hover:text-white bg-transparent border border-gray-200 dark:bg-transparent dark:text-red-500 dark:hover:text-white dark:border-gray-700 dark:hover:bg-red-500  text-sm font-medium py-1 px-3 rounded mr-1 close"
                            data-fc-dismiss>Close</button>
                        <button type="submit"
                            class="inline-block focus:outline-none text-primary-500 hover:bg-primary-500 hover:text-white bg-transparent border border-gray-200 dark:bg-transparent dark:text-primary-500 dark:hover:text-white dark:border-gray-700 dark:hover:bg-primary-500  text-sm font-medium py-1 px-3 rounded">Save</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-customer-layout>
<script>
    let table;

    function openModal(id) {
        $('#transaction_id').val(id)
    }

    $(document).ready(function() {
        initializeTable()
    })

    function initializeTable() {
        table = new DataTable('#data-table', {
            ajax: `{{ route('customer.transaction.datatable') }}`,
            processing: true,
            serverSide: true,
            columns: [{
                    data: 'id',
                    name: 'id',
                },
                {
                    data: 'status',
                    name: 'status',
                    render: function(data, type, row, meta) {
                        if (data == "pending") {
                            return `<span class="bg-gray-500 text-white text-[11px] font-medium mr-1 px-2.5 py-0.5 rounded-full ">Pending</span>`
                        }

                        if (data == "process") {
                            return `<span class="bg-yellow-500 text-white text-[11px] font-medium mr-1 px-2.5 py-0.5 rounded-full ">Process</span>`
                        }

                        if (data == "delivery") {
                            return `<span class="bg-orange-500 text-white text-[11px] font-medium mr-1 px-2.5 py-0.5 rounded-full ">Complete</span>`
                        }

                        if (data == "reject") {
                            return `<span class="bg-red-500 text-white text-[11px] font-medium mr-1 px-2.5 py-0.5 rounded-full ">Reject</span>`
                        }

                        if (data == "complete") {
                            return `<span class="bg-green-500 text-white text-[11px] font-medium mr-1 px-2.5 py-0.5 rounded-full ">Complete</span>`
                        }

                        return data;
                    }
                },
                {
                    data: 'total_checkout',
                    name: 'total_checkout',
                    render: function(data, type, row, meta) {
                        return number_format(data);
                    }
                },
                {
                    data: 'shipping_cost',
                    name: 'shipping_cost',
                    render: function(data, type, row, meta) {
                        return number_format(data);
                    }
                },
                {
                    data: 'receipt',
                    name: 'receipt'
                }
            ],
            drawCallback: function(settings) {
                reinitializeScript()
                lucide.createIcons();
            }
        });
    }
</script>
