<?php

class ControladorUpload{

	/*=============================================
	MOSTRAR CATEGORÍAS
	=============================================*/

	static public function ctrMostrarCategoriasUpload($item, $valor){

		$tabla = "categorias";

		$respuesta = ModeloUpload::mdlMostrarCategoriasUpload($tabla, $item, $valor);

		return $respuesta;

	}

	/*=============================================
	MOSTRAR SUBCATEGORÍAS
	=============================================*/

	static public function ctrMostrarSubCategoriasUpload($item, $valor){

		$tabla = "subcategorias";

		$respuesta = ModeloUpload::mdlMostrarSubCategoriasUpload($tabla, $item, $valor);

		return $respuesta;

	}

	/*=============================================
	MOSTRAR PRODUCTOS
	=============================================*/

	static public function ctrMostrarProductosUpload($ordenar, $item, $valor, $base, $tope){

		$tabla = "productos";

		$respuesta = ModeloUpload::mdlMostrarUpload($tabla, $ordenar, $item, $valor, $base, $tope);

		return $respuesta;
	}

	/*=============================================
	MOSTRAR INFOPRODUCTO
	=============================================*/

	static public function ctrMostrarInfoProductoUpload($item, $valor){

		$tabla = "productos";

		$respuesta = ModeloUpload::mdlMostrarInfoProductoUpload($tabla, $item, $valor);

		return $respuesta;

	}
    
	/*=============================================
	LISTAR PRODUCTOS
	=============================================*/

	static public function ctrListarProductosUpload($ordenar, $item, $valor){

		$tabla = "productos";

		$respuesta = ModeloUpload::mdlListarProductosUpload($tabla, $ordenar, $item, $valor);

		return $respuesta;

	}

	/*=============================================
	MOSTRAR BANNER
	=============================================*/

	static public function ctrMostrarBannerUpload($ruta){

		$tabla = "banner";

		$respuesta = ModeloUpload::mdlMostrarBannerUpload($tabla, $ruta);

		return $respuesta;

	}

	/*=============================================
	BUSCADOR
	=============================================*/

	static public function ctrBuscarProductosUpload($busqueda, $ordenar, $modo, $base, $tope){

		$tabla = "productos";

		$respuesta = ModeloUpload::mdlBuscarUpload($tabla, $busqueda, $ordenar, $modo, $base, $tope);

		return $respuesta;

	}

	/*=============================================
	LISTAR PRODUCTOS BUSCADOR
	=============================================*/

	static public function  ctrListarProductosBusquedaUpload($busqueda){

		$tabla = "productos";

		$respuesta = ModeloUpload::mdlListarProductosBusquedaUpload($tabla, $busqueda);

		return $respuesta;

	}

}