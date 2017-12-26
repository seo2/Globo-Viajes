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
            <h1><? the_title(); ?></h4><br>
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
        <a href="" class=""><button type="button" class="wow fadeIn btn text-center center-block">Conoce Más</button></a>
    
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
            <h1><? the_title(); ?></h4><br>
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
    echo '<li data-filter=".'.$tax_term->slug.'">'.$tax_term->name.'</li>';
    }
?>

        </ul>

        <div class="clearfix">&nbsp;</div>

        <div class="elmixitup">

            <?php 
                // QUERY CUSTOM POST TYPE : BANNER 
                $args = array(
                    'post_type' => 'destinos',
                    'orderby'   => array(
                    'date' =>'ASC',
                    
                     )
                );
                $the_query = new WP_Query( $args ); 

                if($the_query -> have_posts()) :                 
                while ($the_query -> have_posts()) : $the_query -> the_post(); 
                $categoria = get_the_terms( $post->ID, 'destinos-categorias' );
            ?> 
            <figure class="mix <? foreach ( $categoria as $category ) { echo $category->slug; }?> effeckt-caption" data-effeckt-type="cover-fade" style="background-image: url(<?php echo  get_the_post_thumbnail_url() ?>); background-size:cover;">
                <figcaption>
                    <p><i class="fa fa-file-pdf-o fa-4x" aria-hidden="true"></i></p>
                    <p>Descargar ficha</p>
                </figcaption>
            </figure>
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
        <img class="center-block wow fadeIn" src="assets/img/ico-otros.png">
        <h2 class="blanco text-center wow fadeIn">Otros Productos</h2>
        <div class="clearfix">&nbsp;</div>
        <div class="clearfix">&nbsp;</div>
        <div class="col-lg-6 col-md-12 col-sm-6 wow fadeIn" data-wow-delay="500ms">
            <i class="fa fa-check" aria-hidden="true"> Seguros de Viaje</i> <br>
            <i class="fa fa-check" aria-hidden="true"> Cruceros</i><br>
            <i class="fa fa-check" aria-hidden="true"> Arriendo de autos</i><br>
        </div>
        <div class="col-lg-6 col-md-12 col-sm-6 wow fadeIn" data-wow-delay="1s">
            <i class="fa fa-check" aria-hidden="true"> Viajes Grupales</i><br>
            <i class="fa fa-check" aria-hidden="true"> Giras de Estudio</i><br>
            <i class="fa fa-check" aria-hidden="true"> Lunas de Miel</i> <br>
        </div>
        <div class="clearfix">&nbsp;</div>
        <div class="clearfix">&nbsp;</div>
        <a href="" class=""><button type="button" class="wow fadeIn boton text-center center-block">Conoce Más</button></a>
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
            <img class="center-block" src="assets/img/ico-tit-03.png">
            <h1>Viajes a Medida</h4><br>
            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.<br>
            Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
        </div>
        <div class="clearfix">&nbsp;</div>
    </div>
    <div class="container">
        
            <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2">                     
                <div id="formid">          
                  <input type="text" name="nombre" id="nombre" placeholder="Nombre completo">
                  <input type="text" name="email" id="email" placeholder="Email"> 
                  <input type="text" name="telefono" id="telefono" placeholder="Teléfono"> 
                  <textarea class="form-control" rows="4" id="mensaje" placeholder="Mensaje"></textarea> 
                  <div class="col-lg-4 col-md-4 pull-right "><input type="submit" value="Enviar" class="text-center cap btn" /></div>
                </div>
                
            </div>  
    
    </div>
</section>

<?php get_footer(); ?>

