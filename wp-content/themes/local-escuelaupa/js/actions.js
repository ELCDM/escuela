var $ = jQuery.noConflict();
$(document).ready(function () {

//MENU HOVER
$( ".wpmenu ul li" ).mouseover(function() {
	$(this).find('a').css('color','#0082f3');
}).mouseout(function() {
	$(this).find('a').css('color','#222222');
});

//ENVIO DE FORMULARIO VALIDADOS
function reset() {
	$("#toggleCSS").attr("href", templateurl + "/css/alertify.default.css");
	alertify.set({
		labels: {
			ok: "OK",
			cancel: "Cancel"
		},
		delay: 5000,
		buttonReverse: false,
		buttonFocus: "ok"
	});
}

function IsEmail(email) {
	var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
	if (!regex.test(email)) {
		return false;
	} else {
		return true;
	}
}

function Validadyenviar(form, boton) {
	$(boton).click(function () {
    $( form+' .val' ).each(function( index ) {
    	var val = $(this).val();
    	var id = $(this).attr('id');
    	var type = $(this).attr('type');
    	var name = $(this).attr('name');
    //alert(type);
    switch(type) {
    	case 'text':
    	if (val.length < 1 ) {
    		reset();
    		alertify.error("Ingrese su "+name);
    		return false; 
    	}
    	break;

    	case 'number':
    	if (val.length < 1 ) {
    		reset();
    		alertify.error("Ingrese su "+name);
    		return false; 
    	} else if ($.isNumeric(val) == false ) {
    		reset();
    		alertify.error("Su teléfono es Invalido.");
    		return false;
    	}
    	break;

    	case 'email':
    	if (val.length < 1 ) {
    		reset();
    		alertify.error("Ingrese su "+name);
    		return false; 
    	} else if (IsEmail(val) == false) {
    		reset();
    		alertify.error("Correo Invalido.");
    		return false;
    	}
    	break;

    	case 'captcha':
    	if($('#g-recaptcha-response').val() == '')  {
    		reset();
    		alertify.error("Complete la casilla de verificación.");
    		return false;

    	}
    	break;

    	case 'button':
    	var contform = $(form).serialize();
      $.ajax({
      	type: "POST",
      	url: templateurl + "/inc/emailSenderCore.php",
      	data: contform
      })
      .done(function (data) {
      	//alert(data);
      	if (data == 10) {
      		$("input[type=text], textarea, input[type=email], input[type=number]").val("");
      		reset();
      		alertify.success('¡Gracias por comunicarse, enseguida estaremos en contacto!');
      		return false;
      	} else if (data == 100) {
          $("input[type=text], textarea, input[type=email], input[type=number]").val("");
          reset();
          alertify.success('¡Gracias, Te estaremos enviando información!');
        }
      });
      break;

      default:
    }


  });
  });
}
//Validadyenviar(form, bot)
Validadyenviar('#suscripcionform', '#suscribirsebot');
Validadyenviar('#cursoform', '#enviarcurso');
Validadyenviar('#form-contacto', '#enviarcontac');

$("data-fancybox").fancybox({
  iframe : {
    css : {
      height : '100%'
    }
  }
});

//MAPA Principal

  //CREO EL MAPA
  google.maps.event.addDomListener(window, 'load', init);
  function init() {
    var mapOptions = {
      zoom: 20,
      center: new google.maps.LatLng(14.485104, -90.619703) // Escuela UPA
    };
    var mapElement = document.getElementById('mapa');
    var map = new google.maps.Map(mapElement, mapOptions);
    //map.setMapTypeId(google.maps.MapTypeId.SATELLITE);


    //SE CREA EL MARCADOR CON LA IMAGEN Y COORDENADAS
    function crearMarcadorint(lat, longi, mark) {
      var locationint = new google.maps.LatLng(lat, longi);
      var iconoUrlint = templateurl + "/images/marca.png";
      var marker = new google.maps.Marker({
        position: locationint,
        map: map,
        icon: iconoUrlint
      });
      return marker;
    }



    //SE CREA EL CONTENIDO DEL MARCADOR
    function addInfoWindow(marker, title, contenido,  show) {
      var infoWindow;
      infoWindow = new google.maps.InfoWindow({
        minWidth: 200,
        content: '<div class="globito" style="width:250px; height:180px; "><h4>'+title+'</h4><div style="width:150px;">'+contenido+'</div></div>'

      });

      if (show == 'true'){
        setTimeout(function() {
          infoWindow.open(map, marker);
        }, 500);
      }

      google.maps.event.addListener(marker, 'click', function() {
        infoWindow.open(map, marker);
        setTimeout(function() {
          infoWindow.close();
          // map1.setCenter(14.557686, -90.748834);
        }, 30000);
      });
    }

    //CREAR MARCADOR POR TIENDA
      var lon = $( '.latienda' ).find('.lon').text();
      var lat = $( '.latienda' ).find('.lat').text();
      var tit = $( '.latienda' ).find('.tit').text();
      var cont = $( '.latienda' ).find('.con').text();
      var mrk = $( '.latienda' ).find('.urlmarker').text();
      var mapElement = document.getElementById('mapa');
      var map = new google.maps.Map(mapElement, mapOptions);
      var location = new google.maps.LatLng(lat, lon);
      map.setCenter(location, 15);
      map.setZoom(18);
      var INTERNA = crearMarcadorint(lat, lon, mrk);
      addInfoWindow(INTERNA, tit, cont);
      var infoWindow = new google.maps.InfoWindow({
        content: '<div class="globito" style="width:130px; height:50px; "><h4>'+tit+'</h4></div>'
      });

      infoWindow.open(map, INTERNA);
      setTimeout(function() {
        infoWindow.close();
      }, 8000);

    
  }


});