<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other 'pages' on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Namespaced
 * @since Namespaced 1.0
 */

get_header();

?>


<?php while (have_posts()) : the_post(); ?>

	<?php the_slider('gallery', 'feature'); ?>

	<div role="main">

		<?php if (get_field('strapline')) { ?>
			<div class="strapline">
				<section class="row">
					<div class="col twelve">
						<h2><?php the_field('strapline'); ?></h2>
					</div>
				</section>
			</div>
		<?php } ?>


		<!-- Feature Blocks -->
		<?php if (have_rows('feature_blocks')) { ?>
			<div class="feature-blocks">
				<section class="row">
		    		<?php while (have_rows('feature_blocks')) : the_row(); ?>

						<div class="col three">
							<a class="title" href="<?php the_sub_field('feature_block_url'); ?>">
								<i class="icon-clinic"><img src="<?php echo get_sub_field('feature_block_image')['sizes']['thumbnail']; ?>" alt="<?php the_sub_field('feature_block_title'); ?>" /></i>
								<span><?php the_sub_field('feature_block_title'); ?></span>
							</a>
							<span class="description"><?php the_sub_field('feature_block_description'); ?></span>
						</div>

				    <?php endwhile; ?>
				</section>
			</div>
		<?php } ?>


		<!-- Info Block -->
		<div class="info-block">
			<section class="row">
				<div class="col twelve">
					<div class="block">
						<img src="" alt="" />
						<h3>Tip of the month</h3>
						<span>Do you actually know how much salt you need?</span>
						<div class="cta">
							<a class="button" href="/">Click Here to Read More</a>
						</div>
					</div>
				</div>
			</section>
		</div>


		<div class="two-column">
			<section class="row">

				<!-- Recent News -->

				<?php

				$args = array( 'post_type' => 'news', 'posts_per_page' => 6 );
				$loop = new WP_Query( $args );

				?>
				<div class="col nine recent-news">
					<ul class="row">
						<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
							<li class="four">
								<img src="" alt="" />
								<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
								<span><?php the_excerpt(); ?></span>
								<?php the_date(); ?>

							</li>
						<?php endwhile; ?>

					</ul>
				</div>


				<!-- Trainers -->
				<?php

				$args2 = array( 'post_type' => 'trainers', 'posts_per_page' => 6 );
				$loop2 = new WP_Query( $args2 );

				?>
				<div class="col three trainers">
					<ul class="row">
						<?php while ( $loop2->have_posts() ) : $loop2->the_post(); ?>
							<li class="six">
								<img src="" alt="" />
								<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
								<span><?php the_excerpt(); ?></span>
								<?php the_date(); ?>

							</li>
						<?php endwhile; ?>
					</ul>
				</div>

			</section>
		</div>
	</div>

<?php endwhile; ?>

<?php

get_footer();
