//Menu Init
ddsmoothmenu.init({
	mainmenuid: "menu", //menu DIV id
	orientation: 'h', //Horizontal or vertical menu: Set to "h" or "v"
	classname: 'ddsmoothmenu', //class added to menu's outer DIV
	//customtheme: ["#1c5a80", "#18374a"],
	contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
});
//Flexslider
jQuery(window).load(function() {
			jQuery('.flexslider').flexslider();
		});
//Testimonial
jQuery(function(){
jQuery('#slides_testimonial').slides({
	preload: true,
	generateNextPrev: true
	});
	});
//Contact Us 
jQuery(document).ready(function(){
	jQuery("#contactForm").validate();
});