@extends('common.app')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('static/css/style-industry.css') }}"/>
@endsection

@section('title','工业机器人')

@section('content')
<div class="container-fluid" style="padding: 0;">
		<div class="jumbotron banner-img" style="border-radius: 0;">
		  <div class="container">
		     <h1 class="bdImgTxt_first">伏羲工业机器人</h1>
			 <p class="bdImgTxt_sec">质优价廉、忠实可靠，这才是你需要的“生产工人”</p>
		  </div>
		</div> 
	</div>
	
	{{--  <!--****伏羲工业机器人家族****-->  --}}
	<div class="fuxi-all-box">
	<h3 class="container tc f36 bigtit">
		伏羲工业机器人家族
		<div class="mt30">
			<img src="../../static/images/Industry/logo_cr.png" alt="" style="vertical-align: sub;"/>
			<span class="f18" style="color: #EA5223FF;">通过国家CR认证</span>
		</div>
	</h3>
	</div> 
	{{--  <!--****swiper****-->  --}}
	<div class="swiper-all-box" >
	 <div class="swiper-container">
	    <div class="swiper-wrapper">
	      <div class="swiper-slide">
		      	<a href="javascript:;">
		      		<img src="../../static/images/Industry/r_406.png"/>
		      		<div class="tc">
		      			<div class="slide-img-produce">
		      				<img src="../../static/images/Industry/icon_zhou.png" alt="" />&nbsp;四轴 <span class="produce-line"></span>
		      				<img src="../../static/images/Industry/icon_chengzhong.png"/>&nbsp;2~6 kg <span class="produce-line"></span>
		      				<img src="../../static/images/Industry/icon_banjin.png"/>&nbsp;600 mm
		      			</div>
		      			<div class="slide-img-main">
		      				<p class="img-main-tit">406型 SCARA机器人</p>
		      				<p class="f16 c6 ">重量轻、速度快，重复定位精度高</p> 
		      				<p class="f16 c6 ">出色加/减速率，平稳启动/停止 </p>
		      			</div>
		      		</div>
		      	</a>
	      </div>
	       <div class="swiper-slide">
		       	<a href="javascript:;">
		      		<img src="../../static/images/Industry/r_410.png"/>
		      		<div class="tc">
		      			<div class="slide-img-produce">
		      				<img src="../../static/images/Industry/icon_zhou.png" alt="" />&nbsp;&nbsp;四轴 <span class="produce-line"></span>
		      				<img src="../../static/images/Industry/icon_chengzhong.png"/>&nbsp;&nbsp;8~10 kg <span class="produce-line"></span>
		      				<img src="../../static/images/Industry/icon_banjin.png"/>&nbsp;&nbsp;1470 mm
		      			</div>
		      			<div class="slide-img-main">
		      				<p class="img-main-tit">410型 机器人</p>
		      				<p class="f16 c6 "> 性能稳定，结构紧凑 </p> 
		      				<p class="f16 c6 ">通用性强，模块化机械结构设计 </p>
		      			</div>
		      		</div>
		      	</a>
	       </div>
	       <div class="swiper-slide">
		       	<a href="javascript:;">
		      		<img src="../../static/images/Industry/r_4120.png"/>
		      		<div class="tc">
		      			<div class="slide-img-produce">
		      				<img src="../../static/images/Industry/icon_zhou.png" alt="" />&nbsp;&nbsp;四轴 <span class="produce-line"></span>
		      				<img src="../../static/images/Industry/icon_chengzhong.png"/>&nbsp;&nbsp;100~120 kg <span class="produce-line"></span>
		      				<img src="../../static/images/Industry/icon_banjin.png"/>&nbsp;&nbsp;2350 mm
		      			</div>
		      			<div class="slide-img-main">
		      				<p class="img-main-tit">4120型 机器人</p>
		      				<p class="f16 c6 ">性能稳定，工作空间大  </p> 
		      				<p class="f16 c6 ">运行速度快，模块化机械结构设计 </p>
		      			</div>
		      		</div>
		       </div>
	      
	       <div class="swiper-slide">
		       	<a href="javascript:;">
		      		<img src="../../static/images/Industry/r_604.png"/>
		      		<div class="tc">
		      			<div class="slide-img-produce">
		      				<img src="../../static/images/Industry/icon_zhou.png" alt="" />&nbsp;&nbsp;六轴 <span class="produce-line"></span>
		      				<img src="../../static/images/Industry/icon_chengzhong.png"/>&nbsp;&nbsp;3~4 kg <span class="produce-line"></span>
		      				<img src="../../static/images/Industry/icon_banjin.png"/>&nbsp;&nbsp;540 mm
		      			</div>
		      			<div class="slide-img-main">
		      				<p class="img-main-tit">604型 机器人</p>
		      				<p class="f16 c6 ">重量轻、速度快，外型美观</p> 
		      				<p class="f16 c6 ">重复定位精度高，内置线缆 </p>
		      			</div>
		      		</div>
		       	</a>
	       </div>
	        <div class="swiper-slide">
		       	<a href="javascript:;">
		      		<img src="../../static/images/Industry/r_604.png"/>
		       	</a>
	       </div>
	    </div>
	        <div class="swiper-button-next"></div>
    		<div class="swiper-button-prev"></div>
	  </div>
	  {{--  <!--****swiper2****-->  --}}
	 <div class="swiper-container swiper-second">
	    <div class="swiper-wrapper">
	      <div class="swiper-slide">
	      	<a href="javascript:;">
	      		<img src="../../static/images/Industry/r_607.png"/>
	      		<div class="tc">
	      			<div class="slide-img-produce">
	      				<img src="../../static/images/Industry/icon_zhou.png" alt="" />&nbsp;六轴 <span class="produce-line"></span>
	      				<img src="../../static/images/Industry/icon_chengzhong.png"/>&nbsp;5~6 kg <span class="produce-line"></span>
	      				<img src="../../static/images/Industry/icon_banjin.png"/>&nbsp;910 mm
	      			</div>
	      			<div class="slide-img-main">
	      				<p class="img-main-tit">607/607L型 机器人</p>
	      				<p class="f16 c6 ">重复定位精度高，出色加 /减速率 </p> 
	      				<p class="f16 c6 ">平稳启动 /停止，内置线缆  </p>
	      			</div>
	      		</div>
	      	</a>
	      </div>
	       <div class="swiper-slide">
	       	<a href="javascript:;">
	      		<img src="../../static/images/Industry/r_608.png"/>
	      		<div class="tc">
	      			<div class="slide-img-produce">
	      				<img src="../../static/images/Industry/icon_zhou.png" alt="" />&nbsp;六轴 <span class="produce-line"></span>
	      				<img src="../../static/images/Industry/icon_chengzhong.png"/>&nbsp;6~8 kg <span class="produce-line"></span>
	      				<img src="../../static/images/Industry/icon_banjin.png"/>&nbsp;1400 mm
	      			</div>
	      			<div class="slide-img-main">
	      				<p class="img-main-tit">608型 机器人</p>
	      				<p class="f16 c6 ">重量轻、速度快，外形美观 </p> 
	      				<p class="f16 c6 ">重复定位精度高，上下料轨迹节拍优化 </p>
	      			</div>
	      		</div>
	       	</a>
	       </div>
	       <div class="swiper-slide">
	       	<a href="javascript:;">
	      		<img src="../../static/images/Industry/r_608h.png"/>
	      		<div class="tc">
	      			<div class="slide-img-produce">
	      				<img src="../../static/images/Industry/icon_zhou.png" alt="" />&nbsp;六轴 <span class="produce-line"></span>
	      				<img src="../../static/images/Industry/icon_chengzhong.png"/>&nbsp;6~8 kg <span class="produce-line"></span>
	      				<img src="../../static/images/Industry/icon_banjin.png"/>&nbsp;1400 mm
	      			</div>
	      			<div class="slide-img-main">
	      				<p class="img-main-tit">608H型 机器人</p>
	      				<p class="f16 c6 ">工作空间大，性能稳定  </p> 
	      				<p class="f16 c6 ">重复定位精度高，上下料轨迹节拍优化 </p>
	      			</div>
	      		</div>
	       	</a>
	       </div>
	       <div class="swiper-slide">
	       	<a href="javascript:;">
	      		<img src="../../static/images/Industry/r_620.png"/>
	      		<div class="tc">
	      			<div class="slide-img-produce">
	      				<img src="../../static/images/Industry/icon_zhou.png" alt="" />&nbsp;六轴 <span class="produce-line"></span>
	      				<img src="../../static/images/Industry/icon_chengzhong.png"/>&nbsp;16~20 kg <span class="produce-line"></span>
	      				<img src="../../static/images/Industry/icon_banjin.png"/>&nbsp;1717 mm
	      			</div>
	      			<div class="slide-img-main">
	      				<p class="img-main-tit">620型 机器人</p>
	      				<p class="f16 c6 ">工作空间大，性能稳定</p> 
	      				<p class="f16 c6 ">重复定位精度高，上下料轨迹节拍优化</p>
	      			</div>
	      		</div>
	       	</a>
	       </div>
	    </div>
	    <div class="swiper-button-next"></div>
	    <div class="swiper-button-prev"></div>
	  </div>
	</div>  
	{{--  <!--****swiper   OVER****-->   --}}
	
	{{--  <!--****产品特色****-->  --}}
	<div class="characteristic-big-box">
	 <h3 class="container tc f36 bigtit" style="margin-bottom: 50px;">产品特色</h3>
	 <div class="container lg-characteristic" style="width: 1200px;padding: 0;">
	 	<ul class="characteristic ">
	 		<li >
	 			<div class="characteristic-box ">
	 				<div class="tc f24 characteristic-tit">中低端价格<p class="characteristic-line"></p></div>
	 				<div class="characteristic-sm lt tc">自主知识产权<br />自主工业设计</div>
	 				<div class="characteristic-sm rt tc">本土生产制造<br />最优价格控制</div>
	 				<img src="../../static/images/Industry/cptt_img_1.png" alt="" class="mt10"/>
	 			</div>
	 		</li>
	 		<li >
	 			<div class="characteristic-box">
	 				<div class="tc f24 characteristic-tit">中高端品质<p class="characteristic-line"></p></div>
	 				<div class="characteristic-sm lt tc">减速机等核心部件<br />来自全球 TOP10 生产厂商</div>
	 				<div class="characteristic-sm rt tc">原厂正品、按单采购<br />整机三年超长质量保证</div>
	 				<img src="../../static/images/Industry/cptt_img_2.png" alt="" class="mt10"/>
	 			</div>
	 		</li>
	 		<li >
	 			<div class="characteristic-box ">
	 				<div class="tc f24 characteristic-tit">最高端服务<p class="characteristic-line"></p></div>
	 				<div class="characteristic-sm lt tc"> 免费入企诊断<br />免费提供解决方案</div>
	 				<div class="characteristic-sm rt tc"> 2小时快速响应 <br />12小时到场技术支持</div>
	 				<img src="../../static/images/Industry/cptt_img_3.png" alt="" class="mt10"/>
	 			</div>
	 		</li>
	 		<div class="clear"></div>
	 	</ul>
	 </div>
	 </div>
	 {{--  <!--小屏产品特色-->  --}}
	 <div class="container sm-characteristic">
		 <div class="colume">
			<div class="col-sm-12 col-md-12 ov">
				<img src="../../static/images/Industry/cptt_img_1.png" alt="" class="mt10 lt sm-characteristic-img" />
				<div class="lt ml20" style="width: 50%;">
					<h4 class="sm-characteristic-tit">中低端价格？</h4>
					<div class="mt20 ellipsis"> 自主知识产权自主工业设计</div>
			 		<div class="mt20 ellipsis"> 本土生产制造最优价格控制</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 mt20 ov">
				<img src="../../static/images/Industry/cptt_img_2.png" alt="" class="mt10 lt sm-characteristic-img" />
				<div class="lt ml20 " style="width: 50%;">
					<h4 class="sm-characteristic-tit">中高端品质？</h4>
					<div class="mt20 ellipsis" > 减速机等核心部件来自全球 TOP10 生产厂商</div>
			 		<div class="mt20 ellipsis"> 原厂正品、按单采购整机三年超长质量保证</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 mt20 ov">
				<img src="../../static/images/Industry/cptt_img_3.png" alt="" class="mt10 lt sm-characteristic-img" />
				<div class="lt ml20" style="width: 50%;">
					<h4 class="sm-characteristic-tit">中高端品质？</h4>
					<div class="mt20 ellipsis"> 免费入企诊断免费提供解决方案   </div>
			 		<div class="mt20 ellipsis"> 2小时快速响应 12小时到场技术支持 </div>
				</div>
			</div>
		</div>
	</div>
	{{--  <!--****产品特色   OVER****-->  --}}
	 
	{{--  <!--***产品用途***-->  --}}
	
	 <div class="lg-purpose" >
	 	 <h3 class="container tc f36 bigtit" style="padding-top: 60px;">产品用途</h3>
	 	 <div class="container" style="width: 1200px;margin: auto;">
	 	 	<div class="lg-purpose-box">
	 	 		<span class="f24" style="font-weight:400;">国内领先的智能制造方案供应商</span>
	 	 		<div class="f16 c6 mt40" style="line-height:30px;">作为工业机器人技术专家，容商通过对****、******等行业的深入探索，在搬运、码垛、装配、焊接、上下料、喷涂、抛光、研磨等多个领域最大化机器人性能优势，实现了高柔性自动化方案的广泛应用，帮助企业提高生产效率、改善产品质量、提升安全水平，推动产业升级。
				</div>
	 	 	</div>
	 	 	{{--  <!--swiper-->  --}}
	 	 		<div class="swiper-container">
				    <div class="swiper-wrapper">
				      <div class="swiper-slide">
				      	<div>
					      	<img src="../../static/images/Industry/yt_img_1.png" alt="" />
					      	<div class="c3 f24 lg-purpose-bg">码垛</div>
				      	</div>
				      </div>
				      <div class="swiper-slide">
				      	<div>
				      		<img src="../../static/images/Industry/yt_img_2.png" alt="" />
				      		<div class="c3 f24 lg-purpose-bg">焊接</div>
				      	</div>
				      </div>
				      <div class="swiper-slide">
				      	<div>
				      		<img src="../../static/images/Industry/yt_img_3.png" alt="" />
				      		<div class="c3 f24 lg-purpose-bg">切割</div>
				      	</div>
				      </div>
				      <div class="swiper-slide">
				      	<div>
				      		<img src="../../static/images/Industry/yt_img_4.png" alt="" />
				      		<div class="c3 f24 lg-purpose-bg">装配</div>
				      </div>
				      </div>
				      <div class="swiper-slide">
				      	<div>
				      		<img src="../../static/images/Industry/yt_img_1.png" alt="" />
				      		<div class="c3 f24 lg-purpose-bg">装配</div>
				      </div>
				      </div>
				      
				    </div>
				    {{--  <!-- Add Pagination -->  --}}
				    <div class="swiper-pagination"></div>
				  </div>
	 	 		{{--  <!--swiper  OVER-->  --}}
	 	 </div>
	 </div>
	{{--  <!--***产品用途   OVER***-->  --}}
@endsection

@section('script')
    <script>

        	var swiper = new Swiper('.swiper-container', {
				 pagination: {
			        el: '.swiper-pagination',
			        clickable: true,
			      },
		       	 navigation: {
			        nextEl: '.swiper-button-next',
			        prevEl: '.swiper-button-prev',
			      },
		        slidesPerView:4,
		        paginationClickable: true,
		        spaceBetween:1,
		        loop: false,
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
        }
		    });
    </script>
@endsection