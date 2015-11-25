<section id="home-gallery" class="gallery container">
        <h2>The Gallery</h2>
        <ul class="filter-button-group button-group">
	        <li><button class="is-checked" data-filter="*">All</button></li>
	        <li><button data-filter=".grounds">Grounds</button></li>
	        <li><button data-filter=".barn">Barn</button></li><!--

	        <li><button data-filter=".weddings">Weddings</button></li>
-->
	        <li><button data-filter=".events">Events</button></li>
	        <li><button data-filter=".nature">Nature</button></li>
        </ul>
        <?php $c = 1; if($rows = get_field('gallery')) : ?>
        <div class="grid clearfix">
        	<?php
	        	shuffle( $rows );
			 
				foreach($rows as $row) :
	        	$img = $row['image'];
	        	$size = $row['crop'];
	        	
	        	//Random Array Test
	        	//
        	?>
        	
        	<?php /*
			  <div class="<?php echo $row['category']; ?> grid-item <?php if($size == 'portrait') { echo 'grid-item-width2'; } elseif($size == 'long') { echo 'grid-item-height2'; }?>">
            	<a href="<?php echo $img['sizes']['large']; ?>">
            	<?php if($size == 'portrait') { ?>
            		<img src="<?php echo $img['sizes']['portrait']; ?>" alt="<?php echo $img['alt']; ?>"/>
            	<?php } elseif($size == 'long') { ?>
            		<img src="<?php echo $img['sizes']['long']; ?>" alt="<?php echo $img['alt']; ?>"/>
            	<?php } else { ?>
            		<img src="<?php echo $img['sizes']['large-crop']; ?>" alt="<?php echo $img['alt']; ?>"/>
            	<?php } ?>
            	</a>
            </div>
			*/ ?>
        	
        	
            <div class="<?php echo $row['category']; ?> grid-item 
            
            	<?php if($c  % 4 > 1) { echo 'grid-item-width2'; } elseif($c  % 6 > 1) { echo 'grid-item-height2'; }?>">
            	
            	<a href="<?php echo $img['sizes']['large']; ?>">
            	
            	<?php if($c  % 4 > 1) { ?>
            	
            		<img class="desktop" src="<?php echo $img['sizes']['portrait']; ?>" alt="<?php echo $img['alt']; ?>"/>
            		
            		<img class="mobile" src="<?php echo $img['sizes']['mobile-gallery']; ?>" alt="<?php echo $img['alt']; ?>"/>
            		
            	<?php } elseif($c  % 6 > 1) { ?>
            	
            		<img class="desktop" src="<?php echo $img['sizes']['long']; ?>" alt="<?php echo $img['alt']; ?>"/>
            		
            		<img class="mobile" src="<?php echo $img['sizes']['mobile-gallery']; ?>" alt="<?php echo $img['alt']; ?>"/>
            		
            	<?php } else { ?>
            	
            		<img class="desktop" src="<?php echo $img['sizes']['large-crop']; ?>" alt="<?php echo $img['alt']; ?>"/>
            		
            		<img class="mobile" src="<?php echo $img['sizes']['mobile-gallery']; ?>" alt="<?php echo $img['alt']; ?>"/>
            		
            	<?php } ?>
            	</a>
            </div>

			<?php $c++; endforeach; ?>
         </div>
        <?php endif; ?>
		<?php if(is_front_page()) { ?>
        <a href="<?php echo get_permalink(42); ?>" class="btn green">More From the Gallery</a>
		<?php } ?>
    </section> 