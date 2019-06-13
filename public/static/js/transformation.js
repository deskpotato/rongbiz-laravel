$(function(){
	
			var swiper = new Swiper('.swiper-container1', {
				 slidesPerView:1,
       			  paginationClickable: true,
         		 spaceBetween:20,
        		 loop: false,
				autoWidth: true,
		      navigation: {
		        nextEl: '.swiper-button-next',
		        prevEl: '.swiper-button-prev',
		      },
		       breakpoints: {
		            1024: {
		                slidesPerView: 1,
		                spaceBetween: 20
		            },
		            768: {
		                slidesPerView: 1,
		                spaceBetween: 10
		            },
		            640: {
		                slidesPerView: 1,
		                spaceBetween: 1
		            },
		            320: {
		                slidesPerView: 1,
		                spaceBetween: 1
		            }
        		},
			})
	 		//轮播切换时流程图文字切换
			swiper.on('slideChangeTransitionEnd', function () {
				var $index = swiper.activeIndex;
				//循环流程图文字 当前的流程文字放大
				$('.service-process-text-box div').each(function(){
					if($(this).attr('data-index') == $index){
						if($index == 2){
							$(this).stop().animate({left:'43.4%',top:'-45px','font-size':'24px'});
						}else if($index == 3){
							$(this).stop().animate({left:'44.4%',top:'-45px','font-size':'24px'});
						}else{
							$(this).stop().animate({left:'46.4%',top:'-45px','font-size':'24px'});
						}
					}
				})
				//其他流程图文字位置重新归置
				switch ($index){
					case 0:
					animateItem(2,3,4,'72.6%','200%','200%')
						
						break;
					case 1:
					animateItem(1,3,4,'22.4%','70.6%','200%')
						
						break;
					case 2:
					animateItem(1,2,4,'-100%','22.4%','71.2%')
						
						
						break;
					case 3:
					animateItem(1,2,3,'-100%','-100%','20.4%')
					
						break;
					default:
						break;
				}
			});
			
	  //服务项目swiper
	  var swiper1 = new Swiper('.swiper-container2', {
	      slidesPerView: 3,
	      spaceBetween: 8,
	      slidesPerGroup: 3,
	      autoWidth: true,
	      navigation: {
	        nextEl: '.swiper-button-next',
	        prevEl: '.swiper-button-prev',
	      }
	    });		
	    //成功案例swiper
	  var swiper1 = new Swiper('.swiper-container3', {
	
         slidesPerView:1,
         paginationClickable: true,
         spaceBetween:1,
         loop: false,
	      navigation: {
	        nextEl: '.swiper-button-next',
	        prevEl: '.swiper-button-prev',
	      },
	       breakpoints: {
		            1024: {
		                slidesPerView: 1
		            },
		            768: {
		                slidesPerView: 1
		            },
		            640: {
		                slidesPerView: 1
		            },
		            320: {
		                slidesPerView: 1
		            }
        		},
	    });	
	    
		//服务项目swiper移入线条变化
		$('.project .swiper-slide').hover(function(){
			$(this).find('.project-bottom-line').stop().animate({'width':'100%'})
		},function(){
			$(this).find('.project-bottom-line').stop().animate({'width':'150px'})
		})
})

//重新归置其他文字公共方法
function animateItem(num1,num2,num3,math1,math2,math3){
		$('.service-process-text-box div:nth-child('+num1+')').stop().animate({left:math1,top:'-3px','font-size':'16px'});
						$('.service-process-text-box div:nth-child('+num2+')').stop().animate({left:math2,top:'-3px','font-size':'16px'});
						$('.service-process-text-box div:nth-child('+num3+')').stop().animate({left:math3,top:'-3px','font-size':'16px'});
}

