<?php

/* Template Name: Resume Page */

/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package amydalrymple
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<?php if (have_rows(previous_work)): ?>
				<article id="">
					<header class="entry-header">
						<h3 class="entry-title">Previous Work</h3>
					</header><!-- .entry-header -->

					<div class="entry-content previous_work">

					<?php while (have_rows(previous_work)): the_row(); ?>

						<?php
						$project_link = get_sub_field('project_link');

						if($project_link): ?>
							<h4><a href="<?php echo $project_link; ?>" target="_blank"><?php echo get_sub_field('project_title'); ?></a></h4>
						<?php else: ?>
							<h4><?php echo get_sub_field('project_title'); ?></h4>
						<?php endif; ?>

						<?php
						$image = get_sub_field('project_image');
						$image_sizes = $image['sizes'];

						//var_dump($image['sizes']); ?>

						<img src="<?php echo $image['url']; ?>" srcset="<?php echo $image_sizes['medium']; ?> 300w, <?php echo $image_sizes['medium_large']; ?> 640w, <?php echo $image_sizes['large']; ?> 1024w" sizes="100vw" title="<?php echo $image['title']; ?>" alt="<?php echo $image['alt']; ?>">

						<p><strong>Launched:</strong> <?php echo get_sub_field('project_launched'); ?></p>
						<p><strong>Role:</strong> <?php echo get_sub_field('project_role'); ?></p>
						<p><strong>Specifications:</strong> <?php echo get_sub_field('project_specs'); ?></p>

					<?php endwhile; ?>

					</div><!-- .entry-content -->

				</article>
			<?php endif; ?>

			<?php if (have_rows(work_history)): ?>
				<article id="">
					<header class="entry-header">
						<h3 class="entry-title">Employment History</h3>
					</header><!-- .entry-header -->

					<div class="entry-content empl_history">

					<?php while (have_rows(work_history)): the_row(); ?>

						<p><strong><?php echo get_sub_field('org_name'); ?></strong></p>
						<p><?php echo get_sub_field('org_title'); ?></p>
						<p><?php echo get_sub_field('org_employment'); ?></p>

					<?php endwhile; ?>

					</div><!-- .entry-content -->

				</article>
			<?php endif; ?>

			<?php if (get_field(professional_skills)): ?>
				<article id="">
					<header class="entry-header">
						<h3 class="entry-title">Professional Skills</h3>
					</header><!-- .entry-header -->

					<div class="entry-content skillz">

						<?php echo get_field('professional_skills'); ?>

					</div><!-- .entry-content -->

				</article>
			<?php endif; ?>

			<?php if (have_rows(speaking_engagements)): ?>
				<article id="">
					<header class="entry-header">
						<h3 class="entry-title">Speaking Engagements</h3>
					</header><!-- .entry-header -->

					<div class="entry-content speaking">

					<?php while (have_rows(speaking_engagements)): the_row(); ?>

						<p><strong><?php echo get_sub_field('event_name'); ?></strong></p>
						<p><?php echo get_sub_field('event_date'); ?></p>
						<p><?php echo get_sub_field('event_location'); ?></p>
						<p><?php echo get_sub_field('event_topic'); ?></p>

					<?php endwhile; ?>

					</div><!-- .entry-content -->

				</article>
			<?php endif; ?>

			<?php if (get_field(primary_education)): ?>
				<article id="">
					<header class="entry-header">
						<h3 class="entry-title">Education</h3>
					</header><!-- .entry-header -->

					<div class="entry-content education">

						<?php echo get_field('primary_education'); ?>

					</div><!-- .entry-content -->

					<?php if (have_rows(continued_education)): ?>
						<h4 class="entry-title">Continued Education</h4>

						<div class="entry-content continued_ed">

						<?php while (have_rows(continued_education)): the_row(); ?>

							<p><strong><?php echo get_sub_field('event_name'); ?></strong></p>
							<p><?php echo get_sub_field('event_topic'); ?></p>
							<p><?php echo get_sub_field('event_date'); ?></p>
							<p><?php echo get_sub_field('event_location'); ?></p>

						<?php endwhile; ?>

						</div><!-- .entry-content -->

					<?php endif; ?>

				</article>
			<?php endif; ?>


			<?php
			// this is the default "content" for the wordpress page
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
