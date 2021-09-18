<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Arart;
use App\Post;
use App\Fukugyousaki;


class ChartController extends Controller
{
    
    function showchart(){
        
        
        $january = 0;
        $february = 0;
         $march = 0;
         $april = 0;
         $may = 0;
         $june = 0;
        $july = 0;
        $august = 0;
        $september = 0;
        $october = 0;
        $nobember = 0;
        $december = 0;
        
        
        $authority = Auth::user()->auhority;
        
        
        if($authority === 3){
            $user_id = Auth::user()->id;
            $posts = Post::where('user_id',$user_id)->get();
        } elseif($authority != 3){ 
             $posts = Post::whereHas('user',function($query){
             $company = Auth::user()->company;
             $query->where('company',$company);
        })->get();
        
        } 
        
        foreach($posts as $post){
            
        $month = $post->subbmit_month;
        $fukugyotime =  $post->fukugyo_time;
        
          if($month === '2021-01'){
            $january += $fukugyotime;
        }elseif($month ==='2021-02'){
            $february += $fukugyotime;
        }elseif($month === '2021-03'){
            $march += $fukugyotime;
        }elseif($month ==='2021-04'){
            $april += $fukugyotime;
        }elseif($month ==='2021-05'){
            $may += $fukugyotime;
        }elseif($month ==='2021-06'){
            $june += $fukugyotime;
        }elseif($month ==='2021-07'){
            $july += $fukugyotime;
        }elseif($month ==='2021-08'){
            $august += $fukugyotime;
        }elseif($month ==='2021-09'){
            $september += $fukugyotime;
        }elseif($month ==='2021-10'){
            $october += $fukugyotime;
        }elseif($month ==='2021-11'){
            $nobember += $fukugyotime;
        }elseif($month ==='2021-12'){
            $december += $fukugyotime;
        }
        
        
        }
    
     return view('chart',['january'=>$january,'february'=> $february,'march'=> $march, 'april'=> $april,'may'=> $may,'june'=>$june,'july'=>$july,'august'=>$august,'september'=>$september,'october'=>$october,'nobember'=>$nobember,'december'=>$december]);
    }
        function showchart2022(){
        
        $january = 0;
        $february = 0;
         $march = 0;
         $april = 0;
         $may = 0;
         $june = 0;
        $july = 0;
        $august = 0;
        $september = 0;
        $october = 0;
        $nobember = 0;
        $december = 0;
        
        
        
      $posts = Post::whereHas('user',function($query){
             $company = Auth::user()->company;
              $query->where('company',$company);
        })->get();
        
        foreach($posts as $post){
            
        $month = $post->subbmit_month;
        $fukugyotime =  $post->fukugyo_time;
        
          if($month === '2022-01'){
            $january += $fukugyotime;
        }elseif($month ==='2022-02'){
            $february += $fukugyotime;
        }elseif($month === '2022-03'){
            $march += $fukugyotime;
        }elseif($month ==='2022-04'){
            $april += $fukugyotime;
        }elseif($month ==='2022-05'){
            $may += $fukugyotime;
        }elseif($month ==='2022-06'){
            $june += $fukugyotime;
        }elseif($month ==='2022-07'){
            $july += $fukugyotime;
        }elseif($month ==='2022-08'){
            $august += $fukugyotime;
        }elseif($month ==='2022-09'){
            $september += $fukugyotime;
        }elseif($month ==='2022-10'){
            $october += $fukugyotime;
        }elseif($month ==='2022-11'){
            $nobember += $fukugyotime;
        }elseif($month ==='2022-12'){
            $december += $fukugyotime;
        }
        
        
        }
    
     return view('chart2022',['january'=>$january,'february'=> $february,'march'=> $march, 'april'=> $april,'may'=> $may,'june'=>$june,'july'=>$july,'august'=>$august,'september'=>$september,'october'=>$october,'nobember'=>$nobember,'december'=>$december]);
    }
    
     function showchart2023(){
        
        $january = 0;
        $february = 0;
         $march = 0;
         $april = 0;
         $may = 0;
         $june = 0;
        $july = 0;
        $august = 0;
        $september = 0;
        $october = 0;
        $nobember = 0;
        $december = 0;
        
        
        
      $posts = Post::whereHas('user',function($query){
             $company = Auth::user()->company;
              $query->where('company',$company);
        })->get();
        
        foreach($posts as $post){
            
        $month = $post->subbmit_month;
        $fukugyotime =  $post->fukugyo_time;
        
          if($month === '2023-01'){
            $january += $fukugyotime;
        }elseif($month ==='2023-02'){
            $february += $fukugyotime;
        }elseif($month === '2023-03'){
            $march += $fukugyotime;
        }elseif($month ==='2023-04'){
            $april += $fukugyotime;
        }elseif($month ==='2023-05'){
            $may += $fukugyotime;
        }elseif($month ==='2023-06'){
            $june += $fukugyotime;
        }elseif($month ==='2023-07'){
            $july += $fukugyotime;
        }elseif($month ==='2023-08'){
            $august += $fukugyotime;
        }elseif($month ==='2023-09'){
            $september += $fukugyotime;
        }elseif($month ==='2023-10'){
            $october += $fukugyotime;
        }elseif($month ==='2023-11'){
            $nobember += $fukugyotime;
        }elseif($month ==='2023-12'){
            $december += $fukugyotime;
        }
        
        
        }
    
     return view('chart2023',['january'=>$january,'february'=> $february,'march'=> $march, 'april'=> $april,'may'=> $may,'june'=>$june,'july'=>$july,'august'=>$august,'september'=>$september,'october'=>$october,'nobember'=>$nobember,'december'=>$december]);
    }
}