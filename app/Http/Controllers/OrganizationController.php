<?php


namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Organization;
use Auth;

class OrganizationController extends Controller
{
    
    function create(Request $request){
        
      $user = Auth::user();
      $organization = new Organization;
      $organization -> company = $user->company;
      $organization -> organization = $request->organization;
      $organization -> save();
       return redirect('/organizations');
    }
    
    function show(){
        $company = Auth::user()->company;
        $organizations = Organization::where('company',$company)->get();
        return view('organization',['organizations'=> $organizations]);
    }
    //
}
