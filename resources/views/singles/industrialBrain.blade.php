@extends('common.app')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('static/css/style-IndustrialBrain.css') }}"/>
@endsection

@section('title','天工开物-工业大脑')

@section('content')
{{--  <!--**大图**-->  --}}
<div class="bigimg">
    <img src="../../static/images/IndustrialBrain/ban_img_001.jpg" >
</div>
{{--  <!--产品呢-->  --}}
<div class="Page1">
    <div class="container">
        <div class="title">产品介绍</div>
        <div class="content">
            
            <div class="img_left col-md-6">
                <div class="title2">天工开物 - 工业大脑</div>
                <div class="text">
                    工业大脑让机器能够感知、传递和自我诊断问题，通过分析工业生产中收集的数据，优化机器的产出和减少废品成本。通过传感器、智能算法和强大的计算能力，工业大脑解决的是工业制造业的核心问题。
                </div>
            </div>
            <div class="right col-md-6">
                <img src="../../static/images/IndustrialBrain/cpjs_img_001.png">
            </div>
            <div class="clear"></div>
        </div>
    </div>
</div>
<!--产品参数-->
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


<!--核心优势-->
<div class="Page3">
    <div class="container">
        <div class="title">核心优势</div>
        <div id="">
            <div class="left col-md-3">	
                <div class="com">
                    <div class="name"><img src="../../static/images/IndustrialBrain/hxys_icon_001.png">一键企业上云</div>
                    <div class="text">
                        <p><img src="../../static/images/IndustrialBrain/duigou.png">完美适配C2P工业云平台，兼容第三方工业云平台；</p>
                        <p><img src="../../static/images/IndustrialBrain/duigou.png">企业上云高速公路，智能工厂云端驱动。</p>
                    </div>
                </div>
                <div class="com">
                    <div class="name"><img src="../../static/images/IndustrialBrain/hxys_icon_002.png">开启边缘计算</div>
                    <div class="text">
                        <p><img src="../../static/images/IndustrialBrain/duigou.png">具备数据清洗、数据转换、数据加密和数据预处理力；</p>
                        <p><img src="../../static/images/IndustrialBrain/duigou.png">拥有更快的网络响应速度、更低的网络带宽需求、更高的数据安全和隐私保护级别；</p>
                        <p><img src="../../static/images/IndustrialBrain/duigou.png">支持定制化业务预处理模块，即插即用。</p>
                    </div>
                </div>
                <div class="com">
                    <div class="name"><img src="../../static/images/IndustrialBrain/hxys_icon_003.png">破除信息孤岛</div>
                    <div class="text">
                        <p><img src="../../static/images/IndustrialBrain/duigou.png">支持20余种通信协议和工业设备接口；</p>
                        <p><img src="../../static/images/IndustrialBrain/duigou.png">可适配各种常见的第三方应用软件、工业软件和数据库系统，支持协议与接口定制；</p>
                        <p><img src="../../static/images/IndustrialBrain/duigou.png"> 提供多种网络接入方式；</p>
                        <p><img src="../../static/images/IndustrialBrain/duigou.png"> 一站式数据采集，可同时接入多种软、硬件系统；</p>
                        <p><img src="../../static/images/IndustrialBrain/duigou.png">根除信息孤岛问题，实现各设备、各系统间互联互通。</p>
                    </div>
                </div>
            </div>
            <div class="middle col-md-6"><img src="../../static/images/InternetThings/cpjs_img_002.png">	</div>
            <div class="right col-md-3">
                <div class="com">
                    <div class="name"><img src="../../static/images/IndustrialBrain/hxys_icon_004.png">沉淀工业数据 </div>
                    <div class="text">
                        <p><img src="../../static/images/IndustrialBrain/duigou.png">作为数据传输中枢，为企业管理和运营汇聚并沉淀海量数据；</p>
                        <p><img src="../../static/images/IndustrialBrain/duigou.png">支持定制数据挖掘、数据分析和数据感知模块。</p>
                    </div>
                </div>
                <div class="com">
                    <div class="name"><img src="../../static/images/IndustrialBrain/hxys_icon_005.png">点亮工业大脑</div>
                    <div class="text">
                        <p><img src="../../static/images/IndustrialBrain/duigou.png">提供Web和手机APP远程管理；</p>
                        <p><img src="../../static/images/IndustrialBrain/duigou.png">支持x86和ARM架构；</p>
                        <p><img src="../../static/images/IndustrialBrain/duigou.png">内置语音交互引擎；</p>
                        <p><img src="../../static/images/IndustrialBrain/duigou.png"> Windows IoT和Linux两种操作系统可选；</p>
                        <p><img src="../../static/images/IndustrialBrain/duigou.png">支持各类VR、AR、MR设备，体验虚拟智能工厂。</p>
                    </div>
                </div>
                <div class="com">
                    <div class="name"><img src="../../static/images/IndustrialBrain/hxys_icon_006.png">无虞工业安全</div>
                    <div class="text">
                        <p><img src="../../static/images/IndustrialBrain/duigou.png">数据安全和生产安全双重保障机制；</p>
                        <p><img src="../../static/images/IndustrialBrain/duigou.png">重要隐私数据永久封闭于本地授信空间内，加密存储、沙盒计算，与非授信设备和网络完全隔离；</p>
                        <p><img src="../../static/images/IndustrialBrain/duigou.png">内置反病毒模块、网络防火墙和主动防御系统；</p>
                        <p><img src="../../static/images/IndustrialBrain/duigou.png">预置订单交付、产能、设备、物流、仓储等数十种生产；</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--应用场景-->
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
            nextButton: '.swiper-button-next',
            prevButton: '.swiper-button-prev',
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