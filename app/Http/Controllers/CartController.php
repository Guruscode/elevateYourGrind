<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class CartController extends Controller
{
    public function store(Request $request)
    {
        try {
            $cart = $request->input(); // Retrieve cart data from request
            session(['cart' => $cart]); // Save to session
    
            return response()->json(['success' => true]);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => $e->getMessage()], 500);
        }
    }
    
    public function show()
    {
        $cart = session('cart', []); // Retrieve cart data from session
        return view('cart', ['cart' => $cart]);
    }
}
