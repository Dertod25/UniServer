<div class="rk-blog__item">

    <div class="post-img rk-landscape-alt rk-tosquare">
        <?php the_post_thumbnail('post-thumb'); ?>
        <div class="item-meta">
          <p>
              <a href="<?php the_permalink() ?>" class="arrow-button">Read More
                <span class="arrow-cont">
                    <svg>
                        <use xlink:href="assets/img/symbols.svg#arrow"></use>
                    </svg>
                </span>
              </a>
          </p>
      </div>
    </div>

    <div class="blog-info">
        <h2 class="blog-info__title">
            <a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
        </h2>
        <h5 class="blog-info__author">By
            <a href="<?php the_permalink() ?>" class="ae-u-bolder"><?php echo get_the_author(); ?></a>
        </h5>

        <!-- BEGIN blog-info__excerpt  -->
        <div class="blog-info__excerpt">
            <?php the_excerpt(); ?>
        </div>
        <!-- END blog-info__excerpt -->

    </div>

    <div class="blog-meta">
        <a href="blog-post.html" class="ae-u-bolder blog-meta__comments">
            <?php echo get_comments_number();?> Comments
        </a>

        <span class="ae-kappa ae-u-bold blog-meta__date"><?php  echo get_the_date('F, d y'); ?></span>
        <a href="<?php the_permalink() ?>" class="arrow-button blog-meta__read-more">Read More
            <span class="arrow-cont">
                <svg>
                  <use xlink:href="assets/img/symbols.svg#arrow"></use>
                </svg>
            </span>
        </a>
  </div>
</div>
