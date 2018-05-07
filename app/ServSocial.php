<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServSocial extends Model
{
    public function user(){
      return this_> belogsTo(User);
    }
}
