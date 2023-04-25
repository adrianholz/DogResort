<?php
// Template Name: Sobre
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sobre Nós | DogResort</title>
  <meta name="description" content="A DogResort é um centro completo de bem-estar, equilíbrio e comportamento, que proporciona qualidade de vida para os cães. Nossa proposta visa estreitar ainda mais a relação entre os cães e seus donos.">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Livvic:wght@400;500;600;700&family=Noto+Sans+Tamil:wght@500;900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

  <link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_stylesheet_directory_uri(); ?>/img/indexfav/apple-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="<?php echo get_stylesheet_directory_uri(); ?>/img/indexfav/apple-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_stylesheet_directory_uri(); ?>/img/indexfav/apple-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_stylesheet_directory_uri(); ?>/img/indexfav/apple-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_stylesheet_directory_uri(); ?>/img/indexfav/apple-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_stylesheet_directory_uri(); ?>/img/indexfav/apple-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_stylesheet_directory_uri(); ?>/img/indexfav/apple-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_stylesheet_directory_uri(); ?>/img/indexfav/apple-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_stylesheet_directory_uri(); ?>/img/indexfav/apple-icon-180x180.png">
  <link rel="icon" type="image/png" sizes="192x192" href="<?php echo get_stylesheet_directory_uri(); ?>/img/indexfav/android-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_stylesheet_directory_uri(); ?>/img/indexfav/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="<?php echo get_stylesheet_directory_uri(); ?>/img/indexfav/favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_stylesheet_directory_uri(); ?>/img/indexfav/favicon-16x16.png">
  <link rel="manifest" href="<?php echo get_stylesheet_directory_uri(); ?>/img/indexfav/manifest.json">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="<?php echo get_stylesheet_directory_uri(); ?>/img/indexfav/ms-icon-144x144.png">
  <meta name="theme-color" content="#ffffff">

  <?php wp_head(); ?>

</head>

<body>

  <?php get_header(); ?>

  <main role="main" class="about">
    <div class="about-inner">
      <div class="about-content">
        <div>
          <h1><?php the_field('titulo-sobre') ?></h1>
          <p><?php the_field('descricao-sobre') ?></p>
        </div>
        <img src="<?php the_field('sobre-1') ?>" alt="Piscina Cachorros DogResort">
      </div>
      <div class="about-services">
        <h2><?php the_field('subtitulo-sobre-1') ?></h2>
        <div class="about-services-grid">
          <div>
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/Sobre Nós 2.webp" alt="Forma Abstrata Rosa">
            <ul>
              <li>Daycare</li>
              <li>Hospedagem</li>
              <li>Natação</li>
              <li>Banho e Tosa</li>
              <li>Saúde Canina (<strong>dog</strong>prevent)</li>
              <li>Palestras, cursos e <br>workshops na área pet</li>
            </ul>
          </div>
          <img src="<?php the_field('sobre-2') ?>" alt="Daycare DogResort" class="about-daycare">
        </div>
      </div>
      <div class="about-description">
        <div class="about-heading">
          <img src="<?php the_field('sobre-logo-1') ?>" alt="Ícone Dogwellness">
          <h2><?php the_field('subtitulo-sobre-2') ?></h2>
        </div>
        <p><?php the_field('descricao-sobre-2') ?></p>
      </div>
      <div class="about-description">
        <div class="about-heading">
          <img src="<?php the_field('sobre-logo-2') ?>" alt="Ícone Missão DogResort">
          <h2><?php the_field('subtitulo-sobre-3') ?></h2>
        </div>
        <p><?php the_field('descricao-sobre-3') ?></p>
      </div>
      <div class="about-description">
        <div class="about-heading">
          <img src="<?php the_field('sobre-logo-3') ?>" alt="Ícone Visão DogResort">
          <h2><?php the_field('subtitulo-sobre-4') ?></h2>
        </div>
        <ul>
          <li><?php the_field('descricao-item-1') ?></li>
          <li><?php the_field('descricao-item-2') ?></li>
        </ul>
      </div>
      <div class="about-description">
        <div class="about-heading">
          <img src="<?php the_field('sobre-logo-4') ?>" alt="Ícone Valores DogResort">
          <h2><?php the_field('subtitulo-sobre-5') ?></h2>
        </div>
        <ul>
          <li><?php the_field('descricao-item-3') ?></li>
          <li><?php the_field('descricao-item-4') ?></li>
          <li><?php the_field('descricao-item-5') ?></li>
          <li><?php the_field('descricao-item-6') ?></li>
          <li><?php the_field('descricao-item-7') ?></li>
          <li><?php the_field('descricao-item-8') ?></li>
        </ul>
      </div>
    </div>
  </main>

  <?php get_footer(); ?>

  <script src="<?php echo get_stylesheet_directory_uri(); ?>/scripts/script.js"></script>

  <?php wp_footer(); ?>

</body>

</html>