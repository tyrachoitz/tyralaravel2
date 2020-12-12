<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Services extends Model
{
    protected $table = 'services';
    public $primaryKey = 'id';

    protected $guarded = [];

 // public function path()
 // {
 //     return route('service.show, $this');
 // }

 // // //public function user()
 // // public function author()
 // // {
 // //     return $this->belongsTo(User::class, 'user_id'); //FK user_id (nak tahu siapa user_id)
 // // }
 // public function services()
 // {
 //     return $this->hasMany(Services::class);
 // }
}//
