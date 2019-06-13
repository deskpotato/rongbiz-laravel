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
<div class="company-profile">
    <div class="w1200 ov">
        <div class="lt pr">
            <div class="profile-img-box ov pr" style="z-index: 1;">
                <img src="../../static/images/newsinformation/gsdtda.png" alt="" />
            </div>
            <div class="profile-bg-color pa"></div>
        </div>
        <div class="rt profil-rt-box">
            <div class="profile-tit">
                <h1 class="c3 f36">公司动态</h1>
                <p class="f24 c3">COMPANY PROFILE</p>
            </div>
            <h4 class="f24">容商天下邀请清华大学教授-刘鹰莅临指导</h4>
            <p class="f18 c6 mt20 mb20">2018.07.07</p>
            <p class="c3 f16 mb50 profil-text">2017年7月7日上午，国家版权局版权管理司司长于慈珂一行，在山东省版权局副局长谢宁、青岛市文广新局副局长韩大钧...</p>
            <div style="text-align: right;"><a href="javascript:;" class="cea5 f18">查看更多<img src="../../static/images/newsinformation/right-1.png" alt="" class="ml10"/></a></div>
        </div>
    </div>
</div>
{{--  <!--轮播-->  --}}
<div class="industry-news " style="padding-top: 190px;">
    <div class="w1200 pr " >
        <div class="swiper-container swiper-container1">
            <div class="swiper-wrapper row">
              <div class="swiper-slide ">
                  <div class="pr">
                      <img src="../../static/images/newsinformation/gsdt1image.png" alt="" />
                      <div class="slide-important-text">
                          专家一行参观容商天下&nbsp;&nbsp;
                      </div>
                  </div>
                  <div class="slide-text-box">
                      <span class="c6 f16">2018.06.26</span>
                      <p class="c3 f16 mt20">
                            国家版权局管理司司长-于慈珂
                    </p>
                  </div>
              </div>
              <div class="swiper-slide ">
                  <div class="pr">
                      <img src="../../static/images/newsinformation/gsdt2image.png" alt="" />
                      <div class="slide-important-text">
                          专家一行参观容商天下&nbsp;&nbsp;
                      </div>
                  </div>
                  <div class="slide-text-box">
                      <span class="c6 f16">2018.06.26</span>
                      <p class="c3 f16 mt20">
                            国家版权局管理司司长-于慈珂
                    </p>
                  </div>
              </div>
              <div class="swiper-slide ">
                  <div class="pr">
                      <img src="../../static/images/newsinformation/gsdt3image.png" alt="" />
                      <div class="slide-important-text">
                          专家一行参观容商天下&nbsp;&nbsp;
                      </div>
                  </div>
                  <div class="slide-text-box">
                      <span class="c6 f16">2018.06.26</span>
                      <p class="c3 f16 mt20">
                            国家版权局管理司司长-于慈珂
                    </p>
                  </div>
              </div>
              <div class="swiper-slide ">
                  <div class="pr">
                      <img src="../../static/images/newsinformation/gsdt1image.png" alt="" />
                      <div class="slide-important-text">
                          专家一行参观容商天下&nbsp;&nbsp;
                      </div>
                  </div>
                  <div class="slide-text-box">
                      <span class="c6 f16">2018.06.26</span>
                      <p class="c3 f16 mt20">
                            国家版权局管理司司长-于慈珂
                    </p>
                  </div>
              </div>
            </div>
           
           
        </div>
         <div class="swiper-button-next"></div>
         <div class="swiper-button-prev"></div>
        
        {{--  <!--查看更多-->  --}}
        <a href="javascript:;" class="look-more f18 tc">查看更多</a>
    </div>
</div>
{{--  <!--行业动态-->  --}}
<div class="company-profile" style="padding-top: 200px;margin-top: 0;">
    <div class="w1200 ov">
        <div class="rt pr">
            <div class="profile-img-box ov pr" style="z-index: 1;">
                <img src="../../static/images/newsinformation/gsdtda.png" alt="" />
            </div>
            <div class="profile-bg-color pa" style="right:0px;"></div>
        </div>
        <div class="lt profil-rt-box">
            <div class="profile-tit">
                <h1 class="c3 f36">行业动态</h1>
                <p class="f24 c3">INDUSTRY NEWS</p>
            </div>
            <h4 class="f24">交流、合作、创新、发展”第七届中国......</h4>
            <p class="f18 c6 mt20 mb20">2018.07.07</p>
            <p class="c3 f16 mb50 profil-text">第七届中国国际版权博览会于10月19日在苏州国际博览中心盛大开幕。中国国际版权博览会是国家版权局按照国际化、专业化.....市场化原则举办的唯一常态化综合性的国家级版权专业博览会，以“交流、合作、创新、发展”为宗旨，是推动国际版权产业互动交流、促进中国版权产业交易和中国版权“走出去”的重要平台。..</p>
            <div style="text-align: right;"><a href="javascript:;" class="cea5 f18">查看更多<img src="../../static/images/newsinformation/right-1.png" alt="" class="ml10"/></a></div>
        </div>
    </div>
</div>
<div class="industry-news industry-news-swiper-box" style="margin-bottom: 450px">
    <div class="w1200 pr" >
        <div class="swiper-container swiper-container2">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                  <div class="pr">
                      <img src="../../static/images/newsinformation/gsdt-image.png" alt="" />
                  </div>
                  <div class="slide-text-box">
                      <span class="c6 f16">2018.06.26</span>
                      <p class="f18 mt20 c0 lineh24">
                            第二十二届软博会全国政协经济委员会副主任李毅中，工信部信软司副司长李颖参观视察容商天下展区</p>
                       <p class="mt20 c6 f16 lineh24">
                            北京时间6月29日上午9点，由工信部、北京市政府共同主办的第二十一届中国国际软件博览会，在北京展览馆开幕。</p>
                  </div>
              </div>
              <div class="swiper-slide">
                  <div class="pr">
                      <img src="../../static/images/newsinformation/hydt-image.png" alt="" />
                  </div>
                  <div class="slide-text-box">
                      <span class="c6 f16">2018.06.26</span>
                      <p class="c3 f16 mt20">
                            第二十一届软博会工信部总工程师张峰参观视察容商天下展区
                    </p>
                    <p class="mt20 c6 f16 lineh24">
                            北京时间6月29日上午9点，由工信部、北京市政府共同主办的第二十一届中国国际软件博览会，在北京展览馆开幕。</p>
                  </div>
              </div>
              <div class="swiper-slide">
                  <div class="pr">
                      <img src="../../static/images/newsinformation/gsdt-image.png" alt="" />
                  </div>
                  <div class="slide-text-box">
                      <span class="c6 f16">2018.06.26</span>
                      <p class="c3 f16 mt20">
                            第二十一届软博会工信部总工程师张峰参观视察容商天下展区
                    </p>
                    <p class="mt20 c6 f16 lineh24">
                            北京时间6月29日上午9点，由工信部、北京市政府共同主办的第二十一届中国国际软件博览会，在北京展览馆开幕。</p>
                  </div>
              </div>
            </div>
           
           
        </div>
         <div class="swiper-button-next"></div>
         <div class="swiper-button-prev"></div>
        
        {{--  <!--查看更多-->  --}}
        <div class="mt50"  style="text-align: right;padding-bottom: 100px;">
            <a href="javascript:;" class="f18 cea5">查看更多</a><img src="../../static/images/newsinformation/right-1.png" alt="" class="ml10"/>
        </div>
        
    </div>
</div>
@endsection