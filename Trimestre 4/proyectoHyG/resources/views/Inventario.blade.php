<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventario</title>
    <link rel="stylesheet" href="{{ asset('css/RegCompra.css') }}">
    <link rel="stylesheet" href="{{ asset('css/RegVentaEinventario.css') }}">
    <!-- Boostrap --->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
    <header id="header">
        <div class="icono-menu">
            <img src="{{ asset('Iconos/HamburguerSinFondo.png') }}" id="icono-menu">
        </div>
        <div class="logo-verde">
            <img id="logo" class="icono-menu" src="{{ asset('Iconos/image-removebg-preview.png') }}" alt="Logo Empresa">
        </div>
        <nav class="notify">
            <a href="{{ url('/index') }}">
                <img src="{{ asset('Iconos/notifyAzul.jpg') }}" alt="Notify">
            </a>
        </nav>
        <nav class="user">
            <a href="{{ url('/index') }}">
                <img src="{{ asset('Iconos/iconoAdmin.jpg') }}" alt="User-ico">
            </a>
        </nav>
        <div class="cont-menu active" id="menu">
            <ul class="ul-pading">
                <li>
                     <strong>GESTIONAR VENTAS</strong>
                    <ul>
                        <li><a href="{{ url('/RegVenta') }}"> Registrar Ventas</a> </li>
                        <li><a href="{{ url('/Pconstrucción') }}">Informe de Ventas</a>  </li>
                    </ul>
                </li>
                <li>
                     <strong>GESTIONAR COMPRAS</strong>
                    <ul>
                        <li><a href="{{ url('/Pconstrucción') }}">Ver Proveedores </a> </li>
                        <li><a href="{{ url('/RegistCompra') }}">Registrar Compra </a></li>
                        <li><a href="{{ url('/Pconstrucción') }}">Detalles de la Compra </a></li>
                    </ul>
                </li>
                <li>
                    <strong>GESTIONAR INVENTARIO</strong>
                    <ul>
                        <li> <a href="{{ url('/Inventario') }}">Ver Inventario </a></li>
                    </ul>
                </li>
                <li>
                    <strong>GESTIONAR PEDIDOS</strong>
                    <ul>
                        <li><a href="{{ url('/Pedidos') }}">Ver Pedidos </a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </header>
    <main id="main">
        <h1 id="h1">Gestión de inventario</h1>
        <form class="container needs-validation " novalidate>
            <!-- Primera linea -->
            <div class="contenedor-1">
                <div class="form-2 row" action="">
                    <div class="col-2">
                        <input class=" controls form-control" type="number" name="nombres" id="pequeño" placeholder="codigo" required>
                        <div class="invalid-feedback">
                            Campo obligatorio
                        </div>
                    </div>
                    <div class="col-3">
                        <input class="peque controls form-control" type="text" name="apellidos" id="grande" placeholder="Nombre del producto" required>
                        <div class="invalid-feedback">
                            Campo obligatorio
                        </div>
                    </div>
                    <div class="col-3">
                        <input class="peque controls form-control" type="search" name="apellidos" id="grande" placeholder="SELECCIONAR CATEGORÍA" required>

                    </div>
                    <div class="col-1"></div>
                    <div class="div-boton col-2 d-flex justify-content-center align-items-center">
                        <input value="AGREGAR" class="boton controls" type="submit" name="agregar" id="apellido" required>
                    </div>
                </div>
            </div>
            <!-- tabla -->
            <div class="contentedor-tabla">
                <table class="table table-bordered border-primary">
                    <thead>
                      <tr>
                        <th scope="col">Código</th>
                        <th scope="col">PRODUCTO</th>
                        <th scope="col">CANTIDAD</th>
                        <th scope="col">PRECIO UND</th>
                        <th scope="col">SUBTOTAL</th>
                        <th scope="col">ACCIÓN</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">0001</th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><button class="boton-tabla">Editar</button></td>
                      </tr>
                      <tr>
                        <th scope="row">0002</th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><button class="boton-tabla">Editar</button></td>
                      </tr>
                      <tr>
                        <th scope="row">0003</th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><button class="boton-tabla">Editar</button></td>
                      </tr>
                      <tr>
                        <th scope="row">0004</th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><button class="boton-tabla">Editar</button></td>
                      </tr>
                      <tr>
                        <th scope="row">0005</th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><button class="boton-tabla">Editar</button></td>
                      </tr>
                      <tr>
                        <th scope="row">0006</th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><button class="boton-tabla">Editar</button></td>
                      </tr>
                    </tbody>
                  </table>
            </div>

              <!-- Cuarta sección -->
            <div class="contenedor-4">
                <div class="form-4 row" action="">
                    <div class="col-3">
                        <input value="Registrar producto" class="boton controls" type="submit" name="" id="botones-inventario" required>
                    </div>
                    <div class="col-3">
                        <input value="Generar informe" class="boton controls" type="submit" name="apellidos" id="botones-inventario" required>
                    </div>
                    <div class="col-3">
                        <input value="Crear categoría o producto" class="boton controls" type="submit" name="apellidos" id="botones-inventario" required>
                    </div>
                    <div class="col-3">
                        <input value="Novedades" class="boton controls" type="submit" name="apellidos" id="botones-inventario" required>
                    </div>
                </div>
            </div>
        </form>

    </main>
    <!-- Scripts -->
    <script src="{{ asset('js/validacionFormularios.js') }}"></script>
    <script src="{{ asset('js/appCompras.js') }}"></script>
    <!-- Boostrap -  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>
