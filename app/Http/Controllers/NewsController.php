<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class NewsController extends Controller
{
    public function index(){
        return view('news.index');
    }

    //详情页
    public function show(Article $article)
    {
        return view('news.show',compact('article'));
    }
}
