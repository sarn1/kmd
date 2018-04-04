<!DOCTYPE html><!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]--><!--[if IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"> <![endif]--><!--[if IE 8]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]--><!--[if gt IE 8]><!-->
<html <?php language_attributes(); ?> class="no-js">
<!--<![endif]-->
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <?php wp_head(); ?>
  <!--[if lte IE 8]><link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri() ?>/includes/ie.css" /><![endif]--><!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries --><!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script><![endif]-->
</head>
<body <?php body_class(); ?>>
<div class="container">
<header>

  <div class="title"><a href="/">The KMD Foundation</a></div>
  <div class="subtitle">The Kristyna M. Driehaus Foundation</div>

  <nav>
    <ul>
    <?php // wp_nav_menu(array('theme_location'=>'main-menu','container_class'=>'main-menu')); ?>
    <!-- custom menu -->
    <?php

    global $wp_query;
    $args = array(
        'post_type' => 'menu-item',
        'post_status' => 'publish',
        'posts_per_page' => -1,
    );
    $wp_query = new WP_Query( $args );

    if ( $wp_query->have_posts() ) {
        while ( $wp_query->have_posts() ) {
            $wp_query->the_post();
            //$portrait = get_the_post_thumbnail(get_the_ID(),'full',array('class' =>  ' portrait-img-small img-responsive'));
            $url = get_post_meta(get_the_ID(), 'wpcf-url', true);
            $img_on = get_post_meta(get_the_ID(), 'wpcf-image-on', true);
            $img_off = get_post_meta(get_the_ID(), 'wpcf-image-off', true);
            $title = get_the_title();
    ?>
      <li>
          <a href="<?=$url?>">
            <img src="<?=$img_off?>" title="<?=$title?>" alt="<?$title?>" onmouseover="this.src='<?=$img_on?>'" onmouseout="this.src='<?=$img_off?>'" />
          </a>
          <span class="title"><?=$title?></span>
      </li>
    <?php

        }
    }

    wp_reset_query();
    wp_reset_postdata();

    ?>
    </ul>
  </nav>
</header>


