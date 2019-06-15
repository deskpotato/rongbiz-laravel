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




@section('title',"$article->title")

@section('content')
    {{--  <!--**大图**-->  --}}
		<div class="bigimg">
			
		</div>
		{{--  <!--产品呢-->  --}}
		<div class="Page1 news_Detaile">

			<div class="container">
				<div class="wrapper row">
					<div class="content col-md-9 col-xs-12">
						<div class="tit">
							<p class="p1">{{ $article->title }}</p>
							<p class="p2">@if($article->author)来源：{{ $article->author }}&nbsp;&nbsp;&nbsp;&nbsp;@endif发布时间：{{ $article->created_at->toDateString() }}</p>
						</div>
						<div class="text">
                                {!! $article->content !!}
						</div>
					</div>
					<div class="newsRight col-md-3 col-xs-12 ">
						<div class="newzx ">
                            <ul>
                                @if($preArticle)
                                    <li class="one">
                                        <a href="{{ route('news.show',['article'=>$preArticle->id]) }}" title=""><p class="name">上一篇</p></a>
                                        <p>{{ $preArticle->title }}</p>
                                        <p class="time">时间：{{ $preArticle->created_at->toDateString() }}</p>
                                    </li>
                                @endif
                                @if($nextArticle)
                                    <li class="one">
                                        <a href="{{ route('news.show',['article'=>$nextArticle->id]) }}" title=""><p class="name">下一篇</p></a>
                                        <p>{{ $nextArticle->title }}</p>
                                        <p class="time">时间：{{ $nextArticle->created_at->toDateString() }}</p>
                                    </li>
                                @endif
                            </ul>
						</div>
					</div>
				</div>
			</div>
		</div>


    
@endsection