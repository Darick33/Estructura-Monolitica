class Class_Producto_js {
  constructor(productos, ruta) {
    this.productos = productos;
    this.ruta = ruta;
  }

  Listado_todos() {
    var html = "";
    $.get(
      "../../Controllers/producto.controller.php?op=" + this.ruta,
      (res) => {
        console.log(res);
        res = JSON.parse(res); // Parseamos una vez aquí
        $.each(res, (index, producto) => {
          html += `<tr>
            <td>${index + 1}</td>
            <td>${producto.Nombre}</td>
            <td>${producto.Descripcion}</td>
            <td>${producto.Precio}</td>
            <td>${producto.Categoria}</td> <!-- Ajustamos a la propiedad correcta -->
            <td>
              <button class='btn btn-success' onclick='uno(${producto.ProductoId})'>Editar</button>
              <button class='btn btn-danger'>Eliminar</button>
            </td>
          </tr>`;
        });
        console.log(html);
        $("#tablaproductos").html(html);
      }
    ).fail(function() {
      console.error("Error al obtener el listado de productos.");
    });
  }

  Listado_uno(productoId) {
    var html = "";
    $.get(
      "../../Controllers/producto.controller.php?op=" + this.ruta + "&ProductoId=" + productoId,
      (res) => {
        console.log(res);
        res = JSON.parse(res); // Parseamos una vez aquí
        // Construye el HTML para mostrar los detalles del producto
        html += `<tr>
          <td>${res.ProductoId}</td>
          <td>${res.Nombre}</td>
          <td>${res.Descripcion}</td>
          <td>${res.Precio}</td>
          <td>${res.Categoria}</td>
          <td>
            <button class='btn btn-success' onclick='editar(${res.ProductoId})'>Editar</button>
            <button class='btn btn-danger'>Eliminar</button>
          </td>
        </tr>`;
        $("#detallesProducto").html(html); // Mostrar detalles en un elemento con id "detallesProducto"
      }
    ).fail(function() {
      console.error("Error al obtener los detalles del producto.");
    });
  }
}
