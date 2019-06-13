<link rel="stylesheet" type="text/css" href="{{ asset('static/common/css/base.css') }}"/>
<link rel="stylesheet" type="text/css" href="{{ asset('static/common/css/bootstrap.min.css') }}"/>
<link rel="stylesheet" type="text/css" href="{{ asset('static/common/css/hea-foo.css') }}"/>
<link rel="stylesheet" type="text/css" href="{{ asset('static/common/css/animate.min.css') }}"/>
<script type="text/javascript" src="{{ asset('static/common/js/jquery.min.js') }}"></script>

<header>
	<img src="{{ asset('static/common/images/logo.png') }}" class="gw-logo"/>
	<!--大屏展示-->
	<div class="header_box">
		<div class="header-w header-lg">
		<a href="javascript:;" class="header-nohover active">首页</a>
		<a href="javascript:;" id="product-service">产品&服务</a>
		<a href="javascript:;" class="header-nohover">新闻服务</a>
		<a href="javascript:;" class="header-nohover">关于集团</a>
	</div>
	</div>
	
	<!--导航移入展示效果-->
	<div class="nav-hover-show">
		<ul class="nav-show">
			<h4><a href="javascript:;" title="工业互联网">工业互联网</a></h4>
			<li><a href="javascript:;" title="工业互联网应用与服务集群">工业互联网应用与服务集群</a></li>
			<li><a href="javascript:;" title="C2P工业云">C2P工业云</a></li>
			<li><a href="javascript:;" title="天工开物工业大脑">天工开物工业大脑</a></li>
			<li><a href="javascript:;" title="天工开物物联网关">天工开物物联网关</a></li>
			
		</ul>
		<ul class="nav-show">
			<h4><a href="javascript:;" title="智能机器人">智能机器人</a></h4>
			<li><a href="javascript:;" title="工业机器人">工业机器人</a></li>
			<li><a href="javascript:;" title="仿人型机器人">仿人型机器人</a></li>
			<li><a href="javascript:;" title="消防救援机器人">消防救援机器人</a></li>
			<li><a href="javascript:;" title="协作机器人">协作机器人</a></li>
			<li><a href="javascript:;" title="消防搜救无人机">消防搜救无人机</a></li>
		</ul>
		<ul class="nav-show">
			<h4><a href="javascript:;"  title="管理咨询">管理咨询</a></h4>
			<li><a href="javascript:;"  title="两化融合管理体系贯标">两化融合管理体系贯标</a></li>
		</ul>
		<ul class="nav-show">
			<h4><a href="javascript:;"  title="营销推广">营销推广</a></h4>
			<li><a href="javascript:;"  title="畅销无忧">畅销无忧</a></li>
		</ul>
		<ul class="nav-show">
			<h4><a href="javascript:;"  title="智能制造">智能制造</a></h4>
			<li><a href="javascript:;"  title="静默式智能改造">静默式智能改造</a></li>
			<li><a href="javascript:;"  title="企业转型升级服务">企业转型升级服务</a></li>
			<li><a href="javascript:;"  title="智能工厂">智能工厂</a></li>
		</ul>
		<ul class="nav-show">
			<h4><a href="javascript:;"  title="共享人才">共享人才</a></h4>
		</ul>
		<ul class="nav-show">
			<h4><a href="javascript:;"  title="高分子材料与生物医药">高分子材料与生物医药</a></h4>
		</ul>
	</div>

	<!--小屏展示-->
	<div class="header-w header-sm">
		<img src="{{ asset('static/common/images/sm-btn.png') }}" class="sm-btn" data-btn=0 />
		<!--小屏按钮展示-->
		<div class="header-sm-show animated none">
			<a href="javascript:;">首页</a>
			<a href="javascript:;" class="first-toggle">产品&服务
				<img src="{{ asset('static/common/images/arr_down_333.png') }}" class="rt first-down"/>
				<!--产品服务的下拉-->
				<div class="sm-service-show none">
					<div class="sm-service-show-inter">
						<a href="javascript:;" title="工业互联网" class="sm-service-second-tit second-toggle" >工业互联网</a>
						<div class="service-show-sm none">
							<a href="javascript:;" title="工业互联网应用与服务集群">工业互联网应用与服务集群</a>
							<a href="javascript:;" title="C2P工业云">C2P工业云</a>
							<a href="javascript:;" title="天工开物工业大脑">天工开物工业大脑</a>
							<a href="javascript:;" title="天工开物物联网关">天工开物物联网关</a>
						</div>
					</div>
					<div class="sm-service-show-inter">
						<a href="javascript:;" title="智能机器人" class="sm-service-second-tit second-toggle">智能机器人</a>
						<div class="service-show-sm none">
							<a href="javascript:;" title="工业机器人">工业机器人</a>
							<a href="javascript:;" title="仿人型机器人">仿人型机器人</a>
							<a href="javascript:;" title="仿人型机器人">仿人型机器人</a>
							<a href="javascript:;" title="消防救援机器人">消防救援机器人</a>
							<a href="javascript:;" title="协作机器人">协作机器人</a>
							<a href="javascript:;" title="消防搜救无人机">消防搜救无人机</a>
							
						</div>
					</div>
					<div class="sm-service-show-inter">
						<a href="javascript:;" title="管理咨询" class="sm-service-second-tit second-toggle">管理咨询</a>
						<div class="service-show-sm none">
							<a href="javascript:;" title="两化融合管理体系贯标">两化融合管理体系贯标</a>
						</div>
					</div>
					<div class="sm-service-show-inter">
						<a href="javascript:;" title="营销推广" class="sm-service-second-tit second-toggle">营销推广</a>
						<div class="service-show-sm none">
							<a href="javascript:;" title="畅销无忧">畅销无忧</a>
						</div>
					</div>
					<div class="sm-service-show-inter">
						<a href="javascript:;" title="智能制造" class="sm-service-second-tit second-toggle">智能制造</a>
						<div class="service-show-sm none">
							<a href="javascript:;" title="静默式智能改造">静默式智能改造</a>
							<a href="javascript:;" title="企业转型升级服务">企业转型升级服务</a>
							<a href="javascript:;" title="智能工厂">智能工厂</a>
							
						</div>
					</div>
					<div class="sm-service-show-inter">
						<a href="javascript:;" title="共享人才" class="sm-service-second-tit">共享人才</a>
					</div>
					<div class="sm-service-show-inter">
						<a href="javascript:;" title="高分子材料与生物医药" class="sm-service-second-tit">高分子材料与生物医药</a>
					</div>
				</div>
			</a>
			<a href="javascript:;">新闻资讯</a>
			<a href="javascript:;">关于集团</a>
		</div>
	</div>
	</header>
<script type="text/javascript">
//大屏状态下导航
	$('.header-nohover').each(function(){
		$(this).hover(function(){
			$('#product-service').css({'color': '#fff','border-bottom':'0'});
			$('.nav-hover-show').stop().animate({'top':"-560px","opacity":'0'});
			//$('.nav-hover-show').removeClass('fadeInDown').addClass('fadeOutUp').css({"z-index":"-2"});
		})
	})
	$('#product-service').hover(function(){
		$(this).css({'color': '#7BB1F5','border-bottom':'2px solid #EA5223'});
		$('.nav-hover-show').stop().animate({'top':"60px","opacity":'1'});
		//$('.nav-hover-show').removeClass('fadeOutUp').addClass('fadeInDown').css({"z-index":"99"});
		$('.nav-hover-show').css('top','60px');
		$('.nav-hover-show').show()
	})
	
	$('.nav-hover-show').hover(function(){
	},function(){
		$('#product-service').css({'color': '#fff','border-bottom':'0'});
		$('.nav-hover-show').stop().animate({'top':"-560px","opacity":'0'});
		//$('.nav-hover-show').removeClass('fadeInDown').addClass('fadeOutUp').css({"z-index":"-2"});
	})

	
	//小屏头部缩小时产品服务侧边栏toggle
	$('.sm-btn').click(function(){
		console.log($(this).attr('data-btn'))
		if($(this).attr('data-btn') == 0){
			$('.header-sm-show').show();
			$('.header-sm-show').removeClass('bounceOutRight').addClass('bounceInRight');
			$(this).attr('data-btn',1)
		}else{
			$('.header-sm-show').removeClass('bounceInRight').addClass('bounceOutRight');
			setTimeout(function(){
				$('.header-sm-show').hide();
			},500)
			$(this).attr('data-btn',0)
		}
		
		
	})
	//小屏一级点击显示
	$('.first-toggle').click(function(){
		$('.sm-service-show').toggle();
	})
	//小屏二级点击显示
	$('.second-toggle').each(function(){
		$(this).click(function(){
			$(this).siblings('.service-show-sm').toggle()
		})
	})
</script>	
