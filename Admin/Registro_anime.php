<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand">
            <img src="../assets/img/logo.png" width="200" height="50">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav nav-tabs mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="http://localhost/ProyectoFinal/Index.php">ホーム-Home <span class="sr-only">(current)</span></a>
                </li>                
                <li class="nav-item active">
                    <a class="nav-link" href="http://localhost/ProyectoFinal/Directory.php">ディレクトリ-Directory <span class="sr-only">(current)</span></a>
                </li>
            </ul>  
            <ul class="navbar-nav nav-tabs mr-auto">
                <li class="nav-item active">
                    <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="search" placeholder="Anime a buscar" aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">探す-Buscar</button>
                    </form>
                </li>
            </ul>                  
        </div>
    </nav>
    <div class="container">
        <form method="POST" action="../Processes/form_registro_anime.php">
            <div class="form-group">
                <label for="nombre_anime">Nombre</label>
                <input type="text" class="form-control" id="nombre_anime" name="nombre_anime">
            </div>
            <div class="form-group">
                <label for="trama_anime">Trama</label>
                <input type="text" class="form-control" name="trama_anime" id="trama_anime">
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="caps_user">Capitulos</label>
                    <input type="number" class="form-control" name="caps_user" id="caps_user">
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Registrar</button>
        </form>
        
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
</body>
</html>