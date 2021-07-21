<?php

require_once "conexion.php";

class ModeloSlide1{

	static public function mdlMostrarSlide($tabla){

		$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");

		$stmt -> execute();

		return $stmt -> fetchAll();

		$stmt -> close();

		$stmt = null;

	}

}