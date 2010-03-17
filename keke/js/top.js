/**
 * �ص�ҳ�涥��
 * @param acceleration ���ٶ�
 * @param time ʱ���� (����)
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
 
	// ��������ҳ�涥����ˮƽ����
	var x = Math.max(x1, Math.max(x2, x3));
	// ��������ҳ�涥���Ĵ�ֱ����
	var y = Math.max(y1, Math.max(y2, y3));
 
	// �������� = Ŀǰ���� / �ٶ�, ��Ϊ����ԭ��ԽС, �ٶ��Ǵ��� 1 ����, ���Թ��������Խ��ԽС
	var speed = 1 + acceleration;
	window.scrollTo(Math.floor(x / speed), Math.floor(y / speed));
 
	// ������벻Ϊ��, �������õ���������
	if(x > 0 || y > 0) {
		var invokeFunction = "goTop(" + acceleration + ", " + time + ")";
		window.setTimeout(invokeFunction, time);
	}
}

$(document).ready(function() {   //��ʼ
if($('input#authora[value]').length>0){   //�ж��û����Ƿ���ֵ
$("#author_info").css('display','none');   //��idΪauthor_info�Ķ����display������Ϊnone��������
var change='<span  id="show_author_info" style="cursor: pointer; color:#25a9d9;">change &raquo;</span>';  //����change��style�Ƕ���CSS��ʽ�������г����ӵ�Ч����colorҪ�������Լ������ģ���Ȼ��Ҳ������CSS�ж���#show_author_info��ʵ�֣�������Ϊ�˲�����ȥ�޸�style.css���ѣ�
var close='<span  id="hide_author_info" style="cursor: pointer;color: #25a9d9;">close &raquo;</span>';   //����close
$('#welcome').append(change);   //��IDΪwelcome�Ķ�������Ӹոն����change
$('#welcome').append(close);    // ���close
$('#hide_author_info').css('display','none');   //����close
$('#show_author_info').click(function() {   //�����changeʱ�������¼�
$('#author_info').slideDown('slow')   //�û���������»���
$('#show_author_info').css('display','none');   //����change
$('#hide_author_info').css('display','inline');  //��ʾclose
$('#hide_author_info').click(function() {  // �����closeʱ�������¼�
$('#author_info').slideUp('slow')    //�û���������ϻ�
$('#hide_author_info').css('display','none');  //����close
$('#show_author_info').css('display','inline'); })})}})  //��ʾchange