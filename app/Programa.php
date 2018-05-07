<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Programa extends Model
{
    public $timestamps = false;
  
    public function users(){
        return $this->belongsToMany(User::class);
        return $this->belongsToMany(User::class)->withPivot('fecha_inicio');
    }
  
    public function archivos(){
      
       return $this->morphMany('App\Archivo', 'origen');
    }
  
    public function getProgDepAttribute(){
      return $this->programa . '(' . $this->dependencia . ')';
    } 
  
    public function setProgramaDepattribute($value){
        $this->attributes['programa'] = strtoupper($value); 
       
    } 
}
