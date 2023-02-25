<?php
/**
 * The template for displaying archive pages
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

?>

<div class="wrapper" id="archive-wrapper">

	<div  id="content" tabindex="-1">

		<div class="row">

			<main class="site-main" id="main">

				<?php
				if ( have_posts() ) {
					?>
					
					<?php
					// Start the loop.
					while ( have_posts() ) {
						the_post();

						get_template_part( 'loop-templates/content', get_post_format() );
					}
				} else {
					get_template_part( 'loop-templates/content', 'none' );
				}
				?>

			</main>

		</div><!-- .row -->

	</div><!-- #content -->

</div><!-- #archive-wrapper -->

<?php
get_footer();
