	<?php if(get_field('show_contact')) { ?>    
    
    <section id="contact" class="contact-us">
	    <div class="container">
		   <div class="header-text">
		  	 <h2>Contact Us</h2>
		  	 <?php if(get_field('contact_content')) { ?><p><?php the_field('contact_content'); ?></p><?php } ?>
		   </div>
	    </div>
        <div id="map">
	         <iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d5749.421405199932!2d-71.31628200857924!3d43.90325810720107!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x4cb372a5c9e0cba7%3A0xdeb034a5e6a71bc4!2s2531+Chinook+Trail%2C+Tamworth%2C+NH+03897!3m2!1d43.903258199999996!2d-71.31166859999999!5e0!3m2!1sen!2sus!4v1443665762229" width="100%" height="326" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
        
        <div class="container form-wrapper">
	       <form id="form1" name="form1" class="wufoo topLabel page" accept-charset="UTF-8" autocomplete="off" enctype="multipart/form-data" method="post" novalidate action="https://lockefallsfarm.wufoo.com/forms/zjnffcz18vzq3p/#public">
					  
				
					
				
				<ul>
					<li id="foli1" class="notranslate">
						<label class="desc" id="title1" for="Field1">
							Name
						</label>
							<span>
								<input id="Field1" name="Field1" type="text" class="field text fn" value="" size="8" tabindex="1" placeholder="First Name" required/>
								<label for="Field1">First</label>
							</span>
							<span>
								<input id="Field2" name="Field2" type="text" class="field text ln" value="" size="14" tabindex="2" placeholder="Last Name" required/>
								<label for="Field2">Last</label>
							</span>
					</li>
					
					<li id="foli3" class="notranslate">
						<label class="desc" id="title3" for="Field3">
						Email
						</label>
							<div>
								<input id="Field3" name="Field3" type="email" spellcheck="false" class="field text medium" value="" maxlength="255" tabindex="3" placeholder="Email" required/>
							</div>
					</li>
					
					<li id="foli5" class="notranslate">
					<label class="desc" id="title5" for="Field5">
						Message
					</label>
					
					<div>
					<textarea id="Field5"
					name="Field5"
					class="field textarea medium"
					spellcheck="true"
					rows="10" cols="50"
					placeholder="Message"
					tabindex="4"
					onkeyup="" required></textarea>
					
					</div>
					</li> <li class="buttons ">
					<div>
					
					                    <input id="saveForm" name="saveForm" class=" submit"
					    type="submit" value="Submit"
					 /></div>
					</li>
					
					<li class="hide">
					<label for="comment">Do Not Fill This Out</label>
					<textarea name="comment" id="comment" rows="1" cols="1"></textarea>
					<input type="hidden" id="idstamp" name="idstamp" value="EC/0VyoY7cg36wD7Mh815aAmDH8FCDGUjlbmp0qGmzw=" />
					</li>
					</ul>
					</form>
	        <div class="contact-info">
		        <h4>Contact Info</h4>
		        <p>2531 Chinook Trail<br/>
				Wonalancet, NH 03897<br/>
				<a href="tel:603-986-9164">603-986-9164</a><br/>
				<a href="mailto:info@lockefallsfarm.com">info@lockefallsfarm.com</a>
		        </p>
		        
	        </div>
        </div>
    </section>
    
    <?php } ?>
    
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
    </footer>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
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