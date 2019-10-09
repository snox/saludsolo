<?php

namespace App\Http\Controllers;

use App\Models\Product;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$locale = \LaravelLocalization::getCurrentLocale();

        $products = Product::where('show_on_home', true)->orderBy('id', 'desc')->take(20)->get();

        foreach ($products as $product)
        {
            $product->image = str_replace('_{i}xa.png', '', $product->image);
        }

        return view('home')->withProducts($products);
    }

    public function contractUs()
    {
        return view('contract');
    }

    public function admin()
    {
        return view('admin')->with('adminlte', config('adminlte'));
    }
}
