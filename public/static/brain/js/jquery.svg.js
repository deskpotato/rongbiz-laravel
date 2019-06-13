// JavaScript Document

//////////////////////////////// 鼠标经过事件
$(document).ready(function () {
	$("#area-1,#area-2,#area-3,#area-4,#area-5,#area-6,#area-7,#area-8,#area-9,#area-10,#area-11,#area-12").mouseover(function () {
		$("circle,#ellipse_1,#ellipse_2,#ellipse_3,#ellipse_4,#ellipse_5,#ellipse_6,#ellipse_7,#ellipse_8,#ellipse_9,#ellipse_10,#ellipse_11,#ellipse_12").hide();
	});

	$("#area-1").mouseover(function () {
		$("#area-1 #fill-1 circle,#line-6,#ellipse_6_1,#wing_texi_6").show();
		$("#fill-1").focus();
	});
	
	$("#area-2").mouseover(function () {
		$("#area-2 #fill-2 circle,#line-5,#ellipse_5_1,#wing_texi_5").show();
		$("#fill-2").focus();
	});
	$("#area-3").mouseover(function () {
		$("#area-3 #fill-3 circle,#line-4,#ellipse_4_1,#wing_texi_4").show();
		$("#fill-3").focus();
	});
	$("#area-4").mouseover(function () {
		$("#area-4 #fill-4 circle,#line-3,#ellipse_3_1,#wing_texi_3").show();
		$("#fill-4").focus();
	});
	$("#area-5").mouseover(function () {
		$("#area-5 #fill-5 circle,#line-2,#ellipse_2_1,#wing_texi_2").show();
		$("#fill-5").focus();
	});
	$("#area-6").mouseover(function () {
		$("#area-6 #fill-6 circle,#line-1,#ellipse_1_1,#wing_texi_1").show();
		$("#fill-6").focus();
	});
	$("#area-7").mouseover(function () {
		$("#area-7 #fill-7 circle,#line-7,#ellipse_7_1,#wing_texi_7").show();
		$("#fill-7").focus();
	});
	$("#area-8").mouseover(function () {
		$("#area-8 #fill-8 circle,#line-8,#ellipse_8_1,#wing_texi_8").show();
		$("#fill-8").focus();
	});
	$("#area-9").mouseover(function () {
		$("#area-9 #fill-9 circle,#line-9,#ellipse_9_1,#wing_texi_9").show();
		$("#fill-9").focus();
	});
	$("#area-10").mouseover(function () {
		$("#area-10 #fill-10 circle,#line-10,#ellipse_10_1,#wing_texi_10").show();
		$("#fill-10").focus();
	});
	$("#area-11").mouseover(function () {
		$("#area-11 #fill-11 circle,#line-11,#ellipse_11_1,#wing_texi_11").show();
		$("#fill-11").focus();
	});
	$("#area-12").mouseover(function () {
		$("#area-12 #fill-12 circle,#line-12,#ellipse_12_1,#wing_texi_12").show();
		$("#fill-12").focus();
	});
	


	


	$("#area-1,#area-2,#area-3,#area-4,#area-5,#area-6,#area-7,#area-8,#area-9,#area-10,#area-11,#area-12").mouseout(function () {
		$("#fill-1,#fill-2,#fill-3,#fill-4,#fill-5,#fill-6,#fill-7,#fill-8,#fill-9,#fill-10,#fill-11,#fill-12").blur(); //取消焦点	
		$("circle,#ellipse_1,#ellipse_2,#ellipse_3,#ellipse_4,#ellipse_5,#ellipse_6,#ellipse_7,#ellipse_8,#ellipse_9,#ellipse_10,#ellipse_11,#ellipse_12").show();
		
	});

	$("#area-1,#area-2,#area-3,#area-4,#area-5,#area-6,#area-7,#area-8,#area-9,#area-10,#area-11,#area-12").mouseout(function () {
		$("#line-1,#line-2,#line-3,#line-4,#line-5,#line-6,#line-7,#line-8,#line-9,#line-10,#line-11,#line-12,#ellipse_1_1,#ellipse_2_1,#ellipse_3_1,#ellipse_4_1,#ellipse_5_1,#ellipse_6_1,#ellipse_7_1,#ellipse_8_1,#ellipse_9_1,#ellipse_10_1,#ellipse_11_1,#ellipse_12_1,#wing_texi_1, #wing_texi_2, #wing_texi_3, #wing_texi_4, #wing_texi_5, #wing_texi_6, #wing_texi_7, #wing_texi_8, #wing_texi_9, #wing_texi_10, #wing_texi_11, #wing_texi_12").hide();
	});
	
	

	
	
	/////////////////////////////////////////机翼副标题


	$("#wing-1").mouseover(function () {
		$("#wing-1-1").show();
	});
	$("#wing-1").mouseout(function () {
		$("#wing-1-1").hide();
	});
	$("#wing-2").mouseover(function () {
		$("#wing-2-1").show();
	});
	$("#wing-2").mouseout(function () {
		$("#wing-2-1").hide();
	});

	$("#wing-3").mouseover(function () {
		$("#wing-3-1").show();
	});
	$("#wing-3").mouseout(function () {
		$("#wing-3-1").hide();
	});

	$("#wing-4").mouseover(function () {
		$("#wing-4-1").show();
	});
	$("#wing-4").mouseout(function () {
		$("#wing-4-1").hide();
	});

	$("#wing-5").mouseover(function () {
		$("#wing-5-1").show();
	});
	$("#wing-5").mouseout(function () {
		$("#wing-5-1").hide();
	});



});


/////////////////////////////////////////中间文字链接
$(document).ready(function () {
	$("#the-main").click(function () {
		window.open("#<!---->", target = '_blank')
	});

});

///////////////////////////////////////下边机翼ID链接-大脑链接 

$(document).ready(function () {
	$("#wing-1,#area-6").click(function () {
		window.open("#", target = '_blank')
	});

});

$(document).ready(function () {
	$("#wing-2,#area-5").click(function () {
		window.open("#", target = '_blank')
	});

});
$(document).ready(function () {
	$("#wing-3,#area-4").click(function () {
		window.open("#", target = '_blank')
	});

});
$(document).ready(function () {
	$("#wing-4,#area-3").click(function () {
		window.open("#", target = '_blank')
	});

});
$(document).ready(function () {
	$("#wing-5,#area-2").click(function () {
		window.open("#", target = '_blank')
	});

});
$(document).ready(function () {
	$("#wing-6,#area-1").click(function () {
		window.open("#", target = '_blank')
	});

});
$(document).ready(function () {
	$("#wing-7,#area-7").click(function () {
		window.open("#", target = '_blank')
	});

});
$(document).ready(function () {
	$("#wing-8,#area-8").click(function () {
		window.open("#", target = '_blank')
	});

});
$(document).ready(function () {
	$("#wing-9,#area-9").click(function () {
		window.open("#", target = '_blank')
	});

});
$(document).ready(function () {
	$("#wing-10,#area-10").click(function () {
		window.open("#", target = '_blank')
	});

});
$(document).ready(function () {
	$("#wing-11,#area-11").click(function () {
		window.open("#", target = '_blank')
	});

});
$(document).ready(function () {
	$("#wing-12,#area-12").click(function () {
		window.open("#", target = '_blank')
	});

});
