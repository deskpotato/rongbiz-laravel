<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class NewsController extends Controller
{
    public function index(){
        //集团动态 推荐
        $c_recommend = Article::where('recommend','1')->where('category','1')->orderby('created_at','DESC')->first();
        //取最新四条 集团动态
        if($c_recommend){

            $c_news = Article::where('id','!=',$c_recommend->id)->where('category','1')->orderby('created_at','DESC')->get();
        }else{
            $c_news = Article::where('category','1')->orderby('created_at','DESC')->get();
        }

        //行业动态 推荐
        $h_recommend = Article::where('recommend','1')->where('category','2')->orderby('created_at','DESC')->first();
        //取最新四条 行业动态
        if($h_recommend){

            $h_news = Article::where('id','!=',$h_recommend->id)->where('category','2')->orderby('created_at','DESC')->get();
        }else{
            $h_news = Article::where('category','2')->orderby('created_at','DESC')->get();
        }

        return view('news.index',compact('c_recommend','c_news','h_recommend','h_news'));
    }

    //新闻详情页，上一篇，下一篇
    public function show(Article $article)
    {
        $preArticleId = Article::where('id','<',$article->id)->max('id');
        $preArticle  =Article::find($preArticleId);

        $nextArticleId = Article::where('id','>',$article->id)->min('id');
        $nextArticle  =Article::find($nextArticleId);

        return view('news.show',compact('article','preArticle','nextArticle'));
    }

    //新闻列表
    public function list()
    {
        $catehory = request()->category;
        $articles = Article::orderby('created_at','DESC')->paginate(10);
        return view('news.list',compact('articles'));
    }
}
