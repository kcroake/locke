<?php get_header();  the_post();  ?>
    <section id="home-banner">
	    <div class="grid-sizer"></div>
		<?php // Home Image
			
			$img1 = get_field('image_one');
			$img2 = get_field('image_two');
			$img3 = get_field('image_three');
			$img4 = get_field('image_four');
			$img5 = get_field('image_five');
			
		?>
		
        <div style="background: url(<?php echo $img1['url']; ?>) no-repeat center center; background-size:cover;" class="box">
        	<!--Image 1-->        
        </div>
        
        <div style="background: url(<?php echo $img2['url']; ?>) no-repeat center center; background-size:cover;" class="box size-1">
        	<!--Image 2-->
        </div>
        
        <div style="background: url(<?php echo $img3['url']; ?>) no-repeat center center; background-size:cover;" class="box">
        	<!--Image 3-->
        </div>
        
        <div class="box headline">
	        <h2><?php the_field('headline'); ?></h2>
	        <p><?php the_field('banner_content'); ?></p>
        </div>
        
        <div style="background: url(<?php echo $img4['url']; ?>) no-repeat center center; background-size:cover;" class="box size-2">
        	<!--Image 4-->
        	
        </div>
        
        <div style="background: url(<?php echo $img5['url']; ?>) no-repeat center center; background-size:cover;" class="box size-1">
        	<!--Image 5-->
        	
        </div>
        
    </section>
    
    <section id="mobile-banner">
	    <div class="img-banner">
	    	<?php $mobimg = get_field('mobile_banner'); ?>
		    <img src="<?php echo $mobimg['sizes']['mobile-banner']; ?>"/>
	    </div>
	    <div class="content-banner">
		    <h2><?php the_field('headline'); ?></h2>
	        <p><?php the_field('banner_content'); ?></p>
	    </div>
	    
    </section>

    <section id="about-us" class="container-small">
        <?php the_content(); ?>
        <?php if($aboutlink = get_field('about_us_link')) { ?> 
        	<a href="<?php echo $aboutlink; ?>" class="btn green"><?php the_field('about_us_link_text'); ?></a>
        <?php } ?>
    </section>

    <section id="our-history" class="white-text">
        <div class="container-small">
        <?php the_field('our_history'); ?>
    </div>
    </section>

    <?php echo get_template_part('inc', 'gallery'); ?>

    
    <?php if(have_rows('content_fields')) : 
	    	
	    	$t = 1; while(have_rows('content_fields')) : the_row();
	    	
	    	if(get_row_layout() == 'tabs_flex') {
    ?>
    
    
     <section id="<?php print (str_replace(' ', '-', strtolower(get_sub_field('tab_title')))); ?>" class="pricing <?php if(get_sub_field('color') == 'green') { echo 'white-text'; } ?>">
        <div class="container">
            <h2><?php the_sub_field('tab_title'); ?><small><?php the_sub_field('sub_title'); ?></small></h2>
            
			<?php $c = 1; if(have_rows('tabs')) : ?>
            <div class="tabs">
            	
                <ul>
                	<?php while(have_rows('tabs')) : the_row(); 
	                	$text = get_sub_field('tab_header');
                	?>
                    <li><a href="#<?php print (str_replace(' ', '-', strtolower($text))).$t; ?>"><?php the_sub_field('tab_header'); ?></a></li>
                    <?php $c++; endwhile; ?>
                </ul>
                
				<?php $d = 1; while(have_rows('tabs')) : the_row(); $text1 = get_sub_field('tab_header');?>
                <div id="<?php print (str_replace(' ', '-', strtolower($text1))).$t;; ?>">
                	<?php the_sub_field('tab_content'); ?>
                	<?php if($link = the_sub_field('tab_link_one')) { ?>
                    	<a href="<?php echo $link; ?>" class="btn green"><?php the_sub_field('tab_link_one_text'); ?></a>
                    <?php } if($link2 = the_sub_field('tab_link_two')) { ?>
                    	<a href="<?php echo $link2; ?>" class="btn green"><?php the_sub_field('tab_link_two_text'); ?></a>
                    <?php } ?>
                </div>
                <?php $d++; endwhile; ?>
               
            </div>
            <?php endif; ?>
        </div>
    </section>
    
    <?php } elseif(get_row_layout() == 'column_content') { ?>
	    
	    <section class="column-content">
	    	<div class="column col-left white-text">
	    		<div class="col-wrap">
	    			<h2><?php the_sub_field('column_title_one'); ?></h2>
	    			<?php the_sub_field('column_content_one'); ?>
	    		</div>
	    	</div>
	    	<div class="column col-right">
	    		<div class="col-wrap">
	    			<h2><?php the_sub_field('column_title_two'); ?></h2>
					<?php the_sub_field('column_content_two'); ?>
	    		</div>
	    	</div>
	    </section>
    
    
    
    <?php } $t++; endwhile; endif; ?>
    
    

    
    	<?php if(get_field('show_contact')) { ?>    
    
    <section id="contact" class="contact-us">
	    <div class="container">
		   <div class="header-text">
		  	 <h2>Contact Us</h2>
		  	 <?php if(get_field('contact_content')) { ?><p><?php the_field('contact_content'); ?></p><?php } ?>
		   </div>
	    </div>
        <div id="map">
        
        
        <?php the_field('map_iframe'); ?>
	         
        </div>
        
        
        
        
        
        
        
        
        <div class="container form-wrapper">
         <form id="form1" class="wufoo topLabel page" accept-charset="UTF-8" autocomplete="off" enctype="multipart/form-data" method="post" novalidate="" action="https://lockefallsfarm.wufoo.com/forms/zjnffcz18vzq3p/#public">
      

        <ul>
            <li id="foli1" class="notranslate      ">
            
            <label class="desc" id="title1" for="Field1">Name <span id="req_1" class="req">*</span></label> 
            
            
            <span><input id="Field1" name="Field1" type="text" class="field text fn" value="" size="8" tabindex="1" required="" placeholder="First Name" > <label for="Field1">First</label></span> <span><input id="Field2" name="Field2" type="text" class="field text ln" value="" size="14" tabindex="2" required="" placeholder="Last Name"> <label for="Field2">Last</label></span></li>

            <li id="foli3" class="notranslate      ">
                <label class="desc" id="title3" for="Field3">Email <span id="req_3" class="req">*</span></label>

                <div>
                    <input id="Field3" name="Field3" type="email" placeholder="Email*" spellcheck="false" class="field text medium" value="" maxlength="255" tabindex="3" required="">
                </div>
            </li>

            <li id="foli8" class="date notranslate      ">
            	<label class="desc" id="title8" for="Field8" >Event Date</label>
            	<span class="month">
            	<input id="Field8-1" placeholder="MM" name="Field8-1" type="text" class="field text" value="" size="2" maxlength="2" tabindex="4"> 
            	<label for="Field8-1">MM</label></span> 
            	<span><input id="Field8-2" placeholder="DD" name="Field8-2" type="text" class="field text" value="" size="2" maxlength="2" tabindex="5">
            	<label for="Field8-2">DD</label></span>
            	<span><input id="Field8" placeholder="YYYY" name="Field8" type="text" class="field text" value="" size="4" maxlength="4" tabindex="6"> 
            	<label for="Field8">YYYY</label></span> <img id="pick8" class="datepicker" src="<?php echo get_stylesheet_directory_uri(); ?>/img/wufoo/calendar.png" alt="Pick a date." data-date-format="yyyy-mm-dd" data-date="2015-12-06"></li>

            <li id="foli5" class="notranslate      ">
                <label class="desc" id="title5" for="Field5">Message <span id="req_5" class="req">*</span></label>

                <div>
                    <textarea placeholder="Message" id="Field5" name="Field5" class="field textarea medium" spellcheck="true" rows="10" cols="50" tabindex="7" onkeyup="" required="">
</textarea>
                </div>
            </li>

            <li class="buttons ">
                <div>
                    <input id="saveForm" name="saveForm" class="btTxt submit" type="submit" value="Submit">
                </div>
            </li>

            <li class="hide"><label for="comment">Do Not Fill This Out</label> 
            <textarea name="comment" id="comment" rows="1" cols="1">
</textarea> <input type="hidden" id="idstamp" name="idstamp" value="EC/0VyoY7cg36wD7Mh815aAmDH8FCDGUjlbmp0qGmzw="></li>
        </ul>
    </form>

        
	<!--	<form id="form1" class="wufoo topLabel page" accept-charset="UTF-8" autocomplete="off" enctype="multipart/form-data" method="post" novalidate="" action="https://lockefallsfarm.wufoo.com/forms/zjnffcz18vzq3p/#public">
				
				<ul>
					<li id="foli1" class="notranslate">
						<label class="desc" id="title1" for="Field1">
							Name
						</label>
							<div>
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
					</form> -->
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
    
<?php get_footer(); ?>