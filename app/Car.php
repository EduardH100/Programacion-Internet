<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    //public $timestamps = false;
    protected $fillable = ['user_id', 'price', 'name', 'model', 'brand', 'description',
													'user_address', 'year', 'user_tel'];
  
    public function user(){
        return $this->belongsTo(User::class);
    }
}
