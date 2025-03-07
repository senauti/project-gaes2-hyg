<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
<style>
.cabecera{
  background-color:  #D3E1EB ;

}
.table{
  text-align: center;
  font-size: 15px;
}
.logo {
        width: 160px;
        height: 85px;
    }
</style>

</head>

<body>
  <img class="logo" src="Iconos/image-removebg-preview.png" alt="">
  <h1 class="text-center">REPORTE DE VENTAS</h1><br>
  <table class="table" >
    <thead class="cabecera">

        <tr>
            <th scope="col">ID Venta</th>
            <th scope="col">Fecha</th>
            <th scope="col">Producto</th>
            <th scope="col">Cantidad</th>
            <th scope="col">Precio</th>

        </tr>
    </thead>
    <tbody>
        @foreach ($ventas as $venta)
        <tr class="">
            <td scope="row">{{$venta->id}}</td>
            <td>{{$venta->fecha}}</td>
            <td>{{$venta->producto}}</td>
            <td>{{$venta->cantidad}}</td>
            <td>{{$venta->precio}}</td>
            <td>

        @endforeach
    </tbody>
</table>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>
