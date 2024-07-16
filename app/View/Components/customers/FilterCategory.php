<?php

namespace App\View\Components\Customers;

use App\Models\ProductCategory;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class FilterCategory extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $categories = ProductCategory::all();

        return view('components.customers.filter-category', compact('categories'));
    }
}
