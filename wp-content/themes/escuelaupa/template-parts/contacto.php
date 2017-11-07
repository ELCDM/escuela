<?php
/**
* Template Name: Contacto
*
* @package WordPress
* @subpackage Twenty_Fourteen
* @since Twenty Fourteen 1.0
*/

the_post();
get_header();
$titulinfo = get_post_meta( get_the_ID(), 'wpcf-titulo-de-informacion', true );
$correo = get_post_meta( get_the_ID(), 'wpcf-correo', true );
$telefonos = get_post_meta( get_the_ID(), 'wpcf-telefonos', true );
$direccion = get_post_meta( get_the_ID(), 'wpcf-direccion', true );
$latitud = get_post_meta( get_the_ID(), 'wpcf-latitud', true );
$longitud = get_post_meta( get_the_ID(), 'wpcf-longitud', true );
?>
<main class="conten_content w-clearfix">
	<div class="titlehistoria titulcursos w-clearfix">
		<h1 class="titulseccion"><?php the_title(); ?></h1>
	</div>
	<div class="contentcontac">
		<div class="div960 w-clearfix">
			<div class="textdecontact w-clearfix">
				<h2 class="tituldetextcont"><?php echo $titulinfo; ?></h2>	
				<div class="textdecontss"><?php the_content(); ?></div><a class="unlinkdecont" data-ix="up" href="mailto:<?php echo $correo; ?>"><?php echo $correo; ?></a><a class="texls unlinkdecont" data-ix="up" href="#"><?php echo $telefonos; ?></a><a class="direc unlinkdecont" data-ix="up" href="#"><?php echo $direccion; ?></a></div>
				<div class="formdecontact">
					<form class="w-clearfix" id="form-contacto" name="form-contacto">
						<input autofocus="autofocus" class="textfield w-input val" id="nombre" name="nombre" placeholder="Nombre" type="text">
						<input class="textfield w-input val" id="apellido" name="apellido" placeholder="Apellido" type="text">
						<input class="textfield w-input val" id="telefono" name="telefono" placeholder="Teléfono" type="number">
						<input class="textfield w-input val" id="correo" name="correo" placeholder="Correo electrónico" type="email">
						<textarea class="mensaje w-input val" id="mensaje" name="mensaje" placeholder="Mensaje" type="text"></textarea>
						<input type="hidden" name="contacto" value="true">
						<input id="enviarcontac" class="enviarcontac w-button val" type="button" value="ENVIAR">
					</form>
				</div>
				<div class="mapa w-clearfix" id="mapa"></div>
				<div class="latienda">
					<div class="lat" style="display: none;"><?php echo $latitud; ?></div>
					<div class="lon" style="display: none;"><?php echo $longitud; ?></div>
					<div class="tit" style="display: none;">Escuela UPA</div>
					<div class="con" style="display: none;"><?php echo $direccion; ?></div>
					<div class="urlmarker" style="display: none;"><?php bloginfo("template_url"); ?>/images/marca.png</div>

				</div>
			</div>
		</div>
	</main>
	<?php
	get_footer();
	?>