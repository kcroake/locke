<?php get_header(); the_post(); ?>
<?php 
	if($img_id = get_post_thumbnail_id($post->ID)){ 
		$image = wp_get_attachment_image_src($img_id, 'inner-banner'); 
		$alt_text = get_post_meta($img_id , '_wp_attachment_image_alt', true);
		
	

?>
	 <div class="page-header">
	    <img src="<?php echo $image[0]; ?>" alt="<?php echo $alt_text; ?>"/>
    </div>
    <?php } ?>
    <section class="container">
	    <article>
		    <h1><?php the_title(); ?></h1>
			<?php the_content(); ?>
	    </article>
	    <?php if( have_rows('page_options')) : ?>
	    <aside>
	    	<?php while ( have_rows('page_options') ) : the_row(); 
		    	if( get_row_layout() == 'promo' ):
	    	?>
		    <div class="promo">
			    <h3>
				    <?php if(get_sub_field('promo_sub')) { ?><small><?php the_sub_field('promo_sub'); ?></small><?php } ?>
				    <?php the_sub_field('promo_heading'); ?>
			    </h3>
			    <?php the_sub_field('promo_content'); ?>
			    
			   <?php if($link = get_sub_field('promo_link')) { ?> <a href="<?php echo $link; ?>" class="btn green"><?php the_sub_field('promo_link_text'); ?></a><?php } ?>
		    </div>
		    <?php } elseif(get_row_layout() == 'mini_gallery') { ?>
		    	<div class="side-image">
		    		<?php if(have_rows('images')) : while(have_rows('images')) : the_row(); 
			    		$img = get_sub_field('image'); 
		    		?>
		    		<a href="<?php echo $img['url']; ?>">
		    			<img src="<?php echo $img['url']; ?>" alt="<?php echo $img['alt']; ?>"/>
		    		</a>
		    	</div>
		    <?php } ?>
		    <?php endwhile; ?>
	    </aside>
	    <?php endif; ?>
    </section>
<?php get_footer(); ?>