<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Wishlist extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'product_id',
        'date',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function user()
    {
        return $this->hasOne(User::class);
    }

    public function checkUserWishlist($product_id)
    {
        $wishlist = Wishlist::where('user_id', auth()->user()->id)->where('product_id', $product_id)->first();
        if ($wishlist) {
            return true;
        }
        return false;
    }
}
