/**
 * 回到页面顶部
 * @param acceleration 加速度
 * @param time 时间间隔 (毫秒)
 **/
function goTop(acceleration, time) {
	acceleration = acceleration || 0.1;
	time = time || 16;
 
	var x1 = 0;
	var y1 = 0;
	var x2 = 0;
	var y2 = 0;
	var x3 = 0;
	var y3 = 0;
 
	if (document.documentElement) {
		x1 = document.documentElement.scrollLeft || 0;
		y1 = document.documentElement.scrollTop || 0;
	}
	if (document.body) {
		x2 = document.body.scrollLeft || 0;
		y2 = document.body.scrollTop || 0;
	}
	var x3 = window.scrollX || 0;
	var y3 = window.scrollY || 0;
 
	// 滚动条到页面顶部的水平距离
	var x = Math.max(x1, Math.max(x2, x3));
	// 滚动条到页面顶部的垂直距离
	var y = Math.max(y1, Math.max(y2, y3));
 
	// 滚动距离 = 目前距离 / 速度, 因为距离原来越小, 速度是大于 1 的数, 所以滚动距离会越来越小
	var speed = 1 + acceleration;
	window.scrollTo(Math.floor(x / speed), Math.floor(y / speed));
 
	// 如果距离不为零, 继续调用迭代本函数
	if(x > 0 || y > 0) {
		var invokeFunction = "goTop(" + acceleration + ", " + time + ")";
		window.setTimeout(invokeFunction, time);
	}
}

$(document).ready(function() {   //开始
if($('input#authora[value]').length>0){   //判断用户框是否有值
$("#author_info").css('display','none');   //将id为author_info的对象的display属性设为none，即隐藏
var change='<span  id="show_author_info" style="cursor: pointer; color:#25a9d9;">change &raquo;</span>';  //定义change，style是定义CSS样式，让他有超链接的效果，color要根据你自己的来改，当然你也可以在CSS中定义#show_author_info来实现，这样是为了不用再去修改style.css而已！
var close='<span  id="hide_author_info" style="cursor: pointer;color: #25a9d9;">close &raquo;</span>';   //定义close
$('#welcome').append(change);   //在ID为welcome的对象里添加刚刚定义的change
$('#welcome').append(close);    // 添加close
$('#hide_author_info').css('display','none');   //隐藏close
$('#show_author_info').click(function() {   //鼠标点击change时发生的事件
$('#author_info').slideDown('slow')   //用户输入框向下滑出
$('#show_author_info').css('display','none');   //隐藏change
$('#hide_author_info').css('display','inline');  //显示close
$('#hide_author_info').click(function() {  // 鼠标点击close时发生的事件
$('#author_info').slideUp('slow')    //用户输入框向上滑
$('#hide_author_info').css('display','none');  //隐藏close
$('#show_author_info').css('display','inline'); })})}})  //显示change