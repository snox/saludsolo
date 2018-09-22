<?php

namespace App\Models;

use Dimsav\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use Translatable;

    //
    public $timestamps = false;

    public $translationModel = 'App\Models\ProductTranslation';
    public $translationForeignKey = 'product_id';
    public $translatedAttributes  = ['name', 'content'];
}
