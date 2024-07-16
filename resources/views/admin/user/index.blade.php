@extends('layouts.admin.app')
@section('breadcrumb')
    <li><a href="#" class="text-gray-500 dark:text-slate-400">Admin</a></li>
    <li><span class="text-gray-500 dark:text-slate-400 mx-2">/</span></li>
    <li class="text-gray-500 dark:text-slate-400">Users</li>
@endsection
@section('content')
    @if (\Session::has('success'))
        <div class="p-3 mb-4 text-sm text-green-700 bg-green-100 rounded-lg dark:bg-green-200 dark:text-green-800"
            role="alert">
            {!! \Session::get('success') !!}
        </div>
    @endif
    @if (\Session::has('error'))
        <div class="p-3 mb-4 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800" role="alert">
            {!! \Session::get('error') !!}
        </div>
    @endif
    <div class="xl:w-full  min-h-[calc(100vh-56px)] relative pb-0">
        <div class="container my-4 p-4 bg-white">
            <div class="grid grid-cols-12 sm:grid-cols-12 md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12 gap-4">
                <a href="{{ route('admin.users.create') }}"
                    class="px-2 py-1 bg-primary-500/10 border border-transparent collapse:bg-green-100 text-primary text-sm rounded hover:bg-blue-600 hover:text-white"><i
                        class="ti ti-plus me-1"></i> New User</a>
                <div class="col-span-12 sm:col-span-12 md:col-span-12 lg:col-span-12 xl:col-span-12">
                    <div class="grid grid-cols-1">
                        <div class="sm:-mx-6 lg:-mx-8">
                            <div class="relative overflow-x-auto block w-full sm:px-6 lg:px-8">
                                <table id="data-table" class="w-full" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>ID User</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Action</th>
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

    <div class="modal animate-ModalSlide hidden" id="modalcenter">
        <div
            class="relative w-auto pointer-events-none sm:max-w-lg sm:my-0 sm:mx-auto z-[99] flex items-center h-[calc(100%-3.5rem)]">
            <form action="{{ route('admin.users.destroy', 'id') }}" method="POST" enctype="multipart/form-data">
                @method('DELETE')
                @csrf
                <div class="relative flex flex-col w-full pointer-events-auto bg-white dark:bg-slate-800 bg-clip-padding rounded"
                    style="left: 50%">
                    <div
                        class="flex shrink-0 items-center justify-between py-2 px-4 rounded-t border-b border-solid dark:border-gray-700 bg-slate-800">
                        <h6 class="mb-0 leading-4 text-base font-semibold text-slate-300 mt-0" id="staticBackdropLabel1">
                            Delete User</h6>
                        <button type="button"
                            class="box-content w-4 h-4 p-1 bg-slate-700/60 rounded-full text-slate-300 leading-4 text-xl close"
                            aria-label="Close" data-fc-dismiss>&times;</button>
                    </div>
                    <div class="relative flex-auto p-4 text-slate-600 dark:text-gray-300 leading-relaxed">
                        <input type="hidden" name="user_id" id="user_id">
                        <p>Are you sure to delete?</p>
                    </div>
                    <div
                        class="flex flex-wrap shrink-0 justify-end p-3  rounded-b border-t border-dashed dark:border-gray-700">
                        <button type="button"
                            class="inline-block focus:outline-none text-red-500 hover:bg-red-500 hover:text-white bg-transparent border border-gray-200 dark:bg-transparent dark:text-red-500 dark:hover:text-white dark:border-gray-700 dark:hover:bg-red-500  text-sm font-medium py-1 px-3 rounded mr-1 close"
                            data-fc-dismiss>Close</button>
                        <button type="submit"
                            class="inline-block focus:outline-none text-primary-500 hover:bg-primary-500 hover:text-white bg-transparent border border-gray-200 dark:bg-transparent dark:text-primary-500 dark:hover:text-white dark:border-gray-700 dark:hover:bg-primary-500  text-sm font-medium py-1 px-3 rounded">Yes</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
@section('script')
    <script>
        $(document).ready(function() {
            initializeTable()
        })

        function openModal(id) {
            $('#user_id').val(id)
        }

        function initializeTable() {
            table = new DataTable('#data-table', {
                ajax: `{{ route('admin.users.index') }}`,
                processing: true,
                serverSide: true,
                columns: [{
                        data: 'id',
                        name: 'id',
                    },
                    {
                        data: 'name',
                        name: 'name'
                    },
                    {
                        data: 'email',
                        name: 'email'
                    },
                    {
                        data: 'action',
                        name: 'action'
                    }
                ],
                drawCallback: function(settings) {
                    reinitializeScript()
                    lucide.createIcons();
                }
            });
        }
    </script>
@endsection
