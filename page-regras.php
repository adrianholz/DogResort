<?php
// Template Name: Regras
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Regras do Daycare | DogResort</title>
  <meta name="description" content="Regras do daycare (creche) da DogResort.">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Livvic:wght@400;500;600;700&family=Noto+Sans+Tamil:wght@500;900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

  <link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_stylesheet_directory_uri(); ?>/img/daycarefav/apple-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="<?php echo get_stylesheet_directory_uri(); ?>/img/daycarefav/apple-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_stylesheet_directory_uri(); ?>/img/daycarefav/apple-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_stylesheet_directory_uri(); ?>/img/daycarefav/apple-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_stylesheet_directory_uri(); ?>/img/daycarefav/apple-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_stylesheet_directory_uri(); ?>/img/daycarefav/apple-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_stylesheet_directory_uri(); ?>/img/daycarefav/apple-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_stylesheet_directory_uri(); ?>/img/daycarefav/apple-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_stylesheet_directory_uri(); ?>/img/daycarefav/apple-icon-180x180.png">
  <link rel="icon" type="image/png" sizes="192x192" href="<?php echo get_stylesheet_directory_uri(); ?>/img/daycarefav/android-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_stylesheet_directory_uri(); ?>/img/daycarefav/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="<?php echo get_stylesheet_directory_uri(); ?>/img/daycarefav/favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_stylesheet_directory_uri(); ?>/img/daycarefav/favicon-16x16.png">
  <link rel="manifest" href="<?php echo get_stylesheet_directory_uri(); ?>/img/daycarefav/manifest.json">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="<?php echo get_stylesheet_directory_uri(); ?>/img/daycarefav/ms-icon-144x144.png">
  <meta name="theme-color" content="#ffffff">

  <?php wp_head(); ?>

</head>

<body>

  <?php get_header(); ?>

  <main class="daycare-rules" id="regras">
    <div class="daycare-inner">
      <div class="daycare-logo">
        <img src="<?php the_field('logotipo-regras') ?>" alt="Daycare Logo">
        <div>
          <span><?php the_field('pre-titulo-regras') ?></span>
          <h1><?php the_field('titulo-regras') ?></h1>
        </div>
      </div>
      <div class="rule">
        <div class="rules-logo">
          <div>
            <img src="<?php the_field('regras-icone-1') ?>" alt="Ícone Regras Daycare 1">
          </div>
          <h2><?php the_field('subtitulo-regras-1') ?></h2>
        </div>
        <ul>
          <li><?php the_field('convivio-item-1') ?></li>
          <li><?php the_field('convivio-item-2') ?></li>
          <li><?php the_field('convivio-item-3') ?></li>
        </ul>
      </div>
      <div class="rule health">
        <div class="rules-logo">
          <div>
            <img src="<?php the_field('regras-icone-2') ?>" alt="Ícone Regras Daycare 2">
          </div>
          <h2><?php the_field('subtitulo-regras-2') ?></h2>
        </div>
        <ul>
          <li><?php the_field('saude-item-1') ?></li>
          <li><?php the_field('saude-item-2') ?></li>
          <li><?php the_field('saude-item-3') ?></li>
          <li><?php the_field('saude-item-4') ?></li>
          <li><?php the_field('saude-item-5') ?></li>
        </ul>
      </div>
      <div class="rule">
        <div class="rules-logo">
          <div>
            <img src="<?php the_field('regras-icone-3') ?>" alt="Ícone Regras Daycare 3">
          </div>
          <h2><?php the_field('subtitulo-regras-3') ?></h2>
        </div>
        <p><?php the_field('descricao-1-regras') ?></p>
        <span><?php the_field('obs-1-regras') ?></span>
      </div>
      <div class="rule">
        <div class="rules-logo">
          <div>
            <img src="<?php the_field('regras-icone-4') ?>" alt="Ícone Regras Daycare 4">
          </div>
          <h2><?php the_field('subtitulo-regras-4') ?></h2>
        </div>
        <span><?php the_field('span-regras-1') ?></span>
        <p><?php the_field('descricao-regras-2') ?></p>
        <span><?php the_field('span-regras-2') ?></span>
        <p><?php the_field('descricao-regras-3') ?></p>
      </div>
      <div class="rule">
        <div class="rules-logo">
          <div>
            <img src="<?php the_field('regras-icone-5') ?>" alt="Ícone Regras Daycare 5">
          </div>
          <h2><?php the_field('subtitulo-regras-5') ?></h2>
        </div>
        <p><?php the_field('descricao-regras-4') ?></p>
      </div>
    </div>
  </main>

  <section class="daycare-benefits daycare-cronogram" id="schedule">
    <h3><?php the_field('subtitulo-regras-6') ?></h3>
  </section>

  <section class="schedule">
    <div class="daycare-inner">
      <div class="schedule-item">
        <h2><?php the_field('subtitulo-regras-7') ?></h2>
        <p><?php the_field('descricao-regras-5') ?></p>
      </div>
      <div class="schedule-item">
        <h2><?php the_field('subtitulo-regras-8') ?></h2>
        <p><?php the_field('descricao-regras-6') ?></p>
      </div>
      <div class="schedule-item">
        <h2><?php the_field('subtitulo-regras-9') ?></h2>
        <p><?php the_field('descricao-regras-7') ?></p>
      </div>
      <div class="schedule-item">
        <h2><?php the_field('subtitulo-regras-10') ?></h2>
        <p><?php the_field('descricao-regras-8') ?></p>
      </div>
      <div class="schedule-item">
        <h2><?php the_field('subtitulo-regras-11') ?></h2>
        <p><?php the_field('descricao-regras-9') ?></p>
      </div>
    </div>
  </section>

  <?php get_footer(); ?>

  <script src="<?php echo get_stylesheet_directory_uri(); ?>/scripts/script.js"></script>

  <?php wp_footer(); ?>

</body>

</html>