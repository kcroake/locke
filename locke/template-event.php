<?php 
	// Template Name: Calendar
	get_header(); the_post(); ?>
	
	 <section id="locke-cal" class="container">
	
	<?php echo WP_FullCalendar::calendar(array()); ?>
	 </section>
	
<?php get_footer(); ?>