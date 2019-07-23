<div class="FooterWrap">
        <div class="Container">

            <div class="row">
                <div class="col-sm-2">
                    <h5>Quick Links</h5>
                    <ul class="NoBullet">
                        <li><a href="#">Jobs</a></li>
                        <li><a href="#">Brans Assets</a></li>
                        <li><a href="#">Investor Relations</a></li>
                        <li><a href="#">Terms of Service</a></li>
                    </ul>
                </div> <!--1-->

                <div class="col-sm-2">
                    <h5>Features</h5>
                    <ul class="NoBullet">
                        <li><a href="#">Jobs</a></li>
                        <li><a href="#">Brans Assets</a></li>
                        <li><a href="#">Investor Relations</a></li>
                        <li><a href="#">Terms of Service</a></li>
                    </ul>
                </div> <!--2-->

                <div class="col-sm-2">
                    <h5>Resources</h5>
                    <ul class="NoBullet">
                        <li><a href="#">Jobs</a></li>
                        <li><a href="#">Brans Assets</a></li>
                        <li><a href="#">Investor Relations</a></li>
                        <li><a href="#">Terms of Service</a></li>
                    </ul>
                </div> <!--3-->

                <div class="col-sm-2">
                    <h5>Follow Us</h5>
                    <p>Let be Social</p>
                    <div class="SocialIcons">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-globe"></i></a>
                        <a href="#"><i class="fa fa-behance"></i></a>
                    </div>
                </div> <!--4-->

                <div class="col-sm-4">
                    <h5>Newsletter</h5>
                    <p>Stay update with our latest</p>
                    <div class="Newsletter">
                        <input type="email" placeholder="Enter Email">
                        <button><i class="fa fa-long-arrow-right"></i></button>
                    </div>
                </div> <!--5-->
            </div>

        </div>
    </div> <!--FooterWrap-->

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