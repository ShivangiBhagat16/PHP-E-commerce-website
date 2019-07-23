

    <script>
    jQuery( document ).ready( function( $ ) {
        
        $('body').addClass('js');
        var $menu = $('#menu'),
                $menulink = $('.menu-link'),
                $menuTrigger = $('.has-submenu');

        $menulink.click(function(e) {
            e.preventDefault();
            $menulink.toggleClass('active');
            $menu.toggleClass('active');
            //
        });

        $menuTrigger.click(function(e) {
            e.preventDefault();
            var $this = $(this);
            $('.menu ul').removeClass('active');
            $this.toggleClass('active').next('ul').toggleClass('active');
        });
    
    });
    </script>

<script type="text/javascript">
    jQuery(document).ready(function(){
            jQuery(".StickyMenu").hide();
    
              jQuery(window).scroll(function() {
                var sd = jQuery(window).scrollTop();
                if ( sd > 0 ) 
                    jQuery(".StickyMenu").fadeIn(500);
                else 
                    jQuery(".StickyMenu").fadeOut(500);
            });

            jQuery( ".WindowHeight " ).height( jQuery( window ).height() - 0 );
            //jQuery( ".WindowHeight " ).height();
    
            jQuery( window ).resize( function () {
                jQuery( ".WindowHeight " ).height();
            } );
    });	
</script>
<script src="jquery.flexslider.js"></script>
<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/flexslider/2.7.2/jquery.flexslider-min.js"></script>-->
<script type="text/javascript">

    $(window).load(function(){
  $('.flexslider').flexslider({
    animation: "fade",
    direction: "horizontal",
    animationSpeed: 2000, 
    slideshowSpeed:5000
  });
});
    
  </script>

</body>
</html> 