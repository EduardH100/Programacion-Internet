<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Archivo extends Model
{
    protected $fillable = ['origen_id', 'origen_type', 'original_name', 'fs_name', 'mime', 'size', 'directorio'];
  
    public function origen(){
      
        return $this->morphTo();
    }
}

/*configurar xammp

c:/xammp/htdocs/Nombredelproyecto/public
xammp/apache/conf/httpd.conf
 -modificar el DocumentRoot que apunte al directorio public
index.php
index.html

en ServerName poner el nombre del sitio
