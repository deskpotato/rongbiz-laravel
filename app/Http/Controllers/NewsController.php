<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use Illuminate\Support\Facades\Route;
use App\Models\Hotword;

class NewsController extends Controller
{
    public function index(){

       

        //集团动态 推荐
        $c_recommend = Article::where('recommend','1')->where('category','1')->orderby('created_at','DESC')->first();

        $builder = Article::query();

        //取最新四条 集团动态
        if($c_recommend){
            $c_news = $builder->where('id','!=',$c_recommend->id);
        }
        $c_news = $builder->where('category','1')->orderby('created_at','DESC')->limit(4)->get();


        //行业动态 推荐
        $h_recommend = Article::where('recommend','1')->where('category','2')->orderby('created_at','DESC')->first();

        $builder_h = Article::query();
        //取最新四条 行业动态
        if($h_recommend){
            $h_news = $builder_h->where('id','!=',$h_recommend->id);
        }
        $h_news = $builder_h->where('category','2')->orderby('created_at','DESC')->limit(4)->get();


        return view('news.index',compact('c_recommend','c_news','h_recommend','h_news'));
    }

    //新闻详情页，上一篇，下一篇
    public function show(Article $article)
    {

        $preArticleId = Article::where('id','<',$article->id)->max('id');
        $preArticle  = Article::find($preArticleId);

        $nextArticleId = Article::where('id','>',$article->id)->min('id');
        $nextArticle  = Article::find($nextArticleId);

        return view('news.show',compact('article','preArticle','nextArticle'));
    }

    //新闻列表
    public function list()
    {
        //创建查询构造器
        $builder = Article::query();

        //从公司动态，行业动态 查看更多而来
        $category = request()->category;
        //搜索关键词
        $kw = request()->kw;

        if(!empty($category)){
            $builder->where('category',"{$category}");
        }

        if(!empty($kw)){
            $like = '%'.$kw.'%';
            $builder->where(function($query)use($like){
                $query->where('title','like',"%{$like}%")
                ->orWhere('description','like',"%{$like}%");
            });
        }
    
        $articles = $builder->orderby('created_at','DESC')->paginate(10);

        //热门文章
        $hot_article = Article::orderby('hits','DESC')->limit(4)->get();

        //热门搜索词

        $hot_words = Hotword::orderby('sort','desc')->limit(8)->get();


        return view('news.list',compact('articles','hot_article','category','kw','hot_words'));
    }
}
