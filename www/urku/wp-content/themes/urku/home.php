<?php get_header(); ?>

    <section class="ae-container-fluid rk-main">
      <input type="radio" name="layout-ctrl" checked id="layout-base" class="layout-ctrl-input">
      <div class="ae-container-fluid rk-layout-ctrl-cont">
        <label for="layout-base" class="rk-layout-ctrl">
          <svg>
            <use xlink:href="#icon-view-full"></use>
          </svg>
        </label>
      </div>

      <input type="radio" name="layout-ctrl" id="layout-grid" class="layout-ctrl-input">

          <div class="ae-container-fluid rk-layout-ctrl-cont">
            <label for="layout-grid" class="rk-layout-ctrl">
              <svg>
                <use xlink:href="#icon-view-alt"></use>
              </svg>
            </label>
          </div>

          <div class="rk-layout-ctrl-mobile  layout-blog">
            <svg viewBox="0 0 9 9" class="layout-mob-1">
              <rect width="100%" height="100%" fill="currentColor"></rect>
            </svg>
            <svg viewBox="0 0 9 9" class="layout-mob-2">
              <rect width="100%" height="100%" fill="currentColor"></rect>
            </svg>
            <svg viewBox="0 0 9 9" class="layout-mob-3">
              <rect width="100%" height="100%" fill="currentColor"></rect>
            </svg>
            <svg viewBox="0 0 9 9" class="layout-mob-4">
              <rect width="100%" height="100%" fill="currentColor"></rect>
            </svg>
          </div>

          <section class="ae-container-fluid ae-container-fluid--inner rk-blog">
            <div class="rk-blog__items">
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                    <?php get_template_part('templates/content') ?>

                <?php endwhile; else : ?>
                <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
                <?php endif; ?>
            </div>
          </section>

        <div class="ae-container-fluid au-pb-4 group-buttons">
            <a href="#0" class="arrow-button arrow-button--reverse arrow-button--center">Older Posts
                <div class="arrow-cont arrow-cont-rev">
                    <svg>
                        <use xlink:href="#arrow"></use>
                    </svg>
                </div>
            </a>
        </div>
    </section>
<?php get_footer(); ?>
