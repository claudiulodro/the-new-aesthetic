<?php get_header() ?>

<div class="content-container">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

		<div class="item">

			<h3 class="post-title">
				<?php if ( ! is_singular() ): ?><a href="<?php the_permalink() ?>"><?php endif ?>
					<?php if ( ! is_front_page() ): the_title(); endif ?>
				<?php if ( ! is_singular() ): ?></a><?php endif ?>
			</h3>

			<?php if ( is_singular() ): ?>
				<div class="post-content">

					<?php if ( has_post_thumbnail() ): ?>
						<p class="featured-image">
							<?php the_post_thumbnail() ?>
						</p>
					<?php endif ?>

					<?php the_content() ?>

					<?php if ( 'post' === get_post_type() ): ?>
						<p class="alignright">
							&mdash; <?php the_author() ?>
						</p>
					<?php endif ?>
				</div>
			<?php endif ?>

		</div>

	<?php endwhile; endif; ?>
</div>

<?php get_footer() ?>