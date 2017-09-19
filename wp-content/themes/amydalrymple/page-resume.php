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

			<article id="">
				<header class="entry-header">
					<h3 class="entry-title">TITLE</h3>
				</header><!-- .entry-header -->

				<div class="entry-content">
				</div><!-- .entry-content -->

			</article>


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
