@extends('common.app')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('static/css/style-humanoidRobot.css') }}"/>
@endsection

@section('title','仿人型机器人')

@section('content')
{{--  <!--**大图**-->  --}}
<div class="bigimg">
    <img src="{{ asset('static/images/HumanoidRobot/ban_img_001.jpg') }}" alt="" />
</div>
{{--  <!--智能机器人背景图-->  --}}
<div class="human-big-img">
    <div class="container-fluid" >
      <div class="container">
            <div class="onetit">多操控助手级智能</div>
            <div class="twotit">为高复杂高精准级智能提供有力保障</div>
      </div>
    </div>

    <div class="container-fluid zhineng ">
        <div class="row">
            <div class="li_nav">
                <ul class="container f16">
                    <li class="col-lg-3 col-md-3 col-sm-3 col-xs-3 active">
                        <a href="#jump1" id="li1">智能机器人</a>
                    </li>
                    <li class="col-lg-3 col-md-3 col-sm-3 col-xs-3 ">
                        <a href="#jump2" id="li2">控制技术</a>
                    </li>
                    <li class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                        <a href="#jump3" id="li3">产品功能</a>
                    </li>
                    <li class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                        <a href="#jump4" id="li4">适用领域</a>
                    </li>
                </ul>
            </div>

            <div class="container">
                <div class="onetit shequ" style="color: #666;" id="jump1">智能机器人</div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 zhinengInd" style="margin-top: 7px;">
                    <div class="lt col-lg-5 col-md-5 col-sm-12 col-xs-12 mb10 zn-img" >
                        <img src="{{ asset('static/images/HumanoidRobot/znjqr_img_001.png') }}" alt="" /></div>
                    <div class="rt col-lg-7 col-md-7 col-sm-12 col-xs-12 f18" >
                        <p class="mt30 lheight" >
                    仿人型智能机器人全身的自由度多达50个，且全部基本按照人体关节特点及分布位置设计制造，动作灵敏度及自由度高，仿人动作比较全面且到位。仿人型智能机器人一共有6种控制方式，可针对各种情境及工作需要进行调节以便提高工作效率和动作精准度。
                            </p>
                        <div class="gongneng f14">
                            <span >
                                <img src="{{ asset('static/images/HumanoidRobot/znjqr_icon_001.png') }}" alt="" /><p class="mt10"> 语音交互</p>
                            </span>
                            <span>
                                <img src="{{ asset('static/images/HumanoidRobot/znjqr_icon_002.png') }}" alt="" /><p class="mt10"> 视觉识别</p>
                            </span>
                            
                            <span>
                                <img src="{{ asset('static/images/HumanoidRobot/znjqr_icon_003.png') }}" alt="" /><p class="mt10"> 智能屏障</p>
                            </span>
                        </div>
                        <div class="know_more col-lg-5 col-md-5 col-sm-12 col-xs-12 mt30">
                            <a href="javascript:;" class="c6 f18">了解更多</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>	
    </div>
</div>
{{--  <!--控制技术背景图-->  --}}
<div class="human-big-img2">
    <div class="container-fluid zhineng ">
            {{--  <!--控制技术-->  --}}
            <div style="text-align: center;" id="jump2">
                <div class="onetit shequ" style="color: #666;">控制技术</div>
                <div class="f16 mt20">解决科研、工业领域实用中机器人动作自由度低和灵活度低、控制方式单一而造成的实用功能少和受限的情况</div>
            </div>
            <div class="container">
                <div class="contral_jishu mt50">
                    <ul>
                        <li class="col-lg-2 col-md-2 col-sm-4 col-xs-6 li_img">
                            <img src="{{ asset('static/images/HumanoidRobot/kzjs_icon_007.jpg') }}" alt="" />
                            <p class="mt15 mb15">位姿控制</p>
                            <div></div>
                        </li>
                        <li class="col-lg-2 col-md-2 col-sm-4 col-xs-6 li_img"><img src="{{ asset('static/images/HumanoidRobot/kzjs_icon_008.png') }}" alt="" />
                            <p class="mt15 mb15">固定轨迹控制</p>
                            <div></div>
                        </li>
                        <li class="col-lg-2 col-md-2 col-sm-4 col-xs-6 li_img"><img src="{{ asset('static/images/HumanoidRobot/kzjs_icon_009.png') }}" alt="" />
                            <p class="mt15 mb15">语音控制</p>
                            <div></div>
                        </li>
                        <li class="col-lg-2 col-md-2 col-sm-4 col-xs-6 li_img"><img src="{{ asset('static/images/HumanoidRobot/kzjs_icon_010.png') }}" alt="" />
                            <p class="mt15 mb15">视觉控制 </p>
                            <div></div>
                        </li>
                        <li class="col-lg-2 col-md-2 col-sm-4 col-xs-6 li_img"><img src="{{ asset('static/images/HumanoidRobot/kzjs_icon_011.png') }}" alt="" />
                            <p class="mt15 mb15">脑电波控制 </p>
                            <div></div>
                        </li> 
                        <li class="col-lg-2 col-md-2 col-sm-4 col-xs-6 li_img"><img src="{{ asset('static/images/HumanoidRobot/kzjs_icon_012.png') }}" alt="" />
                            <p class="mt15 mb15">远程控制 </p>
                            <div></div>
                        </li>
                    </ul>
                </div>
                {{--  <!--位置控制-->  --}}
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 zhinengInd mt50" >
                    <div class="lt col-lg-5 col-md-5 col-sm-12 col-xs-12 mb10">
                        <img src="{{ asset('static/images/HumanoidRobot/kzjs_img_001.png') }}" alt="" class="wz-img"/>
                    </div>
                    <div class="rt col-lg-7 col-md-7 col-sm-12 col-xs-12 f16" >
                        <div class="f36 c3 wz-tit">位姿控制</div>
                        <div class="mt30 f18 lheight" >
                    操作人员穿着位姿控制穿戴设备，穿戴设备中设有位姿采集器，全身多达15个，当人体开始做出动作时，位姿采集器会主动通过采集人体动作信息并传送至前胸总控制器，前胸总控制器将收到的动作信息转化成指令以5.8GHz频率发射给仿人型智能机器人的RSOS总控板上的接收器，RSOS总控板接收指令并解算后发至机器人相应位置的控制板，控制板向相关舵机传达指令使机器人运动，可达到操作人员与机器人动作同步的目的。
                
                
                </div>

                    </div>
                </div>
            </div>
    </div>		
</div>
{{--  <!--产品功能背景图-->  --}}
<div class="human-big-img3">
    <div class="container-fluid zhineng ">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-sm-12 " id="jump3">
                            <div class="onetit shequ" style="color: #666;">产品功能</div>
                            <div class="f16 mt20 tc c6">能说会道，动作灵活，能够模仿人类各种肢体动作</div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 lingyu" style="padding: 0;">
                    <ul>
                        <li class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="cp-img-big"><img src="{{ asset('static/images/HumanoidRobot/cpgn_img_001.jpg') }}" alt="" /></div>
                            <div class=" cp-img-bottom">
                                <div class=" f18">抓握物体</div>
                                <div class="c6 f14 mt10">通过压力传感器，感知力度，来适当的抓握物体。</div>
                            </div>
                        </li>

                        <li class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="cp-img-big"><img src="{{ asset('static/images/HumanoidRobot/cpgn_img_002.jpg') }}" alt="" /></div>
                            <div class="cp-img-bottom">
                                <div class=" f18">视觉同步</div>
                                <div class="c6 f14 mt10">影响实时传输，人机视觉同步。</div>
                            </div>
                        </li>
                        <li class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="cp-img-big"><img src="{{ asset('static/images/HumanoidRobot/cpgn_img_003.jpg') }}" alt=""/></div>
                            <div class="cp-img-bottom" >
                                <div class=" f18">视觉识别</div>
                                <div class="c6 f14 mt10">识别特定颜色物体。</div>
                            </div>
                        </li>
                        <li class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="cp-img-big"><img src="{{ asset('static/images/HumanoidRobot/cpgn_img_004.jpg') }}" alt=""  /></div>
                            <div class="cp-img-bottom" >
                                <div class=" f18">语音交互</div>
                                <div class="c6 f14 mt10">
                    加装消防水炮或灭火弹发射器后，机器人可执行灭火任务</div>
                            </div>

                        </li>
                        <li class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="cp-img-big"><img src="{{ asset('static/images/HumanoidRobot/cpgn_img_005.jpg') }}" alt=""  /></div>
                            <div class="cp-img-bottom" >
                                <div class=" f18">肢体动作</div>
                                <div class="c6 f14 mt10">模仿人类各种肢体动作。</div>
                            </div>
                        </li>
                        <li class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="cp-img-big"><img src="{{ asset('static/images/HumanoidRobot/cpgn_img_006.jpg') }}" alt=""  /></div>
                            <div class="cp-img-bottom" >
                                <div class=" f18">智能避障</div>
                                <div class="c6 f14 mt10">
                    通过对环境的红外和超声波扫描，建立环境模型，智能躲避障碍物。</div>
                            </div>
                        </li>
                    </ul>
                        </div>
                    </div>
                    
                </div>
            
    </div>
</div>
{{--  <!--适用领域背景图-->  --}}
<div class="human-big-img4">
    <div class="container-fluid zhineng ">			
            <div class="container">
                <div class="onetit shequ" style="color: #666;" id="jump4">适用领域</div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 lingyu" style="padding: 0;">
                    <ul>
                        <li class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="cp-img-big"><img src="{{ asset('static/images/HumanoidRobot/syly_img_001.jpg') }}" alt=""  /></div>
                            <div class="cp-img-bottom" >
                                <div class=" f18">科研</div>
                                <div class="c6 f14 mt10">全身的自由度多达50个，动作灵活度及自由度高，放任动作比较全面且到位，实现更高的科研效率。</div>
                            </div>
                        </li>

                        <li class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="cp-img-big"><img src="{{ asset('static/images/HumanoidRobot/syly_img_002.jpg') }}" alt=""/></div>
                            <div class="cp-img-bottom" >
                                <div class=" f18">反恐防暴</div>
                                <div class="c6 f14 mt10">在反恐防暴工作中更需要具有更高的动作自由度及更多的控制和感应方式的仿人型智能机器人的参与。</div>
                            </div>
                        </li>
                        <li class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="cp-img-big"><img src="{{ asset('static/images/HumanoidRobot/syly_img_003.jpg') }}" alt=""  /></div>
                            <div class="cp-img-bottom" >
                                <div class=" f18">军用</div>
                                <div class="c6 f14 mt10">某些军事领域等人类不适宜参与的工作中，更需要具有自由度及控制和感应方式的智能机器人的参与。</div>
                            </div>
                        </li>
                        <li class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="cp-img-big"><img src="{{ asset('static/images/HumanoidRobot/syly_img_004.jpg') }}" alt="" /></div>
                            <div class="cp-img-bottom" >
                                <div class=" f18">救援</div>
                                <div class="c6 f14 mt10">在救援工作中更需要具有更高的动作自由度及更多的控制和感应方式的仿人型智能机器人的参与。</div>
                            </div>

                        </li>
                        <li class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="cp-img-big"> <img src="{{ asset('static/images/HumanoidRobot/syly_img_005.jpg') }}" alt=""  /></div>
                            <div class="cp-img-bottom" >
                                <div class=" f18">极地考察</div>
                                <div class="c6 f14 mt10">在极地科考工作中更需要具有更高的动作自由度及更多的控制和感应方式的智能机器人的参与。</div>
                            </div>
                        </li>
                        <li class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="cp-img-big"><img src="{{ asset('static/images/HumanoidRobot/syly_img_006.jpg') }}" alt="" /></div>
                            <div class="cp-img-bottom" >
                                <div class=" f18">事故检测与处理</div>
                                <div class="c6 f14 mt10">在事故检测与处理工作中更需要具有更高的动作自由度及控制和感应方式智能机器人的参与。</div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
