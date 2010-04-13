$(document).ready(function() {
	/*
	 * Scroll
	 */
	$("#fff").scrollable({
		size: 1,
		clickable: false,
		speed: 700
	}).navigator();
	
	/*
	 * tooltips
	$(".items div img").hover(function() {
		$(".tips").show("slow");
	}, function() {
		$(".tips").hide("slow");
	});
	 */
	$(".items div img").tooltip({
		effect: "fade",	
		position: "center right",
		predelay: 400,
		delay: 400,
		offset: [0, 28]
	});

	/*
	 * change the .tips dom position
	 */
	$(".tips").insertAfter("#wrap");
});
