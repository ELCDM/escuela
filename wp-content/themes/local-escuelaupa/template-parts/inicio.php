<?php
/**
* Template Name: Inicio
*
* @package WordPress
* @subpackage Twenty_Fourteen
* @since Twenty Fourteen 1.0
*/

the_post();
get_header();
?>
<main class="conten_content w-clearfix">
	<div class="div1180 w-clearfix">
		<div class="sliderhome w-clearfix w-slider" data-animation="slide" data-autoplay="1" data-delay="6000" data-duration="500" data-infinite="1">
			<div class="mask maskfull w-slider-mask">
				<?php
				$co = 0;
				$query = new WP_Query( array( 'post_type' => 'slides', 'posts_per_page'=> 7 ) );
				while ($query->have_posts()):$query->the_post();
				$post_thumbnail = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'full');
				$url = get_post_meta( get_the_ID(), 'wpcf-link-slide', true );
				?>
				<div class="slide w-clearfix w-slide" style="background-image: url(<?php echo $post_thumbnail[0]; ?>);">
					<div class="labelcurso">CURSO</div>
					<h2 class="heading"><?php the_title(); ?></h2>
					<div class="text-block"><?php the_excerpt(); ?></div>
					<a class="botslide w-button" href="<?php echo $url; ?>">Más Información</a>
				</div>
				<?php
				$co++;
				endwhile;
				wp_reset_postdata();
				?>
			</div>
			<div class="left-arrow w-slider-arrow-left">
				<div class="flechslide w-icon-slider-left"></div>
			</div>
			<div class="w-slider-arrow-right">
				<div class="derecflechslide flechslide w-icon-slider-right"></div>
			</div>
			<div class="w-round w-slider-nav"></div>
		</div>
		<div class="accesoscontent w-clearfix">
			<div class="titulcontent w-clearfix">
				<div class="lineatit"></div>
				<h3 class="tituldeaccesos">Accesos Útiles de Escuela UPA</h3>
				<div class="derech lineatit"></div>
			</div>
			<div class="accesosiconscontent">
				<div class="div960 w-clearfix">
					<a class="acceso w-clearfix w-inline-block" data-ix="scale" href="http://upa.umes.edu.gt:81/moodle/login/index.php" target="_blank"><img class="imgdeaccs" src="<?php bloginfo('template_url'); ?>/images/icons_08.png"><div class="text-block-2">AULA VIRTUAL</div></a>
					<a class="acceso w-clearfix w-inline-block" data-ix="scale" href="http://cooperativaupa.net" target="_blank"><img class="imgdeaccs" src="<?php bloginfo('template_url'); ?>/images/icons_09.png"><div class="text-block-2">VISITAR SITIO</div></a>
					<a class="acceso w-clearfix w-inline-block" data-ix="scale" href="#"><img class="imgdeaccs" src="<?php bloginfo('template_url'); ?>/images/icons_05.png"><div class="text-block-2">GALERÍA DE FOTOS</div></a>
					<a class="acceso ulimacces w-clearfix w-inline-block" data-ix="scale" href="<?php bloginfo('home'); ?>/academia-de-belleza"><img class="imgdeaccs" src="<?php bloginfo('template_url'); ?>/images/icons_07.png"><div class="text-block-2">academia de belleza</div></a>
				</div>
			</div>
		</div>
	</div>
	<div class="contentinformfull">
		<div class="div960 w-clearfix"><a class="vertodobot w-button" href="<?php bloginfo('home'); ?>/contenidoinformativo">Ver todo</a>
			<h2 class="contentinfo">Contenido Informativo</h2>
			<div class="losblogs w-clearfix">
				<?php
				$query = new WP_Query( array( 'post_type' => 'contenidoinformativo', 'posts_per_page'=> 3 ) );
				while ($query->have_posts()):$query->the_post();
				$post_thumbnail = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'full');
				$url = get_post_meta( get_the_ID(), 'wpcf-link-slide', true );
				?>
				<a class="unblog w-clearfix w-inline-block" data-ix="scale-propio" href="<?php the_permalink(); ?>">
					<img class="imgblog" src="<?php bloginfo('template_url'); ?>/images/imgblog1.png">
					<div class="fechablog"><?php echo get_the_time('F j, Y'); ?></div>
					<div class="textextracgt"><?php the_excerpt(); ?></div>
				</a>
				<?php
				endwhile;
				wp_reset_postdata();
				?>
			</div>
		</div>
	</div>
</main>
<?php
get_footer();
?>