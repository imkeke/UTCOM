<form method="get" id="searchform" action="<?php bloginfo('home'); ?>/" class="searchform" onsubmit="location.href='<?php bloginfo('home'); ?>/search/' + encodeURIComponent(this.s.value).replace(/%20/g, '+'); return false;">

	<input type="text" id="s" class="text" name="s" value="Type your word here..." onfocus="if (value =='Type your word here...'){value =''}" onblur="if (value ==''){value='Type your word here...'}" />
	<input type="submit" id="searchsubmit" value="" class="submit" />

</form>
