<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand">
            <img src="assets/img/logo.png" width="200" height="50">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav nav-tabs mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="http://localhost/ProyectoFinal/Index.php">ホーム-Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        オプション-Options
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Action1</a>
                    <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Action2</a>
                    <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Action3</a>
                    </div>
                </li>                
                <li class="nav-item active">
                    <a class="nav-link" href="http://localhost/ProyectoFinal/Directory.php">ディレクトリ-directory <span class="sr-only">(current)</span></a>
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
        
        <p>
        <h1> Animes</h1>
        </p>
    
    <div class="card" style="width: 18rem;">
        <img src="assets/img/Kanojo mo Kanojo.jfif" class="card-img-top" >
        <div class="card-body">
            <p class="card-text">Kanojo mo Kanojo</p>
        </div>
    </div>
    <div class="card" style="width: 18rem;">
        <img src="..." class="card-img-top" alt="">
        <div class="card-body">
            <p class="card-text"></p>
        </div>
    </div>
    <div class="card" style="width: 18rem;">
        <img src="..." class="card-img-top" alt="">
        <div class="card-body">
            <p class="card-text"></p>
        </div>
    </div>
    <div class="card" style="width: 18rem;">
        <img src="..." class="card-img-top" alt="">
        <div class="card-body">
            <p class="card-text"></p>
        </div>
    </div>
        
        
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    
    
    </body>
</html>