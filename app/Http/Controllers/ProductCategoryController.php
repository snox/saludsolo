<?php

namespace App\Http\Controllers;

use App\Models\ProductCategory;
use App\Models\ProductCategoryTranslation;
use Illuminate\Http\Request;

class ProductCategoryController extends Controller
{

    public function index()
    {

        $cates = ProductCategory::all();

        return view('product_category.index')->withProductCategories($cates);
    }

    public function updateLocale(Request $request)
    {
        $locale = $request->input("locale");
        $cid = $request->input("category_id");

        ProductCategoryTranslation::updateOrCreate(['locale' => $locale, 'category_id' => $cid],
            ['name' => $request->input('name')]);

        return redirect('/'.$locale.'/product/categories');
    }
}
