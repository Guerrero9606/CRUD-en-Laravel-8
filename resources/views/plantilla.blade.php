<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="robots" content="index, follow">
        <title>@yield('titulo')</title>
        <link rel="stylesheet" href="{!! asset('css/style.css') !!}">
    </head>
    <body>
        <header>
            <nav class="nav--container">
                <ul>
                    <li> <a href="/">Inicio</a> </li>
                    <li> <a href="/productos">Productos</a> </li>
                    <li> <a href="/servicios">Servicios</a> </li>
                    <li> <a href="/contacto">Contacto</a> </li>
                </ul>
            </nav>
        </header>
       

        @yield('contenido')
    </body>
</html>