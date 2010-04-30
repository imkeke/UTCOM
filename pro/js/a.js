$(document).ready(function() {
	/*
	 * Scroll
	 */
	$("#fff").scrollable({
		size: 1,
		clickable: false,
		loop: true,
		speed: 700
	}).navigator();
	
	/*
	 * tooltips
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
