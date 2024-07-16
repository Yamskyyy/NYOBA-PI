<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $products = Product::with(['product_category'])
            ->orderBy('created_at', 'desc')
            ->take(5)
            ->get();

        return view('customers.home', compact('products'));
    }
}
