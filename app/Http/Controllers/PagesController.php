<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route as IlluminateRoute;
use App\Models\Article;

class PagesController extends Controller
{
    
    public function root()
    {
         //集团动态 推荐
         $c_recommend = Article::where('index_recommend','1')->where('category','1')->orderby('created_at','DESC')->first();
         //取最新四条 集团动态
         if($c_recommend){
             $c_news = Article::where('id','!=',$c_recommend->id)->where('category','1')->orderby('created_at','DESC')->get();
         }else{
             $c_news = Article::where('category','1')->orderby('created_at','DESC')->get();
         }
 
         //行业动态 推荐
         $h_recommend = Article::where('index_recommend','1')->where('category','2')->orderby('created_at','DESC')->first();
         //取最新四条 行业动态
         if($h_recommend){
             $h_news = Article::where('id','!=',$h_recommend->id)->where('category','2')->orderby('created_at','DESC')->get();
         }else{
             $h_news = Article::where('category','2')->orderby('created_at','DESC')->get();
         }
        return view('pages.root',compact('c_recommend','c_news','h_recommend','h_news'));    
    }
}
