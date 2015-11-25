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

    <section id="pricing-other-info" class="pricing white-text">
        <div class="container">
            <h2><?php the_field('pricing_headline'); ?><small><?php the_field('pricing_subhead'); ?></small></h2>
            
			<?php $c = 1; if(have_rows('tabs')) : ?>
            <div id="tabs">
            	
                <ul>
                	<?php while(have_rows('tabs')) : the_row(); ?>
                    <li><a href="#tab-<?php echo $c; ?>"><?php the_sub_field('tab_title'); ?></a></li>
                    <?php $c++; endwhile; ?>
                </ul>
                
				<?php $d = 1; while(have_rows('tabs')) : the_row(); ?>
                <div id="tab-<?php echo $d; ?>">
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
<?php get_footer(); ?>