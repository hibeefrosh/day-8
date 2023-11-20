<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class CheckoutController extends Controller
{
    public function showCheckout()
    {
        $products = Product::all();
        $subtotal = $products->sum('price');
        $shipping = 20.00;
        $total = $subtotal + $shipping;

        return view('checkout', compact('products', 'subtotal', 'shipping', 'total'));
    }
}
