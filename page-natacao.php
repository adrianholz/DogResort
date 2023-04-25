<?php
// Template Name: Natação
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Natação | DogResort</title>
  <meta name="description" content="A natação para cães oferece gasto de energia de baixo impacto, não sobrecarregando as articulações, além de ser uma atividade dinâmica e divertida, contribuindo para diminuir estresse.">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Livvic:wght@400;500;600;700&family=Noto+Sans+Tamil:wght@500;900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

  <link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_stylesheet_directory_uri(); ?>/img/spafav/apple-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="<?php echo get_stylesheet_directory_uri(); ?>/img/spafav/apple-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_stylesheet_directory_uri(); ?>/img/spafav/apple-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_stylesheet_directory_uri(); ?>/img/spafav/apple-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_stylesheet_directory_uri(); ?>/img/spafav/apple-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_stylesheet_directory_uri(); ?>/img/spafav/apple-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_stylesheet_directory_uri(); ?>/img/spafav/apple-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_stylesheet_directory_uri(); ?>/img/spafav/apple-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_stylesheet_directory_uri(); ?>/img/spafav/apple-icon-180x180.png">
  <link rel="icon" type="image/png" sizes="192x192" href="<?php echo get_stylesheet_directory_uri(); ?>/img/spafav/android-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_stylesheet_directory_uri(); ?>/img/spafav/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="<?php echo get_stylesheet_directory_uri(); ?>/img/spafav/favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_stylesheet_directory_uri(); ?>/img/spafav/favicon-16x16.png">
  <link rel="manifest" href="<?php echo get_stylesheet_directory_uri(); ?>/img/spafav/manifest.json">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="<?php echo get_stylesheet_directory_uri(); ?>/img/spafav/ms-icon-144x144.png">
  <meta name="theme-color" content="#ffffff">

  <?php wp_head(); ?>

</head>

<body>

  <?php get_header(); ?>

  <main role="main" class="daycare-page dogspa-page">
    <div class="daycare-inner">
      <div class="daycare-intro">
        <div class="daycare-content">
          <div class="daycare-logo">
            <img src="<?php the_field('logotipo-natacao') ?>" alt="Natação Logo">
            <div>
              <span><?php the_field('pre-titulo-natacao') ?></span>
              <h1><?php the_field('titulo-natacao') ?></h1>
            </div>
          </div>
          <p class="daycare-paragraph"><?php the_field('descricao-natacao') ?></p>
        </div>
        <img src="<?php the_field('natacao-1') ?>" alt="Piscina Cachorro DogResort" class="hero-dogspa">
      </div>
    </div>
    </div>
  </main>

  <section class="daycare-benefits dogrelax-benefits dogspa-benefits">
    <img src="<?php the_field('natacao-2') ?>" alt="Natação Cachorro DogResort">
    <div>
      <span><?php the_field('titulo-natacao-2') ?></span>
      <ul>
        <li><?php the_field('item-1-natacao') ?></li>
        <li><?php the_field('item-2-natacao') ?></li>
      </ul>
    </div>
  </section>

  <section class="daycare-benefits dogrelax-benefits dogrelax-benefits-2 dogspa-benefits-2">
    <div>
      <span><?php the_field('titulo-natacao-3') ?></span>
      <ul class="hidrotherapy-benefits">
        <li><?php the_field('item-1-natacao-2') ?></li>
        <li><?php the_field('item-2-natacao-2') ?></li>
        <li><?php the_field('item-3-natacao-2') ?></li>
        <li><?php the_field('item-4-natacao-2') ?></li>
        <li><?php the_field('item-5-natacao-2') ?></li>
      </ul>
    </div>
    <img src="<?php the_field('natacao-3') ?>" alt="Natação Piscina DogResort">
  </section>

  <section class="daycare-procedure dogspa-procedure">
    <div class="daycare-inner daycare-procedure-inner">
      <div class="daycare-dec">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/Estética 7.webp" alt="Decorador Azul Dogspa" class="daycare-decorator">
        <span>#cuidadosdogresort</span>
      </div>
      <div class="daycare-information">
        <ul>
          <li><?php the_field('item-1-natacao-3') ?></li>
          <li><?php the_field('item-2-natacao-3') ?></li>
          <li><?php the_field('item-3-natacao-3') ?></li>
          <li><?php the_field('item-4-natacao-3') ?></li>
          <li><?php the_field('item-5-natacao-3') ?></li>
          <li><?php the_field('item-6-natacao-3') ?></li>
        </ul>
        <img src="<?php the_field('natacao-4') ?>" alt="Decorador Piscina Cachorro Dogspa">
      </div>
    </div>
  </section>

  <section class="daycare-procedure dogspa-procedure dogspa-procedure-2">
    <div class="daycare-inner daycare-procedure-inner">
      <div class="daycare-information">
        <img src="<?php the_field('natacao-5') ?>" alt="Decorador Piscina Cachorro Dogspa">
        <div>
          <span><?php the_field('titulo-natacao-4') ?></span>
          <p><?php the_field('descricao-natacao-4') ?></p>
        </div>
      </div>
    </div>
  </section>

  <?php get_footer(); ?>

  <script src="<?php echo get_stylesheet_directory_uri(); ?>/scripts/script.js"></script>

  <?php wp_footer(); ?>

</body>

</html>