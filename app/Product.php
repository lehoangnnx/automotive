<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    public $primeryKey = 'id';
    public $timestamps = false;
    public function listImages()
    {
        return $this->hasMany('App\ProductListImages', 'products_id');
    }

}
