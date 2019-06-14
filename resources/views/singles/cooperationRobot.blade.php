@extends('common.app')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('static/css/style-CooperationRobot.css') }}"/>
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

@section('title','协作机器人')


@section('content')

{{--  <!--生产工厂里的智慧工人-->  --}}
<div class="Page1">
    <div class="container">
        <div class="title">生产工厂里的智慧工人</div>
        <div class="content">
            <div class="left col-md-4 col-xs-12">
                <ul>
                    <li><i class="circle"></i>高品质，低成本</li>
                    <li><i class="circle"></i>六自由度、轻型工业机器人</li>
                    <li><i class="circle"></i>为制造业企业量身定制</li>
                    <li><i class="circle"></i>无须安装护栏，近距离人机协作</li>
                </ul>
            </div>
            <div class=" middle col-md-4 col-xs-12">
                <img src="../../static/images/CooperationRobot/xzjqr.png">
            </div>
            <div class="right col-md-4 col-xs-12">
                <div class="text">
                    <ul>
                        <li><i class="circle"></i>友好、灵活、轻便，容易安装和部署</li>
                        <li><i class="circle"></i>无须编程，拖动示教</li>
                        <li><i class="circle"></i>快速满足柔性化生产需求</li>
                        <li><i class="circle"></i>减少危险性和重复性工人作业</li>
                    </ul>
                </div>
            </div>
            <div class="clear"></div>
        </div>
    </div>
</div>
{{--  <!--无须编程，拖动示教-->  --}}
    <div class="Page2">
        <div class="container">
            <div class="title">无须编程，拖动示教</div>
            <div class="row">
                    <div class="left col-md-7 col-xs-12">
                        <div><img src="../../static/images/CooperationRobot/icon.png"></div>
                        <div class="text">
                            伏羲协作机器人可通过拖动械臂，记录轨迹来进行任务编程。既解决了传统工业机器人复杂的编程环境，又降低许多外围设施成本。为企业制造提供更便捷、高效安全的智能劳动力。
                        </div>
                    </div>
                    <div class="right col-md-3 col-xs-12 col-md-offset-1">
                        <img src="../../static/images/CooperationRobot/xzjqr2.png">
                    </div>
            </div>
        
        </div>
    </div>
{{--  <!--产品优势-->  --}}
<div class="Page3">
    <div class="container">
        <div class="title">产品优势</div>
        <div class="row">
            <div class="left col-md-5 col-xs-12">	
                <img src="../../static/images/CooperationRobot/xzjqr3.png">
            </div>
            
            <div class="right col-md-7 col-xs-12">
                <div class="row">
                    <div class="col-md-6">
                        <div class="com">
                            <div class="name"><img src="../../static/images/CooperationRobot/lhyy-icon.png">灵活易用 </div>
                            <div class="text">
                                非专业人士在一天之内就能快速掌握并使用，外形轻量简便，容易安装部署，可实现吊装、墙装等安装姿态，即插即用。
                            </div>
                        </div>
                        <div class="com">
                            <div class="name"><img src="../../static/images/CooperationRobot/znykf-icon.png">智能与开放</div>
                            <div class="text">
                                基于TCP/IP协议的控制接口，SDK包含C和C++两个版本，并支持ROS机器人操作系统。
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="com">
                            <div class="name"><img src="../../static/images/CooperationRobot/mkh-icon.png">模块化 </div>
                            <div class="text">
                                模块化可重构设计，可根据用户需求，通过ROS或其他平台对关节模块进行重组，快速配置新结构、新形态机械臂。
                            </div>
                        </div>
                        <div class="com">
                            <div class="name"><img src="../../static/images/CooperationRobot/wxfb-icon.png">维修方便</div>
                            <div class="text">
                                一旦遭遇故障，仅需 15 分钟即可快速拆装和更换，维修、保养快捷方便。
                            </div>
                        </div>
                    </div>
                </div>
    
            </div>
        </div>
    </div>
</div>
{{-- <!--产品用途-->  --}}
<div class="Page4">
    <div class="container">
        <div class="title">产品用途</div>
        <div class="row">
            <div class="col-md-12 col-xs-12">
                <img src="../../static/images/CooperationRobot/cpyt.jpg">
            </div>
        </div>
    </div>
    
</div>

@endsection