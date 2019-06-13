$(function(){
	 var swiper = new Swiper('.swiper-container1', {
      			slidesPerView:3,
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
		                slidesPerView: 3
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
    var swiper = new Swiper('.swiper-container2', {
      slidesPerView: 2,
      spaceBetween: 20,
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
       breakpoints: {
            1024: {
                slidesPerView: 2
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
        }
    });
    
  $(window).resize();
})
