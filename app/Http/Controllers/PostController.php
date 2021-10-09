<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Arart;
use App\Post;
use App\Fukugyousaki;


class PostController extends Controller
{
    
    // これをいれないと承認作業ができん
  
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     * 
     * 
     * 
     */
     
     
         
    // 新規登録画面の表示
    public function newpost()
    {
        $user_id = Auth::id();
        $fukugyousakis = Fukugyousaki::where('user_id',$user_id)->get();
        return view('newpost', ['fukugyousakis' => $fukugyousakis]);
    }
    
    //  テーブルの追加
    public function store(Request $request)
    {   
       
        $post = new Post;
        $post ->fukugyo_company = $request->fukugyo_company;
        $fukugyo_company = $request->fukugyo_company;
        $fukugyousaki = Fukugyousaki::where('fukugyousaki',$fukugyo_company)->first();
        $post ->fukugyo_industry = $fukugyousaki->gyousyu;
        // $post ->fukugyo_industry = $request->fukugyo_industry;
        $post ->fukugyo_naiyou = $request->fukugyo_naiyou;
         $post ->subbmit_month = $request->subbmit_month;
         $post ->fukugyo_time = $request->fukugyo_time;
         $post ->status = '承認待';
        $post ->user_id = Auth::id();
        
        
        $ararts = Arart::get();
        
        foreach($ararts as $arart){
            
            if($arart->ng_industry === $request->fukugyo_industry && $arart->ng_time < $request->fukugyo_time){
                 $post->judge = 'C';
                 break;
            }elseif($arart->ng_time *2 < $request->fukugyo_time){
                $post->judge = 'C';
                break;
            }elseif($arart->ng_industry === $request->fukugyo_industry){
                $post->judge = 'B';
                break;
            }elseif($arart->ng_time < $request->fukugyo_time){
                $post->judge = 'B';
                break;
            }else{
                $post->judge = 'A';
            }
        }
        
        $post->save(); 
        
        return redirect('/usertables');
    }

    
       //  テーブルの表示
    // 自社の従業員が申請したものしか表示されません
    public function tables(){
        // $company = Auth::user()->company;
        $posts = Post::whereHas('user',function($query){
             $company = Auth::user()->company;
            $query->where('company',$company);
        })->get();
        
        
        return view('tables', ['posts' => $posts ]);
    }
    
    // ユーザー向けテーブル表示
    
    public function usertables(){
        $user_id = Auth::user()->id;
        $posts = Post::where('user_id',$user_id)->get();
        
     
        return view('usertables', ['posts' => $posts]);
    }
    
    //承認・差戻しアクション
    public function approve(Request $request,$id){
        
        // Post::find ($id)->update([
        // 'status' => $request->status
        // ]);
        $post = Post::find ($id);
        $post->status = $request ->status;
        $post->comment = $request ->comment;
        $post->update();
        return redirect('/tables');
    }

    
       public function newlesson(){
        return view('teacher.lesson_register');
   }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   
     public function show(lesson $lessons)
    {
         $lesson = Lesson::find($id);
        return view('lesson', ['lesson' => $lesson]);
    }
    


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    $post = Post::findOrFail($id);
    $post->delete();       //追加
    return redirect('usertables');  //追加
    }
    
    
 
}