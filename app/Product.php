<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    public $primeryKey = 'id';
    public $timestamps= true;
    public function attribute()
    {
        return $this->belongsTo('App\ProductAttribute', 'products_id');
    }
}
