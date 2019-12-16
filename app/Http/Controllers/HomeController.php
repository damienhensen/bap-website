<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Haal alle bedrijven op met QueryBuilder
//        $companies = \DB::table('companies')->get();
//        $companies = \DB::table('companies')->orderBy('name')->get();
//        $companies = \DB::table('companies')->where('country', '=', 'Bahamas')->get();
//        $companies = \DB::table('companies')->where('country', '=', 'Bahamas')->where('city', '=', 'Middelkerke')->get();
//        $companies = \DB::table('companies')->where('country', '=', 'Bahamas')->where('city', '=', 'Middelkerke')->value('name');
//        dd($companies);

        // laat alle producten zien
        $products = \DB::table('products')->orderBy('price', 'Asc')->get();

        return view('home', ['products' => $products]);
    }



    public function showName($naam)
    {
        return view('hello', ['naam' => $naam]);
    }
}
