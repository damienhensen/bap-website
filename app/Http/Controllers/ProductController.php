<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

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
     * Ga naar CMS
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // make product
        $products = \DB::table('products')->get();
        $count = $products->count();
        return view('product.form', ['ProductTotal' => $count, 'products' => $products]);
    }

    /**
     * Sla product op
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->has('saveProduct')) {

            // validate form and save in db
            $productData = $request->validate([
                'title' => 'required|min:3',
                'description' => 'required|max:150',
                'details' => 'required|min:10',
                'image' => 'image',
                'price' => 'required|numeric|gt:0',
                'date' => 'required|after_or_equal:today',
            ]);

            $newFileName = $productData['image']->store('products', 'public');
            $productData['image'] = $newFileName;

            $product                = new Product();

            $product['name']        = $productData['title'];
            $product['description'] = $productData['description'];
            $product['details']     = $productData['details'];
            $product['price']       = $productData['price'];
            $product['image']       = $productData['image'];
            $product['pubdate']     = $productData['date'];

            $product->save();

        }

        if ($request->has('deleteProduct')) {

            // validate form and delete entry
            $request->validate([
                'id' => 'required|numeric'
            ]);

            \DB::table('products')->where('productID', '=', $request->input('id'))->delete();

        }




        return redirect()->to('admin/cms');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // Haal product op met id $id
        $product = \DB::table('products')->find($id);

        return view('product.details', ['product' => $product]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id, Request $request)
    {
        // Zelfde als show maar dan toch iets anders ;)
        $product = \DB::table('products')->find($id);

        if ($request->has('editProduct')) {

            // validate form and save in db
            $request->validate([
                'title' => 'required|min:3',
                'description' => 'required|max:150',
                'details' => 'required|min:10',
//                'image' => 'required_without:image2|image',
//                'image2' => 'required_without:image|nullable|url|ends_with:.jpg,.jpeg,.png,.svg',
                'price' => 'required|numeric|gt:0',
                'date' => 'required|after_or_equal:today',
            ]);

            \DB::table('products')
                ->where('id', $id)
                ->update(
                    [
                        'name' => $request->input('title'),
                        'description' => $request->input('description'),
                        'details' => $request->input('details'),
//                        'image' => $request->input('image'),
//                        'imagelink' => $request->input('image2'),
                        'price' => $request->input('price'),
                        'pubdate' => $request->input('date')
                    ]
                );

            return redirect()->to('/cms/edit/'.$id);
        }

        return view('product.form-edit', ['product' => $product]);
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
