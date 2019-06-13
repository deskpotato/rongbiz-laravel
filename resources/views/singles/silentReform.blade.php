@extends('common.app')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('static/common/css/font-awesome-4.7.0/css/font-awesome.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('static/common/css/base.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('static/common/css/willesPlay.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('static/common/css/bootstrap.min.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('static/css/style-silentReform.css') }}"/>
@endsection


@section('js')
    <script src="{{ asset('static/common/js/willesPlay.js') }}" type="text/javascript" charset="utf-8"></script>    
@endsection


@section('title','静模式智能改造')

@section('content')
{{--  <!--banner-->  --}}
<div class="container-fluid" style="padding: 0;">
    <div class="jumbotron banner-img" style="border-radius: 0;">
        <div class="container ">
            <h1 class="bdImgTxt_first">静默式智能改造</h1>
            <p class="bdImgTxt_sec">silent intelligent transformation</p>
        </div>
    </div>
</div>

{{--  <!--不停工  不停产-->  --}}
<div class="gray">
    <div class="w1200">
        <h3 class="big-tit f36 tc">不停工  不停产</h3>
        <p class="f18 c3 tc">智能改造过程不影响企业正常生产和经营，通过VR仿真技术在实验室进行全生产过程模拟，现场快速实施</p>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div id="willesPlay">

                        <div class="playContent">
                            <div class="turnoff">
                                <ul>
                                    <li>
                                        <a href="javascript:;" title="关灯" class="btnLight on glyphicon "><i class="fa fa-eye"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <video width="100%" height="100%" id="playVideo">
                                <source src="../../static/common/video/first.mp4" type="video/mp4"></source>
                                当前浏览器不支持 video直接播放，点击这里下载视频：
                                <a href="/">下载视频</a>
                            </video>
                            <div class="playTip glyphicon"><i class="fa fa-play"></i></div>
                        </div>
                        <div class="playControll">
                            <div class="playPause playIcon"></div>
                            <div class="timebar">
                                <span class="currentTime">0:00:00</span>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-danger progress-bar-striped" role="progressbar" aria-valuemin="0" aria-valuemax="100" style="width: 0%"></div>
                                </div>
                                <span class="duration">0:00:00</span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<div class="blank">
    <div class="w1200">
        <h3 class="big-tit f36 tc">不额外追加投资</h3>
        <p class="f18 c3 tc">充分改造或复用企业现有生产设备，利用企业人工成本进行机器换人，无需额外追加投资</p>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div id="willesPlay">

                        <div class="playContent">
                            <div class="turnoff">
                                <ul>
                                    <li>
                                        <a href="javascript:;" title="关灯" class="btnLight on glyphicon "><i class="fa fa-eye"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <video width="100%" height="100%" id="playVideo">
                                <source src="../../static/common/video/second.mp4" type="video/mp4"></source>
                                当前浏览器不支持 video直接播放，点击这里下载视频：
                                <a href="/">下载视频</a>
                            </video>
                            <div class="playTip glyphicon"><i class="fa fa-play"></i></div>
                        </div>
                        <div class="playControll">
                            <div class="playPause playIcon"></div>
                            <div class="timebar">
                                <span class="currentTime">0:00:00</span>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-danger progress-bar-striped" role="progressbar" aria-valuemin="0" aria-valuemax="100" style="width: 0%"></div>
                                </div>
                                <span class="duration">0:00:00</span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>


<div class="gray" style="margin-bottom: 450px;">
    <div class="w1200">
        <h3 class="big-tit f36 tc">循序渐进  由点到面</h3>
        <p class="f18 c3 tc">先改造工位，再改造生产线，最终改造整个工厂</p>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div id="willesPlay">

                        <div class="playContent">
                            <div class="turnoff">
                                <ul>
                                    <li>
                                        <a href="javascript:;" title="关灯" class="btnLight on glyphicon "><i class="fa fa-eye"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <video width="100%" height="100%" id="playVideo">
                                <source src="../../static/common/video/first.mp4" type="video/mp4"></source>
                                当前浏览器不支持 video直接播放，点击这里下载视频：
                                <a href="/">下载视频</a>
                            </video>
                            <div class="playTip glyphicon"><i class="fa fa-play"></i></div>
                        </div>
                        <div class="playControll">
                            <div class="playPause playIcon"></div>
                            <div class="timebar">
                                <span class="currentTime">0:00:00</span>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-danger progress-bar-striped" role="progressbar" aria-valuemin="0" aria-valuemax="100" style="width: 0%"></div>
                                </div>
                                <span class="duration">0:00:00</span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection