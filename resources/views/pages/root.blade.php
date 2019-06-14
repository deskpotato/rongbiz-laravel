@extends('common.app')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('static/css/style-index.css') }}"/>
   
@endsection

@section('title','首页')

@section('content')
    <div id='brain'>
        @include('common._brain')
    </div>
        <style>
            footer{position: relative;z-index: 55};
        </style>
    <div style="position:relative;z-index:55">
    {{--  <!--****产品 & 服务****-->  --}}
    <div class="container-fluid f5" style="margin-top: 60px;">
        <div class="container index-model-box">
            <span class="index-model-tit">产品 & 服务</span>
            <span class="c9 f24 index-model-twotit">products & services</span>
        </div>
    </div>
    
    <div class="index-product-box">
        {{--  <!--工业互联网-->  --}}
        <div class="product-box gy-bg ov">
            <div class="product-text">
                <div class="product-text-box">
                    <h3 class="f36 mb30">工业互联网</h3>
                    <div class="mb25">
                        <img src="../../static/images/index/arrow.png" style="    vertical-align: initial;"/>
                        <span class="c3 f24 ml25">工业互联网应用与服务集群</span><br />
                        <p class="c6 f18 ml50 mt8">工业互联网综合型服务门户</p>
                    </div>
                    <div class="mb25">
                        <img src="../../static/images/index/arrow.png" style="    vertical-align: initial;"/>
                        <span class="c3 f24 ml25">C2P工业云</span><br />
                        <p class="c6 f18 ml50 mt8">企业上云一站式解决方案</p>
                    </div>
                    <div class="mb25">
                        <img src="../../static/images/index/arrow.png" style="    vertical-align: initial;"/>
                        <span class="c3 f24 ml25">天工开物工业大脑</span><br />
                        <p class="c6 f18 ml50 mt8">物联网智能网关</p>
                    </div>
                    <div class="mb25">
                        <img src="../../static/images/index/arrow.png" style="    vertical-align: initial;"/>
                        <span class="c3 f24 ml25">天工开物物联网关</span><br />
                        <p class="c6 f18 ml50 mt8">物联网智能网关</p>
                    </div>
                    <div class="product-logo">
                        <img src="../../static/images/index/rslogo.png"/>
                    </div>
                </div>
                
            </div>
            <img src="../../static/images/index/gyhlwimage.png" class="product-box-img"/>
        </div>
        {{--  <!--智能机器人-->  --}}
        <div class="product-box ov zn-bg">
            <div class="product-text product-text-second">
                <div class="product-text-box">
                    <h3 class="f36 mb30">智能机器人</h3>
                    <div class="mb25">
                        <img src="../../static/images/index/arrow.png" style="    vertical-align: initial;"/>
                        <span class="c3 f24 ml25">工业机器人</span><br />
                        <p class="c6 f18 ml50 mt8">4轴机器人 / 6轴机器人 / 智能协作机器人</p>
                    </div>
                    <div class="mb25">
                        <img src="../../static/images/index/arrow.png" style="    vertical-align: initial;"/>
                        <span class="c3 f24 ml25">防人型机器人</span><br />
                        <p class="c6 f18 ml50 mt8">物联网智能网关</p>
                    </div>
                    <div class="mb25">
                        <img src="../../static/images/index/arrow.png" style="    vertical-align: initial;"/>
                        <span class="c3 f24 ml25">全地形消防救援机器人</span><br />
                        <p class="c6 f18 ml50 mt8">物联网智能网关</p>
                    </div>
                    <div class="mb25">
                        <img src="../../static/images/index/arrow.png" style="    vertical-align: initial;"/>
                        <span class="c3 f24 ml25">消防搜救无人机</span><br />
                        <p class="c6 f18 ml50 mt8">火场探测 / 搜救灭火</p>
                    </div>
                    <div class="product-logo">
                        <img src="../../static/images/index/fxlogo(1).png"/>
                    </div>
                </div>
                
            </div>
            <img src="../../static/images/index/znjqrimage.png" class="product-box-img product-second-img"/>
        </div>
        {{--  <!--智能制造-->  --}}
        <div class="product-box ov znzz-bg">
            <div class="product-text">
                <div class="product-text-box">
                    <h3 class="f36 mb30">智能制造</h3>
                    <div class="mb25">
                        <img src="../../static/images/index/arrow.png" style="    vertical-align: initial;"/>
                        <span class="c3 f24 ml25">静默式智能改造</span><br />
                        <p class="c6 f18 ml50 mt8">4轴机器人/6轴机器人/智能协作机器人</p>
                    </div>
                    <div class="mb25">
                        <img src="../../static/images/index/arrow.png" style="    vertical-align: initial;"/>
                        <span class="c3 f24 ml25">企业转型升级服务</span><br />
                        <p class="c6 f18 ml50 mt8">物联网智能网关</p>
                    </div>
                    <div class="mb25">
                        <img src="../../static/images/index/arrow.png" style="    vertical-align: initial;"/>
                        <span class="c3 f24 ml25">智能工厂</span><br />
                        <p class="c6 f18 ml50 mt8">物联网智能网关</p>
                    </div>
                    
                    <div class="product-logo">
                        <img src="../../static/images/index/rslogo.png"/>
                    </div>
                </div>
                
            </div>
            <img src="../../static/images/index/znzzimage.png" class="product-box-img"/>
        </div>
        
        {{--  <!--畅销无忧-->  --}}
        <div class="product-box cxwy-bg ov">
            <div class="product-text product-text-second">
                <div class="product-text-box">
                    <h3 class="f36 mb30">畅销无忧</h3>
                    <div class="mb25">
                        <img src="../../static/images/index/arrow.png" style="    vertical-align: initial;"/>
                        <span class="c3 f24 ml25">畅销无忧</span><br />
                        <p class="c6 f18 ml50 mt8">畅销无忧</p>
                    </div>
                    <div class="mb25">
                        <p class="c6 f16 mt8 product-text-indent"> 反馈表数据库和方便圣诞节活动吗开局开具会计证女郎v不是记账VB看是考虑几百块VB 打卡毛驴吧是吧VB的深V尽快吧V领不具备局项目部V领少肯定VB看深V </p>
                    </div>
                    
                    <div class="product-logo">
                        <img src="../../static/images/index/rslogo.png"/>
                    </div>
                </div>
                
            </div>
            <img src="../../static/images/index/cxwyimage.png" class="product-box-img product-second-img"/>
        </div>
        {{--  <!--管理咨询-->  --}}
        <div class="product-box glzx-bg ov">
            <div class="product-text">
                <div class="product-text-box">
                    <h3 class="f36 mb30">管理咨询</h3>
                    <div class="mb25">
                        <img src="../../static/images/index/arrow.png" style="    vertical-align: initial;"/>
                        <span class="c3 f24 ml25">两化融合管理体系贯标咨询</span><br />
                        <p class="c6 f18 ml50 mt8">信息化与工业化融合</p>
                    </div>
                    <div class="mb25">
                        <p class="c6 f16 product-text-indent mt8"> 反馈表数据库和方便圣诞节活动吗开局开具会计证女郎v不是记账VB看是考虑几百块VB 打卡毛驴吧是吧VB的深V尽快吧V领不具备局项目部V领少肯定VB看深V </p>
                    </div>
                    
                    <div class="product-logo">
                        <img src="../../static/images/index/rslogo.png"/>
                    </div>
                </div>
                
            </div>
            <img src="../../static/images/index/glzuimage.png" class="product-box-img"/>
        </div>
        {{--  <!--共享人才-->  --}}
        <div class="product-box gxrc-bg ov">
            <div class="product-text product-text-second">
                <div class="product-text-box">
                    <h3 class="f36 mb30">共享人才</h3>
                    <div class="mb25">
                        <img src="../../static/images/index/arrow.png" style="    vertical-align: initial;"/>
                        <span class="c3 f24 ml25">共享人才</span><br />
                        <p class="c6 f18 ml50 mt8">轻松工作，快乐生活</p>
                    </div>
                    <div class="mb25">
                        <p class="c6 f16 product-text-indent mt8"> 反馈表数据库和方便圣诞节活动吗开局开具会计证女郎v不是记账VB看是考虑几百块VB 打卡毛驴吧是吧VB的深V尽快吧V领不具备局项目部V领少肯定VB看深V  </p>
                    </div>
                    
                    <div class="product-logo">
                        <img src="../../static/images/index/gxrclogo.png"/>
                    </div>
                </div>
                
            </div>
            <img src="../../static/images/index/gyhlwimage.png" class="product-box-img product-second-img"/>
        </div>
        {{--  <!--高分子材料与生物医药-->  --}}
        <div class="product-box gfzcl-bg ov">
            <div class="product-text">
                <div class="product-text-box">
                    <h3 class="f36 mb30">高分子材料与生物医药</h3>
                    <div class="mb25">
                        <p class="c6 f16 product-text-indent mt8">反馈表数据库和方便圣诞节活动吗开局开具会计证女郎v不是记账VB看是考虑几百块VB 打卡毛驴吧是吧VB的深V尽快吧V领不具备局项目部V领少肯定VB看深V反馈表数据库和方便圣诞节活动吗开局开具会计证女郎v不是记账VB看是考虑几百块VB 打卡毛驴吧是吧VB的深V尽快吧V领不具备局项目部V领少肯定VB看深V        反馈表数据库和方便圣诞节活动吗开局开具会计证女郎v不是记账VB看是考虑几百块VB 打卡毛驴吧是吧VB的深V尽快吧V领不具备局项目部V领少肯定VB看深V </p>
                    </div>
                    
                    
                    <div class="product-logo">
                        <img src="../../static/images/index/wrlogo.png"/>
                    </div>
                </div>
                
            </div>
            <img src="../../static/images/index/gfzclimage.png" class="product-box-img"/>
        </div>
    </div>
    {{--  <!--****产品 & 服务  OVER****-->  --}}
    
    {{--  <!--****新闻资讯****-->  --}}
    <div class="container-fluid f5" >
        <div class="container index-model-box">
            <span class="index-model-tit">新闻资讯</span>
            <span class="c9 f24 index-model-twotit">news</span>
        </div>
    </div>
    
    <div class="news-big-box">
         <div class="container news-big-tit" >
             <a href="javascript:;" class="active" data-x="c">集团新闻</a>
             <a href="javascript:;" data-x="h">行业资讯</a>
         </div>
         <div class="container" style="padding: 0;">
             {{--  <!--左侧大图-->  --}}
            <div class="c_recommend">
             @if ($c_recommend)
                <a href="javascript:;" class="lt news-big-lt-outbox">
                    <img src="{{ $c_recommend->image_url }}" alt=""  width="578" height="400"/>
                    <div class="mt30 c9 f18">{{ $c_recommend->created_at->toDateString() }}</div>
                    <h4 class="mt30 c3 f20">{{ $c_recommend->title }}</h4>
                    <p class="f16 c6 mt20">{{ Str::limit($c_recommend->description,100,'...') }}</p>
                    <div class="flex justify-between c9 f16 mt38">
                        <span>{{ $c_recommend->created_at->diffForHumans() }}</span>
                        <span>{{ $c_recommend->hits }} 阅读</span>
                    </div>
                </a>
             @endif
            </div>
            <div class="h_recommend" style="display:none;">
                @if ($h_recommend)
                    <a href="javascript:;" class="lt news-big-lt-outbox">
                        <img src="{{ $h_recommend->image_url }}" alt=""  width="578" height="400"/>
                        <div class="mt30 c9 f18">{{ $h_recommend->created_at->toDateString() }}</div>
                        <h4 class="mt30 c3 f20">{{ $h_recommend->title }}</h4>
                        <p class="f16 c6 mt20">{{ Str::limit($h_recommend->description,100,'...') }}</p>
                        <div class="flex justify-between c9 f16 mt38">
                            <span>{{ $h_recommend->created_at->diffForHumans() }}</span>
                            <span>{{ $h_recommend->hits }} 阅读</span>
                        </div>
                    </a>
                @endif
            </div>


             {{--  <!--右侧小图-->  --}}
             <div class="lt news-big-rt-outbox ml30">
                 <div class="news-date">
                     <a href="javascript:;" class="active">查看更多</a>
                 </div>
                 {{--  <!--列表单个框-->  --}}
                 <div class="c_recommend">
                 @if (count($c_news) > 0)
                    @foreach ($c_news as $item)
                        <div class="news-sm-box ov flex justify-between">
                            <img src="{{ $item->image_url }}" alt="" width="177" height="120"/>
                            <div class="ml20">
                                <h4 class="f18"><a href="javascript:;">{{ Str::limit($item->title,34,'...') }}</a></h4>
                                <p class="f16 c6 mt10"> {{ Str::limit($item->description,100,'...') }}</p>
                                <div class="flex justify-between c9 f16 mt15">
                                    <span>{{ $item->created_at->diffForHumans() }}</span>
                                    <span>{{ $item->hits }} 阅读</span>
                                </div>
                            </div>
                        </div>
                    @endforeach 
                 @endif
                 </div>
                 <div class="h_recommend" style="display:none;">
                 @if (count($h_news) > 0)
                     @foreach ($h_news as $item)
                        <div class="news-sm-box ov flex justify-between">
                            <img src="{{ $item->image_url }}" alt="" width="177" height="120"/>
                            <div class="ml20">
                                <h4 class="f18"><a href="javascript:;">{{ Str::limit($item->title,34,'...') }}</a></h4>
                                <p class="f16 c6 mt10"> {{ Str::limit($item->description,100,'...') }}</p>
                                <div class="flex justify-between c9 f16 mt15">
                                    <span>{{ $item->created_at->diffForHumans() }}</span>
                                    <span>{{ $item->hits }} 阅读</span>
                                </div>
                            </div>
                        </div>
                    @endforeach 
                 @endif
                 </div>
             </div>
         </div>
     </div>
    {{--  <!--****新闻资讯  OVER****-->  --}}
    
    {{--  <!--****容商天下集团****-->  --}}
    <div class="container-fluid f5" >
        <div class="container index-model-box">
            <span class="index-model-tit">容商天下集团</span>
            <span class="c9 f24 index-model-twotit">Rongbiz Corporation</span>
        </div>
    </div>
    <div class="rongbiz-big-box">
        <div class="container" style="padding: 0;">
        @if (count($otherCompanies) > 0)
            @foreach ($otherCompanies as $item)
                <div class="rongbiz-sm-box">
                    <div class="lt rongbiz-sm-img">
                        <img src="{{ $item->image_white }}"/>
                    </div>
                    <div class="lt rongbiz-sm-text c3 f16">
                            {{ $item->description }}
                    </div>
                </div>
            @endforeach
		@endif
        </div>
    </div>
    {{--  <!--****容商天下集团****-->  --}}
</div>
@endsection
@section('script')
    <script>
            $('.news-big-tit a').click(function(){
                $(this).addClass('active').siblings('a').removeClass('active');
                var hs = $(this).data('x');
                if(hs == 'c'){
                    $('.h_recommend').hide();
                    $('.c_recommend').show();
                }else if(hs == 'h'){
                    $('.c_recommend').hide();
                    $('.h_recommend').show();
                }
			})
			/**
			$('.news-date a').click(function(){
				$(this).addClass('active').siblings('a').removeClass('active');
            })
            */
    </script>
@endsection