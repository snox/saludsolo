<?php

namespace App\Http\Middleware;

use App\Models\ProductCategory;
use Closure;

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

//            $menu->add("Products", ['url' => 'product',
//                'class' => 'nav-item hs-has-sub-menu u-header__nav-item hs-sub-menu-opened',
//                'data-event' => 'hover',
//                'data-animation-in' => 'slideInUp',
//                'data-animation-out' => 'fadeOut'
//            ])
//                ->link->attr([
//                    'class' => 'nav-link h5 dropdown-toggle',
//                    'role' =>'button',
//                    'aria-haspopup' => 'true',
//                    'aria-expanded' => 'false',
//                ]);
            $menu->add('Products', ['url' => 'products', 'class' => 'nav_item'])
                ->link->attr(['class' => 'nav-link h5']);
            $menu->add('Contact', ['route' => 'contact', 'class' => 'nav_item'])
                ->link->attr(['class' => 'nav-link h5']);

//             $cates = ProductCategory::tree();
//             foreach ($cates as $cate) {
//                 $menu->products->add($cate->name, ['class' => 'dropdown-item hs-has-sub-menu'])
//                    ->link->attr(['class' => 'nav-link u-header__sub-menu-nav-link u-list__link py-2']);
//             }
            //$menu->products->attr(['class' => 'list-inline hs-sub-menu u-header__sub-menu py-3 mb-0', 'id' => 'dropdown']);
        });



        return $next($request);
    }
}
