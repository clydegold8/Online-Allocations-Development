(function(jQuery){
		$it_mobile_nav = jQuery('#MainNav .mobile_nav'),
		$it_nav_list = jQuery('#MainNav ul.ddsmoothmenu');
	
	jQuery(document).ready(function(){
		it_menu( $it_nav_list, $it_mobile_nav, 'mobile_menu', 'it_mobile_menu' );
		
		function it_menu( menu, append_to, menu_id, menu_class ){
			var $menu_nav;
			
			menu.clone().attr('id',menu_id).removeClass().attr('class',menu_class).appendTo( append_to );
			$menu_nav = append_to.find('> ul');
			$menu_nav.find('li:first').addClass('it_first_menu_item');
			
			append_to.click( function(){
				if ( jQuery(this).hasClass('closed') ){
					jQuery(this).removeClass( 'closed' ).addClass( 'opened' );
					$menu_nav.slideDown(500);
				} else {
					jQuery(this).removeClass( 'opened' ).addClass( 'closed' );
					$menu_nav.slideUp(500);
				}
				return false;
			} );
			
			append_to.find('a').click( function(event){
				event.stopPropagation();
			});
		}		
	
	});
})(jQuery)