//点击li跳转相应页面
function tomodel(item,toadd){
	$(item).click(function() {
		$("html, body").animate({
			scrollTop: $(toadd).offset().top
		}, {
			duration: 500,
			easing: "swing"
		});
		return false;
	});
}
$(document).ready(function() {
	tomodel("#li1","#jump1");
	tomodel("#li2","#jump2");
	tomodel("#li3","#jump3");
	tomodel("#li4","#jump4");
});

$(function() {
	//控制技术移动线条
	$(".contral_jishu li div").css("left", ('-' + ($(".li_img").css("width"))));

	window.onresize = function() {
		$(".contral_jishu li div").css("left", ('-' + ($(".li_img").css("width"))));
	}

	//控制技术鼠标移入效果
	
	$(window).resize(function() {
		if($(window).width() > 768) {
			//1	
			contrlOver(0, "../../static/images/HumanoidRobot/kzjs_icon_001.jpg");
			contrlOut(0, "../../static/images/HumanoidRobot/kzjs_icon_007.jpg");

			//2
			contrlOver(1, "../../static/images/HumanoidRobot/kzjs_icon_002.png");
			contrlOut(1, "../../static/images/HumanoidRobot/kzjs_icon_008.png");

			//3
			contrlOver(2, "../../static/images/HumanoidRobot/kzjs_icon_003.png");
			contrlOut(2, "../../static/images/HumanoidRobot/kzjs_icon_009.png");
			//4	
			contrlOver(3, "../../static/images/HumanoidRobot/kzjs_icon_004.png");
			contrlOut(3, "../../static/images/HumanoidRobot/kzjs_icon_010.png");
			//5	
			contrlOver(4, "../../static/images/HumanoidRobot/kzjs_icon_005.png");
			contrlOut(4, "../../static/images/HumanoidRobot/kzjs_icon_011.png");
			//6	
			contrlOver(5, "../../static/images/HumanoidRobot/kzjs_icon_006.png");
			contrlOut(5, "../../static/images/HumanoidRobot/kzjs_icon_012.png");

			$('.li_img').each(function() {
				$(this).find("img").siblings("div").show();
			})
		}

		if($(window).width() < 768) {
			$('.li_img').each(function() {
				$(this).find("img").siblings("div").hide();
				$(this).unbind("click");
				$(this).unbind("mouseover");
				$(this).unbind("mouseout");
			})

		}
	})

	$(window).resize();
	
	//效果方法
	//移入
	function contrlOver(num, src) {
		$(".li_img").eq(num).mouseover(function() {
			$(this).find("img").prop("src", src).siblings("div").stop().animate({
				left: "0px"
			}, 400);
		})
	}
	//移出
	function contrlOut(num, src) {
		$(".li_img").eq(num).mouseout(function() {
			$(this).find("img").attr("src", src).siblings("div").stop().animate({
				left: ('-' + ($(".li_img").css("width")))
			}, 400);
		})
	}
	
})