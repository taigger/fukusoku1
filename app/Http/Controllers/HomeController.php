<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Organization;
use App\Fukugyousaki;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user_id = Auth::id();
        $fukugyousakis = Fukugyousaki::where('user_id',$user_id)->get();
        return view('newpost',['fukugyousakis'=> $fukugyousakis]);
    }
    
    public function tables()
    {
        return view('tables');
    }
    
// 　　ここで新規登録をします
     protected function showregister(){
        $company = Auth::user()->company;
        $organizations = Organization::where('company',$company)->get();
        return view('auth/register',['organizations'=> $organizations]);
    }
    
     protected function showcompanyregister(){
        return view('auth/companyregister');
    }
    
    
}
