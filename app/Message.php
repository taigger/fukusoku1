<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Message;
use Illuminate\Http\Request;

class Message extends Model
{
    
    
      public function user(){
        return $this->belongsTo('App\User');
    }
    //
}
