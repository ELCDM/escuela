<?php
/**
* Template Name: Programa Belleza
*
* @package WordPress
* @subpackage Twenty_Fourteen
* @since Twenty Fourteen 1.0
*/

the_post();
get_header();
$post_thumbnail = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'full');
$unidad_uno = get_post_meta( get_the_ID(), 'wpcf-unidad-uno', true );
$unidad_dos = get_post_meta( get_the_ID(), 'wpcf-unidad-dos', true );
$unidad_tres = get_post_meta( get_the_ID(), 'wpcf-unidad-tres', true );
$unidad_cuatro = get_post_meta( get_the_ID(), 'wpcf-unidad-cuatro', true );
$unidad_cinco = get_post_meta( get_the_ID(), 'wpcf-unidad-cinco', true );
$unidad_seis = get_post_meta( get_the_ID(), 'wpcf-unidad-seis', true );
$unidad_siete = get_post_meta( get_the_ID(), 'wpcf-unidad-siete', true );
$unidad_ocho = get_post_meta( get_the_ID(), 'wpcf-unidad-ocho', true );
$unidad_nueve = get_post_meta( get_the_ID(), 'wpcf-unidad-nueve', true );
$unidad_diez = get_post_meta( get_the_ID(), 'wpcf-unidad-diez', true );
$unidad_once = get_post_meta( get_the_ID(), 'wpcf-unidad-once', true );
$unidad_doce = get_post_meta( get_the_ID(), 'wpcf-unidad-doce', true );
?>
<main class="conten_content min5000 w-clearfix">
	<div class="bannerfulldeacademia">
		<div class="div960 w-clearfix">
			<div class="titulybot w-clearfix">
				<h1 class="heading-2">ACADEMIA DE BELLEZA</h1>
				<a class="botinteracademia ctapreinscir w-button" data-fancybox data-src="<?php bloginfo('template_url')?>/inc/form.php?curs=academia_de_belleza" href="javascript:;">PRE-INSCRIBIRME AL CURSO</a></div>
				<img class="imgdeacademia" src="<?php echo $post_thumbnail[0]; ?>"></div>
			</div>
			<div class="contentdeacade">
				<div class="div960 lasunidades w-clearfix">
					<div class="unaunidad w-clearfix">
					<h2 class="tituldeunidad">UNIDAD UNO</h2>
						<?php echo $unidad_uno; ?>
					</div>
					<div class="unaunidad w-clearfix">
						<h2 class="tituldeunidad">UNIDAD DOS</h2>
						<?php echo $unidad_dos; ?>
					</div>
					<div class="unaunidad w-clearfix">
						<h2 class="tituldeunidad">UNIDAD TRES</h2>
						<?php echo $unidad_tres; ?>
					</div>
					<div class="unaunidad w-clearfix">
						<h2 class="tituldeunidad">UNIDAD CUATRO</h2>
						<?php echo $unidad_cuatro; ?>
					</div>
					<div class="unaunidad w-clearfix">
						<h2 class="tituldeunidad">UNIDAD CINCO</h2>
						<?php echo $unidad_cinco; ?>
					</div>
					<div class="unaunidad w-clearfix">
						<h2 class="tituldeunidad">UNIDAD SEIS</h2>
						<?php echo $unidad_seis; ?>
					</div>
					<div class="unaunidad w-clearfix">
						<h2 class="tituldeunidad">UNIDAD SIETE</h2>
						<?php echo $unidad_siete; ?>
					</div>
					<div class="unaunidad w-clearfix">
						<h2 class="tituldeunidad">Unidad ocho</h2>
						<?php echo $unidad_ocho; ?>
					</div>
					<div class="unaunidad w-clearfix">
						<h2 class="tituldeunidad">Unidad nueve</h2>
						<?php echo $unidad_nueve; ?>
					</div>
					<div class="unaunidad w-clearfix">
						<h2 class="tituldeunidad">Unidad diez</h2>
						<?php echo $unidad_diez; ?>
					</div>
					<div class="unaunidad w-clearfix">
						<h2 class="tituldeunidad">Unidad once</h2>
						<?php echo $unidad_once; ?>
					</div>
					<div class="unaunidad w-clearfix">
						<h2 class="tituldeunidad">Unidad doce</h2>
						<?php echo $unidad_doce; ?>
					</div>
				</div>
			</div>
			<div class="datosdescuela">
				<div class="datoscenter w-clearfix">
					<a class="datodeup" href="https://www.facebook.com/escuelaUPA.UMES" target="_blank">/escuelaupa</a>
					<a class="datodeup nusmcon" href="tel:66331813">66331813<br>66336005<br>66333710</a>
					<div class="datodeup direcsa">Calle "C", No. 106 colonia Lupita. Amatitlán</div>
				</div>
				<a class="ctaconts ctapreinscir w-button" data-fancybox data-src="<?php bloginfo('template_url')?>/inc/form.php?curs=Escuela de Belleza" href="javascript:;">PRE-INSCRIBIRME AL CURSO</a>
			</div>
		</main>
		<?php
		get_footer();
		?>