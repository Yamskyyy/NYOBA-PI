<?php

namespace App\Models;

use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Cart extends Model
{
    use HasFactory;

    protected $guarded = ['created_at', 'updated_at'];

    public function scopeGetCartByUser(Builder $query): void
    {
        $query->selectRaw("carts.id as id, qty as total_qty, name, description, price, image, product_id, user_id, weight")
            ->leftJoin('products', 'products.id', '=', 'carts.product_id')
            ->where('user_id', Auth::user()->id);
    }

    public function scopeGetTotalCheckoutByUser(Builder $query): void
    {
        $query->selectRaw("SUM(qty * price) as total_checkout")
            ->leftJoin('products', 'products.id', '=', 'carts.product_id')
            ->where('user_id', Auth::user()->id)
            ->groupBy('user_id');
    }
}