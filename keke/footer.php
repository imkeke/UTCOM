<div id="footer">
	<div id="son1">
		<a href="http://www.wordpress.org/">wordpress</a>
	</div>
	<div id="mailtome">
		<a href="mailto:zhengkefeng15<<#>>gmail.com">mailtome</a>
	</div>
	<div id="son2">copyright &copy; 2009
    <a href="http://www.imkeke.cn">keke</a>  |  Theme by: <a href="http://www.imkeke.net">keke</a></div>
	<div id="son3">
		<a href="#" onclick="goTop();return false;">top</a>
	</div>
	<div id="son4"> </div>
</div>

<?php wp_footer(); ?>
</div>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/comments.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/top.js"></script>
	<script type="text/javaScript">
	$(document).ready(function() {
		var tags = $(".tags div");
		tags.hover(function() {
			//alert("haha");
			$(this).find("span").addClass("tagshvspan");
			$(this).find("a").addClass("tagshva");
		}, function() {
			$(this).find("span").removeClass("tagshvspan");
			$(this).find("a").removeClass("tagshva");
		});
	});
	</script>
<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
try {
var pageTracker = _gat._getTracker("UA-10701187-1");
pageTracker._trackPageview();
} catch(err) {}</script>
<!--[if IE 6]>
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/killie6.js"></script>
<![endif]-->
</body>
</html>
