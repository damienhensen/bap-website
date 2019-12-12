<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {

        $posts = [
            'Why',
            'is',
            'this',
            'a',
            'thing',
            'haha lol'
        ];

        return view('home', ['posts' => $posts]);
    }

    public function showName($naam)
    {
        return view('hello', ['naam' => $naam]);
    }
}
