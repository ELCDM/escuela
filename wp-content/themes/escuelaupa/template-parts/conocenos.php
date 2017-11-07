<?php
/**
* Template Name: Conocenos
*
* @package WordPress
* @subpackage Twenty_Fourteen
* @since Twenty Fourteen 1.0
*/

the_post();
get_header();
?>
<main class="conten_content w-clearfix">
	<div class="titlehistoria w-clearfix">
		<h1 class="titulseccion">HISTORIA</h1>
	</div>
	<div class="lahistoriacontent">
		<div class="div960">
			<div class="sliderhistoria w-clearfix w-slider" data-animation="slide" data-autoplay="1" data-delay="4000" data-duration="500" data-infinite="1">
				<div class="w-slider-mask">
					<?php
					$co = 0;
					$query = new WP_Query( array( 'post_type' => 'historias', 'posts_per_page'=> -1, 'orderby' => 'date', 'order' => 'ASC' ) );
					while ($query->have_posts()):$query->the_post();
					?>
					<div class="slide-2 w-clearfix w-slide">
						<h2 class="tituldehistoria"><?php the_title(); ?></h2>
						<div class="textdeslidehistoria"><?php the_content(); ?></div>
					</div>
					<?php
					$co++;
					endwhile;
					wp_reset_postdata();
					?>
				</div>
				<div class="w-slider-arrow-left">
					<div class="flechslide w-icon-slider-left"></div>
				</div>
				<div class="w-slider-arrow-right">
					<div class="derecflechslide flechslide w-icon-slider-right"></div>
				</div>
				<div class="slidenav w-round w-slider-nav"></div>
			</div>
		</div>
	</div>
	<div class="misionvisioncontent">
		<div class="div960 w-clearfix">
			<div class="tituldevision"><?php the_content(); ?></div>
			<div class="misionvisionc w-clearfix">
				<?php
				$cop = 0;
				$quer = new WP_Query( array( 'post_type' => 'page', 'post_parent'=> 8, 'orderby' => 'date', 'order' => 'ASC' ) );
				while ($quer->have_posts()):$quer->the_post();
				$post_thumbnail = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'full');
				?>
				<div class="visioncontent w-clearfix" data-ix="scale-2">
					<img class="image" src="<?php echo $post_thumbnail[0]; ?>">
					<h3 class="tituldevis"><?php the_title(); ?></h3>
					<div class="textmi"><?php the_content(); ?></div>
				</div>
				<?php
				$cop++;
				endwhile;
				wp_reset_postdata();
				?>
			</div>
		</div>
	</div>
	<div class="instalacionescontent w-clearfix">
		<div class="titulcontent w-clearfix">
			<div class="lineatit"></div>
			<h3 class="tituldeaccesos">INSTALACIONES</h3>
			<div class="derech lineatit"></div>
		</div>
		<div class="slidergalery w-clearfix w-slider" data-animation="slide" data-disable-swipe="1" data-duration="500" data-infinite="1">
			<div class="maskdegals w-slider-mask">
				<?php
				$args = array(
					'post__not_in' => array(get_post_thumbnail_id($post->ID), $pago_id),
					'post_type' => 'attachment',
					'post_mime_type' => 'image',
					'post_parent' => $post->ID,
					'post_status' => 'null',
					'posts_per_page' => -1,
					'orderby' => 'menu_order',
					'order' => 'ASC'
					);
				$images = new WP_Query($args);
				while ($images->have_posts()):$images->the_post();
				$image = wp_get_attachment_image_src($post->ID, 'full');
				$caption = $post->post_excerpt;
				?>
				<div class="fotdeescuel w-slide" style="background-image: url(<?php echo $image[0]; ?>);"></div>
				<?php
				endwhile;
				wp_reset_postdata();
				?>
			</div>
			<div class="displaynone w-slider-arrow-left">
				<div class="engal flechslide w-icon-slider-left"></div>
			</div>
			<div class="w-clearfix w-slider-arrow-right">
				<div class="derecflech engal flechslide w-icon-slider-right"></div>
			</div>
			<div class="w-round w-slider-nav"></div>
		</div>
	</div>
</main>					<?php
get_footer();
?>