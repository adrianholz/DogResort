<section class="contact" id="contact">
    <div class="contact-inner">
      <h1>Entre em contato ou agende uma visita!</h1>
      <div class="contact-content">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/Calendar.svg" alt="Calendário">
        <p>Venha nos conhecer! <br>Garantimos que seu melhor amigo terá uma rotina mais saudável e prazerosa. <br>Entre em contato pelo telefone <a href="tel:1130516898">(11) 3051-6898</a>. <br>Ou envie uma mensagem através do formulário abaixo.</p>
      </div>
    </div>
  </section>

  <section aria-label="Formulário" class="contact-form" id="contact-form">
    <div class="form-inner">
      <form class="form" action="">
        <div>
          <input type="text" id="nome" name="nome" placeholder="Nome completo">
        </div>
        <div>
          <input type="text" id="telefone" name="telefone" placeholder="Telefone">
        </div>
        <div>
          <input type="email" id="email" name="email" placeholder="E-mail" required="">
        </div>
        <div>
          <textarea rows="5" id="mensagem" name="mensagem" placeholder="Dúvidas ou comentários"></textarea>
        </div>
        <button class="button">Enviar</button>
      </form>
    </div>
  </section>

  <footer>
    <div class="footer-inner">
      <a href="/">
        <div class="footer-logo">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/DogResort.webp" alt="DogResort">
          <span><strong>Dog</strong>Resort</span>
        </div>
      </a>
      <p class="footer-content">A <strong>dog</strong>resort é um centro completo de bem-estar, diversão, saúde e equilíbrio, que investe na qualidade de vida dos cães. Tem o objetivo de implementar um novo conceito de excelência no universo canino, reunindo serviços especializados e profissionais capacitados e apaixonados pelo que fazem.</p>
      <ul class="social">
        <li><a href="https://www.facebook.com/DogResort/?locale=pt_BR" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/Facebook.svg" alt="Ícone Facebook"></a></li>
        <li><a href="https://www.instagram.com/dogresort/" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/Instagram.svg" alt="Ícone Instagram"></a></li>
        <li><a href="https://www.tiktok.com/@dogresort" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/Tiktok.svg" alt="Ícone Tiktok"></a></li>
      </ul>
      <div class="copy">
        <p>Copyright © <?php echo date("Y"); ?> DogResort</p>
        <p>Todos os direitos reservados.</p>
        <p>Desenvolvido por <a href="https://adrianholzschuh.com" target="_blank" aria-label="Desenvolvedor do site Adrian Holzschuh">Adrian Holzschuh</p>
      </div>
    </div>
  </footer>