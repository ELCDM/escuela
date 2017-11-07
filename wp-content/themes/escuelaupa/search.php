<?php
/**
 * The template for displaying search results pages
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

<main class="conten_content w-clearfix">
	<div class="searchcontent">
		<div class="div960 w-clearfix">
			<div class="titulderesult"><span class="labusqueda"><?php printf( __( 'Search Results for: %s', 'twentyfifteen' ), get_search_query() ); ?></span></div>
			<?php if ( have_posts() ) : ?>
				<?php while ( have_posts() ) : the_post(); ?>
					<a class="unresult w-clearfix w-inline-block" href="<?php the_permalink(); ?>">
						<div class="itukderes"><?php the_title(); ?></div>
						<div class="textderesult"><?php the_excerpt(); ?></div>
					</a>
						<?php // End the loop.
						endwhile; 
						endif;
						?>
					</div>
				</div>
			</main>
			<?php get_footer(); ?>
