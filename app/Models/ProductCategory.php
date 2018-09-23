<?php

namespace App\Models;

use Dimsav\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
    use Translatable;

    public $timestamps = false;

    public $translationModel = 'App\Models\ProductCategoryTranslation';
    public $translationForeignKey = 'category_id';
    public $translatedAttributes  = ['name'];


    public function parent() {
        return $this->belongsTo('App\Models\ProductCategory', 'id', 'pid');
    }

    public function children() {
        return $this->hasMany('App\Models\ProductCategory', 'pid', 'id');
    }

    public function delete() {
        $this->translations()->delete();
        return parent::delete();
    }

    public static function tree() {
        return static::with(implode('.', array_fill(0, 4, 'children')))->where('pid', '=', 0)->get();
    }
}
