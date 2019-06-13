<footer class="pc">
	<div class="foot-w1200">
		<div id="" class="top">
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
		<div class="clear"></div>
		<div class="footer_bottom">
			<div class="link_box">
                <div class="imgs"><img src="{{ asset('static/common/images/icon_sina.png') }}"/>
                    <img src="{{ asset('static/common/images/icon_qqweibo.png') }}"/></div>
				<div class="link">
					友情链接：
					@include('common._links')
				</div>
			</div>
			<div class="ewm_box">
				<div class="ewm">
					<img src="{{ asset('static/common/images/rs_qrcode.png') }}"/>
					<p>扫一扫，关注我们</p>
				</div>
				<div class="contant">
					<p>联系我们</p>
					<p>{{ $site->phone }}</p>
					<p class="p1">{{ $site->address }}</p>
				</div>
			</div>
			<div class="clear"></div>
		</div>
		<p class="corpy">{{ $site->copyright }}</p>
	</div> 
</footer>

<footer class="phone">
	<div class="foot-w1200">
		<div class="clear"></div>
		<div class="footer_bottom">
			<!--<div class="link_box">
                <div class="imgs"><img src="{{ asset('static/common/images/icon_sina.png') }}"/>
                    <img src="{{ asset('static/common/images/icon_qqweibo.png') }}"/></div>
				<div class="link">
					友情链接：
					@include('common._links')
					
				</div>
			</div>-->
			<div class="ewm_box">
				<div class="ewm">
					<img src="{{ asset('static/common/images/rs_qrcode.png') }}"/>
					<p>扫一扫，关注我们</p>
				</div>
				<div class="contant">
					<p>联系我们</p>
					<p>{{ $site->phone }}</p>
					<p class="p1">{{ $site->address }}</p>
				</div>
			</div>
			<div class="clear"></div>
		</div>
		<p class="corpy">{{ $site->copyright }}</p>
	</div> 
</footer>