<?php
$mysqli = new mysqli('localhost', 'root', '', 'fawok') or die(mysql_error($mysqli));

if(isset($_POST['subir'])){
    
    $categorias = $_POST['categorias'];
    $subcategoria = $_POST['sub_categorias'];
    $titulo = $_POST['titulo'];
    $titular = $_POST['titular'];
    $precio = $_POST['precio'];
    $descripcion = $_POST['descripcion'];
    
    
    $mysqli->query("INSERT INTO productos(id_categoria, id_subcategoria, titulo, titular, descripcion, precio) VALUES('$categorias','$subcategoria','$titulo','$titular','$descripcion ','$precio')") or die($mysqli->error);
    
}
?>


