<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Massage extends Model
{
    public $timestamps = false;
    protected $fillable = ['user_id', 'mensaje'];
  
    public function user(){
        return $this->belongsTo(User::class);
    }
}
