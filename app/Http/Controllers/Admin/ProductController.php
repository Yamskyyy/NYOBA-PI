<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Service\UploadFileService;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    public function __construct(public UploadFileService $uploadFileService)
    {
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Product::with('product_category')->get();

            return DataTables::of($data)
                ->addColumn('action', function ($row) {
                    return '<div class="flex flex-row items-center gap-2">
                        <a href="' . route('admin.product.edit', $row->id) . '">
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
        return view('admin.product.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $product_categories = ProductCategory::all();

        return view('admin.product.add', compact('product_categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $path = $this->uploadFileService->uploadFile($request->file('image'));

            Product::create([
                'name' => $request->name,
                'description' => $request->description,
                'price' => $request->price,
                'weight' => $request->weight,
                'product_category_id' => $request->product_category_id,
                'image' => $path,
                'slug' => Str::slug($request->name)
            ]);

            return redirect()->route('admin.product.index')->with('success', "Product Added");
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
        $data = Product::find($id);
        $product_categories = ProductCategory::all();

        return view('admin.product.edit', compact('data', 'product_categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try {

            $data = Product::find($id);

            if ($request->file('image') != null) {
                $path = $this->uploadFileService->uploadFile($request->file('image'));
            } else {
                $path = $data->image;
            }

            $data->update([
                'name' => $request->name,
                'description' => $request->description,
                'price' => $request->price,
                'weight' => $request->weight,
                'product_category_id' => $request->product_category_id,
                'image' => $path,
                'slug' => Str::slug($request->name)
            ]);

            return redirect()->route('admin.product.index')->with('success', "Product Updated");
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
            $data = Product::find($request->product_id);

            $data->delete();

            return redirect()->back()->with('success', "Product deleted");
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', $th->getMessage());
        }
    }
}
