@extends('layouts.admin.app')
@section('breadcrumb')
    <li><a href="#" class="text-gray-500 dark:text-slate-400">Admin</a></li>
    <li><span class="text-gray-500 dark:text-slate-400 mx-2">/</span></li>
    <li class="text-gray-500 dark:text-slate-400"><a href="{{ route('admin.product-categories.index') }}"
            class="text-gray-500 dark:text-slate-400">Product Categories</a></li>
    <li><span class="text-gray-500 dark:text-slate-400 mx-2">/</span></li>
    <li><span class="text-gray-500 dark:text-slate-400">Edit Product Category</span></li>
@endsection
@section('content')
    @if (\Session::has('error'))
        <div class="p-3 mb-4 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800" role="alert">
            {!! \Session::get('error') !!}
        </div>
    @endif
    <div class="flex-auto p-4 bg-white">
        <form action="{{ route('admin.product-categories.update', $data->id) }}" method="POST"
            enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="mb-2">
                <label for="name" class="font-medium text-sm text-slate-600 dark:text-slate-400">Product Category
                    Name</label>
                <input type="text" id="name" name="name"
                    class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-1 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500  dark:hover:border-slate-700"
                    required="" value="{{ $data->name }}">
            </div>
            <button type="submit"
                class="inline-block focus:outline-none text-primary-500 hover:bg-primary-500 hover:text-white bg-transparent border border-gray-200 dark:bg-transparent dark:text-primary-500 dark:hover:text-white dark:border-gray-700 dark:hover:bg-primary-500  text-sm font-medium py-1 px-3 rounded mb-1">Submit</button>
        </form>
    </div>
@endsection
