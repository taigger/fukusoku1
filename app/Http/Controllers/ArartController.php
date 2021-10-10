<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use App\Arart;
use App\User;

class ArartController extends Controller
{
      
    public function newarart()
    {   
        $ararts = Arart::get();
        $default_time = 30;
        return view('arart_setting',
        ['ararts' => $ararts,'default_time'=> $default_time]
        );
    }
    //
    public function store(Request $request){
        $arart = new Arart;
        //  $arart->ng_company = $request->ng_time;
        $arart->ng_time = $request->ng_time;
        $arart->ng_industry = $request->ng_industry;
        $arart->companyname = Auth::user()->company;
        $arart->save();
        
        $default_time =  $request->ng_time;
        
        $ararts = Arart::get();
        
       return view('arart_setting',
        ['ararts' => $ararts,'default_time'=> $default_time]
        );
    }
    
      public function destroy($id)
    {
    $arart = Arart::findOrFail($id);
    $arart->delete();       //追加
    return redirect('showarart');  //追加
    }
}
