<?php

class ComposerServiceProvider extends \Illuminate\Support\ServiceProvider
{
    public function boot()
    {
        view()->composer('product.index', 'App\Http\ViewComposers\MenuComposer');
    }
}