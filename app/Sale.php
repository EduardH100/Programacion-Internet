<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    public $timestamps = false;
    protected $fillable = ['car_id', 'seller_id', 'buyer_id', 'price', 'way_pay'];
  
    public function user(){
        return $this->belongsTo(User::class);
    }
}
