<?php

namespace App\Http\Controllers;

use App\Models\Basket;
use App\Models\Product;
use Illuminate\Http\Request;

class CartConrtroller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function store(Request $request){
        $current_user = auth()->user();
        $user_id = $current_user->id;
        $product_id = $request->product_id;
        $qty = 1;
        $product = Product::find($product_id)->first();

        $basket = Basket::where('product_id', $product_id)->where('user_id', $user_id)->first();

        if(!$basket){
            Basket::create([
                'product_id' => $product_id,
                'user_id'    => $user_id,
                'qty'        => $qty,
                'price'      => $product->sale_price
        ]);
        }
        else{
            $basket->qty += 1;
            $basket->price += $product->sale_price;
            $basket->save();
        }
        $basket_count = Basket::where('product_id', $product_id)->where('user_id', $user_id)->count();

        return response()->json(["basket-count"=> $basket_count], 200);
    }
}
