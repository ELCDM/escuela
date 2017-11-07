<?php
/**
* Template Name: Academia Belleza
*
* @package WordPress
* @subpackage Twenty_Fourteen
* @since Twenty Fourteen 1.0
*/

the_post();
get_header();
$imgcuota = get_post_meta( get_the_ID(), 'wpcf-cuota-imagen', true );
// store the image ID in a var
$image_id_cuota = pippin_get_image_id($imgcuota);
$textocuota = get_post_meta( get_the_ID(), 'wpcf-cuota-texto',	 true );
$imgdiploma = get_post_meta( get_the_ID(), 'wpcf-diploma-imagen', true );
// store the image ID in a var
$image_id_diploma = pippin_get_image_id($imgdiploma);
$texdiploma = get_post_meta( get_the_ID(), 'wpcf-diploma-texto', true );
?>
<main class="conten_content min5000 w-clearfix">
	<div class="titlehistoria w-clearfix">
		<h1 class="titulseccion"><?php the_title(); ?></h1>
	</div>
	<div class="textacadconet">
		<div class="div960 w-clearfix">
			<div class="textdeacademia"><?php the_content(); ?></div>
		</div>
	</div>
	<div class="textyfotosconte w-clearfix"><a class="botdeacademia ctapreinscir w-button" data-ix="bots" href="<?php bloginfo('home'); ?>/academia-de-belleza/programa-de-estudios">VER PROGRAMA DE ESTUDIO</a>
		<div class="contentdeacademitex">
			<div class="div960 w-clearfix">
				<div class="untextdeaca w-clearfix" data-ix="scale-3">
					<img class="imgdetext" src="<?php echo $imgcuota; ?>" alt="cuota academia de belleza">
					<div class="textdetext"><?php echo $textocuota; ?></div>
				</div>
				<div class="untextdeaca w-clearfix" data-ix="scale-3"><img class="imgdetext" src="<?php echo $imgdiploma; ?>" alt="Diploma academia de belleza">
					<div class="textdetext"><?php echo $texdiploma; ?></div>
				</div>
			</div>
		</div>
		<div class="div1180 enlasfots w-clearfix">
			<?php
			$args = array(
		'post__not_in' => array(get_post_thumbnail_id($post->ID), $image_id_cuota, $image_id_diploma),
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
			<img class="fotaca" src="<?php echo $image[0]; ?>" alt="Academia de belleza">
			<?php
			endwhile;
			wp_reset_postdata();
			?>

		</div>
	</div>
</main>
<?php
get_footer();
?>