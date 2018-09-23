<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Http\Request;
use Spatie\Menu\Laravel\Menu;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::orderBy('id', 'desc')->paginate(20);

        $cates = ProductCategory::all();

        foreach ($products as $product)
        {
            $product->image = str_replace('_{i}xa.png', '', $product->image);
        }

        return view('product.index')->withProducts($products)->withProductCategories($cates);
    }

    public function cate($id)
    {
        $products = Product::orderBy('id', 'desc')->where('cate_id', $id)->paginate(20);

        foreach ($products as $product)
        {
            $product->image = str_replace('_{i}xa.png', '', $product->image);
        }

        return view('product.index')->withProducts($products);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        $product = Product::find($id);
        return view('product.show')->withProduct($product);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        return view('product.edit')->withProduct($product);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product = Product::find($id);

        $this->validate($request, array('name' => 'required',
            'content' => 'required'));

        $product->name = $request->input('name');
        $product->content = $request->input('content');

        $product->save();

        //Session::flash('success', 'Product updated');

        return redirect()->route('products.show', $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
