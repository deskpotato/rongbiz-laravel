@extends('common.app')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('static/css/style-news.css') }}"/>
    <style type="text/css">
        .swiper-container {
           width: 100%;
           height: 100%;
           
       }
       .container{
           width:1170px;
           margin:auto;
       }
       .swiper-slide{
           text-align: center;
       }
       .swiper-slide img{
           width:100%;
       }
   </style>
@endsection

@section('title',"新闻列表")

@section('content')
    
{{--  <!--**大图**-->  --}}
<div class="bigimg">
    
</div>
{{--  <!--产品呢-->  --}}
<div class="Page1">
    <div class="container">
        <div class="searchBox row">
            <form name="" action="" method="GET">
                <input type="hidden" name='category' value="{{ $category }}">
                <div class="search col-md-6 col-xs-12">
                    <div class="borderBox">
                        <input type="text"  onkeyup="this.value=this.value.replace(/[^\u4e00-\u9fa5a-zA-Z0-9\w]/g,'')" name="kw" placeholder="请输入关键词" value="{{ $kw }}">
                    </div>
                    <button class="sousuo" type="submit">搜 索</button>
                </div>
                <div class="hotword  col-md-6 col-xs-12">
                    <p class="hot"><img src="{{ asset('static/images/newsinformation/hot.png') }}">热搜：
                        @if (count($hot_words)>0)
                            @foreach ($hot_words as $item)
                                <a href="{{ route('news.list',['kw'=>$item->name]) }}">{{ $item->name }}</a>
                            @endforeach                    
                        @endif

                    </p>
                </div>
            </form>
            <div class="clear"></div>
        </div>
    </div>
    <div class="container">
        <div class="wrapper row">
            <div class="hynewsLeft col-md-9 col-xs-12">
                {{--  <div class="all_nav">
                    <ul class="nav_name">
                        <li data-id="0"><a href="http://www.rongbiz.com/info/index.php?catid=0"><span class="active">全部</span></a></li>
                        <li data-id="27163"><a href="http://www.rongbiz.com/info/index.php?catid=27163"><span>机械化工</span></a></li>
                        <li data-id="27164"><a href="http://www.rongbiz.com/info/index.php?catid=27164"><span>电子电工</span></a></li>
                        <li data-id="27167"><a href="http://www.rongbiz.com/info/index.php?catid=27167"><span>五金机电</span></a></li>
                        <li data-id="27168"><a href="http://www.rongbiz.com/info/index.php?catid=27168"><span>数码IT</span></a></li>
                        <li data-id="27171"><a href="http://www.rongbiz.com/info/index.php?catid=27171"><span>业内资讯</span></a></li>
                        <li data-id="27172"><a href="http://www.rongbiz.com/info/index.php?catid=27172"><span>经济金融</span></a></li>
                        <li data-id="27264"><a href="http://www.rongbiz.com/info/index.php?catid=27264"><span>机械行情</span></a></li>
                        <div class="clear"></div>
                    </ul>
                <div class="main_top_fenlei_shaixuan_rt" flag="0" onclick="More($(this));"><i class="icon-filter-arrow1"></i><a href="javascript:;">更多</a></div>
                </div>  --}}
                <div class="clear"></div>
                <div class="news-grid-news-list zxList">

                    @if(count($articles) > 0)
                        @foreach ($articles as $item)
                        <div class="news-item-new topnews yesimg">
                            <div class="img-list news-box-img">
                                <a target="_blank" title="" href="">
                                    <img src="{{ $item->image_url }}" alt="" style="display: inline;"> 
                                </a>
                            </div>
                            <div class="text-list">
                                <h3 class="news-tit2"> </h3>
                                <h3 class="news-tit2">
                                    <a target="_blank" title="" href="{{ route('news.show',['article'=>$item->id]) }}">{{ Str::limit($item->title,42,'...') }}</a>
                                </h3>
                                <div class="mess">{{ Str::limit($item->description,100,'...') }}</div>
                                <div class="time"> <span class="time_ico">发布时间：{{ $item->created_at->toDateString() }}</span>
                                <span class="f10"></span>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    @endif

                </div>
                {{ $articles->links() }}
            </div>	
            <div class="hynewsRight col-md-3 col-xs-12 ">
                {{--  <!--热门资讯-->  --}}
                <div class="newzx ">
                <p class="title">热门资讯</p>
                <ul>
                    @if (count($hot_article)>0)
                        @foreach ($hot_article as $item)
                        <li>
                            <a href="{{ route('news.show',['article'=>$item->id]) }}" title="{{ $item->title }}">
                                <img src="{{ $item->image_url }}" alt="{{ $item->title }}">
                                <p>{{ Str::limit($item->title,32,'...') }}</p>
                            </a>
                        </li>
                        @endforeach
                    @endif

                </ul>
                </div>
                {{--  <!--最新资讯 结束-->  --}}
            </div>
        </div>
    </div>
</div>
@endsection