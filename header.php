<!doctype html>
<html lang="pt_BR">
  
  <head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js" type="text/javascript"></script>


    <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/style.css" />

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

<header>


<div class="container">
<nav class="navbar navbar-expand-lg navbar-light">
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