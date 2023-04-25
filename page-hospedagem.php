<?php
// Template Name: Hospedagem
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hospedagem | DogResort</title>
  <meta name="description" content="O serviço de hospedagem da DogResort é exclusivo para os cães que já frequentam o nosso daycare por já conhecerem bem a nossa rotina na creche.">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Livvic:wght@400;500;600;700&family=Noto+Sans+Tamil:wght@500;900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

  <link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_stylesheet_directory_uri(); ?>/img/relaxfav/apple-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="<?php echo get_stylesheet_directory_uri(); ?>/img/relaxfav/apple-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_stylesheet_directory_uri(); ?>/img/relaxfav/apple-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_stylesheet_directory_uri(); ?>/img/relaxfav/apple-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_stylesheet_directory_uri(); ?>/img/relaxfav/apple-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_stylesheet_directory_uri(); ?>/img/relaxfav/apple-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_stylesheet_directory_uri(); ?>/img/relaxfav/apple-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_stylesheet_directory_uri(); ?>/img/relaxfav/apple-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_stylesheet_directory_uri(); ?>/img/relaxfav/apple-icon-180x180.png">
  <link rel="icon" type="image/png" sizes="192x192" href="<?php echo get_stylesheet_directory_uri(); ?>/img/relaxfav/android-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_stylesheet_directory_uri(); ?>/img/relaxfav/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="<?php echo get_stylesheet_directory_uri(); ?>/img/relaxfav/favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_stylesheet_directory_uri(); ?>/img/relaxfav/favicon-16x16.png">
  <link rel="manifest" href="<?php echo get_stylesheet_directory_uri(); ?>/img/relaxfav/manifest.json">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="<?php echo get_stylesheet_directory_uri(); ?>/img/relaxfav/ms-icon-144x144.png">
  <meta name="theme-color" content="#ffffff">

  <?php wp_head(); ?>

</head>

<body>

  <?php get_header(); ?>

  <main role="main" class="dogrelax-page">
    <div class="daycare-inner">
      <div class="daycare-intro">
        <div class="daycare-content">
          <div class="daycare-logo">
            <img src="<?php the_field('logotipo-hospedagem') ?>" alt="Hospedagem Logo">
            <div>
              <span><?php the_field('pre-titulo-hospedagem') ?></span>
              <h1><?php the_field('titulo-hospedagem') ?></h1>
            </div>
          </div>
          <p class="daycare-paragraph"><?php the_field('descricao-hospedagem') ?></p>
        </div>
        <img src="<?php the_field('hospedagem-1') ?>" alt="Hospedagem Cachorro DogResort" class="hero-dogrelax">
      </div>
  </main>

  <section class="daycare-benefits dogrelax-benefits">
    <img src="<?php the_field('hospedagem-2') ?>" alt="Dogrelax DogResort">
    <div>
      <span><?php the_field('titulo-2-hospedagem') ?></span>
      <p><?php the_field('descricao-2-hospedagem') ?></p>
    </div>
  </section>

  <section class="daycare-benefits dogrelax-benefits dogrelax-benefits-2">
    <div>
      <span><?php the_field('titulo-3-hospedagem') ?></span>
      <ul>
        <li><?php the_field('item-1-hospedagem') ?></li>
        <li><?php the_field('item-2-hospedagem') ?></li>
        <li><?php the_field('item-3-hospedagem') ?></li>
        <li><?php the_field('item-4-hospedagem') ?></li>
      </ul>
    </div>
    <img src="<?php the_field('hospedagem-3') ?>" alt="Dogrelax 2 DogResort">
  </section>

  <section class="routine">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/Hospedagem 4.webp" alt="Hospedagem Decorador Rosa 1">
    <div>
      <h2><?php the_field('titulo-4-hospedagem') ?></h2>
      <p><?php the_field('descricao-4-hospedagem') ?></p>
    </div>
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/Hospedagem 5.webp" alt="Hospedagem Decorador Rosa 2">
  </section>

  <?php get_footer(); ?>

  <script src="<?php echo get_stylesheet_directory_uri(); ?>/scripts/script.js"></script>

  <?php wp_footer(); ?>

</body>

</html>