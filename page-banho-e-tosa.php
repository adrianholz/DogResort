<?php
// Template Name: Banho e Tosa
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Banho e Tosa | DogResort</title>
  <meta name="description" content="Na DogResort, o serviço de estética animal é exclusivo para os cães do daycare, diminuindo o estresse dos cães, por já conhecerem o ambiente e a equipe.">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Livvic:wght@400;500;600;700&family=Noto+Sans+Tamil:wght@500;900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

  <link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_stylesheet_directory_uri(); ?>/img/beautyfav/apple-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="<?php echo get_stylesheet_directory_uri(); ?>/img/beautyfav/apple-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_stylesheet_directory_uri(); ?>/img/beautyfav/apple-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_stylesheet_directory_uri(); ?>/img/beautyfav/apple-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_stylesheet_directory_uri(); ?>/img/beautyfav/apple-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_stylesheet_directory_uri(); ?>/img/beautyfav/apple-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_stylesheet_directory_uri(); ?>/img/beautyfav/apple-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_stylesheet_directory_uri(); ?>/img/beautyfav/apple-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_stylesheet_directory_uri(); ?>/img/beautyfav/apple-icon-180x180.png">
  <link rel="icon" type="image/png" sizes="192x192" href="<?php echo get_stylesheet_directory_uri(); ?>/img/beautyfav/android-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_stylesheet_directory_uri(); ?>/img/beautyfav/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="<?php echo get_stylesheet_directory_uri(); ?>/img/beautyfav/favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_stylesheet_directory_uri(); ?>/img/beautyfav/favicon-16x16.png">
  <link rel="manifest" href="<?php echo get_stylesheet_directory_uri(); ?>/img/beautyfav/manifest.json">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="<?php echo get_stylesheet_directory_uri(); ?>/img/beautyfav/ms-icon-144x144.png">
  <meta name="theme-color" content="#ffffff">

  <?php wp_head(); ?>

</head>

<body>

  <?php get_header(); ?>

  <main role="main" class="dogbeauty-page">
    <div class="daycare-inner">
      <div class="daycare-intro">
        <div class="daycare-content">
          <div class="daycare-logo">
            <img src="<?php the_field('logotipo-beauty') ?>" alt="Banho e Tosa Logo">
            <div>
              <span><?php the_field('pre-titulo-beauty') ?></span>
              <h1><?php the_field('titulo-beauty') ?></h1>
            </div>
          </div>
          <p class="daycare-paragraph"><?php the_field('descricao-beauty') ?></p>
          <div class="dogbeauty-info">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/Estética 2.webp" alt="Informações Dogbeauty DogResort">
            <span>Dicas para a <br>pelagem perfeita</span>
            <ul>
              <li>Dieta saudável e balanceada garante <br>uma pelagem forte e brilhante;</li>
              <li>Banhos periódicos, com atenção aos <br>diferentes tipos de pelagem que <br>demandam tratamentos específicos;</li>
              <li>Escovação para eliminar pelos mortos e <br>desfazer possíveis emaranhados;</li>
              <li>Controle de pulgas e <br>carrapatos periodicamente.</li>
            </ul>
          </div>
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/Dogbeauty Info.webp" alt="Informações Dogbeauty Imagem DogResort" class="dogbeauty-info-balloon">
        </div>
        <img src="<?php the_field('beauty-1') ?>" alt="Hospedagem Cachorro DogResort" class="hero-dogrelax hero-dogbeauty">
      </div>
  </main>

  <section class="tosa">
    <div class="tosa-inner">
      <div class="tosa-info">
        <h2><?php the_field('titulo-beauty-2') ?></h2>
        <p><?php the_field('descricao-beauty-2') ?></p>
      </div>
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/Estética 3.webp" alt="Tosa Cachorro DogResort">
    </div>
  </section>

  <?php get_footer(); ?>

  <script src="<?php echo get_stylesheet_directory_uri(); ?>/scripts/script.js"></script>

  <?php wp_footer(); ?>

</body>

</html>