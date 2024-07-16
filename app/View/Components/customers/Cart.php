<?php

namespace App\View\Components\Customers;

use App\Models\Cart as ModelsCart;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\View\Component;

class Cart extends Component
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
        $count = ModelsCart::where('user_id', Auth::user()->id)
            ->distinct('product_id')
            ->count();

        return view('components.customers.cart', compact('count'));
    }
}
