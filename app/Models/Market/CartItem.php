<?php

namespace App\Models\Market;

use App\Models\User;
use App\Models\Market\Product;
use App\Models\Market\Guarantee;
use App\Models\Market\ProductColor;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CartItem extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['color_id', 'number', 'product_id', 'user_id', 'guarantee_id'];


    public function product()
    {
        return $this->belongsTo(Product::class);
    }


    public function user()
    {
        return $this->belongsTo(User::class);
    }


    public function guarantee()
    {
        return $this->belongsTo(Guarantee::class);
    }


    public function color()
    {
        return $this->belongsTo(ProductColor::class);
    }



    //productPrice + colorPrice + guranateePrice
    public function cartItemProductPrice()
    {
        $guaranteePriceIncrease = empty($this->guarantee_id) ? 0 : $this->guarantee->price_increase;
        $colorPriceIncrease = empty($this->color_id) ? 0 : $this->color->price_increase;
        return $this->product->price + $guaranteePriceIncrease + $colorPriceIncrease;
    }


    // productPrice * (discountPerecentage / 100)
    public function cartItemProductDiscount()
    {
        $cartItemProductPrice = $this->cartItemProductPrice();
        $productDiscount = empty($this->product->activeAmazingSales()) ? 0 : $cartItemProductPrice * ($this->product->activeAmazingSales()->percentage / 100);
        return $productDiscount;
    }


    //number * (productPrice + colorPrice + guranateePrice - discountPrice)
    public function cartItemFinalPrice()
    {
        $cartItemProductPrice = $this->cartItemProductPrice();
        $productDiscount = $this->cartItemProductDiscount();
        return $this->number * ($cartItemProductPrice - $productDiscount);
    }


    //number * productDiscount
    public function cartItemFinalDiscount()
    {
        $productDiscount = $this->cartItemProductDiscount();
        return $this->number * $productDiscount;
    }
}