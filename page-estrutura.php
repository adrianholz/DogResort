<?php
// Template Name: Estrutura
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Estrutura | DogResort</title>
  <meta name="description" content="Nossa estrutura é considerada um diferencial na área de daycare, projetada para se adequar às necessidades dos cães.">
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

  <main role="main" class="facilities">
    <div class="facilities-inner">
      <div class="facilities-content">
        <div>
          <h1><?php the_field('titulo-estrutura') ?></h1>
          <p><?php the_field('descricao-estrutura') ?></p>
          <p class="facilities-list-title"><?php the_field('subtitulo-estrutura') ?></p>
          <ul>
            <li><?php the_field('intro-item-1-estrutura') ?></li>
            <li><?php the_field('intro-item-2-estrutura') ?></li>
            <li><?php the_field('intro-item-3-estrutura') ?></li>
            <li><?php the_field('intro-item-4-estrutura') ?></li>
            <li><?php the_field('intro-item-5-estrutura') ?></li>
            <li><?php the_field('intro-item-6-estrutura') ?></li>
            <li><?php the_field('intro-item-7-estrutura') ?></li>
            <li><?php the_field('intro-item-8-estrutura') ?></li>
            <li><?php the_field('intro-item-9-estrutura') ?></li>
          </ul>
        </div>
        <img src="<?php the_field('estrutura-1') ?>" alt="Daycare Park DogResort" class="facilities-content-image">
      </div>
      <div class="facilities-images">
        <img src="<?php the_field('estrutura-1') ?>" alt="Daycare Park DogResort" class="facilities-image-responsive">
        <img src="<?php the_field('estrutura-2') ?>" alt="Sala Banho DogResort" class="structure-2">
        <img src="<?php the_field('estrutura-3') ?>" alt="Piscina DogResort" class="structure-3">
        <img src="<?php the_field('estrutura-4') ?>" alt="Sala Descanso DogResort" class="structure-4">
        <img src="<?php the_field('estrutura-5') ?>" alt="Cães Piscina DogResort" class="structure-5">
      </div>
    </div>
  </main>

  <section class="facility">
    <div>
      <div class="facility-inner facility-1">
        <div>
          <div class="facility-logo">
            <img src="<?php the_field('logotipo-estrutura-1') ?>" alt="Dogpark Logo">
            <h2><?php the_field('titulo-1-estrutura-1') ?></h2>
          </div>
          <p><?php the_field('descricao-1-estrutura-1') ?></p>
        </div>
        <img src="<?php the_field('imagem-1-estrutura-1') ?>" alt="Estrutura Dogpark DogResort" class="facility-image-1 dogpark-1">
      </div>
      <div class="facility-outer">
        <div>
          <img src="<?php the_field('imagem-2-estrutura-1') ?>" alt="Estrutura Externa DogPark DogResort" class="facility-image-2 dogpark-2">
          <div>
            <h3><?php the_field('titulo-2-estrutura-1') ?></h3>
            <ul>
              <li><?php the_field('item-1-estrutura-1') ?></li>
              <li><?php the_field('item-2-estrutura-1') ?></li>
              <li><?php the_field('item-3-estrutura-1') ?></li>
              <li><?php the_field('item-4-estrutura-1') ?></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="facility-inner facility-2">
        <p class="dogpark-special-p"><?php the_field('descricao-2-estrutura-1') ?></p>
        <img src="<?php the_field('imagem-3-estrutura-1') ?>" alt="Brinquedo Creche Cachorros DogResort" class="facility-image-1 dogpark-3">
      </div>
    </div>
  </section>

  <section class="facility dogfun">
    <div>
      <div class="facility-inner facility-1">
        <div>
          <div class="facility-logo">
            <img src="<?php the_field('logotipo-estrutura-2') ?>" alt="Dogfun Logo">
            <h2><?php the_field('titulo-1-estrutura-2') ?></h2>
          </div>
          <p><?php the_field('descricao-1-estrutura-2') ?></p>
        </div>
        <img src="<?php the_field('imagem-1-estrutura-2') ?>" alt="Estrutura Dogfun DogResort" class="facility-image-1 dogfun-1">
      </div>
      <div class="facility-outer">
        <div>
          <img src="<?php the_field('imagem-2-estrutura-2') ?>" alt="Estrutura Externa Dogfun DogResort" class="facility-image-2 dogfun-2">
          <div>
            <h3><?php the_field('titulo-2-estrutura-2') ?></h3>
            <p><?php the_field('descricao-2-estrutura-2') ?></p>
          </div>
        </div>
      </div>
      <div class="facility-inner facility-2">
        <div>
          <p>Sombra e água fresca, o que mais nossos cães poderiam querer?</p>
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/Dogfun.webp" alt="Decorador Azul">
        </div>
        <img src="<?php the_field('imagem-3-estrutura-2') ?>" alt="Cachorros Dogfun DogResort" class="facility-image-1 dogfun-3">
      </div>
    </div>
  </section>

  <section class="facility dogspa">
    <div>
      <div class="facility-inner facility-1">
        <div>
          <div class="facility-logo">
            <img src="<?php the_field('logotipo-estrutura-3') ?>" alt="Dogspa Logo">
            <h2><?php the_field('titulo-1-estrutura-3') ?></h2>
          </div>
          <p><?php the_field('descricao-1-estrutura-3') ?></p>
        </div>
        <img src="<?php the_field('imagem-1-estrutura-3') ?>" alt="Estrutura Dogspa DogResort" class="facility-image-1 dogspa-1">
      </div>
      <div class="facility-outer">
        <div>
          <img src="<?php the_field('imagem-2-estrutura-3') ?>" alt="Banho Cachorros DogResort" class="facility-image-2 dogspa-2">
          <div>
            <h3><?php the_field('titulo-2-estrutura-3') ?></h3>
            <p><?php the_field('descricao-2-estrutura-3') ?></p>
          </div>
        </div>
      </div>
      <div class="facility-inner facility-2">
        <p><?php the_field('descricao-3-estrutura-3') ?></p>
        <img src="<?php the_field('imagem-3-estrutura-3') ?>" alt="Banho Cachorro" class="facility-image-1 dogspa-3">
      </div>
    </div>
  </section>

  <section class="facility dogbeauty">
    <div>
      <div class="facility-inner facility-1">
        <div>
          <div class="facility-logo">
            <img src="<?php the_field('logotipo-estrutura-4') ?>" alt="Dogpark Logo">
            <h2><?php the_field('titulo-1-estrutura-4') ?></h2>
          </div>
          <p><?php the_field('descricao-1-estrutura-4') ?></p>
        </div>
        <img src="<?php the_field('imagem-1-estrutura-4') ?>" alt="Banho Cachorro DogResort" class="facility-image-1 dogbeauty-1">
      </div>
      <div class="facility-outer">
        <div>
          <img src="<?php the_field('imagem-2-estrutura-4') ?>" alt="Tosa Cães DogResort" class="facility-image-2 dogbeauty-2">
          <div>
            <h3><?php the_field('titulo-2-estrutura-4') ?></h3>
            <p><?php the_field('descricao-2-estrutura-4') ?></p>
          </div>
        </div>
      </div>
      <div class="facility-inner facility-2">
        <p><?php the_field('descricao-3-estrutura-4') ?></p>
        <img src="<?php the_field('imagem-3-estrutura-4') ?>" alt="Dogbeauty DogResort" class="facility-image-1 dogbeauty-3">
      </div>
    </div>
  </section>

  <section class="facility dogrelax">
    <div>
      <div class="facility-inner facility-1">
        <div>
          <div class="facility-logo">
            <img src="<?php the_field('logotipo-estrutura-5') ?>" alt="Dogrelax Logo">
            <h2><?php the_field('titulo-1-estrutura-5') ?></h2>
          </div>
          <p><?php the_field('descricao-1-estrutura-5') ?></p>
        </div>
        <img src="<?php the_field('imagem-1-estrutura-5') ?>" alt="Estrutura Dogpark DogResort" class="facility-image-1 dogrelax-1">
      </div>
      <div class="facility-outer">
        <div>
          <img src="<?php the_field('imagem-2-estrutura-5') ?>" alt="Estrutura Externa DogPark DogResort" class="facility-image-2 dogrelax-2">
          <div>
            <h3><?php the_field('titulo-2-estrutura-5') ?></h3>
            <p><?php the_field('descricao-2-estrutura-5') ?></p>
          </div>
        </div>
      </div>
      <div class="facility-inner facility-2">
        <p><?php the_field('descricao-3-estrutura-5') ?></p>
        <img src="<?php the_field('imagem-3-estrutura-5') ?>" alt="Brinquedo Creche Cachorros DogResort" class="facility-image-1 dogrelax-3">
      </div>
    </div>
  </section>


  <?php get_footer(); ?>

  <script src="<?php echo get_stylesheet_directory_uri(); ?>/scripts/script.js"></script>

  <?php wp_footer(); ?>

</body>

</html>