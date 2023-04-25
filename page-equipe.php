<?php
// Template Name: Equipe
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Equipe | DogResort</title>
  <meta name="description" content="A equipe de recreação da DogResort é formada por pessoas apaixonadas por animais, profissionais respeitados, esforçados e que buscam sempre fazer o melhor para os nossos amigos cães.">
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

  <main role="main" class="team">
    <div class="team-inner">
      <div class="team-content">
        <h1><?php the_field('titulo-equipe') ?></h1>
        <p><?php the_field('descricao-equipe') ?></p>
      </div>
      <?php
          $proprietarios = get_field('itens-proprietarios');
          if(isset($proprietarios)) { foreach ($proprietarios as $proprietario) { ?>
          <div class="employee">
            <img src="<?php echo $proprietario['imagem-proprietario']; ?>" alt="<?php echo $proprietario['nome-proprietario']; ?>">
            <div>
              <h3><?php echo $proprietario['nome-proprietario']; ?></h3>
              <p><?php echo $proprietario['descricao-proprietario']; ?></p>
            </div>
          </div>
      <?php } } ?>
      <h2>Equipe Administrativa</h2>
      <?php
          $administrativos = get_field('itens-administrativo');
          if(isset($administrativos)) { foreach ($administrativos as $administrativo) { ?>
          <div class="employee">
            <img src="<?php echo $administrativo['imagem-administrativo']; ?>" alt="<?php echo $administrativo['nome-administrativo']; ?>">
            <div>
              <h4><?php echo $administrativo['nome-administrativo']; ?></h4>
              <span><?php echo $administrativo['funcao-administrativo']; ?></span>
              <p><?php echo $administrativo['descricao-administrativo']; ?></p>
            </div>
          </div>
      <?php } } ?>
      <h2>Equipe de Recreação</h2>
      <?php
          $recreacoes = get_field('itens-recreacao');
          if(isset($recreacoes)) { foreach ($recreacoes as $recreacao) { ?>
          <div class="employee">
            <img src="<?php echo $recreacao['imagem-recreacao']; ?>" alt="<?php echo $recreacao['nome-recreacao']; ?>">
            <div>
              <h4><?php echo $recreacao['nome-recreacao']; ?></h4>
              <span><?php echo $recreacao['funcao-recreacao']; ?></span>
              <p><?php echo $recreacao['descricao-recreacao']; ?></p>
            </div>
          </div>
      <?php } } ?>
      <h2>Terceirizados</h2>
      <?php
          $terceirizado = get_field('itens-terceirizados');
          if(isset($terceirizado)) { foreach ($terceirizado as $terceirizados) { ?>
          <div class="employee">
            <img src="<?php echo $terceirizados['imagem-terceirizados']; ?>" alt="<?php echo $terceirizados['nome-terceirizados']; ?>">
            <div>
              <h4><?php echo $terceirizados['nome-terceirizados']; ?></h4>
              <span><?php echo $terceirizados['funcao-terceirizados']; ?></span>
              <p><?php echo $terceirizados['descricao-terceirizados']; ?></p>
            </div>
          </div>
      <?php } } ?>
      <h2>Parcerias</h2>
      <?php
          $parceria = get_field('itens-parcerias');
          if(isset($parceria)) { foreach ($parceria as $parcerias) { ?>
          <div class="employee">
            <img src="<?php echo $parcerias['imagem-parcerias']; ?>" alt="<?php echo $parcerias['nome-parcerias']; ?>">
            <div>
              <h4><?php echo $parcerias['nome-parcerias']; ?></h4>
              <p><?php echo $parcerias['descricao-parcerias']; ?></p>
            </div>
          </div>
      <?php } } ?>
    </div>
  </main>

  <?php get_footer(); ?>

  <script src="<?php echo get_stylesheet_directory_uri(); ?>/scripts/script.js"></script>

  <?php wp_footer(); ?>

</body>

</html>