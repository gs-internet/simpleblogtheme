  
(function($)
{
  $(document).ready(function() {
	

$( "ul.nice-menu" ).addClass( "hidden" );


$( "#zone-menu-wrapper .block-nice-menus div.content" ).prepend( '<div class="navigation_title">MENU</div>' );



$( ".navigation_title" ).click(function() {

if($("body").hasClass('responsive-layout-mobile')) {
        
		if($(".responsive-layout-mobile ul.nice-menu").hasClass('hidden')) {
		$( ".responsive-layout-mobile ul.nice-menu" ).removeClass( "hidden" );
		}
		else
		{
		$( ".responsive-layout-mobile ul.nice-menu" ).addClass( "hidden" );
		}
		
    } 

});




})

}(jQuery)); 