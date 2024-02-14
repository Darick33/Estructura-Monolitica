<?php
error_reporting(0);
require_once("../Models/producto.model.php");

$productos = new Clase_Productos;

switch($_GET['op']){
    case 'Listado_todos':
        $datos = array();
        $datos= $productos->Listado_todos();
        while($filas = mysqli_fetch_assoc($datos)){
            $Listado_todos[] = $filas;
        }
        echo json_encode($Listado_todos);
        break;
    case 'Listado_uno':
        $ProductoId = $_POST['ProductoId'];
        $datos =  array();
        $datos = $productos->Listado_uno($ProductoId);
        $uno = mysqli_fetch_assoc($datos);
        echo json_encode($uno);
        break;
    case 'insertar':
        $Nombre = $_POST["Nombre"];
        $Descripcion = $_POST["Descripcion"];
        $Precio = $_POST["Precio"];
        $CategoriaId = $_POST["CategoriaId"];
    
        $datos = array();
        $datos = $productos->insertar($Nombre, $Descripcion, $Precio, $CategoriaId);
        echo json_encode($datos);
        break;           

}

