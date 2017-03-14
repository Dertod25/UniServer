<?php
/*
Template name: About Page
*/
 ?>
<?php get_header(); ?>
<div class="ae-container-fluid ae-container-fluid--inner rk-main">
    <?php
    $teamArgs = array(
        'post_type'=>'ur_team_member',
        'posts_per_page'=> 3
    );

    $team = new WP_Query($teamArgs);?>

    <?php if($team->have_posts()): ?>
        <div class="ae-grid au-xs-ta-center au-mb-4">

            <?php while($team->have_posts()): $team->the_post() ?>

                <div class="ae-grid__item item-lg-4 ae-kappa au-mb-3">

                    <?php the_post_thumbnail( 'team-photo', array('class' => "au-mb-3" ))?>
                    <h5 class="ae-u-bolder au-mt-2"><?php the_title() ?></h5>

                    <?php if(get_field('position')): ?>
                        <p class="ae-u-bolder au-mb-3"> <?php the_field('position'); ?></p>
                    <?php endif; ?>
                    <div class="au-lg-ta-left au-mb-3 au-pl-4 au-pr-4">
                        <?php the_content(); ?>
                    </div>

                    <?php if(get_field('twiter_username')): ?>
                        <a href="http://twitter.com/<?php the_field('twiter_username'); ?>" class="ae-u-bolder au-underline" target="_blank">
                          @<?php the_field('twiter_username'); ?>
                        </a>
                    <?php endif; ?>

                </div>

            <?php endwhile; ?>
        </div>
    <?php endif;?>
    <?php wp_reset_postdata(); ?>

    <?php if(have_posts()):
      while (have_posts()): the_post();  ?>
        <div class="ae-grid au-pt-2">
          <div class="ae-grid__item item-lg-8 item-lg--offset-2">
            <h4 class="ae-u-bolder"><?php the_title() ?></h4>
            <?php the_content(); ?>
          </div>
        </div>

        <p class="au-flex au-pt-4 group-buttons">
            <a href="<?php the_field(link_to_portfolio_page); ?>" class="au-mt-4 arrow-button arrow-button--right arrow-button--out">View Our Portfolio
                <span class="arrow-cont">
                    <svg>
                      <use xlink:href="<?php echo get_template_directory_uri();?>/assets/img/symbols.svg#arrow"></use>
                    </svg>
                </span>
            </a>
        </p>

      <?php endwhile; ?>
    <?php endif ?>
    <?php wp_reset_postdata(); ?>

    <?php if (have_rows('info_box')) : ?>
        <div class="ae-grid ae-grid--alt au-xs-ptp-1">
            <?php while (have_rows('info_box')) : the_row(); ?>

            <div class="ae-grid__item--alt item-lg-4">
                <?php
                $isLink = get_sub_field('info_link'); ?>
                <?php if($isLink): ?>
                <a class="ur-info-box" href="<?php echo $isLink ?>"> <?php echo $isLink ?>
                <?php else : ?>
                    <div class="ur-info-box">
                <?php endif; ?>
                    <?php //vars
                        $infoImage = get_sub_field('info_image');
                    ?>
                    <img class="ur-info-box__image" src="<?php echo $infoImage['sizes']['team-photo']?>" alt="<?php the_sub_field('info_title'); ?>">

                    <div class="ur-info-box__title-wrap">
                        <h6 class="ae-u-boldest ur-info-box__title"><?php the_sub_field('info_title'); ?></h6>
                    </div>

                    <div class="ur-info-box__content-wrap">
                        <?php the_sub_field('info_content'); ?>
                    </div>
                <?php if($isLink): ?>
                    </a>
                <?php else : ?>
                    </div>
                <?php endif; ?>

            </div>

            <?php endwhile; ?>
        </div>
    <?php endif; ?>



</div>

<?php get_footer(); ?>
