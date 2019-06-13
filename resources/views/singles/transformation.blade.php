@extends('common.app')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('static/css/style-transformation.css') }}"/>
@endsection

@section('js')
	<script src="{{ asset('static/js/transformation.js') }}" type="text/javascript" charset="utf-8"></script>
@endsection
@section('title','企业转型升级')


@section('content')
<!--**大图**-->
		<div class="container-fluid" style="padding: 0;">
			<div class="jumbotron banner-img" style="border-radius: 0;">
			  <div class="container">
			     <h1 class="bdImgTxt_first">企业转型升级服务</h1>
				 <p class="bdImgTxt_sec">为制造企业转型升级赋能</p>
			  </div>
			</div> 
		</div>
		<!--服务流程-->
		<div class="common-big-tit">
			<h1 class="c3">服务流程</h1>
		</div>
		<div class="service-process">
			<div class="w1200 pr ov">
				<!--白色三角-->
				<div id="triangle-down"></div>
				<!--文本-->
				<div class="service-process-text-box">
					<div class="f16 active" data-index=0>01 <br />入企诊断</div>
					<div class="f16 " data-index=1>02 <br />提供服务</div>
					<div class="f16" data-index=2>03 <br />静默式智能改造</div>
					<div class="f16" data-index=3>04 <br />实现智能工厂</div>
				</div>
				<!--渐隐线条-->	
				<div class="line-box pr">
					<img src="../../static/images/transformation/fwlcxiao.png" alt="" class="line-circle1"/>
					<img src="../../static/images/transformation/fwlcda.png" alt="" class=" line-circle2"/>
					<img src="../../static/images/transformation/fwlcxiao.png" alt="" class=" line-circle3"/>
					<img src="../../static/images/transformation/fwlcxian.png" class="service-process-line"/>
				</div>
				
				<!--蓝色三角-->
				<div id="triangle-down2"></div>
				
				<!--四模块-->
				<div class="service-process-modular">
					
				</div>
			</div>
		</div>
		<!--服务轮播-->
		<div class="service-swiper">
			<div class="w1200">
				<div class="swiper-container swiper-container1">
				    <div class="swiper-wrapper">
				      <div class="swiper-slide">
				      	<img src="../../static/images/transformation/fwlcimage.png" alt="" class="lt slide-img"/>
				      	<div class="rt slide-text">
				      		<div class="mt15">
				      			<img src="../../static/images/transformation/fxlogo.png" alt="" class="slide-detial-img"/>
				      			<span class="f16 c6 ml15">为制造业转型升级赋能</span>
				      		</div>
				      		<div class="f16 c6 slide-detial">
				      			工业互联网平台汇聚了海量工业数据，不仅推动了生产要素配置方式和生产运营方式的“智能+”变革，更带来了企业组织形态和管理流程的“智能+”创新与重塑。实时便捷的信息汇聚和供需对接，会促使智能的产生过程呈现更为分布式的特征，扁平化、网络化、去中心化成为制造企业组织形态创新的重要方向。
				      		</div>
				      		<div class="mt20" style="text-align: right;">
				      			<a href="javascript:;" class="f16" style="color: #EA5223;">查看更多></a>
				      		</div>
				      	</div>
				      </div>
				       <div class="swiper-slide">
				      	<img src="../../static/images/transformation/fwlcimage.png" alt="" class="lt slide-img"/>
				      	<div class="rt slide-text">
				      		<div class="mt15">
				      			<img src="../../static/images/transformation/fxlogo.png" alt="" class="slide-detial-img"/>
				      			<span class="f16 c6 ml15">为制造业转型升级赋能2</span>
				      		</div>
				      		<div class="f16 c6 slide-detial">
				      			工业互联网平台汇聚了海量工业数据，不仅推动了生产要素配置方式和生产运营方式的“智能+”变革，更带来了企业组织形态和管理流程的“智能+”创新与重塑。实时便捷的信息汇聚和供需对接，会促使智能的产生过程呈现更为分布式的特征，扁平化、网络化、去中心化成为制造企业组织形态创新的重要方向。
				      		</div>
				      		<div class="mt20" style="text-align: right;">
				      			<a href="javascript:;" class="f16" style="color: #EA5223;">查看更多></a>
				      		</div>
				      	</div>
				      </div>
				       <div class="swiper-slide">
				      	<img src="../../static/images/transformation/fwlcimage.png" alt="" class="lt slide-img"/>
				      	<div class="rt slide-text">
				      		<div class="mt15">
				      			<img src="../../static/images/transformation/fxlogo.png" alt="" class="slide-detial-img"/>
				      			<span class="f16 c6 ml15">为制造业转型升级赋能3</span>
				      		</div>
				      		<div class="f16 c6 slide-detial">
				      			工业互联网平台汇聚了海量工业数据，不仅推动了生产要素配置方式和生产运营方式的“智能+”变革，更带来了企业组织形态和管理流程的“智能+”创新与重塑。实时便捷的信息汇聚和供需对接，会促使智能的产生过程呈现更为分布式的特征，扁平化、网络化、去中心化成为制造企业组织形态创新的重要方向。
				      		</div>
				      		<div class="mt20" style="text-align: right;">
				      			<a href="javascript:;" class="f16" style="color: #EA5223;">查看更多></a>
				      		</div>
				      	</div>
				      </div>
				       <div class="swiper-slide">
				      	<img src="../../static/images/transformation/fwlcimage.png" alt="" class="lt slide-img"/>
				      	<div class="rt slide-text">
				      		<div class="mt15">
				      			<img src="../../static/images/transformation/fxlogo.png" alt="" class="slide-detial-img"/>
				      			<span class="f16 c6 ml15">为制造业转型升级赋能4</span>
				      		</div>
				      		<div class="f16 c6 slide-detial">
				      			工业互联网平台汇聚了海量工业数据，不仅推动了生产要素配置方式和生产运营方式的“智能+”变革，更带来了企业组织形态和管理流程的“智能+”创新与重塑。实时便捷的信息汇聚和供需对接，会促使智能的产生过程呈现更为分布式的特征，扁平化、网络化、去中心化成为制造企业组织形态创新的重要方向。
				      		</div>
				      		<div class="mt20" style="text-align: right;">
				      			<a href="javascript:;" class="f16" style="color: #EA5223;">查看更多></a>
				      		</div>
				      	</div>
				      </div>
				    </div>
				    <!-- Add Arrows -->
				    <div class="swiper-button-next"></div>
				    <div class="swiper-button-prev"></div>
				  </div>
			</div>
		</div>
		
		<div class="service-propaganda">
			<ul class="service-propaganda-box">
				<li>
					<img src="../../static/images/transformation/mftgfw.png" alt="" class="service-propaganda-img"/>
					<span class="ml25 ">免费提供服务
						<span class="service-color-e68">
							4680<span class="f24"> 家</span>
						</span>
					</span>
				</li>
				<li>
					<img src="../../static/images/transformation/rqzdfw.png" alt="" class="service-propaganda-img"/>
					<span class="ml25 ">入企诊断服务
						<span class="service-color-e68">
							3280<span class="f24"> 家</span>
						</span>
					</span>
				</li>
				<li>
					<img src="../../static/images/transformation/ljsscg.png" alt="" class="service-propaganda-img"/>
					<span class="ml25 ">累计实施超过
						<span class="service-color-e68">
							1123<span class="f24"> 小时</span>
						</span>
					</span>
					
				</li>
				<li>
					<img src="../../static/images/transformation/wcqygz.png" alt="" class="service-propaganda-img"/>
					<span class="ml25 ">完成企业改造
						<span class="service-color-e68">
							3230<span class="f24"> 家</span>
						</span>
					</span>
					
				</li>
			</ul>
		</div>
		
		<!--服务项目-->
		<div class="common-big-tit">
			<h1 class="c3">服务项目</h1>
		</div>
		<div class="project pr">
			 <div class="swiper-container swiper-container2">
			    <div class="swiper-wrapper">
			      <div class="swiper-slide">
			      	<div class="tc project-text-box">
			      		<h3 class="f26 c3 ">平台开放</h3>
			      		<p class="f16 c6 mt35 project-text">提供工业应用开发、测试、推广、部署以及应用的生态环境</p>
			      		<div class="project-bottom-line" style="margin: auto;"></div>
			      	</div>
			      	
			      	<img src="../../static/images/transformation/1-image.png" alt="" />
			      </div>
			      <div class="swiper-slide">
			      	<div class="tc project-text-box">
			      		<h3 class="f26 c3 ">平台开放</h3>
			      		<p class="f16 c6 mt35 project-text">提供工业应用开发、测试、推广、部署以及应用的生态环境</p>
			      		<div class="project-bottom-line" style="margin: auto;"></div>
			      	</div>
			      	<img src="../../static/images/transformation/2-image.png" alt="" />
			      </div>
			      <div class="swiper-slide">
			      	<div class="tc project-text-box">
			      		<h3 class="f26 c3 ">平台开放</h3>
			      		<p class="f16 c6 mt35 project-text">提供工业应用开发、测试、推广、部署以及应用的生态环境</p>
			      		<div class="project-bottom-line" style="margin: auto;"></div>
			      	</div>
			      	<img src="../../static/images/transformation/1-image.png" alt="" />
			      </div>
			      <div class="swiper-slide">
			      	<div class="tc project-text-box">
			      		<h3 class="f26 c3 ">平台开放</h3>
			      		<p class="f16 c6 mt35 project-text">提供工业应用开发、测试、推广、部署以及应用的生态环境</p>
			      		<div class="project-bottom-line" style="margin: auto;"></div>
			      	</div>
			      	<img src="../../static/images/transformation/2-image.png" alt="" />
			      </div>
			    </div>
			   
			    <!-- Add Arrows -->
			    <div class="swiper-button-next"></div>
			    <div class="swiper-button-prev"></div>
			  </div>
		</div>
		
		<!--服务项目-->
		<div class="common-big-tit">
			<h1 class="c3">行业优势</h1>
		</div>
		<div class="advantage-lg-box">
			<div class="w1200">
				<ul class="advantage">
					<li>
						<img src="../../static/images/transformation/tyhy-image.png" alt="" />
						<div class="advantage-sm-box">
							<h3 class="f24 tc">通用行业</h3>
							<p>面向制造业中小企业，十余应用、数百可选配、可定制模块。企业按需订购应用模块，一键即可生成企业专属的个性化工业APP。</p>
						</div>
					</li>
					<li>
						<img src="../../static/images/transformation/qccb-image.png" alt="" />
						<div class="advantage-sm-box">
							<h3 class="f24 tc">汽车船舶</h3>
							<p>提供全面的生产制造解决方案，帮助汽车制造业进行精细化生产，最大化提高生产效率、降低生产成本。</p>
						</div>
					</li>
					<li>
						<img src="../../static/images/transformation/swyy-image.png" alt="" />
						<div class="advantage-sm-box">
							<h3 class="f24 tc">生物医药</h3>
							<p>主要对药品制造企业和药品流通企业提供完整解决方案，能够有效提高制药公司运行效率，增强服务水平为企业取得最大化的经济效益。</p>
						</div>
					</li>
					<li>
						<img src="../../static/images/transformation/smjd-image.png" alt="" />
						<div class="advantage-sm-box">
							<h3 class="f24 tc">数码家电</h3>
							<p>家电行业解决方案基于多营运中心的管理架构体系，构造了以供应链、生产管理、财务一体化为核心，协同HR、BI、OA等无缝集成的一体化管理体系，提高了企业经营和管理水平。</p>
						</div>
					</li>
				</ul>
			</div>
		</div>
		
		<!--成功案例-->
		<div class="success-case">
			<div class="w1200">
				<div class="common-big-tit">
					<h1 class="c3">成功案例</h1>
				</div>
				<div class="success-case-swiper-box">
					<div class="swiper-container swiper-container3">
					    <div class="swiper-wrapper">
					      <div class="swiper-slide">
					      	<div class="lt">
								<h3 class="f24 c3 mb30">磨具产业平台建设</h3>
								<p>HanClouds Edge瀚云边缘计算平台提供瀚云工业网关和开发套件系列产品。保障在场景驱动下，计算可以在近场和云端分布，实现端云智能的协同。 开发套件 瀚云工业网关、开发套件开发套件系列产品，集成瀚云平台支持的多种物联网与工业场景接入协议，适配多种通信接入方式，支持固件在线升级、协议更换等丰富功能，适用于多种工业互联网应用场景，助力各类制造企业设备上云、产线上云、车间上云、企业上云；助力开发者、行业专家、爱好者等平台用户极速、无缝接入工业互联网云平台，快速变现创意。</p>
								
							</div>
							<div class="rt">
								<img src="../../static/images/transformation/cgal-image.png"/>
							</div>
					      </div>
					      <div class="swiper-slide">
					      	<div class="lt">
								<h3 class="f24 c3 mb30">磨具产业平台建设</h3>
								<p>HanClouds Edge瀚云边缘计算平台提供瀚云工业网关和开发套件系列产品。保障在场景驱动下，计算可以在近场和云端分布，实现端云智能的协同。 开发套件 瀚云工业网关、开发套件开发套件系列产品，集成瀚云平台支持的多种物联网与工业场景接入协议，适配多种通信接入方式，支持固件在线升级、协议更换等丰富功能，适用于多种工业互联网应用场景，助力各类制造企业设备上云、产线上云、车间上云、企业上云；助力开发者、行业专家、爱好者等平台用户极速、无缝接入工业互联网云平台，快速变现创意。</p>
								
							</div>
							<div class="rt">
								<img src="../../static/images/transformation/cgal-image.png"/>
							</div>
					      </div>
					      <div class="swiper-slide">
					      	<div class="lt">
								<h3 class="f24 c3 mb30">磨具产业平台建设</h3>
								<p>HanClouds Edge瀚云边缘计算平台提供瀚云工业网关和开发套件系列产品。保障在场景驱动下，计算可以在近场和云端分布，实现端云智能的协同。 开发套件 瀚云工业网关、开发套件开发套件系列产品，集成瀚云平台支持的多种物联网与工业场景接入协议，适配多种通信接入方式，支持固件在线升级、协议更换等丰富功能，适用于多种工业互联网应用场景，助力各类制造企业设备上云、产线上云、车间上云、企业上云；助力开发者、行业专家、爱好者等平台用户极速、无缝接入工业互联网云平台，快速变现创意。</p>
								
							</div>
							<div class="rt">
								<img src="../../static/images/transformation/cgal-image.png"/>
							</div>
					      </div>
					    </div>
					    <!-- Add Arrows -->
					    <div class="swiper-button-next"></div>
					    <div class="swiper-button-prev"></div>
					</div>
					
				</div>
				
				
			
			</div>
		</div>
		<div class="success-case-bg">
			<div class="w1200 tc">
				<p class="f24 tel-p">想做企业转型升级服务？专业顾问帮您实现！</p>
				<a href="javascript:;" class="tel-bg f18"><span class="ml30">联系我们</span></a>
			</div>
		</div>

    
@endsection
