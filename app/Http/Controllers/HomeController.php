<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

class HomeController extends Controller
{
    public function index(){
        $products = Product::get();
        return Inertia::render('Welcome',
         [
            'products' => $products,
            'canLogin' => Route::has('login'),
            'canRegister' => Route::has('register')
        ]);
        // return view('app', compact('products'));
    }
}

