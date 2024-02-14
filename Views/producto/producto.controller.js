function init() {
  $("#productos_Form").on("submit", (e) => {
    insertar(e);
  });
}
$().ready(() => {
  cargarTabla();
});

var cargarTabla = () => {
  var productosModelojs = new Class_Producto_js("", "Listado_todos");
  productosModelojs.Listado_todos();
};

var uno = (productoId) => {
  var productosModelojs = new Class_Producto_js("", "Listado_uno");
  productosModelojs.Listado_uno(productoId);
};

var insertar = (e) => {
  e.preventDefault();
  var producto_form = new FormData($("#producto_Form")[0]);
  var productosModelojs = new Class_Producto_js(producto_form, "insertar");
  productosModelojs.insertar();
};
init();
