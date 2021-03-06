<!DOCTYPE html>
<html lang="es">
<head>
  <!--================ ETIQUETAS META ==================-->
  
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<meta name="title" content="Tienda Virtual">
	<meta name="description" content="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam accusantium enim esse eos officiis sit officia">
	<meta name="keyword" content="Lorem ipsum, dolor sit amet, consectetur, adipisicing, elit, Quisquam, accusantium, enim, esse">
	
<!--================ CIERRE DE ETIQUETAS META ==================-->


	<title>Fawok</title>
	
<!--================ICONO ==================-->

<?php

		session_start();

		$servidor = Ruta::ctrRutaServidor();

		$icono = ControladorPlantilla::ctrEstiloPlantilla();

		echo '<link rel="icon" href="'.$servidor.$icono["icono"].'">';

		/*=============================================
		MANTENER LA RUTA FIJA DEL PROYECTO
		=============================================*/
		
		$url = Ruta::ctrRuta();

	?>


<!--================ CIERRE ICONO ==================-->


<!--================ ETIQUETA ESTILO DE PAGINA ==================-->

	<link rel="stylesheet" href="<?php echo $url; ?>vistas/css/plugins/bootstrap.min.css">

	<link rel="stylesheet" href="<?php echo $url; ?>vistas/css/plugins/font-awesome.min.css">


	<link rel="stylesheet" href="<?php echo $url; ?>vistas/css/plugins/flexslider.css">
	<link rel="stylesheet" href="<?php echo $url; ?>vistas/css/plugins/sweetalert.css">

	<link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">

	<link href="https://fonts.googleapis.com/css?family=Ubuntu|Ubuntu+Condensed" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo $url; ?>vistas/css/plantilla2.css">
	
	<link rel="stylesheet" href="<?php echo $url; ?>vistas/css/infoproducto.css">
	
	<link rel="stylesheet" href="<?php echo $url; ?>vistas/css/cabezote.css">

	<link rel="stylesheet" href="<?php echo $url; ?>vistas/css/slide.css">
	
	<link rel="stylesheet" href="<?php echo $url; ?>vistas/css/nosotros.css">

    <link rel="stylesheet" href="<?php echo $url; ?>vistas/css/contactanos.css">
    
 <link rel="stylesheet" href="<?php echo $url; ?>vistas/css/subirTrabajo.css">
 
	<script src="<?php echo $url; ?>vistas/js/plugins/jquery.min.js"></script>

	<script src="<?php echo $url; ?>vistas/js/plugins/bootstrap.min.js"></script>

	<script src="<?php echo $url; ?>vistas/js/plugins/jquery.scrollUp.js"></script>

	<script src="<?php echo $url; ?>vistas/js/plugins/jquery.flexslider.js"></script>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

	    <script src="<?php echo $url; ?>vistas/js/plugins/sweetalert.min.js"></script>

<!--================ CIERRE ETIQUETA ESTILO DE PAGINA ==================-->


</head>


<body>

<?php

/*=============================================
CABEZOTE
=============================================*/

include "modulos/cabezote.php";

/*=============================================
CONTENIDO DIN??MICO
=============================================*/

$rutas = array();
$ruta = null;
$infoProducto = null;

if(isset($_GET["ruta"])){

	$rutas = explode("/", $_GET["ruta"]);

	$item = "ruta";
	$valor =  $rutas[0];

	/*=============================================
	URL'S AMIGABLES DE CATEGOR??AS
	=============================================*/

	$rutaCategorias = ControladorProductos::ctrMostrarCategorias($item, $valor);

	if($rutas[0] == $rutaCategorias["ruta"]){

		$ruta = $rutas[0];

	}

	/*=============================================
	URL'S AMIGABLES DE SUBCATEGOR??AS
	=============================================*/

	$rutaSubCategorias = ControladorProductos::ctrMostrarSubCategorias($item, $valor);

	foreach ($rutaSubCategorias as $key => $value) {
		
		if($rutas[0] == $value["ruta"]){

			$ruta = $rutas[0];

		}

	}

	/*=============================================
	URL'S AMIGABLES DE PRODUCTOS
	=============================================*/

	$rutaProductos = ControladorProductos::ctrMostrarInfoProducto($item, $valor);
	
	if($rutas[0] == $rutaProductos["ruta"]){

		$infoProducto = $rutas[0];

	}

	/*=============================================
	LISTA BLANCA DE URL'S AMIGABLES
	=============================================*/

	if($ruta != null || $rutas[0] == "articulos-gratis" || $rutas[0] == "lo-mas-vendido" || $rutas[0] == "lo-mas-visto"){

		include "modulos/productos.php";
                  include "modulos/footer.php";

        

	}else if($infoProducto != null){

		include "modulos/infoproducto.php";
        include "modulos/footer.php";


	}else if($rutas[0] == "buscador" || $rutas[0] == "verificar" || $rutas[0] == "salir"){


		include "modulos/".$rutas[0].".php";

	}else if($rutas[0] == "nosotros"){
    include "modulos/nosotros.php"; 
          include "modulos/footer.php";
        
    
    }else if($rutas[0] == "publicar-trabajo") {
        include "modulos/uploud.php";
        include "modulos/footer.php";

        
    }else if($rutas[0] == "contactanos"){
        include "modulos/contactanos.php"; 
          include "modulos/footer.php";
        
    }else{

		include "modulos/error404.php";

	}

}else{

	include "modulos/slide.php";
	include "modulos/destacados.php";
    include "modulos/infoBanner.php";
    include "modulos/footer.php";

}



    ?>
    
    <input type="hidden" value="<?php echo $url; ?>" id="rutaOculta">

   <!--================ ETIQUETAS FRAMEWORKS ==================-->

    <script src='https://cdnjs.cloudflare.com/ajax/libs/babel-polyfill/6.26.0/polyfill.min.js'></script>
    <script src="<?php echo $url; ?>vistas/js/cabezote.js"></script>
    <script src="<?php echo $url; ?>vistas/js/plantilla.js"></script>
    <script src="<?php echo $url; ?>vistas/js/buscador.js"></script>
    <script src="<?php echo $url; ?>vistas/js/slide.js"></script>
    <script src="<?php echo $url; ?>vistas/js/infoproducto.js"></script>
    <script src="<?php echo $url; ?>vistas/js/nosotrosSlide.js"></script>
	<script src="<?php echo $url; ?>vistas/js/registroFacebook.js"></script>

    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/bxslider/4.2.5/jquery.bxslider.min.js'></script>
      <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.1/TweenMax.min.js'></script>
<script src="<?php echo $url; ?>vistas/js/usuarios.js"></script>

<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '346927020287899',
      cookie     : true,
      xfbml      : true,
      version    : 'v11.0'
    });
      
    FB.AppEvents.logPageView();   
      
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "https://connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>





</body>
</html>