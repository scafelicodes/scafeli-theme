<!doctype html>
<html lang="pt_BR">
  
  <head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/css/bootstrap.min.css">

    <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/css/aos.css" />

    <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/style.css" />

    <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/css/main.min.css">

    <title>
      <?php if(is_front_page() || is_home()){
        echo get_bloginfo('name');
        } else{
            echo wp_title('');
        }?>
    </title>

    <?php wp_head(); ?>
  </head>
  <body>


  <div class="text-center alert alert-warning alert-dismissible show" role="alert">
  <strong>COVID-19:</strong> You should check in on some of those fields below. <a href="#">Saiba mais</a>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>


<header>

<div class="container">
  <nav class="navbar navbar-expand-lg navbar-dark">
    <a class="navbar-brand logo" href="<?php bloginfo('home') ?>"><img class="logo" src="<?php bloginfo('template_url') ?>/img/logo-dark.png" alt=""></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <?php
      wp_nav_menu([
        'menu'            => 'top',
        'theme_location'  => 'top',
        'container'       => 'div',
        'container_id'    => 'bs4navbar',
        'container_class' => 'collapse navbar-collapse',
        'menu_id'         => false,
        'menu_class'      => 'navbar-nav ml-auto',
        'depth'           => 2,
        'fallback_cb'     => 'bs4navwalker::fallback',
        'walker'          => new bs4navwalker()
      ]);
    ?>

  </nav>
</div>

</div>

</header>