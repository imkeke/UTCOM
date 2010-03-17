$(document).ready(function() {    
if ($('#commentform').length) {
    $('#commentform').submit(function(){    //ID为 commentform 的表单提交时发生的函数，也就是整个留言输入框 form 的ID。
        jQuery.ajax({
            url: 'http://www.imkeke.net/wp-content/themes/keke/comments-ajax.php',    //刚刚创建的 comments-ajax.php 文件的位置，建议用绝对路径。
            data: $('#commentform').serialize(),    
            type: 'POST',
            beforeSend: function() {
            $('#commenterror').hide();
            var submit='<div id="commentload"></div>';    //创建名为 submit 的字符串，稍后插入，这里的样式大家自己根据需要定义，那个背景图片自己去下哈。
	     var error='<div id="commenterror"></div>';    //创建名为 error 的字符串
	        $('#respond').after(submit);    // 在ID为 comments 的元素后插入刚定义的 submit
	        $('#respond').after(error);    // 同样插入刚定义的 error
                $('#commentload').slideDown();  // 让submit 向下滑出
            },
            error: function(request) {    //发生错误时
                $('#commentload').hide();    //隐藏  submit
                $('#commenterror').show("slow").html(request.responseText); //显示 error 
            },
            success: function(data) {
                $('textarea').each(function(){
                    this.value='';
                });
                $('#commenterror').hide().html();
                if (!$('#commentlist').length) {
                $('#pinglist').before('<ol id="commentlist"></ol>');}
                $('#commentlist').append(data);    //向ID为 commentlist 的元素添加数据，也就是整个 ol 或 ul
				var new_comment = $('#commentlist li:last').hide();    //让最新添加的数据隐藏
				new_comment.slideDown(1000);    //再显示，这里是为了实现滑出的效果，不想要也可以直接显示
                $('#commentform:input').attr('disabled', true);
                $('#commentload').slideUp("slow");
				$('#nocomment').slideUp("slow"); 
		setTimeout(function() {
                $('#commentform:input').removeAttr('disabled');
                }, 10000);        //这里是设置10秒之后才可以再次留言，自行设置，单位毫秒。
            }
        });
       return false;
   } );
}})