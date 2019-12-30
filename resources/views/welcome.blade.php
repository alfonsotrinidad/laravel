<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
       
        </style>
    </head>
    <body>
       <div class="container">
                <ul class="nav navbar-light bg-light justify-content-end navbar-dark bg-primary">
             
                    <li class="nav-item">
                        <a href="{{route('productos')}}" class="nav-link">Productos</a>
                    </li>  
                    <li class="nav-item">
                        <a href="{{route('nosotros')}}" class="nav-link">Nosotros</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('usuarios.create')}}" class="nav-link">Contacto</a>
                    </li>
                </ul>
      
                
                <div>
                @yield('seccion')
                </div>

            <div>
            Footer
            </div>        
        </div>

    </body>
</html>
