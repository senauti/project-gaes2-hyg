<!doctype html>
<html lang="en">

<head id="header">
  <title>login</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link href="{{ asset('css/styleLogin.css') }}" rel="stylesheet">

</head>

<body>
    <header id="header">
            <div class="logo">
                <img id="imglogo"src="{{ asset('Iconos/image-removebg-preview.png')}}" class="img-fluid" alt="Logo empresa">
               
            </div>

    </header>

    
    <main class="login-form">
        <div class="cotainer">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                      
                        <div class="card-body">
                          <ul class="nav nav-pills nav-justified mb-3" id="ex1" role="tablist">
                            <li class="nav-item" role="presentation">
                              <a class="nav-link active" id="tab-login" data-mdb-toggle="pill" href="{{route('login')}}" role="tab"
                                aria-controls="pills-login" aria-selected="false">CLIENTE</a>
                            </li>
                            <li class="nav-item" role="presentation">
                              <a class="nav-link" id="tab-register" data-mdb-toggle="pill" href="{{url('/loginF')}}" role="tab"
                                aria-controls="pills-register" aria-selected="true">FUNCIONARIO</a>
                            </li>
                          </ul>
                            <form method="post" action="{{ route('login') }}"  class="needs-validation" novalidate>
                              @csrf
              
                                <div class="form-outline mb-4"> 
                              
                                  <div id="textCliente" class="text-center">
                                   
                                    <img id="funcionarioIcono" src="{{ asset('Iconos/funcionarioIcono.jpg') }}" class="img-fluid" alt="IconoUsuario">
                                  </div>
                                  

                                   
                                  
                                
                                </div>
                                <div class="form-outline mb-4"> 

                                <input type="email" name="email" id="form2Example11" class="form-control" placeholder="Escriba su correo"id="validationCustom01"required/>  
                                <div class="invalid-feedback">
                                  Ingrese un correo valido usando @
                              </div>

                                </div>
                                
                                <div class="form-outline mb-4">
                                 
                                  <input type="password" name="password" id="form2Example22" class="form-control" placeholder="Ingrese su contraseña" id="validationCustom01"required/>
                                  <div class="invalid-feedback">
                                    por favor escriba su contraseña
                                </div>
                                  
                                </div>
              
                                <div class="text-center pt-1 mb-5 pb-1">

                                    <button class="btn btn-primary btn-lg" type="submit">INGRESAR</button>
                                  
                                </div>
                                <div class="text-center pt-1 mb-5 pb-1"><p><a class="link-opacity-75-hover" href="#">¿Olvidaste tu contraseña?</a></p></div>
              
                                <div class="d-flex align-items-center justify-content-center pb-4">
                                  
                                  <p class="mb-0 me-2">Aun no te has registrado?</p>
    
                                  <a class="btn btn-outline-primary"href="{{ route('register') }}" >REGISTRARSE</a>
                                </div>
              
                              </form>
                    </div>
                </div>
            </div>
        </div>
        </div>
    
    </main>
    
  <footer class="footer">
   
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>
 <script src="{{ asset('js/validacionInicio.js') }}"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>