<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductListImages extends Model
{
    protected $table = 'products_list_images';
    public $primeryKey = 'id';
    public $timestamps= false;
}
