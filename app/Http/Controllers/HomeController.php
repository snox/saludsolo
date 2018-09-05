<?php

namespace App\Http\Controllers;

use App\Models\ProductCategory;
use Illuminate\Http\Request;

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
        //dd(ProductCategory::tree());
        return view('home');
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
