<?php

namespace App\Http\Middleware;

use App\Models\ProductCategory;
use Closure;
use Illuminate\Support\Facades\Cache;

class GenerateMenus
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        \Menu::make('MyNavBar', function ($menu) {

            $menu->add('Home', ['route' => 'home', 'class' => 'nav_item'])
                ->link->attr(['class' => 'nav-link h5']);
            $menu->add('Products', ['url' => 'products', 'class' => 'nav_item'])
                ->link->attr(['class' => 'nav-link h5']);
            $menu->add('Contact', ['route' => 'contact', 'class' => 'nav_item'])
                ->link->attr(['class' => 'nav-link h5']);
        });

        \Menu::make('ProductCategory', function ($menu) {

            $locale = \LaravelLocalization::getCurrentLocale();
            $key = 'product_cates_' . $locale;

            if (!Cache::has($key)) {
                Cache::put($key, ProductCategory::tree($locale), 1440);
            }
            $cates = Cache::get($key);

            //var_dump($cates);

            //dd($cates);
            $this->addSubMenu($locale, $cates, $menu);
        });


        return $next($request);
    }

    private function addSubMenu($locale, $cates, $menu)
    {
        
        foreach ($cates as $cate) {
            $hasChildren = count($cate->children) > 0;

            $options = [];
            if ($hasChildren)
                $options = ['class' => 'dropdown'];
            else
                $options = ['url' => $locale . '/products/cate/' . $cate->id];

            $menuItem = $menu->add($cate->name, $options);
            

            $children = $cate->children;

            if ($hasChildren)
                $this->addSubMenu($locale, $children, $menuItem);
        }
    }
}
