<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Features extends Model
{
    protected $table = 'features';
    public $primeryKey = 'id';
    public $timestamps= true;
}
