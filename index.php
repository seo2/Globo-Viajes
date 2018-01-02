<?php get_header(); ?>

<section id="salidas">
    <div id="bottom_banner"></div>

    <div class="container wow fadeIn">
        <div class="row text-center">
            <?php
                // QUERY PAGE 
                $args = array(
                  'p'         => 2, // ID of a page, post, or custom type
                  'post_type' => 'page'
                );
                $nosotros = new WP_Query($args);
                while ($nosotros -> have_posts()) : $nosotros -> the_post(); 
                $the_Content = get_the_content();
                $stripped = strip_tags($the_Content, '<p> <a>'); //replace <p> and <a> with whatever tags you want to keep after the strip
            ?>
            <img class="center-block" src="<?php echo get_the_post_thumbnail_url() ?>">
            <h1><? the_title(); ?></h1><br>
            <div class="col-lg-10 col-lg-offset-1"><? echo $stripped; ?></div>
            <?php endwhile;
            wp_reset_postdata(); ?> 
        </div>
        <div class="clearfix">&nbsp;</div>
    </div>
    <div class="container">
        <?php 
        // QUERY CUSTOM POST TYPE 
        $argts = array(
            'post_type' => 'salidas',
            'orderby'   => array(
            'date' =>'ASC',
            /*Other params*/
             )
        );
        $prod = new WP_Query( $argts ); 
        if($prod -> have_posts()) :                 
        $i=0;
        while ($prod -> have_posts()) : $prod -> the_post();
        $the_Content = get_the_content();
        $stripped = strip_tags($the_Content, '<p> <a>'); 
        ?>
        <div class="col-lg-3 col-md-6 itemimagen contenedor-img text-center">  
             <img src="<?php echo get_the_post_thumbnail_url() ?>" class="img-responsive center-block" alt="">
             <h3><?the_title(); ?></h3>
             <? echo $stripped; ?>
        </div>
        <?php 
        $i++; 
        endwhile;
        endif;
        ?>

        <div class="clearfix">&nbsp;</div>
       <!--  <a href="" class=""><button type="button" class="wow fadeIn btn text-center center-block">Conoce Más</button></a> -->
    
    </div>
</section>

<section id="destinos" class="wow fadeIn">
    <div class="container">
        <div class="row text-center">
            <?php
                // QUERY PAGE 
                $args = array(
                  'p'         => 21, // ID of a page, post, or custom type
                  'post_type' => 'page'
                );
                $nosotros = new WP_Query($args);
                while ($nosotros -> have_posts()) : $nosotros -> the_post(); 
                $the_Content = get_the_content();
                $stripped = strip_tags($the_Content, '<p> <a>'); //replace <p> and <a> with whatever tags you want to keep after the strip
            ?>
            <img class="center-block" src="<?php echo get_the_post_thumbnail_url() ?>">
            <h1><? the_title(); ?></h1><br>
            <div class="col-lg-10 col-lg-offset-1"><? echo $stripped; ?></div>
            <?php endwhile;
            wp_reset_postdata(); ?> 
        </div>
        <div class="clearfix">&nbsp;</div>
    </div>
    <div class="container">
        <ul class="controls nav navbar-nav"> 
<?php
    //listado de taxonomias
    $taxonomy = 'destinos-categorias';
    $tax_terms = get_terms($taxonomy);
    foreach ($tax_terms as $tax_term) {
	    if($tax_term->slug=='destacado'){
    		echo '<li data-filter=".'.$tax_term->slug.'">'.$tax_term->name.'</li>';
	    }
    }
    foreach ($tax_terms as $tax_term) {
	    if($tax_term->slug!='destacado'){
    		echo '<li data-filter=".'.$tax_term->slug.'">'.$tax_term->name.'</li>';
	    }
    }
?>
<li class="mixitup-sandbox_menu-item mixitup-sandbox_menu-item__filter mixitup-sandbox_menu-item__active" data-filter="all" data-ref="ripple" data-behavior="tooltipC26016" data-tooltip-content="Filter all" data-hide-on-click="true" data-is-fixed="true">Todos</li>
        </ul>

        <div class="clearfix">&nbsp;</div>

        <div class="elmixitup">

            <?php 
                $args = array(
                    'post_type' => 'destinos',
                    'posts_per_page' => -1,
                    'orderby'   => array(
                    'date' =>'ASC',
                    
                     )
                );
                $the_query = new WP_Query( $args ); 

                if($the_query -> have_posts()) :                 
                while ($the_query -> have_posts()) : $the_query -> the_post(); 
                $categoria = get_the_terms( $post->ID, 'destinos-categorias' );
                
            ?> 
            <div class="col-md-4 mix <? foreach ( $categoria as $category ) { echo $category->slug . ' '; }?> effeckt-caption" data-effeckt-type="cover-fade">
	            <figure class="destino" style="background-image: url(<?php echo  get_the_post_thumbnail_url() ?>); background-size:cover;">
	                <figcaption>
		                <a href="<?php echo get('pdf'); ?>" target="_blank">
	                    <p><i class="fa fa-file-pdf-o fa-4x" aria-hidden="true"></i></p>
	                    <p>Descargar ficha</p>
		                </a>
	                </figcaption>
	            </figure>
				<p class="text-center tit-destino">• <?php the_title(); ?> •</p>
            </div>
            <?php endwhile;
                  endif;
            wp_reset_postdata(); ?>  

            <div class="gap"></div>
            <div class="gap"></div>
            <div class="gap"></div>
        </div>
         
    </div>
</section>



 
<section id="otros" class="container-fluid no-padding">
    <div class="col-lg-6 hidden-md col-sm-6 no-padding" id="otros-left">
        
    </div>
    <div class="col-lg-6 col-md-12 col-sm-6 no-padding blanco" id="otros-right">
        <img class="center-block wow fadeIn" src="<?php bloginfo('template_url'); ?>/assets/img/ico-productos.png">
        <h2 class="blanco text-center wow fadeIn">Otros Productos</h2>
        <div class="clearfix">&nbsp;</div>
        <div class="clearfix">&nbsp;</div>
        <div class="col-lg-6 col-md-12 col-sm-6 wow fadeIn" data-wow-delay="500ms">
            <i class="fa fa-check" aria-hidden="true"></i> Seguros de Viaje<br>
            <i class="fa fa-check" aria-hidden="true"></i> Cruceros<br>
            <i class="fa fa-check" aria-hidden="true"></i> Arriendo de autos<br>
        </div>
        <div class="col-lg-6 col-md-12 col-sm-6 wow fadeIn" data-wow-delay="1s">
            <i class="fa fa-check" aria-hidden="true"></i> Viajes Grupales<br>
            <i class="fa fa-check" aria-hidden="true"></i> Giras de Estudio<br>
            <i class="fa fa-check" aria-hidden="true"></i> Lunas de Miel<br>
        </div>
        <div class="clearfix">&nbsp;</div>
        <div class="clearfix">&nbsp;</div>
        <a href="<?php bloginfo('url'); ?>/otros-productos" class=""><button type="button" class="wow fadeIn boton text-center center-block">Conoce Más</button></a>
    </div>
</section>


<section>
    <?php
        // QUERY PAGE 
        $args = array(
          'p'         => 23, // ID of a page, post, or custom type
          'post_type' => 'page'
        );
        $nosotros = new WP_Query($args);
        while ($nosotros -> have_posts()) : $nosotros -> the_post(); 
        $the_Content = get_the_content();
        $stripped = strip_tags($the_Content, '<p> <a>'); //replace <p> and <a> with whatever tags you want to keep after the strip
    ?>
    <div class="container-fluid  no-padding">
            <img src="<?php echo get_the_post_thumbnail_url() ?>" class="center-block img-responsive wow pulse">
    </div>
    <?php endwhile;
    wp_reset_postdata(); ?> 
    
</section>

<section id="viajes" class="wow fadeIn">
    <div class="container">
        <div class="row text-center">
            <?php
                // QUERY PAGE 
                $args = array(
                  'p'         => 41, // ID of a page, post, or custom type
                  'post_type' => 'page'
                );
                $nosotros = new WP_Query($args);
                while ($nosotros -> have_posts()) : $nosotros -> the_post(); 
                $the_Content = get_the_content();
                $stripped = strip_tags($the_Content, '<p> <a>'); //replace <p> and <a> with whatever tags you want to keep after the strip
            ?>	        
            <img class="center-block" src="<?php echo get_the_post_thumbnail_url() ?>">
            <h1><?php the_title(); ?></h1><br>
            <?php the_content(); ?>
		    <?php endwhile;
		    wp_reset_postdata(); ?> 
        </div>
        <div class="clearfix">&nbsp;</div>
    </div>
    <div class="container">  
   
	          
        <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2">                     
            <form id="formid" action="<?php bloginfo('template_url'); ?>/ajax/contacto.php" method="POST"> 
				<div class="form-group">         
					<input type="text" 	name="nombre" 	id="nombre" 	placeholder="Nombre completo" 	required>
    			</div>
				<div class="form-group">         
					<input type="email" name="mail" 	id="email" 		placeholder="Email" 			required> 
				</div>
				<div class="form-group">         
					<input type="text" 	name="fono" 	id="telefono" 	placeholder="Teléfono" 			required> 
				</div>
				<div class="form-group">
					<textarea class="form-control" rows="4" id="mensaje" placeholder="Mensaje" name="mensaje" required></textarea> 
				</div>
				<div class="form-group">
					<div class="col-md-4 col-md-offset-4">
						<button type="submit" class="text-center cap btn" id="btnEnviar">Enviar</button>
					</div>
				</div>
            </form>
        </div>  
    </div>
</section>

<?php get_footer(); ?>

