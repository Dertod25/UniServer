    <footer class="ae-container-fluid rk-footer ">
      <div class="ae-grid ae-grid--collapse">
        <div class="ae-grid__item item-lg-4 au-xs-ta-center au-lg-ta-left">
          <ul class="rk-menu rk-footer-menu">
            <li class="rk-menu__item"><a href="about.html" class="rk-menu__link">About</a>
            </li>
            <li class="rk-menu__item"><a href="documentation.html" class="rk-menu__link">Docs</a>
            </li>
            <li class="rk-menu__item"><a href="contact.html" class="rk-menu__link">Contact</a>
            </li>
          </ul>

          <?php dynamic_sidebar( 'copyright' ); ?>

        </div>
        <div class="ae-grid__item item-lg-4 au-xs-ta-center"><a href="#0" class="rk-social-btn ">
            <svg>
              <use xlink:href="<?php echo get_template_directory_uri() ?>n-facebook"></use>
            </svg></a><a href="#0" class="rk-social-btn ">
            <svg>
              <use xlink:href="<?php echo get_template_directory_uri() ?>n-twitter"></use>
            </svg></a><a href="#0" class="rk-social-btn ">
            <svg>
              <use xlink:href="<?php echo get_template_directory_uri() ?>n-pinterest"></use>
            </svg></a><a href="#0" class="rk-social-btn ">
            <svg>
              <use xlink:href="<?php echo get_template_directory_uri() ?>n-tumblr"></use>
            </svg></a></div>
        <div class="ae-grid__item item-lg-4 au-xs-ta-center au-lg-ta-right">
          <p class="rk-footer__text rk-footer__contact "> <span class="ae-u-bold">Email: </span><span class="ae-u-bolder"> <a href="#0" class="rk-dark-color ">contact@urkuportfolio.com </a></span></p>
          <p class="rk-footer__text rk-footer__by">Theme by <a href="http://pixeden.com" class="ae-u-bolder">Pixeden.</a></p>
        </div>
      </div>
    </footer>
    <?php wp_footer(); ?>
    <script>svg4everybody();</script>
  </body>
</html>
