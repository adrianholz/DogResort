<?php
// Template Name: DogPrevent
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>DogPrevent | DogResort</title>
  <meta name="description" content="Terapias especializadas, atendimentos médicos e cuidados com cães idosos e deficientes a partir do DogPrevent: tratamentos individualizados de acordo com a necessidade do seu cão.">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Livvic:wght@400;500;600;700&family=Noto+Sans+Tamil:wght@500;900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

  <link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_stylesheet_directory_uri(); ?>/img/preventfav/apple-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="<?php echo get_stylesheet_directory_uri(); ?>/img/preventfav/apple-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_stylesheet_directory_uri(); ?>/img/preventfav/apple-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_stylesheet_directory_uri(); ?>/img/preventfav/apple-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_stylesheet_directory_uri(); ?>/img/preventfav/apple-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_stylesheet_directory_uri(); ?>/img/preventfav/apple-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_stylesheet_directory_uri(); ?>/img/preventfav/apple-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_stylesheet_directory_uri(); ?>/img/preventfav/apple-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_stylesheet_directory_uri(); ?>/img/preventfav/apple-icon-180x180.png">
  <link rel="icon" type="image/png" sizes="192x192" href="<?php echo get_stylesheet_directory_uri(); ?>/img/preventfav/android-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_stylesheet_directory_uri(); ?>/img/preventfav/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="<?php echo get_stylesheet_directory_uri(); ?>/img/preventfav/favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_stylesheet_directory_uri(); ?>/img/preventfav/favicon-16x16.png">
  <link rel="manifest" href="<?php echo get_stylesheet_directory_uri(); ?>/img/preventfav/manifest.json">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="<?php echo get_stylesheet_directory_uri(); ?>/img/preventfav/ms-icon-144x144.png">
  <meta name="theme-color" content="#ffffff">

  <?php wp_head(); ?>

</head>

<body>

  <?php get_header(); ?>

  <main role="main" class="dogprevent-page" id="informacoes">
    <div class="dogprevent-inner">
      <div class="dogprevent-intro">
        <div class="dogprevent-logo">
          <img src="<?php the_field('logotipo-prevent') ?>" alt="DogPrevent logo">
          <h1><?php the_field('titulo-prevent') ?></h1>
        </div>
        <p><?php the_field('descricao-prevent') ?></p>
      </div>
      <div class="dogprevent-hero">
        <img src="<?php the_field('prevent-1') ?>" alt="Cachorro Idoso DogPrevent DogResort">
        <img src="<?php the_field('prevent-2') ?>" alt="Tratamento DogPrevent DogResort">
        <img src="<?php the_field('prevent-3') ?>" alt="Cachorro Deficiente DogPrevent DogResort">
      </div>
    </div>
  </main>

  <section class="dogprevent-items">
    <div class="dogprevent-items-inner">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/DogPrevent 5.webp" alt="Serviços DogPrevent" class="dogprevent-items-background">
      <div>
        <a href="#terapias"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/Prevent Icons 1.svg" alt="Serviços DogPrevent 1"></a>
        <h2><?php the_field('titulo-prevent-2') ?></h2>
      </div>
      <div>
        <a href="#nutrologia"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/Prevent Icons 2.svg" alt="Serviços DogPrevent 2"></a>
        <h2><?php the_field('titulo-prevent-3') ?></h2>
      </div>
      <div>
        <a href="#veterinario"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/Prevent Icons 3.svg" alt="Serviços DogPrevent 3"></a>
        <h2><?php the_field('titulo-prevent-4') ?></h2>
      </div>
      <div>
        <a href="#dogsenior"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/Prevent Icons 4.svg" alt="Serviços DogPrevent 4"></a>
        <h2><?php the_field('titulo-prevent-5') ?></h2>
      </div>
      <h2><?php the_field('titulo-prevent-2') ?></h2>
      <h2><?php the_field('titulo-prevent-3') ?></h2>
      <h2><?php the_field('titulo-prevent-4') ?></h2>
      <h2><?php the_field('titulo-prevent-5') ?></h2>
    </div>
  </section>

  <section class="terapia" id="terapias">
    <div class="terapia-inner">
      <div class="terapia-intro">
        <div class="terapia-logo">
          <div>
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/DogPrevent 6.webp" alt="Círculo Azul Decorador">
            <div>
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/Prevent Icons 1.svg" alt="Serviços DogPrevent 1">
            </div>
          </div>
          <h2><?php the_field('titulo-prevent-2') ?></h2>
        </div>
        <p><?php the_field('descricao-prevent-2') ?></p>
        <a href="<?php echo get_stylesheet_directory_uri(); ?>/resources/Terapias DogPrevent.pdf" target="_blank" class="button">Conheça nossas Terapias</a>
      </div>
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/Terapias.webp" alt="Terapias DogPrevent" class="terapias-image">
      <div class="terapias">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/DogPrevent 7.webp" alt="Balão Azul Terapias DogPrevent">
        <span>Conheça nossas <br>terapias</span>
        <ul>
          <li>Fisioterapia</li>
          <li>Acupuntura</li>
          <li>Nutrologia</li>
          <li>Cromoterapia</li>
          <li>Aromaterapia</li>
          <li>Ozonioterapia</li>
          <li>Hidroterapia</li>
          <li>Laserterapia</li>
          <li>Eletroterapia</li>
          <li>Reiki</li>
        </ul>
      </div>
      <div class="prevent-dec-images">
        <img src="<?php the_field('prevent-4') ?>" alt="Cachorro Sênior DogPrevent">
        <img src="<?php the_field('prevent-5') ?>" alt="Tratamento Cachorro DogResort">
        <img src="<?php the_field('prevent-6') ?>" alt="Cachorro Sênior 2">
      </div>
    </div>
    <div class="prevent-dec-images prevent-dec-images-2">
      <img src="<?php the_field('prevent-4') ?>" alt="Cachorro Sênior DogPrevent">
      <img src="<?php the_field('prevent-5') ?>" alt="Tratamento Cachorro DogResort">
      <img src="<?php the_field('prevent-6') ?>" alt="Cachorro Sênior 2">
    </div>
  </section>

  <section class="terapia nutrologia" id="nutrologia">
    <div class="terapia-inner">
      <div class="terapia-intro">
        <div class="terapia-logo">
          <div>
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/DogPrevent 6.webp" alt="Círculo Azul Decorador">
            <div>
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/Prevent Icons 2.svg" alt="Serviços DogPrevent 2">
            </div>
          </div>
          <h2><?php the_field('titulo-prevent-3') ?></h2>
        </div>
      </div>
    </div>
  </section>

  <section class="daycare-benefits dogrelax-benefits dogrelax-benefits-2 dogprevent-benefits">
    <div>
      <span><?php the_field('subtitulo-prevent-3') ?></span>
      <p><?php the_field('descricao-prevent-3') ?></p>
    </div>
    <img src="<?php the_field('prevent-7') ?>" alt="Dogrelax 2 DogResort">
  </section>

  <section class="nutrologia-care">
    <div class="nutrologia-care-inner">
      <span><?php the_field('obs-prevent-3') ?></span>
      <div class="daycare-dec">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/DogPrevent 12.webp" alt="Decorador Azul DogPrevent" class="daycare-decorator">
        <span>#cuidadosdogresort</span>
      </div>
      <div class="nutrologia-care-info">
        <p><?php the_field('cuidadosdogresort-prevent-1') ?></p>
        <div>
          <ul>
            <li><?php the_field('cuidadosdogresort-prevent-item-1') ?></li>
            <li><?php the_field('cuidadosdogresort-prevent-item-2') ?></li>
            <li><?php the_field('cuidadosdogresort-prevent-item-3') ?></li>
          </ul>
          <ul>
            <li><?php the_field('cuidadosdogresort-prevent-item-4') ?></li>
            <li><?php the_field('cuidadosdogresort-prevent-item-5') ?></li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <section class="terapia veterinario" id="veterinario">
    <div class="terapia-inner">
      <div class="terapia-intro">
        <div class="terapia-logo">
          <div>
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/DogPrevent 6.webp" alt="Círculo Azul Decorador">
            <div>
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/Prevent Icons 3.svg" alt="Serviços DogPrevent 3">
            </div>
          </div>
          <h2><?php the_field('titulo-prevent-4') ?></h2>
        </div>
      </div>
      <p><?php the_field('descricao-prevent-4') ?></p>
      <ul>
        <li><?php the_field('veterinario-item-1') ?></li>
        <li><?php the_field('veterinario-item-2') ?></li>
        <li><?php the_field('veterinario-item-3') ?></li>
      </ul>
      <div class="veterinario-images">
        <img src="<?php the_field('prevent-8') ?>" alt="Cuidado Cachorro DogPrevent">
        <img src="<?php the_field('prevent-9') ?>" alt="Veterinária Cachorro DogPrevent">
      </div>
    </div>
  </section>

  <section class="terapia veterinario dogsenior" id="dogsenior">
    <div class="terapia-inner">
      <div class="terapia-intro">
        <div class="terapia-logo">
          <div>
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/DogPrevent 6.webp" alt="Círculo Azul Decorador">
            <div>
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/Prevent Icons 4.svg" alt="Serviços DogPrevent 4">
            </div>
          </div>
          <h2><?php the_field('titulo-prevent-5') ?></h2>
        </div>
      </div>
      <div class="dogsenior-info">
        <div class="dogsenior-info-inner">
          <p><?php the_field('descricao-prevent-5') ?></p>
          <ul>
            <li><?php the_field('dogsenior-item-1') ?></li>
            <li><?php the_field('dogsenior-item-2') ?></li>
            <li><?php the_field('dogsenior-item-3') ?></li>
            <li><?php the_field('dogsenior-item-4') ?></li>
            <li><?php the_field('dogsenior-item-5') ?></li>
          </ul>
          <p><?php the_field('descricao-prevent-6') ?></p>
        </div>
        <img src="<?php the_field('prevent-10') ?>" alt="Cuidado Cachorro DogPrevent">
      </div>
    </div>
  </section>

  <?php get_footer(); ?>

  <script src="<?php echo get_stylesheet_directory_uri(); ?>/scripts/script.js"></script>

  <?php wp_footer(); ?>

</body>

</html>