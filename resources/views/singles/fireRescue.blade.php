@extends('common.app')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('static/css/style-FireRescue.css') }}"/>
@endsection


@section('js')
    <script src="{{ asset('static/js/HumanoidRobot.js') }}" type="text/javascript" charset="utf-8"></script> 

@endsection


@section('title','消防救援机器人')

@section('content')
{{--  <!--**大图**-->  --}}
<div class="bigimg">
    <img src="../../static/images/FireRescue/ban_img_001.jpg" alt="" />
</div>
<div class="Page1">
    <div class="container">
        <dl>
            <dt class="text-center title">全地形消防救援</dt>
            <dd class="text-center subtitle">为高复杂高精准级智能提供有力保障</dd>
        </dl>
    </div>
    <div class="tab_bar">
        <div class="container">
            <ul class="nav nav-pills">
                  <li role="presentation" class="disabled cur" id="chanpinku"><a>产品库</a></li>
                  <li role="presentation" class="disabled" id="tese"><a>产品特色</a></li>
                  <li role="presentation" class="disabled" id="lingyu"><a>适用场景</a></li>
                  <li role="presentation" class="disabled" id="anli"><a>实战应用</a></li>

            </ul>
        </div>
    </div>
</div>
    {{--  <!--轮播-->  --}}
    <div class="lunbo ">
<div class="container">
    <div class="col-xs-12 lunbo_top">
         <div class="swiper-container" id="swiper-container1">
            <div class="swiper-wrapper row">
                <div class="swiper-slide col-md-4 col-xs-12">
                    <a href="#">
                    <img alt=""src="../../static/images/FireRescue/cpk_img_001.png" />
                    <div class="div_span">
                        <div class="f18 c3">干粉机器人</div>
                        <span class="f14">可以在高速运行时承担较高负载，非常适用于需要更大工作范围高有效负载同时拥有高速度、低价格的应用。机器人时重物取放、包装、机器装载/卸载等方案的理想选择。</span>
                    </div>
                    </a>
                    <div class="line"></div>
                </div>
                <div class="swiper-slide col-md-4 col-xs-12">
                    <a href="#">
                    <img alt=""src="../../static/images/FireRescue/cpk_img_002.png" />
                    <div class="div_span">
                        <div class="f18 c3">巡检型机器人</div>
                        <span class="f14">可以在高速运行时承担较高负载，非常适用于需要更大工作范围或更高有效负载同时拥高速度、低价格的应用。机器人时重物取放、包装、机器装载/卸载等方案的理想选择。</span>
                    </div>
                    </a>
                    <div class="line"></div>
                </div>
                <div class="swiper-slide col-md-4 col-xs-12">
                    <a href="#">
                    <img alt=""src="../../static/images/FireRescue/cpk_img_003.png" />
                    <div class="div_span">
                        <div class="f18 c3">救援型机器人</div>
                        <span class="f14">可以在高速运行时承担较高负载，非常适用于需要更大工作范围或更高有效负载同时拥高速度、低价格的应用。机器人时重物取放、包装、机器装载/卸载等方案的理想选择。</span>
                    </div>
                    </a>
                    <div class="line"></div>
                </div>						            
            </div>
            {{--  <!-- Add Arrows -->  --}}
            <div class="swiper-button-next pc"></div>
            <div class="swiper-button-prev pc"></div>
      </div>
    </div>
</div>

</div>
    {{--  <!--产品特色-->  --}}
    <div class="Fireproduct_feature">
        <div style="text-align: center;">
            <div class="onetit shequ" style="color: #666;padding-top: 80px;">产品特色</div>
            <div class="f16 mg10">代替人进驻易燃、易爆、易垮塌、高温、高湿、高污染、高辐射等场所进行工作</div>
        </div>
        <div class="container">
            <div class="contral_jishu mg20">
                <ul>
                    <li class="li_img">
                        <img src="../../static/images/FireRescue/cpts_Icon_008.png" alt="" class="hover" />
                        
                        <img src="../../static/images/FireRescue/cpts_Icon_001.png" alt="" class="outer" style="display: none;" />
                        <p>超强探测</p>
                        <div class="pc"></div>
                    </li>
                    <li class="li_img">
                        <img src="../../static/images/FireRescue/cpts_Icon_009.png" alt="" class="hover"/>
                        <img src="../../static/images/FireRescue/cpts_Icon_002.png" alt="" class="outer" style="display: none;" />	
                        <p>超机动巡航</p>
                        <div class="pc"></div>
                    </li>
                    <li class="li_img">
                        <img src="../../static/images/FireRescue/cpts_Icon_010.png" alt="" class="hover"/>
                        <img src="../../static/images/FireRescue/cpts_Icon_003.png" alt="" class="outer" style="display: none;" />
                        <p>全地形通行</p>
                        <div class="pc"></div>
                    </li>
                    <li class="li_img">
                        <img src="../../static/images/FireRescue/cpts_Icon_011.png" alt="" class="hover"/>
                        <img src="../../static/images/FireRescue/cpts_Icon_004.png" alt="" class="outer" style="display: none;" />
                        <p>全天候适用</p>
                        <div class="pc"></div>
                    </li>
                    <li class="li_img">
                        <img src="../../static/images/FireRescue/cpts_Icon_012.png" alt="" class="hover"/>
                        <img src="../../static/images/FireRescue/cpts_Icon_005.png" alt="" class="outer" style="display: none;" />
                        <p>双重控制</p>
                        <div class="pc"></div>
                    </li>
                    <li class="li_img">
                        <img src="../../static/images/FireRescue/cpts_Icon_013.png" alt="" class="hover"/>
                        <img src="../../static/images/FireRescue/cpts_Icon_006.png" alt="" class="outer" style="display: none;" />
                        <p>场景建模</p>
                        <div class="pc"></div>
                    </li>
                    <li class="li_img">
                        <img src="../../static/images/FireRescue/cpts_Icon_014.png" alt="" class="hover"/>
                        <img src="../../static/images/FireRescue/cpts_Icon_007.png" alt="" class="outer" style="display: none;" />
                        <p>智能避障</p>
                        <div class="pc"></div>
                    </li>
                </ul>
            </div>
            {{--  <!--位置控制-->  --}}
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 zhinengInd" style="margin-top: 3%;">
                <div class="lt col-lg-5 col-md-5 col-sm-12 col-xs-12 mgb10"><img src="../../static/images/FireRescue/cpts_img_001.jpg" alt="" /></div>
                <div class="rt col-lg-7 col-md-7 col-sm-12 col-xs-12 f16" style="margin-top:10px;">
                    <div class="chaoqiang">超强探测</div>
                    <div class="chaoqiang_text">火源探测：可以检测火焰或者波长在760纳米～1100纳米范围内的光源生命探测：通过自身可以携带传感器以及摄像头等来搜救行进探测：能够自行探测出障碍物并进行躲避的机器人智能瞄准：通过自身调节,水泡射程和流量可机器人范围内智能控制。</div>
                    
                </div>
            </div>
        </div>

    </div>
    {{--  <!--适应场景-->  --}}
    <div class="FitScene">
    <div class="container">
        <div class="title">
            <span class="s1">适应场景</span>
            <span class="s2">适用于不适宜人类进入的，环境恶劣、情势危险的作业现场</span>
        </div>
        <ul class="row">
            <li class="col-md-3 col-sm-6 col-xs-12">
                <div class="bg">
                    <img src="../../static/images/FireRescue/sycj_img_001.jpg">
                    <div class="bottom">
                        <p class="f18 c3">灭火</p>
                        <p class="f14 c6">加装消防水炮或灭火弹发射器后，机器人可执行灭火任务。</p>
                    </div>
                </div>
            </li>
            <li class="col-md-3 col-sm-6 col-xs-12">
                <div class="bg">
                    <img src="../../static/images/FireRescue/sycj_img_002.jpg">
                    <div class="bottom">
                        <p class="f18 c3">清障</p>
                        <p class="f14 c6">具有超强的探测功能，独立完成环境勘察、高温探测、行进探测、生命探测。</p>
                    </div>
                </div>
            </li>
            <li class="col-md-3 col-sm-6 col-xs-12">
                <div class="bg">
                    <img src="../../static/images/FireRescue/sycj_img_003.jpg">
                    <div class="bottom">
                        <p class="f18 c3">排爆</p>
                        <p class="f14 c6">车载牵引破门装置，能够对门体进行快速破拆工作。</p>
                    </div>
                </div>
            </li>
            <li class="col-md-3 col-sm-6 col-xs-12">
                <div class="bg">
                    <img src="../../static/images/FireRescue/sycj_img_004.jpg">
                    <div class="bottom">
                        <p class="f18 c3">救助伤员</p>
                        <p class="f14 c6">加装牵引和清障装置后，机器人能完成清障、破门和转运伤员等救援任务。</p>
                    </div>
                </div>
            </li>
            <li class="col-md-3 col-sm-6 col-xs-12">
                <div class="bg">
                    <img src="../../static/images/FireRescue/sycj_img_005.jpg">
                    <div class="bottom">
                        <p class="f18 c3">巡检</p>
                        <p class="f14 c6">实时采集图像,声音,温度,烟雾,甲烷,对巷道内各类故障进行实时监测与诊断。</p>
                    </div>
                </div>
            </li>
            <li class="col-md-3 col-sm-6 col-xs-12">
                <div class="bg">
                    <img src="../../static/images/FireRescue/sycj_img_006.jpg">
                    <div class="bottom">
                        <p class="f18 c3">勘察</p>
                        <p class="f14 c6">能够完成在各种天气状况、各种地形地貌环境中的作业。</p>
                    </div>
                </div>
            </li>
            <li class="col-md-3 col-sm-6 col-xs-12">
                <div class="bg">
                    <img src="../../static/images/FireRescue/sycj_img_007.jpg">
                    <div class="bottom">
                        <p class="f18 c3">探测</p>
                        <p class="f14 c6">行进速度快，工作效率高，特别适合大面积区域的快速检查。</p>
                    </div>
                </div>
            </li>
            <li class="col-md-3 col-sm-6 col-xs-12">
                <div class="bg">
                    <img src="../../static/images/FireRescue/sycj_img_008.jpg">
                    <div class="bottom">
                        <p class="f18 c3">转移物质</p>
                        <p class="f14 c6">消防机器人能够快速灵活的在仓库中移动。</p>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</div>
    {{--  <!--实战场景-->  --}}
    <div class="fireshizhan">
        <div class="container">
            <div class="title">
                <span class="s1">实战应用</span>
                
            </div>
            <div class="lunbo_top">
                 <div class="swiper-container" id="swiper-container2">
                    <div class="swiper-wrapper row">
                        <div class="swiper-slide col-md-4 col-xs-12">
                            <div class="bg">
                                <img src="../../static/images/FireRescue/szyy_img_001.jpg">
                                <div class="bottom">
                                    <p class="f18 c3 name">消防大队联动消防演练现场</p>
                                    <p class="text">2018年1月，某消防大队联合即墨创智新区政府进行消防演练，伏羲全地形消防救援机器人“惊艳登场”，向所有参与演练的人员展示了其强大的火灾应急处理能力。
                </p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide col-md-4 col-xs-12">
                            <div class="bg">
                                <img src="../../static/images/FireRescue/szyy_img_002.jpg">
                                <div class="bottom">
                                    <p class="f18 c3 name">消防大队联动消防演练现场</p>
                                    <p class="text">加装消防水炮或灭火弹发射器后，机器人可执行灭火任务。</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide col-md-4 col-xs-12">
                        <div class="bg">
                                <img src="../../static/images/FireRescue/szyy_img_003.jpg">
                                <div class="bottom">
                                    <p class="f18 c3 name">消防大队联动消防演练现场</p>
                                    <p class="text">加装消防水炮或灭火弹发射器后，机器人可执行灭火任务。</p>
                                </div>
                            </div>
                        </div>						            
                    </div>
                    {{--  <!-- Add Arrows -->  --}}
                    <div class="swiper-button-next pc"></div>
                    <div class="swiper-button-prev pc"></div>
              </div>
            </div>
        </div>
    
    </div>
@endsection

@section('script')
    <script>
        var swiper = new Swiper('#swiper-container1', {
                pagination: '.swiper-pagination',
                nextButton: '.swiper-button-next',
                prevButton: '.swiper-button-prev',
                slidesPerView:3,
                paginationClickable: true,
                spaceBetween:24,
                loop: true,
                breakpoints: {
                    1024: {
                        slidesPerView: 3,
                        spaceBetween: 20
                    },
                    768: {
                        slidesPerView: 3,
                        spaceBetween: 20
                    },
                    640: {
                        slidesPerView: 2,
                        spaceBetween: 20
                    },
                    320: {
                        slidesPerView: 1,
                        spaceBetween: 10
                    }
                },
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                  }
            });
        var swiper2 = new Swiper('#swiper-container2', {
                pagination: '.swiper-pagination',
                nextButton: '.swiper-button-next',
                prevButton: '.swiper-button-prev',
                slidesPerView:3,
                paginationClickable: true,
                spaceBetween:24,
                loop: true,
                breakpoints: {
                    1024: {
                        slidesPerView: 3,
                        spaceBetween: 20
                    },
                    768: {
                        slidesPerView: 3,
                        spaceBetween: 20
                    },
                    640: {
                        slidesPerView: 2,
                        spaceBetween: 20
                    },
                    320: {
                        slidesPerView: 1,
                        spaceBetween: 10
                    }
                },
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                  }
            });
        var lunOffset=document.querySelector('.lunbo_top');
        var controlSteam=document.querySelector('.control_steam');
        var productFeature=document.querySelector('.Fireproduct_feature');
        var scopeOfApplication=document.querySelector('.FitScene');
        var ApplicableIndustries=document.querySelector('.Applicable_industries');
        var successfulCase=document.querySelector('.fireshizhan');
        var afterSalesService=document.querySelector('.after_sales_service');
        var ToolingCustom=document.querySelector('.Tooling_custom');
        $("#chanpinku").click(function(){
            $("html,body").animate({scrollTop: lunOffset.offsetTop}, 600);
        })
        $("#dingzhi").click(function(){
            $("html,body").animate({scrollTop: ToolingCustom.offsetTop}, 600);
        })
        $("#kongzhi").click(function(){
            $("html,body").animate({scrollTop: controlSteam.offsetTop}, 600);
        })
        $("#tese").click(function(){
            $("html,body").animate({scrollTop: productFeature.offsetTop}, 600);
        })
        $("#lingyu").click(function(){
            $("html,body").animate({scrollTop: scopeOfApplication.offsetTop}, 600);
        })
        $("#hangye").click(function(){
            $("html,body").animate({scrollTop: ApplicableIndustries.offsetTop}, 600);
        })
        $("#anli").click(function(){
            $("html,body").animate({scrollTop: successfulCase.offsetTop}, 600);
            
        })
        $("#shouhou").click(function(){
            $("html,body").animate({scrollTop: afterSalesService.offsetTop}, 600);
        })
    </script>
@endsection