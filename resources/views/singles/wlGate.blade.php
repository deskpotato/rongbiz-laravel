@extends('common.app')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('static/css/style-Internet.css') }}"/>
@endsection

@section('title','天工开物-物联网关')


@section('content')
{{--  <!--**大图**-->  --}}
<div class="bigimg">
    <video autoplay="autoplay" loop="loop" style="width:100%;  ">
<source class="webm" type="video/webm" src="../../static/images/InternetThings/banner.mp4">
    </video>
</div>
{{--  <!--产品呢-->  --}}
<div class="Page1">
    <div class="container">
        <div class="title">产品介绍</div>
        <div class="content">
            <div class="img_left col-md-6">
                <img src="../../static/images/InternetThings/cpjs_img_001.png">
            </div>
            <div class="right col-md-6">
                <div class="title2">天工开物 - 物联网关</div>
                <div class="text">
                    工业物联网网关是为助力机械制造、仪器仪表、石化、化工、冶金、能源、环保、智能建筑、智能农业等企业向物联网企业转变，所推出的工业设备数据采集、传输设备。基于电子人工业物联网网关、成熟的IoT平台，可将设备连接到互联网，实现设备互联网对接，可为企业客户构建自己的远程设备监控系统。
                </div>
            </div>
            <div class="clear"></div>
        </div>
    </div>
</div>
{{--  <!--产品参数-->  --}}
    <div class="Page2">
        <div class="container">
            <div class="title">产品参数</div>
            <table border="" cellspacing="" cellpadding="">
                <tr>
                    <th colspan="2" width="40%" class="blue">基本参数</th>
                    <th width='20%' class="cDB">RS1000</th>
                    <th width='20%' class="cCB">RS1000</th>
                    <th width='20%' class="cB9">RS1000</th>
                </tr>
                <tr width="1000%">
                    <td width ="20%" rowspan="3" class="blue">功能</td>
                    <td width="20%" class="cf2">数据采集</td>
                    <td width="20%" class="cE2"><span class="kong "><span></td>
                    <td width="20%" class="cD3"><span class="kong"><span></td>
                    <td width="20%" class="cC1"><span class="kong"><span></td>
                </tr>
                <tr width="1000%">
                    <td width="20%" class="cEB">远程控制</td>
                    <td width="20%" class="cDB"></td>
                    <td width="20%" class="cCB"><span class="kong"><span></td>
                    <td width="20%" class="cB9"><span class="kong"><span></td>
                </tr>
                <tr width="1000%">
                    <td width="20%" class="cf2">采集点位</td>
                    <td width="20%" class="cE2">50点/30秒</td>
                    <td width="20%" class="cD3">200点/30秒</td>
                    <td width="20%" class="cC1">2000点/1秒</td>
                </tr>
                <tr width="1000%">
                    <td width ="20%" rowspan="2" class="blue">网络</td>
                    <td width="20%" class="cf2">2G/3G/4G</td>
                    <td width="20%" class="cDB"><span class="kong"><span></td>
                    <td width="20%" class="cCB"><span class="kong"><span></td>
                    <td width="20%" class="cB9"><span class="kong"><span></td>
                </tr>
                <tr width="1000%">
                    <td width="20%" class="cEB">WIFI</td>
                    <td width="20%" class="cE2"><span class="kong"><span></td>
                    <td width="20%" class="cD3"><span class="kong"><span></td>
                    <td width="20%" class="cC1"><span class="kong"><span></td>
                </tr>
                    <tr width="1000%">
                    <td width ="20%" rowspan="3" class="blue">接口</td>
                    <td width="20%" class="cf2">RJ45</td>
                    <td width="20%" class="cDB"></td>
                    <td width="20%" class="cCB"><span class="kong"><span></td>
                    <td width="20%" class="cB9"><span class="kong"><span></td>
                </tr>
                <tr width="1000%">
                    <td width="20%" class="cEB">RS232</td>
                    <td width="20%" class="cE2"><span class="kong"><span></td>
                    <td width="20%" class="cD3"><span class="kong"><span></td>
                    <td width="20%" class="cC1"><span class="kong"><span></td>
                </tr>
                <tr width="1000%">
                    <td width="20%" class="cf2">RS485</td>
                    <td width="20%" class="cDB"><span class="kong"><span></td>
                    <td width="20%" class="cCB"><span class="kong"><span></td>
                    <td width="20%" class="cB9"><span class="kong"><span></td>
                </tr>
                
                
                <tr width="1000%">
                    <td width ="20%" rowspan="6" class="blue">协议</td>
                    <td width="20%" class="cf2">MODBUS RUT/TIP</td>
                    <td width="20%" class="cE2"><span class="kong"><span></td>
                    <td width="20%" class="cD3"><span class="kong"><span></td>
                    <td width="20%" class="cC1"><span class="kong"><span></td>
                </tr>
                <tr width="1000%">
                    <td width="20%" class="cEB">西门子S7系列</td>
                    <td width="20%" class="cDB"></td>
                    <td width="20%" class="cCB"></td>
                    <td width="20%" class="cB9"><span class="kong"><span></td>
                </tr>
                <tr width="1000%">
                    <td width="20%" class="cf2">欧姆龙CP/CJ/CS系列</td>
                    <td width="20%" class="cE2"></td>
                    <td width="20%" class="cD3"></td>
                    <td width="20%" class="cC1"><span class="kong"><span></td>
                </tr>
                <tr width="1000%">
                    <td width ="20%"  class="cEB">三菱FX系列</td>
                    <td width="20%" class="cDB"></td>
                    <td width="20%" class="cCB"></td>
                    <td width="20%" class="cB9"><span class="kong"><span></td>
                </tr>
                <tr width="1000%">
                    <td width="20%" class="cf2">施耐德Modicon/Preium/Quantum系列</td>
                    <td width="20%" class="cE2"></td>
                    <td width="20%" class="cD3"></td>
                    <td width="20%" class="cC1"><span class="kong"><span></td>
                </tr>
                <tr width="1000%">
                    <td width="20%" class="cEB">台达DVP系列</td>
                    <td width="20%" class="cDB"></td>
                    <td width="20%" class="cCB"></td>
                    <td width="20%" class="cB9"><span class="kong"><span></td>
                </tr>
                <tr width="1000%">
                    <td width ="20%" rowspan="2" class="blue">云平台</td>
                    <td width="20%" class="cf2">工业云</td>
                    <td width="20%" class="cE2"><span class="kong"><span></td>
                    <td width="20%" class="cD3"><span class="kong"><span></td>
                    <td width="20%" class="cC1"><span class="kong"><span></td>
                </tr>
            </table>
        </div>
    </div>
{{--  <!--核心优势-->  --}}
<div class="Page3">
    <div class="container">
        <div class="title">核心优势</div>
        <div id="">
            <div class="left col-md-3">	
                <div class="com">
                    <div class="name"><img src="../../static/images/InternetThings/hxys_icon_001.png">物联矩阵</div>
                    <div class="text">
                        将工业设备连入工业云。提供x86或ARM架构，支持Linux和Windows系统。负责工业设备的接口对接、数据采集、数据处理和协议转换。
                    </div>
                </div>
                <div class="com">
                    <div class="name"><img src="../../static/images/InternetThings/hxys_icon_002.png">边缘接入</div>
                    <div class="text">
                        支持近20种物联网数据协议和常见接口，负责边缘数据采集和预处理，并将预处理后的数据发往工业云平台。
                    </div>
                </div>
                <div class="com">
                    <div class="name"><img src="../../static/images/InternetThings/hxys_icon_003.png">物联矩阵</div>
                    <div class="text">
                        衔接自动化系统和工业云平台，完成数据通讯和协议解析。支持数据传输的多协议，复杂网络环境的要求，支持断点续传、带宽限制、数据压缩加密等多种传输要求。支持私有协议定制开发。
                    </div>
                </div>
            </div>
            <div class="middle col-md-6"><img src="../../static/images/InternetThings/cpjs_img_002.png">	</div>
            <div class="right col-md-3">
                <div class="com">
                    <div class="name"><img src="../../static/images/InternetThings/hxys_icon_004.png">边缘管理 </div>
                    <div class="text">
                        提供设备接入与云端物镜像的管理和远程配置。
                    </div>
                </div>
                <div class="com">
                    <div class="name"><img src="../../static/images/InternetThings/hxys_icon_005.png">工业数据流</div>
                    <div class="text">
                        提供工业数据流设计工具，可视化配置从边缘设备到时序数据处理、存储，以及工业智能计算的全过程。
                    </div>
                </div>
                <div class="com">
                    <div class="name"><img src="../../static/images/InternetThings/hxys_icon_006.png">工业智能</div>
                    <div class="text">
                        提供实时分析能力，集成丰富的边缘分析算法集成。可在云端和边缘端实时提供设备预测性维护、工艺优化、稳态分析等最佳实践，基于强大的计算与分析能力，提升企业工业智能水平。
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{--  <!--应用场景-->  --}}
<div class="Page4">
    <div class="container">
        <div class="title">应用场景</div>
         <div class="swiper-container ">
             <div class="swiper-wrapper">
                 <div class="swiper-slide">
                     <img src="../../static/images/InternetThings/1.png" >
                     <div class="bg"></div>
                     <div class="context">
                         <p>通用行业</p>
                        <div>面向制造业中小企业，十余应用、数百可选配、可定制模块。企业按需订购应用模块。面向制造业中小企业，十余应用、数百可选配、可定制模块企业按需订购应用模块。</div>
                     </div>
                 </div>
                 <div class="swiper-slide">
                     <img src="../../static/images/InternetThings/2.png" >
                      <div class="bg"></div>
                     <div class="context">
                         <p>生物医药</p>
                         <div>以精益生产为核心，以ERP辅助管理，以MES管控生产，以SCM维护供应链。以精益生产为核心，以ERP辅助管理，以MES管控生产，以SCM维护供应链。</div>
                     </div>
                 </div>
                 <div class="swiper-slide">
                     <img src="../../static/images/InternetThings/3.png" >
                      <div class="bg"></div>
                     <div class="context">
                         <p>数码家电</p>
                         <div>提供全面的生产制造解决方案，帮助汽车制造业进行精细化生产，最大化提高生产效率。提供全面的生产制造解决方案，帮助汽车制造业进行精细化生产，提高生产效率。</div>
                     </div>
                </div>
                 <div class="swiper-slide">
                    <img src="../../static/images/InternetThings/4.png" >
                    <div class="bg"></div>
                    <div class="context">
                        <p>汽车船舶</p>
                        <div>家电行业解决方案基于多营运中心的管理架构体系，构造了以供应链、生产管理为核心。解决方案基于多营运中心的管理架构体系，构造了以供应链、生产管理为核心。</div>
                    </div>
                </div>
             </div>
            
          
         </div>
         {{--  <!-- Add Arrows -->  --}}
         <div class="swiper-button-next"></div>
         <div class="swiper-button-prev"></div>
    </div>
    
</div>
@endsection

@section('script')
    <script>
        var swiper = new Swiper('.swiper-container', {
            pagination: '.swiper-pagination',
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
              },
            slidesPerView:4,
            paginationClickable: true,
            spaceBetween: 0,
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
        });
    </script>
@endsection

