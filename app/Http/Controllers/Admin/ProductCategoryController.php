<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ProductCategory;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class ProductCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = ProductCategory::all();

            return DataTables::of($data)
                ->addColumn('action', function ($row) {
                    return '<div class="flex flex-row items-center gap-2">
                        <a href="' . route('admin.product-categories.edit', $row->id) . '">
                            <i data-lucide="pen" class="top-icon w-5 h-5 text-green-500"></i>
                        </a>
                        <button type="button" data-fc-type="modal" data-fc-target="modalcenter"
                            onclick="openModal(' . $row->id . ')">
                            <i data-lucide="trash" class="top-icon w-5 h-5 text-red-500"></i>
                        </button>
                    </div>';
                })
                ->rawColumns(['action'])
                ->toJson();
        }
        return view('admin.product_category.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.product_category.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            ProductCategory::create([
                'name' => $request->name,
            ]);

            return redirect()->route('admin.product-categories.index')->with('success', "Product Category Added");
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', $th->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = ProductCategory::find($id);

        return view('admin.product_category.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try {

            $data = ProductCategory::find($id);

            $data->update([
                'name' => $request->name,
            ]);

            return redirect()->route('admin.product-categories.index')->with('success', "Product Category Updated");
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', $th->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, string $id)
    {
        try {
            $data = ProductCategory::find($request->product_category_id);

            $data->delete();

            return redirect()->back()->with('success', "Product Category deleted");
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', $th->getMessage());
        }
    }
}
