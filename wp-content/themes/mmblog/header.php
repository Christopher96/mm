<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
  <head>
  	<title>MM<?php wp_title( '|', true, 'left' ); ?></title>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php wp_head(); ?>

    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />

  </head>
  <body>

  <div class="container">
    <header>
      <div class="row">
          <div class="col-md-4 logo">
              <?php theme_prefix_the_custom_logo()?>
          </div>
          <div class="col-md-8 menu">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Sök efter...">
              <span class="input-group-btn">
                <button class="btn btn-default" type="button">
                    <i class="fa fa-search"></i>
                </button>

              </span>
            </div>
            <hr/>
            <nav class="navbar navbar-default">
              <div class="navbar-brand navbar-right language-btns">
                <!-- <button class="btn btn-default active" type="button">
                  <span class="flag-icon flag-icon-se"></span>
                </button>
                <button class="btn btn-default" type="button">
                  <span class="flag-icon flag-icon-gb"></span>
                </button>
                <button class="btn btn-default" type="button">
                  <span class="flag-icon flag-icon-fr"></span>
                </button> -->
                <?= get_language_buttons() ?>
              </div>
              <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-menu" aria-expanded="false">
                  <span class="sr-only">Toggle navigation</span>
                  <i class="fa fa-bars"></i>
              </button>
              </div>
              <?php
                  wp_nav_menu( array(
                      'menu'              => 'primary',
                      'theme_location'    => 'primary',
                      'depth'             => 2,
                      'container'         => 'div',
                      'container_class'   => 'collapse navbar-collapse',
                      'container_id'      => 'navbar-menu',
                      'menu_class'        => 'nav navbar-nav navbar-left',
                      'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                      'walker'            => new WP_Bootstrap_Navwalker())
                  );
                ?>
            </nav>
          </div>
        </div>
      </header>
