<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>

    <script src="./producto.model.js"></script>
    <script src="./producto.controller.js"></script>
</head>

<body>
<header class="header bg-dark py-5 ">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-md-8 text-center text-md-start">
                    <h1 class="logo__nombre text-white mb-0">Aplicaciones<span class="logo__bold">DISTRIBUIDAS</span></h1>
                </div>
                <div class="col-md-4 text-center text-md-end mt-4 mt-md-0">
                   
                </div>
            </div>
        </div>
        <div class="header__text text-center text-white mt-5">
            <h2 class="no-margin">Deber de Aplicion Monolitica</h2>
            <p class="no-margin">Luis Cañar</p>
        </div>
    </header>

    <main class="container py-5 mt-5">
    
    <table class="table table-responsive table-bordered table-striped " >
        <thead>
            <tr>
                <th>#</th>
                <th>Nombre</th>
                <th>Descripcion</th>
                <th>Precio</th>
                <th>Categoria</th>
                <th>Opciones</th>
            </tr>
        </thead>
        <tbody id="tablaproductos">
            
            </tbody>
            
        </table>




    <div class="row">
        <div class="col-md-8 mx-auto">
            <h3 class="text-center mb-4">Producto Nuevo</h3>
            <div class="card">
                <div class="card-body">
                    <form class="row g-3">
                        <div class="col-md-6">
                            <label for="nombre" class="form-label">Nombre</label>
                            <input type="text" class="form-control" id="nombre" placeholder="Nombre del producto">
                        </div>
                        <div class="col-md-6">
                            <label for="email" class="form-label">Precio</label>
                            <input type="text" class="form-control" id="email" placeholder="Precio en dolares">
                        </div>
                        <div class="col-12">
                            <label for="mensaje" class="form-label">Descripcion</label>
                            <textarea class="form-control" id="mensaje" placeholder="La Descripcion "></textarea>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">Enviar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>



<footer class="footer bg-dark py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-md-start">
                
                        <h1 class="logo__nombre no-margin centrar-texto logo__nombre--footer text-white">Aplicaciones<span class="logo__bold">DISTRIBUIDAS</span></h1>
                   
                </div>
                <div class="col-md-6 text-center text-md-end mt-4 mt-md-0">
                   
                </div>
            </div>
        </div>
    </footer>




    
  





       
            
    </body>
    
    </html>