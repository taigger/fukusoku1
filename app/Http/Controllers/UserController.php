<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Auth;
use App\User;
use App\Post;

class UserController extends Controller
{
     function create(Request $request)
    {
        
        $user = new User;
        $user->name = $request->name;
        $user->email=$request->email;
        $user->password = Hash::make($request['password']);
        $user->authority = 3;
        $user ->company = Auth::user()->company;
        $user->organization=$request->organization;
        $user->save();
        return redirect('/tables');
        // return User::create([
        //     'name' => $request['name'],
        //     'email' => $request['email'],
        //     'password' => Hash::make($request['password']),
        // ]);
    }
    
    // 企業アカウントの発行
     function createcompany(Request $request)
    {
        
        $user = new User;
        $user->name = $request->name;
        $user->email=$request->email;
        $user->password = Hash::make($request['password']);
        $user->authority = 2;
        $user->company = $request->company;
        $user->save();
        return redirect('/tables');
        // return User::create([
        //     'name' => $request['name'],
        //     'email' => $request['email'],
        //     'password' => Hash::make($request['password']),
        // ]);
    }
    
    function alluser(Request $request){
        
          $company = Auth::user()->company;
          $users = User::where('company',$company)->get();
    
        
        return view('alluser',['users'=> $users]);
      }
      
      function allcompany(Request $request){
          
        $companys = User::groupBy('company')->get(['company']);
        return view('allcompany',['companys'=> $companys]);
          
      }
      
      function accountsetting(){
          $user= Auth::user();
          return view('account_inf',['user'=> $user]);
          
      }
    
}