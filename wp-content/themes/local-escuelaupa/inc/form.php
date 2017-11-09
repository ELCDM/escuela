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

      <input class="w-input formedia val" id="nombre" maxlength="256" name="nombre" placeholder="Nombres" type="text">
      <input class="w-input formedia val" id="apellido" maxlength="256" name="apellido" placeholder="Apellidos" type="text">
      <input class="w-input formedia val" id="direccion" maxlength="256" name="direccion" placeholder="Dirección" type="text">
      <select class="w-input formedia val" id="municipio" maxlength="256" name="municipio" placeholder="Municipio" type="select">
        <option value="">Elija un Municipio</option>
        <option value="Amatitlan">Amatitlán</option>
        <option value="Palin">Palín</option>
        <option value="Guatemala">Guatemala</option>
        <option value="Otro">Otro</option>
      </select>

      <input class="w-input formedia val" id="telefono" maxlength="256" name="telefono" placeholder="Teléfono de casa" required="required" type="number">

      <input class="w-input formedia val" id="celular" maxlength="256" name="celular" placeholder="Celular" required="required" type="number">

      <input class="w-input formedia val" id="correo" maxlength="256" name="correo" placeholder="Correo" required="required" type="email">

      <input class="w-input formedia val" id="dpi" maxlength="256" name="dpi" placeholder="DPI" type="number">
      <div class="ultimoscampos">
        <div class="fechanacimiento formedia val" type="grupo-select" name="fecha de nacimiento">
          <h4>Fecha de Nacimiento</h4>
          <select class="w-input" id="dia" maxlength="256" name="dia" placeholder="Día">
            <?php for($dia = 0; $dia<= 31; $dia++){
              echo '<option value="'.$dia.'">'.$dia.'</option>';
            } ?>
          </select>
          <select class="w-input" id="mes" maxlength="256" name="mes" placeholder="Mes">
            <?php for($mes = 0; $mes<=12; $mes++){
              echo '<option value="'.$mes.'">'.$mes.'</option>';
            } ?>
          </select>
          <select class="w-input" id="anio" maxlength="256" name="anio" placeholder="Año">
            <option value="0">0</option>
            <?php for($anio = 1937; $anio<=2007; $anio++){
              echo '<option value="'.$anio.'">'.$anio.'</option>';
            } ?>
          </select>
        </div>
        <div class="generoyestado formedia">
          <div class="generoradio">
            <h4>Genero</h4>
            <input class="val" type="radio" name="genero" value="Mujer">Mujer<br>
            <input class="val" type="radio" name="genero" value="Hombre">Hombre<br>
          </div>
          <div class="estadoradio">
            <h4>Estado Civil</h4>
            <input class="val" type="radio" name="estado_civil" value="Mujer">Soltero(a)<br>
            <input class="val" type="radio" name="estado_civil" value="Hombre">Casado(a)<br>
          </div>
        </div>

        <textarea class="textdeemergent w-input val" id="comentario" maxlength="5000" name="comentario" placeholder="Comentarios" type="text" ></textarea>
        <div class="terminos">
          <input class="val" type="checkbox" name="terminos" value="acept"> <a href="#">¿Aceptas terminos y condiciones?</a><br>
        </div>
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
