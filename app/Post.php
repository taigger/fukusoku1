<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
// 2.　web.phpに以下二行を追記してモデルを呼び出す
use App\Post;
use Illuminate\Http\Request;

class Post extends Model
{
     protected $fillable = ['status'];
     
    public function user(){
        return $this->belongsTo('App\User');
    }
    //
}
