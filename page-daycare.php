<?php
// Template Name: Daycare
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daycare | DogResort</title>
  <meta name="description" content="No daycare (creche) da DogResort, os cães passam o dia com atividades supervisionadas em um local seguro e projetado exclusivamente para eles, respeitando suas individualidades.">
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

  <main role="main" class="daycare-page" id="informacoes">
    <div class="daycare-inner">
      <div class="daycare-intro">
        <div class="daycare-content">
          <div class="daycare-logo">
            <img src="<?php the_field('logotipo-daycare') ?>" alt="Daycare Logo">
            <div>
              <span><?php the_field('pre-titulo-daycare') ?></span>
              <h1><?php the_field('titulo-daycare') ?></h1>
            </div>
          </div>
          <p class="daycare-paragraph"><?php the_field('descricao-daycare') ?></p>
          <a href="/regras/#schedule" class="button">Conheça nosso cronograma</a>
        </div>
        <div class="daycare-main-images">
          <img src="<?php the_field('daycare-1') ?>" alt="Daycare Dogpark DogResort">
          <div>
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/Daycare 2.webp" alt="Daycare Background">
            <p>
              “Acreditamos que a socialização é um importante meio de prevenir desvios comportamentais, transformando o desejo de aprender em algo leve e divertido.”
            </p>
          </div>
        </div>
      </div>
      <div class="daycare-dec-images">
        <img src="<?php the_field('daycare-2') ?>" alt="Cachorros Piscina DogResort">
        <img src="<?php the_field('daycare-3') ?>" alt="Cachorros Parque DogResort">
      </div>
    </div>
  </main>

  <section class="daycare-benefits">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/Daycare 5.webp" alt="Cachorros Creche Animais">
    <div>
      <span><?php the_field('beneficios-titulo-daycare') ?></span>
      <ul>
        <li><?php the_field('beneficios-daycare-1') ?></li>
        <li><?php the_field('beneficios-daycare-2') ?></li>
        <li><?php the_field('beneficios-daycare-3') ?></li>
      </ul>
    </div>
  </section>

  <section class="daycare-procedure">
    <div class="daycare-inner daycare-procedure-inner">
      <div class="daycare-dec">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/Daycare 6.webp" alt="Decorador Laranja Daycare" class="daycare-decorator">
        <span>#cuidadosdogresort</span>
      </div>
      <div class="daycare-information">
        <div class="daycare-text">
          <h2><?php the_field('titulo-cuidadosdogresort-1') ?></h2>
          <p><?php the_field('descricao-cuidadosdogresort-1') ?></p>
          <h2><?php the_field('titulo-cuidadosdogresort-2') ?></h2>
          <p><?php the_field('descricao-cuidadosdogresort-2') ?></p>
          <span><?php the_field('obs-cuidadosdogresort') ?></span>
          <a href="/regras/#regras" class="button">Regras do Daycare</a>
        </div>
        <div class="daycare-information-balloon">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/Daycare 7.webp" alt="Daycare Informação Balão">
          <span>Requisitos <br><strong>dog</strong>resort</span>
          <ul>
            <li>Todos os cães machos <br>devem ser castrados;</li>
            <li>As fêmeas no período do cio <br>não podem frequentar o daycare;</li>
            <li>Todas as vacinas devem estar em dia <br>(V8 ou V10, raiva, gripe e giárdia);</li>
            <li>O controle de pulgas e carrapatos <br>deve ser feito mensalmente;</li>
            <li>Realizar exames de fezes a cada 3 meses;</li>
            <li>Cães passam por análise socio-<br>comportamental, que determinam <br>sua capacidade de integração <br>à nossa matilha.</li>
          </ul>
        </div>
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/Daycare Prerequisites.webp" alt="Requisitos Daycare DogResort" class="daycare-prerequisites">
      </div>
    </div>
  </section>

  <?php get_footer(); ?>

  <script src="<?php echo get_stylesheet_directory_uri(); ?>/scripts/script.js"></script>

  <?php wp_footer(); ?>

</body>

</html>