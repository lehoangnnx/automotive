<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductAttribute extends Model
{
    protected $table = 'products_attributes';
    public $primeryKey = 'id';
    public $timestamps= true;

    public function product()
    {
        return $this->belongsTo('App\Product', 'products_id');
    }
}
