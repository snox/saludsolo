<?php

namespace App\Http\ViewComposers;


use App\Models\ProductCategory;
use Illuminate\Support\Facades\Cache;
use Illuminate\View\View;

class MenuComposer
{
    public function managerMenus()
    {
        if (!Cache::has('menus')) {
            $menus = ProductCategory::tree();

            Cache::put('menus', $menus, 1440);
        }
    }

    public function compose(View $view)
    {
        $this->managerMenus();

        $view->with('menus', Cache::get('menus'));
    }
}