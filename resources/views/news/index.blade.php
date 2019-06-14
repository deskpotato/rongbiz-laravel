@extends('common.app')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('static/css/style-newsInformation.css') }}"/>
@endsection

@section('js')
    <script src="{{ asset('static/js/newsInformation.js') }}" type="text/javascript" charset="utf-8"></script> 
@endsection


@section('title','新闻')

@section('content')
{{--  <!--公司动态-->  --}}

@if ($c_recommend)
    <div class="company-profile">
        <div class="w1200 ov">
            <div class="lt pr">
                <div class="profile-img-box ov pr" style="z-index: 1;">
                    <img src="{{ $c_recommend->image_url }}" alt=""  width="530" height="660"/>
                </div>
                <div class="profile-bg-color pa"></div>
            </div>
            <div class="rt profil-rt-box">
                <div class="profile-tit">
                    <h1 class="c3 f36">公司动态</h1>
                    <p class="f24 c3">COMPANY PROFILE</p>
                </div>
                <h4 class="f24">{{ Str::limit($c_recommend->title,34,'...') }}</h4>
                <p class="f18 c6 mt20 mb20">{{ $c_recommend->created_at->toDateString() }}</p>
                <p class="c3 f16 mb50 profil-text">{{ Str::limit($c_recommend->description,100,'...') }}</p>
                <div style="text-align: right;"><a href="{{ route('news.list',['category'=>1]) }}" class="cea5 f18">查看更多<img src="../../static/images/newsinformation/right-1.png" alt="" class="ml10"/></a></div>
            </div>
        </div>
    </div>
@endif
{{--  <!--轮播-->  --}}
<div class="industry-news " style="padding-top: 190px;">
    <div class="w1200 pr " >
        <div class="swiper-container swiper-container1">
            <div class="swiper-wrapper row">
            @if (count($c_news) > 0)
               @foreach ($c_news as $item)
                    <div class="swiper-slide ">
                        <div class="pr">
                            <img src="{{ $item->image_url }}" alt=""  width="390" height="230"/>
                            <div class="slide-important-text">
                                    {{ Str::limit($item->title,34,'...') }}
                            </div>
                        </div>
                        <div class="slide-text-box">
                            <span class="c6 f16">2018.06.26</span>
                            <p class="c3 f16 mt20">
                                    {{ Str::limit($item->description,100,'...') }}
                            </p>
                        </div>
                    </div>
                @endforeach 
              @endif

            </div>
 
           
        </div>
         <div class="swiper-button-next"></div>
         <div class="swiper-button-prev"></div>
        
        {{--  <!--查看更多-->  --}}
        <a href="{{ route('news.list',['category'=>1]) }}" class="look-more f18 tc">查看更多</a>
    </div>
</div>
{{--  <!--行业动态-->  --}}
@if ($h_recommend)

    <div class="company-profile" style="padding-top: 200px;margin-top: 0;">
        <div class="w1200 ov">
            <div class="rt pr">
                <div class="profile-img-box ov pr" style="z-index: 1;">
                    <img src="{{ $h_recommend->image_url }}" alt="" width="530" height="660"/>
                </div>
                <div class="profile-bg-color pa" style="right:0px;"></div>
            </div>
            <div class="lt profil-rt-box">
                <div class="profile-tit">
                    <h1 class="c3 f36">行业动态</h1>
                    <p class="f24 c3">INDUSTRY NEWS</p>
                </div>
                <h4 class="f24">{{ Str::limit($c_recommend->title,34,'...') }}</h4>
                <p class="f18 c6 mt20 mb20">{{ $c_recommend->created_at->toDateString() }}</p>
                <p class="c3 f16 mb50 profil-text">{{ Str::limit($c_recommend->description,100,'...') }}</p>
                <div style="text-align: right;"><a href="{{ route('news.list',['category'=>2]) }}" class="cea5 f18">查看更多<img src="../../static/images/newsinformation/right-1.png" alt="" class="ml10"/></a></div>
            </div>
        </div>
    </div>

@endif
<div class="industry-news industry-news-swiper-box" style="margin-bottom: 450px">
    <div class="w1200 pr" >
        <div class="swiper-container swiper-container2">
            <div class="swiper-wrapper">

            @if (count($h_news) > 0)
             @foreach ($h_news as $item)
                <div class="swiper-slide">
                    <div class="pr">
                        <img src="{{ $item->image_url }}" alt="" width="570" height="380" />
                    </div>
                    <div class="slide-text-box">
                        <span class="c6 f16">{{ $item->created_at->toDateString() }}</span>
                        <p class="f18 mt20 c0 lineh24">
                                {{ Str::limit($item->title,34,'...') }}</p>
                        <p class="mt20 c6 f16 lineh24">
                                {{ Str::limit($item->description,100,'...') }}</p>
                    </div>
                </div>
                 @endforeach 
              @endif
            </div>
           
           
        </div>
         <div class="swiper-button-next"></div>
         <div class="swiper-button-prev"></div>
        
        {{--  <!--查看更多-->  --}}
        <div class="mt50"  style="text-align: right;padding-bottom: 100px;">
            <a href="{{ route('news.list',['category'=>2]) }}" class="f18 cea5">查看更多</a><img src="../../static/images/newsinformation/right-1.png" alt="" class="ml10"/>
        </div>
        
    </div>
</div>
@endsection