<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // make product
        return view('product.form-create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validate form and save in db
        $request->validate([
            'title' => 'required|min:3',
            'description' => 'required|min:10',
            'image' => 'required_without:image2|image',
            'image2' => 'required_without:image|nullable|url|ends_with:.jpg,.jpeg,.png,.svg',
            'price' => 'required|numeric|gt:0',
            'date' => 'required|after_or_equal:today',
        ]);

        \DB::table('products')->insert([
            [
                'productName' => $request->input('title'),
                'productDetails' => $request->input('description'),
                'productImage' => $request->input('image'),
                'productImageLink' => $request->input('image2'),
                'productPrice' => $request->input('price'),
                'productPubDate' => $request->input('date')
            ]
        ]);

        return $this->create();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('product', ['id' => $id]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
