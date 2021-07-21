<!DOCTYPE html>
<html lang="en">
<head>
   
    <meta charset="UTF-8">
    <title>Fawok</title>
   
        <link rel="icon" href="http://localhost/tienda/vistas/img/plantilla/icono.png">

    	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

<link href='https://fonts.googleapis.com/css?family=Lato:300,400' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="http://localhost/tienda/vistas/css/publish.css">
	<link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Ubuntu|Ubuntu+Condensed" rel="stylesheet">

</head>
<body>
<?php
include 'modulos/uploud.php';
include 'process.php';
    ?>

</body>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-alpha1/jquery.min.js'></script>
<script src="http://localhost/tienda/vistas/js/publish.js"></script>

<script>
    $(document).ready(function() {
	setTimeout(function() {
		$("#main").removeClass("is-loading");
	}, 100)
});
    </script>
</html>