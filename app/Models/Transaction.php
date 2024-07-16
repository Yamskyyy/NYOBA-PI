<?php

namespace App\Models;

use Illuminate\Contracts\Database\Query\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Transaction extends Model
{
    use HasFactory;

    protected $guarded = ["created_at", "updated_at"];

    public function scopeGetTransactionByUser(Builder $query)
    {
        $query->where('user_id', Auth::user()->id);
    }
}
