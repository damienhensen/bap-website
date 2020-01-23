<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class HomeController2 extends Controller
{
    public function index()
    {
        // laat alle producten zien
        $products = Product::orderBy('price', 'Asc')->paginate(6);

        return view('home2', ['products' => $products]);
    }

    public function showName($naam)
    {
        return view('hello', ['naam' => $naam]);
    }
}
