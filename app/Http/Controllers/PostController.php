<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function showPost($id) 
    {
        return view('post', ['id' => $id]);
    }
}
