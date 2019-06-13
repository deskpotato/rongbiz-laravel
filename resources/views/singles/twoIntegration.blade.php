@extends('common.app')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('static/css/style-Twointegration.css') }}"/>
@endsection

@section('title','两化融合贯标')

@section('content')
<!--banner-->
<div class="container-fluid" style="padding: 0;">
    <div class="jumbotron banner-img" style="border-radius: 0;">
      <div class="container">
         <h1 class="bdImgTxt_first">两化融合管理体系贯标服务</h1>
         <p class="bdImgTxt_sec">   针对生产制造企业<br />实现工业化与信息化融合发展</p>
      </div>
    </div> 
</div>

<!--关于两化融合-->
<div class="about-integration pb50">
    <h4 class="common-big-tit f36 w1200">关于两化融合</h4>
    <div class="w1200 ov pb50">
        <div class="lt integration-left">
            <h4 class="f24 tc">标准</h4>
            <div class="marginauto tc">
                <img src="{{ asset('static/images/Twointegration/gjbz-logo.png') }}" />
            </div>
            <p class="integration-left-text-box">
                        针对生产制造企业，实现工业化与信息化融合发展。针对生产制造企业，实现工业化与信息化融合发展。针对生产制造企业，实现工业化与信息化融合发展。针对生产制造企业，实现工业化与信息化融合发展。针对生产制造企业，实现工业化与信息化融合发展。针对生产制造企业，实现工业化与信息化融合发展。
            </p>
            <div class="tc love-hand">
                <img src="{{ asset('static/images/Twointegration/bz-icon.png') }}"/>
            </div>
            <div class="tc mb25">
                <img src="{{ asset('static/images/Twointegration/lh-rs-logo.png') }}"/>
            </div>
            <p class="c6 f24 tc">中国两化融合服务联盟成员</p>
        </div>
        <div class="rt integration-right">
            <div class="ov integration-right-box mb30">
                <div class="lt">
                    <h4 class="f24 tc">目标</h4>
                    <p class="f16 c6 mt30 mb20 lineh26 integration-right-text">由国家工业和信息化部提出和制定的一系列规范标准。引导企业按照两化融合的发展理念，制定并围绕发展战略，打造新型能力，获取与战略相匹配的可持续竞争优势，实现创新发展、智能发展和绿色发展。</p>
                    <img src="{{ asset('static/images/Twointegration/mb-image.png') }}" alt="" />
                </div>
                <div class="rt">
                    <h4 class="f24 tc">实现</h4>
                    <p class="f16 c6 mt30 mb20 lineh26 integration-right-text">经国家工业和信息化部指定评定机构评定，符合评估规范（GB/T 23001-2017）的企业，将给予贯标认证。</p>
                    <img src="{{ asset('static/images/Twointegration/sx-image.png') }}" alt="" />
                </div>
            </div>
            <img src="{{ asset('static/images/Twointegration/gb-dat.png') }}" alt="" />
        </div>
    </div>
</div>

<!--贯标优势-->
<div class="advantages ">
    <h4 class="big-tit f36 w1200">贯标优势</h4>
    <div class="w1200  pb50" >
        <ul class="ov advantages-box">
            <li>
                <img src="{{ asset('static/images/Twointegration/ghqyfz-image.png') }}" alt="" />
                <div class="advantages-sm">
                    <h3 class="f20 c3">规划企业发展战略</h3>
                    <p class="c6 f16 lineh30 mt25">基于企业业务定位，帮助企业规划多业务战略，拓大企业发展空间，增强企业竞争力。</p>
                </div>
            </li>
            <li>
                <img src="{{ asset('static/images/Twointegration/dzqyxx-image.png') }}" alt="" />
                <div class="advantages-sm">
                    <h3 class="f20 c3">打造企业新型能力</h3>
                    <p class="c6 f16 lineh30 mt25">基于企业业务定位，帮助企业规划多业务战略，拓大企业发展空间，增强企业竞争力。</p>
                </div>
            </li>
            <li>
                <img src="{{ asset('static/images/Twointegration/xchyjz-image.png') }}"/>
                <div class="advantages-sm">
                    <h3 class="f20 c3">形成行业竞争优势</h3>
                    <p class="c6 f16 lineh30 mt25">基于企业业务定位，帮助企业规划多业务战略，拓大企业发展空间，增强企业竞争力。</p>
                </div>
            </li>
            <li>
                <img src="{{ asset('static/images/Twointegration/hdzffc-image.png') }}"/>
                <div class="advantages-sm">
                    <h3 class="f20 c3">获得政府扶持基金</h3>
                    <p class="c6 f16 lineh30 mt25">基于企业业务定位，帮助企业规划多业务战略，拓大企业发展空间，增强企业竞争力。</p>
                </div>
            </li>
            <li>
                <img src="{{ asset('static/images/Twointegration/hd-image.png') }}"/>
                <div class="advantages-sm">
                    <h3 class="f20 c3">获得“智能制造示范项目”入场券</h3>
                    <p class="c6 f16 lineh30 mt25">基于企业业务定位，帮助企业规划多业务战略，拓大企业发展空间，增强企业竞争力。</p>
                </div>
            </li>
            <li>
                <img src="{{ asset('static/images/Twointegration/zxjrxh-image.png') }}"/>
                <div class="advantages-sm">
                    <h3 class="f20 c3">尊享金融信贷服务</h3>
                    <p class="c6 f16 lineh30 mt25">基于企业业务定位，帮助企业规划多业务战略，拓大企业发展空间，增强企业竞争力。</p>
                </div>
            </li>
        </ul>
    </div>
</div>

<!--贯标流程-->
<div class="marking-process">
    <h4 class="big-tit f36 w1200">贯标流程</h4>
    <ul class="process-big-box ov w1200 pr">
        <div class="bottom-line">
            <img src="{{ asset('static/images/Twointegration/sanjiao.png') }}" alt="" />
        </div>
        <li>
            <div class="process-sm-box">
                <img src="{{ asset('static/images/Twointegration/qdgb-icon.png') }}" class="mt30"/>
                <p class="mt15">启动贯标</p>
            </div>
            <img src="{{ asset('static/images/Twointegration/gw-line.png') }}" class="gw-line"/>
            <div class="process-num">01</div>
        </li>
        <li>
            <div class="process-sm-box">
                <img src="{{ asset('static/images/Twointegration/dyjch-icon.png') }}" class="mt30"/>
                <p class="mt15">调研及策划</p>
            </div>
            <img src="{{ asset('static/images/Twointegration/gw-line.png') }}" class="gw-line"/>
            <div class="process-num">02</div>
        </li>
        <li>
            <div class="process-sm-box">
                <img src="{{ asset('static/images/Twointegration/txjs-icon.png') }}" class="mt30"/>
                <p class="mt15">体系建设</p>
            </div>
            <img src="{{ asset('static/images/Twointegration/gw-line.png') }}" class="gw-line"/>
            <div class="process-num">03</div>
        </li>
        <li>
            <div class="process-sm-box">
                <img src="{{ asset('static/images/Twointegration/syy-icon.png') }}" class="mt30"/>
                <p class="mt15">试运行</p>
            </div>
            <img src="{{ asset('static/images/Twointegration/gw-line.png') }}" class="gw-line"/>
            <div class="process-num">04</div>
        </li>
        <li>
            <div class="process-sm-box">
                <img src="{{ asset('static/images/Twointegration/pgygj-icon.png') }}" class="mt30"/>
                <p class="mt15">评估与改进</p>
            </div>
            <img src="{{ asset('static/images/Twointegration/gw-line.png') }}" class="gw-line"/>
            <div class="process-num">05</div>
        </li>
    </ul>
</div>

<!--贯标服务-->
<div class="mark-service pb50">
    <h4 class="big-tit f36 w1200">贯标服务</h4>
    <div class=" w1200 ov">
        <ul class="mark-lt-box lt ov">
            <li>
                <img src="{{ asset('static/images/Twointegration/mfdy-icon.png') }}" class="mt50"/>
                <p class="mt10">免费调研</p>
            </li>
            <li>
                <img src="{{ asset('static/images/Twointegration/qyzlgh-icon.png') }}" class="mt50"/>
                <p class="mt10">企业战略规划</p>
            </li>
            <li>
                <img src="{{ asset('static/images/Twointegration/zzlczz-icon.png') }}" class="mt50"/>
                <p class="mt10">组织流程再造</p>
            </li>
            <li>
                <img src="{{ asset('static/images/Twointegration/fxxxnl-icon.png') }}" class="mt50"/>
                <p class="mt10">发现新型能力</p>
            </li>
            <li>
                <img src="{{ asset('static/images/Twointegration/xzbx-icon.png') }}" class="mt50"/>
                <p class="mt10">协助编写体系文档</p>
            </li>
            <li>
                <img src="{{ asset('static/images/Twointegration/xzwc-icon.png') }}" class="mt50"/>
                <p class="mt10">协助完成贯标评估</p>
            </li>
        </ul>
        
        <img src="{{ asset('static/images/Twointegration/ysfw-xxt.png') }}" alt="" class="lt"/>
        
        <div class="mark-right-box rt">
            <div class="mark-right-border pr tc p20">
                <div class="pa">
                    <span class="smborder"></span>
                    <span class="f16"> 延伸服务 </span>
                    <span class="smborder" style="width: 83.14px;"></span>
                </div>
                <img src="{{ asset('static/images/Twointegration/zxsj-icon.png') }}" class="mt40"/>
                <p class="mt20"><b class="f18">企业转型升级实施</b></p>
                <p class="mt40 lineh30" >添加一句话添加一句话添加一句话添加一句话</p>
            </div>
        </div>	
    </div>
</div>

<!--服务案例-->
<div class="service-case pb50">
    <h4 class="big-tit f36 w1200">服务案例</h4>
    <ul class="service-case-box ov w1200 p10">
       @if (count($cases) > 0)
            @foreach ($cases as $item)
            <li>
                <div class="service-case-img-box">
                    <img src="{{ $item->image }}" class="mt10"/>
                </div>
                <p class="f24 c3 tc mt10">{{ $item->title }}</p>
                <p class="service-case-text">{{ $item->description }}</p>
            </li>
            @endforeach
        @endif
    </ul>
</div>

<!--两化融合政策-->
<div class="integration-policy pb50">
    <h4 class="big-tit f36 w1200">两化融合政策</h4>
    <div class="w1200">
          <div class="swiper-container">
            <div class="swiper-wrapper">

             @if (count($zhengce) > 0)
                @foreach ($zhengce as $item)
                    <div class="swiper-slide">
                        <div>
                            <img src="{{ $item->image_url }}" alt="" />
                            <div class="f16 integration-sm-box"><a href="javascript:;" class="c6">{{ $item->title }}</a></div>
                        </div>
                    </div>
                 @endforeach
             @endif
           

             
            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination"></div>
          </div>
              <!--swiper  OVER-->
     </div>
</div>

<!--两化融合动态-->
<div class="dynamicsy pb50">
    <h4 class="big-tit f36 w1200">两化融合动态</h4>
    <div class="ov w1200">
        @if ($dongtai_recommend)
            <div class="lt dynamicsy-left">
                <div class="dynamicsy-left-img-box">
                    <img src="{{ $dongtai_recommend->image_url }}" alt="" />
                    <div class="dynamicsy-left-date f12">
                        <span class="f32 " >{{ $dongtai_recommend->created_at->format('d') }}</span>
                        <span class="block" style="margin-top: -5px;">{{ $dongtai_recommend->created_at->format('Y-m') }}</span>
                    </div>
                </div>
                <a href="javascript:;" class="pl20 pr20 pb20 pt15 block" >
                    <h3 class="f16 c3 ellipsis">{{ $dongtai_recommend->title }}</h3>
                    <p class="f13 c6 ellipsis">{{ $dongtai_recommend->introduction }}</p>
                </a>
            </div> 
        @endif
       
        <div class="rt dynamicsy-right">
            <ul class="dynamicsy-right-box">


                @if (count($dongtai) > 0)
                    @foreach ($dongtai as $item)
                        <li>
                            <div class="lt w58 mr20 tc f12 c6">
                                <span class="f32 block mt-10" >{{ $item->created_at->format('d') }}</span>
                                {{ $item->created_at->format('Y-m') }}
                            </div>
                            <div class="rt dynamicsy-right-li">
                                <div class=" flex">
                                    <h3 class="dynamicsy-right-tit c3 ellipsis"><a href="javascript:;">{{ $item->title }}</a></h3>
                                    <img src="{{ asset('static/images/Twointegration/rd-icon.png') }}" alt="" /><span class="f13 c9 ml5">{{ $item->hits }}</span>
                                </div>
                                <div class="flex f13 c9 mt15">
                                    <h4 class="c6 dynamicsy-sm-tit ellipsis">{{ $item->introduction }}</h4>
                                    <div class="dynamicsy-sm-tit2 ellipsis">地点：{{ $item->address }}</div>
                                    <div>来源：{{ $item->author }}</div>
                                </div>
                            </div>
                        </li>
                    @endforeach
                @endif


            </ul>
        </div>
    </div>
</div>

<!--底部联系电话-->
<div class="success-case-bg" style="margin-bottom: 450px;">
    <div class="w1200 tc">
        <p class="f24 tel-p">想做两化融合贯标服务？专业顾问帮您实现！</p>
        <a href="javascript:;" class="tel-bg f18"><span class="ml30">联系我们</span></a>
    </div>
</div>

</div>
@endsection

@section('script')
    <script>
        var swiper = new Swiper('.swiper-container', {
                pagination: {
                   el: '.swiper-pagination',
                   clickable: true,
                 },
               slidesPerView:3,
               paginationClickable: true,
               spaceBetween:20,
               loop: false,
                breakpoints: {
                  
                   768: {
                       slidesPerView: 1
                   },
                   640: {
                       slidesPerView: 1
                   },
                   320: {
                       slidesPerView: 1
                   }
               },
           });
    </script>
@endsection