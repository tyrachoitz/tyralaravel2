<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carwork extends Model
{
    protected $table = 'carworks';


    public $primaryKey = 'id';
    //
    public $timestamps = true;

}
