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
             <a href="javascript:;" class="active">集团新闻</a>
             <a href="javascript:;">行业资讯</a>
         </div>
         <div class="container" style="padding: 0;">
             {{--  <!--左侧大图-->  --}}
             <a href="javascript:;" class="lt news-big-lt-outbox">
                 <img src="../../static/images/index/newda.png" alt="" />
                 <div class="mt30 c9 f18">2018-07-07</div>
                 <h4 class="mt30 c3 f20">容商天下邀请清华大学教授-刘鹰莅临指导</h4>
                 <p class="f16 c6 mt20">2017年7月7日上午，国家版权局版权管理司司长于慈珂一行，在山东省版权局副局长谢宁、青岛市文广新局副局长韩大钧...</p>
                 <div class="flex justify-between c9 f16 mt38">
                     <span>10分钟</span>
                     <span>200 阅读&nbsp;&nbsp;&nbsp;50 评论</span>
                 </div>
             </a>
             {{--  <!--右侧小图-->  --}}
             <div class="lt news-big-rt-outbox ml30">
                 <div class="news-date">
                     <a href="javascript:;" class="active">今天</a>
                     <a href="javascript:;">本周</a>
                     <a href="javascript:;">本月</a>
                     <a href="javascript:;">今年</a>
                     <a href="javascript:;">更早</a>
                 </div>
                 {{--  <!--列表单个框-->  --}}
                 <div class="news-sm-box ov flex justify-between">
                     <img src="../../static/images/index/newxiao.png" alt=""/>
                     <div class="ml20">
                         <h4 class="f18"><a href="javascript:;">容商天下邀请清华大学教授-刘鹰莅临指导</a></h4>
                         <p class="f16 c6 mt10">2017年7月7日上午，国家版权局版权管理司司长于慈珂一行，在山东省版权局副局长谢宁、青岛..</p>
                         <div class="flex justify-between c9 f16 mt15">
                             <span>10分钟</span>
                             <span>200 阅读&nbsp;&nbsp;&nbsp;50 评论</span>
                         </div>
                     </div>
                 </div>
                 <div class="news-sm-box ov flex justify-between">
                     <img src="../../static/images/index/newxiao.png" alt=""/>
                     <div class="ml20">
                         <h4 class="f18"><a href="javascript:;">容商天下邀请清华大学教授-刘鹰莅临指导</a></h4>
                         <p class="f16 c6 mt10">2017年7月7日上午，国家版权局版权管理司司长于慈珂一行，在山东省版权局副局长谢宁、青岛..</p>
                         <div class="flex justify-between c9 f16 mt15">
                             <span>10分钟</span>
                             <span>200 阅读&nbsp;&nbsp;&nbsp;50 评论</span>
                         </div>
                     </div>
                 </div>
                 <div class="news-sm-box ov flex justify-between">
                     <img src="../../static/images/index/newxiao.png" alt=""/>
                     <div class="ml20">
                         <h4 class="f18"><a href="javascript:;">容商天下邀请清华大学教授-刘鹰莅临指导</a></h4>
                         <p class="f16 c6 mt10">2017年7月7日上午，国家版权局版权管理司司长于慈珂一行，在山东省版权局副局长谢宁、青岛..</p>
                         <div class="flex justify-between c9 f16 mt15">
                             <span>10分钟</span>
                             <span>200 阅读&nbsp;&nbsp;&nbsp;50 评论</span>
                         </div>
                     </div>
                 </div>
                 <div class="news-sm-box ov flex justify-between">
                     <img src="../../static/images/index/newxiao.png" alt=""/>
                     <div class="ml20">
                         <h4 class="f18"><a href="javascript:;">容商天下邀请清华大学教授-刘鹰莅临指导</a></h4>
                         <p class="f16 c6 mt10">2017年7月7日上午，国家版权局版权管理司司长于慈珂一行，在山东省版权局副局长谢宁、青岛..</p>
                         <div class="flex justify-between c9 f16 mt15">
                             <span>10分钟</span>
                             <span>200 阅读&nbsp;&nbsp;&nbsp;50 评论</span>
                         </div>
                     </div>
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
            <div class="rongbiz-sm-box">
                <div class="lt rongbiz-sm-img">
                    <img src="../../static/images/index/rstxlogo.png"/>
                </div>
                <div class="lt rongbiz-sm-text c3 f16">
                    青岛容商天下网络有限公司依托互联网，以软硬件、机器人研发为核心，主要从事互联网高新技术研发、C2P工业云平台运营、企业智能升级改造、移动互联网应用等领域，市场覆盖全国。公司首创自主知识产权的C2P工业互联网生态模式、D2M全球化批量定制模式、静默式智能改造模式。通过运用互联网、移动互联网、工业以太网、物联网、云计算、大数据等先进技术，建立起集个性化、数字化于一体的智能生态模式。
                </div>
            </div>
            <div class="rongbiz-sm-box">
                <div class="lt rongbiz-sm-img">
                    <img src="../../static/images/index/fxlogo.png"/>
                </div>
                <div class="lt rongbiz-sm-text c3 f16">
                    伏羲智能机器人（青岛）有限公司是一家以机器人技术为核心，致力于智能产品及服务的高科技企业。公司成立于2017年，总部位于山东青岛即墨。公司拥有自主核心技术、核心零部件、核心产品及行业系统解决方案为一体的完整全产业价值链，成功研制了具有完全自主知识产权的工业机器人、消防救援机器人和仿人型机器人三大系列产品，面向智能装备、智能工厂、生产安全和智慧生活，形成四大产业方向，致力于打造数字化物联新模式。“伏羲智能”传承民族精神，为中华民族的伟大复兴贡献力量。
                </div>
            </div>
            <div class="rongbiz-sm-box">
                <div class="lt rongbiz-sm-img">
                    <img src="../../static/images/index/gxrclog.png"/>
                </div>
                <div class="lt rongbiz-sm-text c3 f16">
                    共享人才有限公司成立于2018年1月，基于“共享经济”思维，立足“国家人才引领发展”战略，服务全球人才和企业。重点解决大学生就业难、择业难问题；中小企业用人难、用人贵问题；创新创业者建团队难、找资金难问题；自由职业者无稳定收入、无社会保障问题。通过技能共享、时间共享、知识共享、信息共享、项目共享、产品共享、服务共享、团队共享、资本共享等多种共享形式，展现人才价值、释放人才潜能。帮助人才获得优质工作、迈入品质生活。
                </div>
            </div>
            <div class="rongbiz-sm-box">
                <div class="lt rongbiz-sm-img">
                    <img src="../../static/images/index/wrlogo.png"/>
                </div>
                <div class="lt rongbiz-sm-text c3 f16">
                    卫瑞生物材料科技有限公司位于青岛市即墨区，是一家专注于生物医药产品研发与应用的高新技术企业。公司充分利用青岛海洋生物科研资源优势，已掌握4D生物材料、3D悬空打印、4D人体支架打印等核心技术，拥有数十项国际和国内发明专利。卫瑞生物是全球首个将4D打印技术应用于现实产品的企业，研发并制造了全球首台4D人体支架打印机和首个4D人体生物支架，广泛应用于血管、胆管、腔道、鼻腔、泪管、脾脏、肝脏、骨钉、骨板、体外固定板和医用多维立体工件领域。公司长期与国内外大型科研院所和国际级专家学者开展联合科研，与全国各类甲级医疗机构结为临床应用合作伙伴，是国内生物科技领域产学研实践者和先锋企业。
                </div>
            </div>
        </div>
    </div>
    {{--  <!--****容商天下集团****-->  --}}
</div>
@endsection
@section('script')
    <script>
            $('.news-big-tit a').click(function(){
				$(this).addClass('active').siblings('a').removeClass('active');
			})
			
			$('.news-date a').click(function(){
				$(this).addClass('active').siblings('a').removeClass('active');
			})
    </script>
@endsection