<?php
// Template Name: Home
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>DogResort | Daycare e Creche para Cachorros</title>
  <meta name="description" content="A DogResort oferece serviços que promovem a melhor experiência para seu cão, incluindo daycare, hospedagem, estética animal e natação, garantindo sempre a saúde e o bem-estar canino.">
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

  <main role="main">
    <div class="swiper">
      <div class="swiper-wrapper">
        <div class="slider swiper-slide">
          <img src="<?php the_field('imagem-slide-1-desktop') ?>" alt="Daycare (Creche para cachorros)" class="slider-main-image">
          <img src="<?php the_field('imagem-slide-1-mobile') ?>" alt="Daycare (Creche para cachorros)" class="slider-secondary-image">
          <div class="slider-content">
            <div class="slider-inner">
              <h1><?php the_field('titulo-slide-1') ?></h1>
              <p><?php the_field('descricao-slide-1') ?></p>
              <a href="/daycare/" class="button">Saiba Mais</a>
            </div>
          </div>
        </div>
        <div class="slider slide-hospedagem swiper-slide">
          <img src="<?php the_field('imagem-slide-2-desktop') ?>" alt="Hospedagem para cachorros" class="slider-main-image">
          <img src="<?php the_field('imagem-slide-2-mobile') ?>" alt="Hospedagem para cachorros" class="slider-secondary-image">
          <div class="slider-content">
            <div class="slider-inner">
              <h2><?php the_field('titulo-slide-2') ?></h2>
              <p><?php the_field('descricao-slide-2') ?></p>
              <a href="/hospedagem/" class="button">Saiba Mais</a>
            </div>
          </div>
        </div>
        <div class="slider slide-estetica swiper-slide">
          <img src="<?php the_field('imagem-slide-3-desktop') ?>" alt="Estética animal" class="slider-main-image">
          <img src="<?php the_field('imagem-slide-3-mobile') ?>" alt="Estética animal" class="slider-secondary-image">
          <div class="slider-content">
            <div class="slider-inner">
              <h2><?php the_field('titulo-slide-3') ?></h2>
              <p><?php the_field('descricao-slide-3') ?></p>
              <a href="/banho-e-tosa/" class="button">Saiba Mais</a>
            </div>
          </div>
        </div>
        <div class="slider slide-natacao swiper-slide">
          <img src="<?php the_field('imagem-slide-4-desktop') ?>" alt="Natação para cachorros" class="slider-main-image">
          <img src="<?php the_field('imagem-slide-4-mobile') ?>" alt="Natação para cachorros" class="slider-secondary-image">
          <div class="slider-content">
            <div class="slider-inner">
              <h2><?php the_field('titulo-slide-4') ?></h2>
              <p><?php the_field('descricao-slide-4') ?></p>
              <a href="/natacao/" class="button">Saiba Mais</a>
            </div>
          </div>
        </div>
        <div class="slider slide-dogprevent swiper-slide">
          <img src="<?php the_field('imagem-slide-5-desktop') ?>" alt="DogPrevent" class="slider-main-image">
          <img src="<?php the_field('imagem-slide-5-desktop') ?>" alt="DogPrevent" class="slider-secondary-image">
          <div class="slider-content">
            <div class="slider-inner">
              <!-- <div>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/DogPrevent Logo.webp" alt="DogPrevent Logo">
                <h2>Dog<span>Prevent</span></h2>
              </div> -->
              <h2><?php the_field('titulo-slide-5') ?></h2>
              <h3><?php the_field('subtitulo-slide-5') ?></h3>
              <p><?php the_field('descricao-slide-5') ?></p>
              <a href="/dogprevent/" class="button">Saiba Mais</a>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-button-prev"></div>
      <div class="swiper-button-next"></div>
      <div class="swiper-pagination"></div>
    </div>

  </main>

  <section class="services" id="services">
    <div class="services-inner">
      <div class="services-description">
        <h1><?php the_field('titulo-servicos') ?></h1>
        <p><?php the_field('descricao-servicos') ?></p>
        <p>Clique nos ícones para saber mais</p>
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/Arrow.svg" alt="Seta">
      </div>
      <div class="balloons">
        <div class="balloon">
          <a href="/estrutura/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/DogResort Balloon.svg" alt="Balão DogResort">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/Logo Dog Isolated.webp" alt="DogResort">
            <h2><strong>Dog</strong>Resort</h2>
          </a>
        </div>
        <div class="balloon">
          <a href="/daycare/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/Daycare Balloon.svg" alt="Balão Daycare (Creche para Cachorros)">
            <h2>Daycare</h2>
          </a>
        </div>
        <div class="balloon">
          <a href="/hospedagem/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/Hospedagem Balloon.svg" alt="Balão Hospedagem">
            <h2>Dog<span>Relax</span></h2>
          </a>
        </div>
        <div class="balloon">
          <a href="/banho-e-tosa/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/Estetica Balloon.svg" alt="Balão Estética">
            <h2>Estética <br>animal:</h2>
            <p>• banho e tosa </p>
          </a>
        </div>
        <div class="balloon">
          <a href="/natacao/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/Natacao Balloon.svg" alt="Balão Natação">
            <h2>Natação</h2>
          </a>
        </div>
        <div class="balloon">
          <a href="/dogprevent/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/DogPrevent Balloon.svg" alt="Balão DogPrevent">
            <h2>Dog<span>Prevent</span></h2>
            <p>• saúde e <br>bem-estar</p>
          </a>
        </div>
      </div>
    </div>
  </section>

  <section class="structure" id="structure">
    <div class="structure-inner">
      <div class="structure-content">
        <h1><?php the_field('titulo-estrutura') ?></h1>
        <span><?php the_field('subtitulo-estrutura') ?></span>
        <ul>
          <?php
          $itens = get_field('itens-estrutura');
          if (isset($itens)) { foreach ($itens as $item) { ?>
          <li><?php echo $item['item-estrutura']; ?></li>
          <?php } } ?>
        </ul>
        <a href="/estrutura/" class="button">Saiba Mais</a>
      </div>
      <img src="<?php the_field('imagem-estrutura-home') ?>" alt="Estrutura DogResort">
    </div>
  </section>

  <article class="faq" id="faq">
    <h1><?php the_field('titulo-duvidas') ?></h1>
    <div class="faq-inner">
      <dl>
        <div>
          <dt>
            <button aria-controls="pergunta01" aria-expanded="true">
              <?php the_field('duvida-1') ?>
            </button>
          </dt>
          <dd id="pergunta01">
            <?php the_field('resposta-1') ?>
            <div class="faq-buttons">
              <a href="/daycare/" class="button">Saiba mais sobre daycare</a>
              <a href="/regras/" class="button">Conheça as regras do daycare</a>
            </div>
          </dd>
        </div>
        <div>
          <dt>
            <button aria-controls="pergunta02" aria-expanded="false">
              <?php the_field('duvida-2') ?>
            </button>
          </dt>
          <dd id="pergunta02">
            <?php the_field('resposta-2') ?>
            <div class="faq-buttons">
              <a href="/hospedagem/" class="button">Saiba mais sobre Hospedagem</a>
            </div>
          </dd>
        </div>
        <div>
          <dt>
            <button aria-controls="pergunta03" aria-expanded="false">
              <?php the_field('duvida-3') ?>
            </button>
          </dt>
          <dd id="pergunta03">
            <?php the_field('resposta-3') ?>
          </dd>
        </div>
        <div>
          <dt>
            <button aria-controls="pergunta04" aria-expanded="false">
              <?php the_field('duvida-4') ?>
            </button>
          </dt>
          <dd id="pergunta04">
            <?php the_field('resposta-4') ?>
          </dd>
        </div>
        <div>
          <dt>
            <button aria-controls="pergunta05" aria-expanded="false">
              <?php the_field('duvida-5') ?>
            </button>
          </dt>
          <dd id="pergunta05">
            <?php the_field('resposta-5') ?>
          </dd>
        </div>
        <div>
          <dt>
            <button aria-controls="pergunta06" aria-expanded="false">
              <?php the_field('duvida-6') ?>
            </button>
          </dt>
          <dd id="pergunta06">
            <?php the_field('resposta-6') ?>
          </dd>
        </div>
        <div>
          <dt>
            <button aria-controls="pergunta07" aria-expanded="false">
              <?php the_field('duvida-7') ?>
            </button>
          </dt>
          <dd id="pergunta07">
            <?php the_field('resposta-7') ?>
          </dd>
        </div>
        <div>
          <dt>
            <button aria-controls="pergunta08" aria-expanded="false">
              <?php the_field('duvida-8') ?>
            </button>
          </dt>
          <dd id="pergunta08">
            <?php the_field('resposta-8') ?>
          </dd>
        </div>
        <div>
          <dt>
            <button aria-controls="pergunta09" aria-expanded="false">
              <?php the_field('duvida-9') ?>
            </button>
          </dt>
          <dd id="pergunta09">
            <?php the_field('resposta-9') ?>
          </dd>
        </div>
        <div>
          <dt>
            <button aria-controls="pergunta10" aria-expanded="false">
              <?php the_field('duvida-10') ?>
            </button>
          </dt>
          <dd id="pergunta10">
            <?php the_field('resposta-10') ?>
            <div class="faq-buttons">
              <a href="/dogprevent/" class="button">Conheça o dogprevent</a>
            </div>
          </dd>
        </div>
        <div>
          <dt>
            <button aria-controls="pergunta11" aria-expanded="false">
              <?php the_field('duvida-11') ?>
            </button>
          </dt>
          <dd id="pergunta11">
            <?php the_field('resposta-11') ?>
            <div class="faq-buttons">
              <a href="/natacao/" class="button">Saiba mais sobre natação</a>
              <a href="/dogprevent/" class="button">Conheça o dogprevent</a>
            </div>
          </dd>
        </div>
        <div>
          <dt>
            <button aria-controls="pergunta12" aria-expanded="false">
              <?php the_field('duvida-12') ?>
            </button>
          </dt>
          <dd id="pergunta12">
            <?php the_field('resposta-12') ?>
            <div class="faq-buttons">
              <a href="/dogprevent/" class="button">Conheça o dogprevent</a>
            </div>
          </dd>
        </div>
        <div>
          <dt>
            <button aria-controls="pergunta13" aria-expanded="false">
              <?php the_field('duvida-13') ?>
            </button>
          </dt>
          <dd id="pergunta13">
            <?php the_field('resposta-13') ?>
            <div class="faq-buttons">
              <a href="/banho-e-tosa/" class="button">Saiba mais sobre estética animal</a>
            </div>
          </dd>
        </div>
        <div>
          <dt>
            <button aria-controls="pergunta14" aria-expanded="false">
              <?php the_field('duvida-14') ?>
            </button>
          </dt>
          <dd id="pergunta14">
            <?php the_field('resposta-14') ?>
          </dd>
        </div>
      </dl>
    </div>
  </article>

  <?php get_footer(); ?>

  <script src="<?php echo get_stylesheet_directory_uri(); ?>/scripts/script.js"></script>
  <script src="
https://cdn.jsdelivr.net/npm/swiper@9.1.0/swiper-bundle.min.js
"></script>
  <script>
    const swiper = new Swiper('.swiper', {
      pagination: {
        el: '.swiper-pagination',
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
      grabCursor: true,
      loop: true,
      rewind: true,
      speed: 1000,
      autoplay: {
        delay: 5000,
      },
    });

  </script>

  <?php wp_footer(); ?>

</body>

</html>