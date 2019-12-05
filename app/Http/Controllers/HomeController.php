<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $voornaam = 'Joe';
        $achternaam = 'Mama';

        $posts = [
            'Why',
            'is',
            'this',
            'a',
            'thing',
            'haha lol'
        ];

        return view('home', ['voornaam' => $voornaam, 'achternaam' => $achternaam, 'posts' => $posts]);
    }

    public function showName($naam)
    {
        return view('hello', ['naam' => $naam]);
    }
}
