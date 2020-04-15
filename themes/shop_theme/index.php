<?php
/**
 * The main template file
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<article class='featured_product post-32 post type-post status-publish format-standard has-post-thumbnail hentry category-uncategorized entry'>
			<h1>Featured Products</h1>
				<?php echo do_shortcode('[featured_products]'); ?>
			</article>
		<?php
		if ( have_posts() ) {

			// Load posts loop.
			while ( have_posts() ) {
				the_post();
				get_template_part( 'template-parts/content/content' );
			}

			// Previous/next page navigation.
			twentynineteen_the_posts_navigation();

		} else {

			// If no content, include the "No posts found" template.
			get_template_part( 'template-parts/content/content', 'none' );

		}
		?>
		<div class="container">
		<?php echo do_shortcode('[display_homepage_Contact_Info]'); ?>
		</div>
		</main><!-- .site-main -->
	</div><!-- .content-area -->

<?php
get_footer();
