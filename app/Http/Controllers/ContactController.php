<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function showPage()
    {
        $voornaam = 'Joe';

        return view('contact', ['voornaam' => $voornaam]);
    }
}
