<?php get_header() ?>
<div class="container">
	<?php
	if ( have_posts() ) {
		while ( have_posts() ) {
			the_post(); ?>
			<div class="row">
				<h2><?php the_title(); ?></h2>

				<?php the_content(); ?>
			</div>
		<?php } // end while
	} // end if
	?>
</div>
<?php get_footer() ?>
