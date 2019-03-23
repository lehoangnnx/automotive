<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AttributeValue extends Model
{
    protected $table = 'attributes_values';
    public $primeryKey = 'id';
    public $timestamps= false;

    public function attribute()
    {
        return $this->belongsTo('App\Attribute', 'attributes_id');
    }
    public function productAttribute()
    {
        return $this->hasMany('App\ProductAttribute', 'attributes_values_id');
    }
}
