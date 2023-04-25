<?php
// Template Name: Fale Conosco
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Fale Conosco | DogResort</title>
  <meta name="description" content="Venha nos conhecer! Na DogResort garantimos que seu melhor amigo terá uma rotina mais saudável e prazerosa.">
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

  <main role="main" class="contact-page">
    <div class="contact-page-inner">
      <div class="contact-info">
        <h1><?php the_field('titulo-contato') ?></h1>
        <address><?php the_field('endereco') ?></address>
        <div class="numbers">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/WhatsApp.svg" alt="WhatsApp">
          <a href="https://api.whatsapp.com/send/?phone=<?php the_field('numero-whatsapp') ?>" target="_blank"><?php the_field('numero-whatsapp-pretty') ?></a>
        </div>
        <div class="numbers">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/Phone.svg" alt="Telefone">
          <a href="tel:<?php the_field('numero-telefone') ?>"><?php the_field('numero-telefone-pretty') ?></a>
        </div>
        <a href="mailto:<?php the_field('email') ?>"><?php the_field('email') ?></a>
        <ul class="social">
          <li><a href="<?php the_field('facebook') ?>" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/Facebook.svg" alt="Ícone Facebook"></a></li>
          <li><a href="<?php the_field('instagram') ?>" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/Instagram.svg" alt="Ícone Instagram"></a></li>
          <li><a href="<?php the_field('tiktok') ?>" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/Tiktok.svg" alt="Ícone Tiktok"></a></li>
        </ul>
      </div>
      <iframe width="100%" height="100%" src="<?php the_field('maps') ?>" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
    </div>
  </main>

  <?php get_footer(); ?>

  <script src="<?php echo get_stylesheet_directory_uri(); ?>/scripts/script.js"></script>

  <?php wp_footer(); ?>

</body>

</html>