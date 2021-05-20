<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CLIENTES</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h3>Cliente: Listado</h3>
        <ul class="list-group">
            <li class="list-group-item">Procesador</li>
            <li class="list-group-item">RAM</li>
            <li class="list-group-item">Tarjeta Grafica</li>
            <li class="list-group-item">SSD</li>
            <li class="list-group-item">HDD</li>
        </ul>

        <h3>Cliente: Listado con el Data</h3>
        <ul class="list-group">
            @foreach ($data as $item)
                <li class="list-group-item">{{ $item }}</li>
            @endforeach
        </ul> 

        <input class="btn btn-primary" type="submit" value="GUARDAR">
        <input class="btn btn-secundary" type="submit" value="EDITAR">
        <input class="btn btn-success" type="submit" value="BUSCAR">
        <input class="btn btn-danger" type="submit" value="ELIMINAR">
    </div>
</body>
</html>