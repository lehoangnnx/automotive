<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AttributeValue extends Model
{
    protected $table = 'attributes_values';
    public $primeryKey = 'id';
    public $timestamps= true;

    public function attribute()
    {
        return $this->belongsTo('App\Attribute', 'id');
    }
    public function productAttribute()
    {
        return $this->hasMany('App\ProductAttribute', 'attributes_values_id');
    }
}
