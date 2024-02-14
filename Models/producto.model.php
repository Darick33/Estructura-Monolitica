<?php

// Importar archivo de conexión
require_once('conxion.php');

class Clase_Productos
{
    public function Listado_todos()
    {
        try {
            // Establecer conexión
            $con = new ClaseConectar();
            $con = $con->ProcedimientoConectar();
            
            // Consulta SQL para obtener todos los productos con su categoría
            $cadena = "SELECT Productos.*, Categorias.Nombre as Categoria FROM `Productos` INNER JOIN Categorias on Productos.CategoriaId = Categorias.CategoriaId;";
            $resultado = mysqli_query($con, $cadena);

            // Cerrar conexión
            $con->close();

            return $resultado;
        } catch (Exception $e) {
            return $e->getMessage(); // Manejar excepciones
        }
    }

    public function Listado_uno($ProductoId)
    {
        try {
            // Establecer conexión
            $con = new ClaseConectar();
            $con = $con->ProcedimientoConectar();

            // Consulta SQL para obtener un producto específico con su categoría
            $cadena = "SELECT Productos.*, Categorias.Nombre as Categoria FROM `Productos` INNER JOIN Categorias on Productos.CategoriaId = Categorias.CategoriaId WHERE ProductoId=$ProductoId;";
            $resultado = mysqli_query($con, $cadena);

            // Cerrar conexión
            $con->close();

            return $resultado;
        } catch (Exception $e) {
            return $e->getMessage(); // Manejar excepciones
        }
    }

    public function insertar($Nombre, $Descripcion, $Precio, $CategoriaId)
    {
        try {
            // Establecer conexión
            $con = new ClaseConectar();
            $con = $con->ProcedimientoConectar();

            // Consulta SQL para insertar un nuevo producto
            $cadena = "INSERT INTO `Productos`(`Nombre`, `Descripcion`, `Precio`, `CategoriaId`) VALUES ('$Nombre','$Descripcion', '$Precio','$CategoriaId')";
            $resultado = mysqli_query($con, $cadena);

            // Cerrar conexión
            $con->close();

            return $resultado;
        } catch (Exception $e) {
            return $e->getMessage(); // Manejar excepciones
        }
    }
}
?>
