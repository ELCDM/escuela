<?php
get_header();
the_post();
$post_thumbnail = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'curso-interior');
$iniciocursos = get_post_meta( get_the_ID(), 'wpcf-fecha-de-incio', true );
$desc = get_post_meta( get_the_ID(), 'wpcf-descripcion-curso', true );
?>
<main class="conten_content min5000 w-clearfix">
	<div class="titlehistoria titulcursos titulintercurs w-clearfix">
		<h1 class="titulinterncurs titulseccion"><?php the_title(); ?></h1>
	</div>
	<div class="contentinterpro">
		<div class="div960 w-clearfix">
			<div class="infoprinc w-clearfix">
			<img class="imginterdecurs" sizes="(max-width: 767px) 90vw, (max-width: 991px) 57vw, 547.1875px" src="<?php bloginfo('template_url'); ?>/images/imgintercurs.jpg" srcset="<?php bloginfo('template_url'); ?>/images/imgintercurs-p-500.jpeg 500w, <?php bloginfo('template_url'); ?>/images/imgintercurs.jpg 540w">

				<div class="infoprincipcurs w-clearfix">
					<div class="fechadeinicio"><?php echo $iniciocursos; ?></div>
					<div class="textinterimp"><?php echo $desc; ?></div>
				<a class="ctapreinscir w-button" data-fancybox data-src="<?php bloginfo('template_url')?>/inc/form.php?curs=<?php the_title(); ?>" href="javascript:;">PRE-INSCRIBIRME AL CURSO</a>
				</div>
				</div>
			</div>
		</div>	
		<div class="moddeflors">
			<h2 class="titul2intercurso"><?php the_title(); ?></h2>
			<div class="text-block-3"><?php the_content(); ?></div>
		</div>
		<div class="datosdescuela">
			<div class="datoscenter w-clearfix">
			<a class="datodeup" href="https://www.facebook.com/escuelaUPA.UMES" target="_blank">/escuelaupa</a>
			<a class="datodeup nusmcon" href="tel:66331813">66331813<br>66336005<br>66333710</a>
			<div class="datodeup direcsa">Calle "C", No. 106 colonia Lupita. Amatitlán</div>
			</div>
		<a class="ctaconts ctapreinscir w-button" data-fancybox data-src="<?php bloginfo('template_url')?>/inc/form.php?curs=<?php the_title(); ?>" href="javascript:;">PRE-INSCRIBIRME AL CURSO</a>
		</div>
		</main>
		<?php
		get_footer();
		?>