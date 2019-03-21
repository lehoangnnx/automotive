<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attribute extends Model
{
    protected $table = 'attributes';
    public $primeryKey = 'id';
    public $timestamps= true;
    public function attributeValue(){
        return $this->hasMany('App\AttributeValue', 'attributes_id');

    }
}
