<?php get_header() ?>
    <?php if ( have_posts() ) :
        while ( have_posts() ) : the_post(); ?>
            <section class="ae-container-fluid ae-container-fluid--full">
              <header class="rk-portfolio-cover  post-inside-1">
                <div class="item-inside__meta">
                  <h1 class="ae-u-bolder rk-portfolio-title "><?php the_title(); ?></h1>
                  <p class="ae-theta rk-portfolio-category ">by <span class="ae-u-bolder"><?php echo get_the_author(); ?></span></p>
                </div>
              </header>
              <div class="ae-container-fluid">

                <div class="ae-grid ae-grid--collapse rk-portfolio-info ">
                  <div class="ae-grid__item item-lg-8 item-sm--center au-xs-ta-center au-lg-ta-left">
                    <h2 class="rk-portfolio-inner-title ">Fall Collection photo shoot</h2>
                  </div>
                  <div class="ae-grid__item item-lg-4 au-xs-ta-center au-lg-ta-right rk-portfolio-details">
                    <p class="rk-portfolio-inner-client "><span class="ae-lambda">Client: </span><span class="ae-u-bolder">Agency Design Studio</span></p>
                    <p class="au-underline rk-portfolio-inner-website "><a href="#0" class="ae-kappa">www.agencydesign.com</a></p>
                    <p class="ae-kappa ae-u-bold rk-portfolio-inner-date "><?php echo get_the_date('F, d y') ?></p>
                  </div>
                </div>
              </div>

              <div class="ae-container-fluid ae-container-fluid--inner rk-portfolio--inner">

                <?php the_content(); ?>
                <div class="ae-grid ae-grid--collapse au-xs-ptp-1">
                  <div class="ae-grid__item item-lg-12 au-xs-ta-center">
                    <p class="ae-theta">Written by <span class="ae-u-bolder"><?php echo get_the_author() ?></span></p>
                    <p class="ae-theta">in <span class="ae-u-bolder"><?php the_category(', ' ); ?></span></p>
                  </div>
                </div>
                <div class="ae-grid ae-grid--collapse au-xs-ptp-1">
                  <div class="ae-grid__item item-lg-12"></div>
                </div>
              </div>
            </section>
        <?php endwhile; ?>
    <?php endif; ?>
<?php get_footer() ?>
