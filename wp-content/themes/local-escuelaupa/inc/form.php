<?php
require_once "../../../../wp-config.php";
global $wpdb, $post;
$curs = $_GET["curs"];
?>
<meta charset="utf-8">
<meta charset="<?php bloginfo( 'charset' ); ?>">
<link href="<?php bloginfo('template_url')?>/css/normalize.css" rel="stylesheet" type="text/css">
<link href="<?php bloginfo('template_url')?>/css/webflow.css" rel="stylesheet" type="text/css">
<link href="<?php bloginfo('template_url'); ?>/css/upa-escuela.webflow.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/alertify.core.css" />
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/alertify.default.css" id="toggleCSS"/>
<link href="<?php bloginfo('template_url')?>/style.css" rel="stylesheet" type="text/css">
<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.4.7/webfont.js"></script>
<script type="text/javascript">
  WebFont.load({
   google: {
    families: ["Open Sans:300,300italic,400,400italic,600,600italic,700,700italic,800,800italic","Oswald:200,300,400,500,600,700"]
  }
});
  var templateurl = '<?php bloginfo('template_url'); ?>';
  var home = '<?php bloginfo('home'); ?>';
</script>

<div class="emergentecontent w-clearfix">
  <h4 class="titledeemerg">PREINSCRIPCIÓN</h4>
  <div class="text-block-4">Completa el siguiente como primer paso para obtener inscribirte en este curso.</div>
  <div class="formemerg w-clearfix">
    <form class="form w-clearfix" id="cursoform" name="cursoform">

      <input class="w-input val" id="nombre" maxlength="256" name="nombre" placeholder="Nombre" type="text">

      <input class="w-input val" id="correo" maxlength="256" name="correo" placeholder="Correo" required="required" type="email">

      <input class="w-input val" id="telefono" maxlength="256" name="telefono" placeholder="Teléfono" required="required" type="number">

      <textarea class="textdeemergent w-input val" id="comentario" maxlength="5000" name="comentario" placeholder="Comentarios" type="text" ></textarea>
      <input type="hidden" name="nombre-curso" value="<?php echo $curs; ?>">
      <input type="hidden" name="curso" value="true">
      <input id="enviarcurso" class="enviaremerg w-button val" type="button" value="Enviar">
    </form>
  </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js" type="text/javascript"></script>
<script src="<?php bloginfo('template_url')?>/js/webflow.js" type="text/javascript"></script>
<script type="text/javascript" src="<?php bloginfo('template_url') ?>/js/alertify.min.js"></script>
<script src='https://www.google.com/recaptcha/api.js'></script>
<script src="<?php bloginfo('template_url')?>/js/actions.js" type="text/javascript"></script>
