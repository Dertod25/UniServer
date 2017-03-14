<?php get_header() ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

  <section class="ae-container-fluid ae-container-fluid--full">
    <header class="rk-portfolio-cover  item-inside-1">
      <div class="item-inside__meta">
        <h1 class="ae-u-bolder rk-portfolio-title "><?php the_title() ?></h1>
        <p class="ae-theta rk-portfolio-category ">
          <?php the_terms(get_the_id(), 'ur_portfolio_category', '', ' | ') ?>
        </p>
      </div>
    </header>
    <div class="ae-container-fluid">
      <div class="ae-grid ae-grid--collapse rk-portfolio-info ">
        <div class="ae-grid__item item-lg-8 item-sm--center au-xs-ta-center au-lg-ta-left">

        <?php if(get_field('cpt_portfolio_subtitle')): ?>
          	<h2 class="rk-portfolio-inner-title "><?php the_field('cpt_portfolio_subtitle'); ?></h2>
        <?php endif ?>

        </div>
        <div class="ae-grid__item item-lg-4 au-xs-ta-center au-lg-ta-right rk-portfolio-details">

        <?php if(get_field('cpt_portfolio_client')): ?>
          <p class="rk-portfolio-inner-client "><span class="ae-lambda">Client: </span><span class="ae-u-bolder">
          <?php the_field('cpt_portfolio_client'); ?></span></p>
        <?php endif ?>

		<?php //var
		 $url = get_field('cpt_portfolio_link_to_site');
		 $deleteUrl = array("https://", "http://");

	    if(get_field('cpt_portfolio_link_to_site')): ?>
		    <p class="au-underline rk-portfolio-inner-website ">
		        <a href="<?php the_field('cpt_portfolio_link_to_site'); ?>" class="ae-kappa"><?php echo str_replace($deleteUrl, '', $url); ?>
	        	</a>
	        </p>
	    <?php endif ?>

        <p class="ae-kappa ae-u-bold rk-portfolio-inner-date "><?php the_field('cpt_portfolio_date'); ?></p>

        </div>
      </div>
    </div>
    <div class="ae-container-fluid ae-container-fluid--inner rk-portfolio--inner">
      <?php the_content(); ?>
    </div>

    <div class="ae-container-fluid au-pt-4 au-pb-4">
      <div class="group-buttons"><a href="#0" class="au-mt-2 arrow-button arrow-button--right">Next Project<span class="arrow-cont">
            <svg>
              <use xlink:href="assets/img/symbols.svg#arrow"></use>
            </svg></span></a></div>
    </div>
  </section>

<?php endwhile; ?>
<?php endif; ?>

<?php get_footer() ?>
