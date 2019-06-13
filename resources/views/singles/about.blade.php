@extends('common.app')

@section('css')
	<link rel="stylesheet" type="text/css" href="{{ asset('static/css/style-aboutGroup.css') }}"/>
	<link rel="stylesheet" type="text/css" href="{{ asset('static/timeLine/css/layout.css') }}"/>
@endsection

@section('title','关于集团')

@section('content')
{{--  <!--banner-->  --}}
<div class="container-fluid" style="padding: 0;">
	<div class="jumbotron banner-img" style="border-radius: 0;">
	  <div class="container tc">
		 <h1 class="bdImgTxt_first">科技创新  改变人类生活</h1>
		 <p class="bdImgTxt_sec">Scientific and Technological Innovation Changes Human Life</p>
	  </div>
	</div> 
</div>

{{--  <!--关于容商-->  --}}
<div class="about-company">
	<div class="w1200">
		<h3 class="big-tit f36 tc">关于容商天下</h3>
		<p class="f18 about-content">    容商天下（中国）网络有限公司，公司成立于2010年8月，总部位于国家级历史文化名城、全国文明城市、青岛蓝色硅谷核心区-即墨。现有员工500余人，公司依托互联网，以软、硬件研发与运营为核心，主要从事互联网高新技术研发、电子商务平台运营、移动互联网应用等领域，市场覆盖整个中国大陆。<br />
在互联网技术高速发展的当下，容商天下首创具有自主知识产权的C2P工业化互联网生态模式。C2P涵盖电子商务、物联网、云计算、大数据、机器人、3D打印、工业网络安全等，迅速在业内树立起良好口碑，让更多的中国企业通过容商天下走出中国走向世界。
					
	   </p>
	</div>
</div>

{{--  <!--企业文化-->  --}}
<div class="company-culture">
	<div class="w1200">
		<h3 class="big-tit f36 tc">企业文化</h3>
		 <ul>
			 <li>
				 <img src="../../static/images/aboutGroup/sm.png" alt="" />
				 <img src="../../static/images/aboutGroup/tghlw.png" class="culture-text"/>
			 </li>
			 <li>
				 <img src="../../static/images/aboutGroup/cwqq.png" alt="" class="culture-second"/>
				 <img src="../../static/images/aboutGroup/yj.png" alt="" class="culture-second2"/>
			 </li>
			 <li>
				 <img src="../../static/images/aboutGroup/jzg.png" alt="" class="culture-second2"/>
				 <img src="../../static/images/aboutGroup/rhfz.png" alt="" class="culture-text2"/>
			 </li>
		 </ul>  
	   
	</div>
</div>

<div class="blank">
	<div class="w1200">
		<h3 class="big-tit f36 tc">工业互联网先行者</h3>
	</div>	
</div>	
{{--  <!--工业互联网先行者-->  --}}
<div class="inter-pioneer">
	<div class="w1200">
		<img src="../../static/images/aboutGroup/left-zs.png" alt="" class="pioneer-img"/>
		<span class="pioneer-text f24 tc ml30 mr30" >
						企业上云、企业智能转型升级改造方案输出与工业云项目实施<br />
		C2P工业云PaaS平台、工业互联网应用服务集群运营
		</span>
		<img src="../../static/images/aboutGroup/right-zs.png" alt="" class="pioneer-img"/>
	</div>
	<div id="time-line">
		@include('common._timeline')
	</div>
</div>
	
{{--  <!--荣誉资质-->  --}}
<div class="honor">
	<div class="w1200">
		<h3 class="big-tit f36 tc">荣誉资质</h3>
		
		  <div class="swiper-container">
			<div class="swiper-wrapper">
			  <div class="swiper-slide">
				  <div>
					  <ul>
						  <li><img src="../../static/images/aboutGroup/ryzz-01.png" alt="" /><p class="f16 c3">第二十届中国国际软件 <br />博览会创新奖 </p></li>
						  <li><img src="../../static/images/aboutGroup/ryzz-02.png" alt="" /><p class="f16 c3">中国电子商务服务最具<br />创新力十大典范品牌 </p></li>
						  
					  </ul>
				  </div>
			  </div>
			  <div class="swiper-slide">
				  <div>
				    <li><img src="../../static/images/aboutGroup/ryzz-03.png" alt="" /><p class="f16 c3">CCTV-发现之路频道《对话中国<br />品牌》栏目组战略合作伙伴</p></li>
					<li><img src="../../static/images/aboutGroup/ryzz-04.png" alt="" /><p class="f16 c3">中国商界企业家俱乐部<br />理事会会员单位 </p></li>
				  </div>
				 </div>
				 <div class="swiper-slide">
				  <div>
					<li><img src="../../static/images/aboutGroup/ryzz-05.png" alt="" /><p class="f16 c3">国际互联网单位用户<br />备案登记证</p></li>
					<li><img src="../../static/images/aboutGroup/ryzz-06.png" alt="" /><p class="f16 c3">第二十届中国国际软件<br />博览会金奖</p></li>
				  </div>
				 </div>
				  <div class="swiper-slide">
				  <div>
						  <li><img src="../../static/images/aboutGroup/ryzz-07.png" alt="" /><p class="f16 c3">第二十届中国国际软件博览会<br />信息发布优秀发布单位</p></li>
						  <li><img src="../../static/images/aboutGroup/ryzz-08.png" alt="" /><p class="f16 c3 mt20">软件企业证书</p></li>
						  </div>
				 </div>
				  <div class="swiper-slide">
				  <div>
						  <li><img src="../../static/images/aboutGroup/ryzz-09.png" alt="" /><p class="f16 c3 mt20">软件产品登记证书</p></li>
						  <li><img src="../../static/images/aboutGroup/ryzz-10.png" alt="" /><p class="f16 c3">青岛市中小企业云服务平台<br />重点企业用户证书</p></li>
							  </div>
				 </div>
			  <div class="swiper-slide">
				  <div>
					  <ul>
						  <li><img src="../../static/images/aboutGroup/ryzz-01.png" alt="" /><p class="f16 c3">第二十届中国国际软件 <br />博览会创新奖 </p></li>
						  <li><img src="../../static/images/aboutGroup/ryzz-02.png" alt="" /><p class="f16 c3">中国电子商务服务最具<br />创新力十大典范品牌 </p></li>
						  <li><img src="../../static/images/aboutGroup/ryzz-03.png" alt="" /><p class="f16 c3">CCTV-发现之路频道《对话中国<br />品牌》栏目组战略合作伙伴</p></li>
						  
					  </ul>
				  </div>
			  </div>
			</div>
			{{--  <!-- Add Pagination -->  --}}
			<div class="swiper-pagination"></div>
		  </div>
			  {{--  <!--swiper  OVER-->  --}}
		</div>
	</div>

{{--  <!--集团架构-->  --}}
<div class="group-structure">
	<div class="w1200">
		<h3 class="big-tit f36 tc">集团架构</h3>
		<ul>

			@if (count($otherCompanies) > 0)
				@foreach ($otherCompanies as $item)
					<li>
						<div class="mt15">
							<img src="{{ $item->image }}" alt="" />
							<p class="f16 c6 mt15 tc">{{ $item->title }}</p>
						</div>
						<div class="ml50 mr50 ">
							<img src="../../static/images/aboutGroup/fgx.png" alt="" />
						</div>
						<div class="f16 c3 lineh30">
							{{ $item->description }}
						</div>
					</li>
				@endforeach
			@endif

		</ul>
	</div>	
</div>	
@endsection

@section('script')
<script>
	$(function(){
		var swiper = new Swiper('.swiper-container', {
				pagination: {
					el: '.swiper-pagination',
					clickable: true,
				},
				slidesPerView:5,
				paginationClickable: true,
				spaceBetween:20,
				loop: false,
				breakpoints: {
				
					768: {
						slidesPerView: 3
					},
					640: {
						slidesPerView: 2
					},
					320: {
						slidesPerView: 2
					}
				},
			});
		});
</script>
@endsection