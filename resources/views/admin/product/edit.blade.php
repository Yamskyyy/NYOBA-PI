@extends('layouts.admin.app')
@section('breadcrumb')
    <li><a href="#" class="text-gray-500 dark:text-slate-400">Admin</a></li>
    <li><span class="text-gray-500 dark:text-slate-400 mx-2">/</span></li>
    <li class="text-gray-500 dark:text-slate-400"><a href="{{ route('admin.product.index') }}"
            class="text-gray-500 dark:text-slate-400">Product</a></li>
    <li><span class="text-gray-500 dark:text-slate-400 mx-2">/</span></li>
    <li><span class="text-gray-500 dark:text-slate-400">Edit Product</span></li>
@endsection
@section('content')
    @if (\Session::has('error'))
        <div class="p-3 mb-4 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800" role="alert">
            {!! \Session::get('error') !!}
        </div>
    @endif
    <div class="flex-auto p-4 bg-white">
        <form action="{{ route('admin.product.update', $data->id) }}" method="POST" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="mb-2">
                <label for="category" class="font-medium text-sm text-slate-600 dark:text-slate-400">Product
                    Category</label>
                <select id="category"
                    class="w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-2 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500  dark:hover:border-slate-700"
                    name="product_category_id">
                    @foreach ($product_categories as $item)
                        <option class="dark:text-slate-700" value="{{ $item->id }}"
                            {{ $item->id == $data->product_category_id ? 'selected' : '' }}>{{ $item->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-2">
                <label for="name" class="font-medium text-sm text-slate-600 dark:text-slate-400">Product Name</label>
                <input type="text" id="name" name="name"
                    class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-1 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500  dark:hover:border-slate-700"
                    required="" value="{{ $data->name }}">
            </div>
            <div class="mb-2">
                <label for="name" class="font-medium text-sm text-slate-600 dark:text-slate-400">Product
                    Description</label>
                <textarea name="description" id="description" rows="3"
                    class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-1 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500  dark:hover:border-slate-700"
                    placeholder="Description">{{ $data->description }}</textarea>
            </div>
            <div class="mb-2">
                <label for="weight" class="font-medium text-sm text-slate-600 dark:text-slate-400">Weight</label>
                <input type="number" id="weight" name="weight"
                    class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-1 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500  dark:hover:border-slate-700"
                    required="" value="{{ $data->weight }}">
            </div>
            <div class="mb-2">
                <label for="image" class="font-medium text-sm text-slate-600 dark:text-slate-400">Image</label>
                <img src="{{ Storage::url($data->image) }}" />
                <input type="file" id="image" name="image"
                    class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-1 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500  dark:hover:border-slate-700"
                    required="">
            </div>
            <button type="submit"
                class="inline-block focus:outline-none text-primary-500 hover:bg-primary-500 hover:text-white bg-transparent border border-gray-200 dark:bg-transparent dark:text-primary-500 dark:hover:text-white dark:border-gray-700 dark:hover:bg-primary-500  text-sm font-medium py-1 px-3 rounded mb-1">Submit</button>
        </form>
    </div>
@endsection
