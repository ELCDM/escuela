<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>


<footer class="footer_content w-clearfix">
	<div class="footerupfull">
		<div class="div960 w-clearfix">
			<div class="suscribmod w-clearfix">
				<div class="contentnews w-clearfix" data-ix="suscribirs">
					<div class="imgnewscontent"><img class="imgdenews" src="<?php bloginfo('template_url'); ?>/images/sobre.png"></div>
					<div class="textcontentnews w-clearfix">
						<div class="tituldenewsfoot">¡ENTÉRATE PRIMERO!</div>
						<div class="textnews">Escribe tu correo electrónico y recibe<br>primero las mejores noticias y más.</div>
						<div class="suscribirse">
							<form class="w-clearfix" data-name="Email Form 2" id="suscripcionform" name="suscripcionform">
								<input class="text-field w-input val" data-name="correofoot" id="correofoot" maxlength="256" name="correo" type="email">
								<input type="hidden" name="suscripcion" value="true">
								<input id="suscribirsebot" class="enviaremail w-button val" type="button">
							</form>
						</div>
					</div>
				</div>
			</div>
			<?php wp_nav_menu(array('menu' => 'Menu Footer', 'container_class' => 'mapasitio')); ?>
		</div>
	</div>
	<div class="footerdownfull">
		<div class="div960 w-clearfix">
			<div class="derechos">© 2017 Escuela UPA. &nbsp;Todos los derechos reservados</div>
			<div class="redesfooter">
				<a class="facebooklink w-inline-block" data-ix="new-interaction" href="https://www.facebook.com/escuelaUPA.UMES" target="_blank"></a></div>
			</div>
		</div>
	</footer>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js" type="text/javascript"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/webflow.js" type="text/javascript"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url') ?>/js/alertify.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url') ?>/js/jquery.fancybox.min.js"></script>
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAy1knfk5-yB5M74tr-pdnnEVC7n9i3640"> </script>
	<script src='https://www.google.com/recaptcha/api.js'></script>
	<script src="<?php bloginfo('template_url')?>/js/actions.js" type="text/javascript"></script>
	<!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->
	<?php wp_footer(); ?>
</body>
</html>
