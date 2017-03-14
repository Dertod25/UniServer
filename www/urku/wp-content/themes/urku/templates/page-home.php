<?php
/*
Template name: Home Page
*/
 ?>
<?php get_header(); ?>
    <section class="ae-container-fluid rk-main">
      <input type="radio" name="layout-ctrl" checked id="layout-base" class="layout-ctrl-input">
      <div class="ae-container-fluid rk-layout-ctrl-cont">
        <label for="layout-base" class="rk-layout-ctrl">
          <svg>
            <use xlink:href="<?php echo get_template_directory_uri() ?>/n-view-default"></use>
          </svg>
        </label>
      </div>
      <input type="radio" name="layout-ctrl" id="layout-grid" class="layout-ctrl-input">
      <div class="ae-container-fluid rk-layout-ctrl-cont">
        <label for="layout-grid" class="rk-layout-ctrl">
          <svg>
            <use xlink:href="<?php echo get_template_directory_uri() ?>/n-view-alt"></use>
          </svg>
        </label>
      </div>
      <div class="rk-layout-ctrl-mobile">
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
      <section class="ae-container-fluid ae-container-fluid--inner loading rk-portfolio ">
        <div class="rk-portfolio__items">
        <a href="portfolio-item.html" class="rk-item rk-item--flex item-1 rk-size-12 rk-tosize-6 rk-landscape ">
            <div class="item-meta">
              <h2>Essential Stationery</h2>
              <p>Branding</p>
            </div></a><a href="portfolio-item.html" class="rk-item rk-item--flex item-2 rk-size-6  rk-portrait ">
            <div class="item-meta">
              <h2>Pickled Tousled</h2>
              <p>Art Direction</p>
            </div></a><a href="portfolio-item.html" class="rk-item rk-item--flex item-3 rk-size-6 rk-tosize-4 rk-portrait rk-tosquare">
            <div class="item-meta">
              <h2>Waistcoat vegan</h2>
              <p>Graphic Design</p>
            </div></a>
          <div class="rk-items-cont rk-size-6 rk-tosize-8"><a href="portfolio-item.html" class="rk-item rk-item--flex item-4 rk-size-12 rk-tosize-6 rk-landscape ">
              <div class="item-meta">
                <h2>Tumblr hammock</h2>
                <p>Packaging</p>
              </div></a><a href="portfolio-item.html" class="rk-item rk-item--flex item-5 rk-size-12 rk-tosize-6 rk-landscape ">
              <div class="item-meta">
                <h2>Biodiesel etsy</h2>
                <p>Branding</p>
              </div></a>
          </div><a href="portfolio-item.html" class="rk-item rk-item--flex item-6 rk-size-6 rk-tosize-4 rk-portrait rk-tosquare">
            <div class="item-meta">
              <h2>Gentrify artisan</h2>
              <p>Graphic Design</p>
            </div></a>
          <div class="rk-items-cont rk-size-4 rk-tosize-8"><a href="portfolio-item.html" class="rk-item rk-item--flex item-7 rk-size-12 rk-tosize-6 rk-square ">
              <div class="item-meta">
                <h2>Plaid austin</h2>
                <p>Graphic Design</p>
              </div></a><a href="portfolio-item.html" class="rk-item rk-item--flex item-8 rk-size-12 rk-tosize-6 rk-square ">
              <div class="item-meta">
                <h2>Trust fund</h2>
                <p>Packaging</p>
              </div></a>
          </div><a href="portfolio-item.html" class="rk-item rk-item--flex item-9 rk-size-8 rk-tosize-3 rk-square ">
            <div class="item-meta">
              <h2>Gentrify pork</h2>
              <p>Branding</p>
            </div></a><a href="portfolio-item.html" class="rk-item rk-item--flex item-10 rk-size-6 rk-tosize-3 rk-portrait rk-tosquare">
            <div class="item-meta  rk-tosmallfont">
              <h2>Waistcoat ugh</h2>
              <p>UI/UX</p>
            </div></a>
          <div class="rk-items-cont rk-size-6 rk-tosize-6"><a href="portfolio-item.html" class="rk-item rk-item--flex item-11 rk-size-12 rk-tosize-6 rk-landscape rk-tosquare">
              <div class="item-meta">
                <h2>Deep v kogi</h2>
                <p>Graphic Design</p>
              </div></a><a href="portfolio-item.html" class="rk-item rk-item--flex item-12 rk-size-12 rk-tosize-6 rk-landscape rk-tosquare">
              <div class="item-meta">
                <h2>Venmo trust</h2>
                <p>Packaging</p>
              </div></a>
          </div><a href="portfolio-item.html" class="rk-item rk-item--flex item-13 rk-size-8 rk-tosize-3 rk-square ">
            <div class="item-meta">
              <h2>Venmo trust</h2>
              <p>Ui/UX</p>
            </div></a>
          <div class="rk-items-cont rk-size-4 rk-tosize-6"><a href="portfolio-item.html" class="rk-item rk-item--flex item-14 rk-size-12 rk-tosize-6 rk-square ">
              <div class="item-meta">
                <h2>Gentrify semiotic</h2>
                <p>Art Direction</p>
              </div></a><a href="portfolio-item.html" class="rk-item rk-item--flex item-15 rk-size-12 rk-tosize-6 rk-square ">
              <div class="item-meta">
                <h2>Migas artisan</h2>
                <p>Photography</p>
              </div></a>
          </div>
  <?php
    $portfolioArgs = array(
      'post_type'=>'ur_portfolio'
    );
      $portfolio = new WP_Query($portfolioArgs);?>

      <?php if($portfolio->have_posts()): ?>
        <div class="rk-portfolio__items">
          <?php while($portfolio->have_posts()): $portfolio->the_post() ?>

            <a href="<?php the_permalink(); ?>" class="rk-item rk-item--flex item-2 rk-size-6  rk-portrait ">
              <?php the_post_thumbnail('large'); ?>

              <div class="item-meta">
                <h2><?php the_title(); ?></h2>

                <?php $categories = get_the_terms(get_the_id(), 'ur_portfolio_category'  );
                  if(!empty($categories)):?>
                <?php endif ?>
                <p>

              </p>

              </div>

            </a>

          <?php endwhile; ?>
        </div>
      <?php endif;?>
   </div>
 </section>
</section>
<?php get_footer(); ?>
