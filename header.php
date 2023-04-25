<header>
    <div class="header-inner">
      <a href="/">
        <div class="header-logo">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/DogResort.webp" alt="DogResort">
          <span><strong>Dog</strong>Resort</span>
        </div>
      </a>
      <div class="header-content">
        <a href="#" class="button">Login</a>
        <button aria-label="Menu" class="menu-toggle"></button>
      </div>
    </div>
  </header>

  <div class="overlay"></div>

  <div class="off-canvas">
    <nav aria-label="primária">
      <ul>
        <li><span class="title-item menu-clickable">DogResort</span>
          <ul class="menu-showable">
            <li><a href="/sobre/">Sobre Nós</a></li>
            <li><a href="/estrutura/">Estrutura</a></li>
            <li><a href="/equipe/">Equipe</a></li>
          </ul>
        </li>
        <li><span class="title-item menu-clickable">Serviços</span>
          <ul class="menu-showable">
            <li><span class="menu-clickable">Daycare</span>
              <ul class="menu-showable nested-menu">
                <li><a href="/daycare/">Informações Gerais</a></li>
                <li><a href="regras/">Regras do Daycare</a></li>
              </ul>
            </li>
            <li><a href="/hospedagem/">Hospedagem</a></li>
            <li><a href="/banho-e-tosa/">Banho e Tosa</a></li>
            <li><a href="/natacao/">Natação</a></li>
            <li><span class="menu-clickable">DogPrevent</span>
              <ul class="menu-showable nested-menu">
                <li><a href="/dogprevent/">Informações Gerais</a></li>
                <li><a href="<?php echo get_stylesheet_directory_uri(); ?>/resources/Terapias DogPrevent.pdf" target="_blank">Terapias e Tratamentos</a></li>
              </ul>
            </li>
          </ul>
        </li>
        <li class="title-item"><a href="http://dogresort.ddns-intelbras.com.br:8100" target="_blank">DogCam</a></li>
        <li class="title-item"><a href="/blog/">Blog</a></li>
        <li class="title-item"><a href="/depoimentos/">Depoimentos</a></li>
        <li class="title-item"><a href="/fale-conosco/">Fale Conosco</a></li>
      </ul>
      <a href="#" class="button">Login</a>
    </nav>
  </div>

  <a href="https://api.whatsapp.com/send/?phone=11971654433" class="float" target="_blank"> 
    <i class="fa fa-whatsapp my-float"></i>
  </a>