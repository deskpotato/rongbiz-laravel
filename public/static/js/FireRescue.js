$(function(){

		//消防机器人
	$(".contral_jishu ul .li_img").hover(function(){

	   $(this).find('.hover').hide();
	   $(this).find('.outer').show();
	},function(){
	   $(this).find('.hover').show();
	   $(this).find('.outer').hide();
	});


})

