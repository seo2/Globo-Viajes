<?
/*

Template name: Otros Productos

*/
?>
<?php get_header(); ?>
 
<section id="otros-productos" class="container-fluid no-padding">
	<?php 
		$args = array(
			'post_type' => 'otros_productos',
			'p'			=> 48
		);
		$the_query = new WP_Query( $args ); 
		
		if($the_query -> have_posts()) :                 
		while ($the_query -> have_posts()) : $the_query -> the_post(); 
	?> 
    <div class="row">
    	<div class="col-md-4 col-md-offset-2">
    		<h1><img src="<?php bloginfo('template_url'); ?>/assets/img/ico-seguro.png">Seguro de viajes</h1>
    		<?php the_content(); ?>
    	</div>
    	<div class="col-md-5 col-md-offset-1">
    		<img src="<?php echo  get_the_post_thumbnail_url() ?>" class="img-responsive">
    	</div>
    </div>
    <?php endwhile;
          endif;
    wp_reset_postdata(); ?>  
    
	<?php 
		$args = array(
			'post_type' => 'otros_productos',
			'p'			=> 50
		);
		$the_query = new WP_Query( $args ); 
		
		if($the_query -> have_posts()) :                 
		while ($the_query -> have_posts()) : $the_query -> the_post(); 
	?> 
    <div class="row text-right">
    	<div class="col-md-5">
    		<img src="<?php echo  get_the_post_thumbnail_url() ?>" class="img-responsive">
    	</div>
    	<div class="col-md-4  col-md-offset-1">
    		<h1>Cruceros <img src="<?php bloginfo('template_url'); ?>/assets/img/ico-barco.png"></h1>
    		<?php the_content(); ?>    	</div>
    </div>
    <?php endwhile;
          endif;
    wp_reset_postdata(); ?>  
    
	<?php 
		$args = array(
			'post_type' => 'otros_productos',
			'p'			=> 56
		);
		$the_query = new WP_Query( $args ); 
		
		if($the_query -> have_posts()) :                 
		while ($the_query -> have_posts()) : $the_query -> the_post(); 
	?> 
    <div class="row">
    	<div class="col-md-4 col-md-offset-2">
    		<h1><img src="<?php bloginfo('template_url'); ?>/assets/img/ico-arriendo.png" class="auto"> Arriendo de autos </h1>
    		<?php the_content(); ?>
    	</div>
    	<div class="col-md-5 col-md-offset-1">
    		<img src="<?php echo  get_the_post_thumbnail_url() ?>" class="img-responsive">
    	</div>
    </div>
    <?php endwhile;
          endif;
    wp_reset_postdata(); ?>  
    
	<?php 
		$args = array(
			'post_type' => 'otros_productos',
			'p'			=> 57
		);
		$the_query = new WP_Query( $args ); 
		
		if($the_query -> have_posts()) :                 
		while ($the_query -> have_posts()) : $the_query -> the_post(); 
	?> 
    <div class="row text-right">
    	<div class="col-md-5">
    		<img src="<?php echo  get_the_post_thumbnail_url() ?>" class="img-responsive">
    	</div>
    	<div class="col-md-4 col-md-offset-1">
    		<h1>Viajes grupales <img src="<?php bloginfo('template_url'); ?>/assets/img/ico-grupales.png"></h1>
    		<?php the_content(); ?>
    	</div>
    </div>
    <?php endwhile;
          endif;
    wp_reset_postdata(); ?>  
    
	<?php 
		$args = array(
			'post_type' => 'otros_productos',
			'p'			=> 58
		);
		$the_query = new WP_Query( $args ); 
		
		if($the_query -> have_posts()) :                 
		while ($the_query -> have_posts()) : $the_query -> the_post(); 
	?> 
    <div class="row">
    	<div class="col-md-4 col-md-offset-1">
    		<h1><img src="<?php bloginfo('template_url'); ?>/assets/img/ico-giras.png"> Giras de estudio</h1>
    		<?php the_content(); ?>
    	</div>
    	<div class="col-md-5 col-md-offset-1">
    		<img src="<?php echo  get_the_post_thumbnail_url() ?>" class="img-responsive">
    	</div>
    </div>
    <?php endwhile;
          endif;
    wp_reset_postdata(); ?>  
    
	<?php 
		$args = array(
			'post_type' => 'otros_productos',
			'p'			=> 59
		);
		$the_query = new WP_Query( $args ); 
		
		if($the_query -> have_posts()) :                 
		while ($the_query -> have_posts()) : $the_query -> the_post(); 
	?> 
    <div class="row text-right">
    	<div class="col-md-5">
    		<img src="<?php echo  get_the_post_thumbnail_url() ?>" class="img-responsive">
    	</div>
    	<div class="col-md-4 col-md-offset-1">
    		<h1>Luna de miel <img src="<?php bloginfo('template_url'); ?>/assets/img/ico-luna.png"></h1>
    		<?php the_content(); ?>
    	</div>
    </div>
    <?php endwhile;
          endif;
    wp_reset_postdata(); ?>  
    
</section>




<?php get_footer(); ?>

