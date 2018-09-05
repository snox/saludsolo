<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
    //
    public $timestamps = false;


    public function parent() {
        return $this->hasOne('App\Models\ProductCategory', 'id', 'pid');
    }

    public function children() {
        return $this->hasMany('App\Models\ProductCategory', 'pid', 'id');
    }

    public static function tree() {
        return static::with(implode('.', array_fill(0, 4, 'children')))->where('pid', '=', 0)->get();
    }
}
