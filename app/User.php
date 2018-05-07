<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
	  use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',  'email', 'password', 'password_conf', 'address', 'telephone', 'age' 
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
  
  public function servSocial(){
    return $this->hasOne('App\ServSocial');
  }
  
  public function registros(){
    return $this->hasMany(registro::class);
  }
  
  public function programas(){
    return $this->belongsToMany(Programa::class);
    return $this->belongsToMany(Programa::class)->withPivot('fecha_inicio');
  }
  
  public function archivos(){
    return $this->morphMany(Archivo::class, 'origen');
  }
	
	public function cars(){
		return $this->hasMany(Car::class);
	}
	
	public function massages(){
		return $this->hasMany(Massage::class);
	}
  
  public function setNameAttribute($value){
    
     $this->attributes['name'] = strtoupper($value);
  }
  
}
