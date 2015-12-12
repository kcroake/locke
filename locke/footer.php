
    
    <footer class="clearfix white-text">
	    <div class="container">
		    <div class="column-one">
			    <p>&copy; <?php echo date('Y'); ?> Locke Fall Farms | Design by Kevin Croake</p>
		    </div>
		    <div class="column-two">
			      <?php 
	                $footerArgs = array(
		                'theme_location' => 'footer-menu',
		                'menu' => '',
		                'container' => 'nav',
		                'depth' => 1
	                ); 
	                wp_nav_menu($footerArgs); ?>
		    </div>
	    </div>
    </footer><!--


        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
-->
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.3.min.js"><\/script>')</script>
      <?php wp_footer(); ?>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='https://www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>
    </body>
</html>