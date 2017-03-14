<?php get_header(); ?>

<section class="ae-container-fluid ae-container-fluid--full rk-main">

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

      <div class="item-inside__meta">
        <h1 class="ae-u-bolder rk-portfolio-title "><?php the_title(); ?></h1>
      </div>

      <div class="ae-container-fluid ae-container-fluid--inner">
        <div class="ae-grid ae-grid au-xs-ptp-1">
            <div class="ae-grid__item item-lg-12">
                <?php the_content(); ?>
            </div>
        </div>
      </div>

  <?php endwhile; else : ?>
    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
  <?php endif; ?>

</section>

<?php get_footer(); ?>
