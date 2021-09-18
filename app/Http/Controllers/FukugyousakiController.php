<?php


namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Fukugyousaki;
use App\User;
use Auth;

class FukugyousakiController extends Controller
{
    
    function create(Request $request){
        
      $fukugyousaki = new Fukugyousaki;
      $fukugyousaki -> user_id = Auth::id();
      $fukugyousaki -> fukugyousaki = $request->fukugyousaki;
      $fukugyousaki -> save();
       return redirect('/fukugyousakis');
    }
    
    function show(){
        $user_id = Auth::id();
        $fukugyousakis = Fukugyousaki::where('user_id',$user_id)->get();
        return view('fukugyousaki',['fukugyousakis'=> $fukugyousakis]);
    }
    //
}
