<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Pejerrey">
    <link rel="icon" type="image/png" href="<?php echo get_stylesheet_directory_uri() ?>/assets/img/favicon.png" />
    <title><?php wp_title(); ?></title>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php wp_head(); ?>
</head>

<body>

<div id="preloader">
    <div id="loader">
        <i class="fa fa-spinner fa-pulse fa-5x fa-fw"></i>
        <span class="sr-only">Cargando...</span>
    </div>
</div>

<nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
    <div class="container ">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>  <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand page-scroll" href="<?php bloginfo('url'); ?>"><img class="sr-button" src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/logo.png"></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <?php 
	        if(is_home()){
	            wp_nav_menu(array( 'theme_location' => 'header-menu', 'container' => 'ul', 'menu_class' => 'nav navbar-nav navbar-right')); 
	        }else{
		        wp_nav_menu(array( 'theme_location' => 'interior-menu', 'container' => 'ul', 'menu_class' => 'nav navbar-nav navbar-right')); 
	        }
	        ?>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>

<header id="header">
    <div class="container-fluid">
        <div class="row">
            <?php if(is_home()){ ?>
            <div class="slick wow fadeIn">
                <?php 
                    // QUERY CUSTOM POST TYPE : BANNER 
                    $args = array(
                        'post_type' => 'banner',
                        'orderby'   => array(
                        'date' =>'ASC',
                        /*Other params*/
                         )
                    );
                    $the_query = new WP_Query( $args ); 

                    if($the_query -> have_posts()) :                 
                    while ($the_query -> have_posts()) : $the_query -> the_post(); 
                    $the_Content = get_the_content();
                    $stripped = strip_tags($the_Content, '<p> <a>'); //replace <p> and <a> with whatever tags you want to keep after the strip
                ?> 
                <div class="img-responsivo" style="background-image: url(<?php echo  get_the_post_thumbnail_url() ?>);">
                    <?php if(get('textos_titulo_linea_1') || get('textos_titulo_linea_2') || get('textos_descripcion')){ ?>
                    <div class="col-lg-6 text-center caja-slider  wow fadeIn">
	                    <div id="textos_banner">
	                        <h2><?php echo get('textos_titulo_linea_1'); ?></h2>
	                        <h1><?php echo get('textos_titulo_linea_2'); ?></h1>
	                        <p><?php echo get('textos_descripcion'); ?></p>
	                    </div>
                    </div>
                    <?php } ?>
                </div>
                <?php endwhile;
                      endif;
                wp_reset_postdata(); ?>    

            </div>
            <?php }else{ ?>
            	<div id="otros-header">
	    	        <img class="center-block wow fadeIn" src="<?php bloginfo('template_url'); ?>/assets/img/ico-productos.png">
					<h2 class="blanco text-center wow fadeIn">• Otros Productos •</h2>
            	</div>
            
            	<img src="<?php bloginfo('template_url'); ?>/assets/img/banner_productos.jpg" class="img-responsive">
            <?php } ?>
        </div>
    </div>
</header>

 
