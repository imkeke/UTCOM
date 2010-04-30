$(document).ready(function() {
	var n = 0;

	// 计算需要的值
	var dfheight = $("img.myability").height();
	var unameimg = $("div.aboutme").height();

	// 第一个点击
	$("#dfa").click(function() {
		if (n == 2) {
			$("div.aboutme").animate({top: 415}, 700);	
		}
		$(this).changeinfo(190, dfheight + 30);
		n = 1;
		$(this).unbind();
	});

	// 第二个点击
	$("#unamea").click(function () {
		var infotop;
		if (n == 1) {
			infotop = 415;
		} else {
			infotop = 240;
		}
		$(this).changeinfo(infotop, unameimg);
		n = 2;
		$(this).unbind();
	});

	// 调整info高度后载入内容
	$.fn.changeinfo = function(infotop, imgheight) {
		$(this).fadeOut("slow");
		$(this).next().fadeOut("slow");
		var $info = $(this).parent().next().next();
		var $infoimg = $info.children();
		$info.animate({height: imgheight}, 700, function(){
			$infoimg.animate({
				top: infotop,
				opacity: 0.2
			}, 300).animate({opacity: 1}, 700);
		});
		return this;
	}

	$(".items .image span").css("opacity", 0.6).hover(function() {
		$(this).parent().animate({backgroundColor: '#666'}, 400);
		$(this).animate({opacity: 0}, 400);
	}, function() {
		$(this).parent().animate({backgroundColor: '#242424'}, 400);
		$(this).animate({opacity: 0.6}, 400);
	});
});
