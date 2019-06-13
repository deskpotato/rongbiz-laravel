<footer class="pc">
	<div class="foot-w1200">
		<div id="" class="top">
				@include('common._menu_links')
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