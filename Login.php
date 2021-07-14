<!doctype html>
<html lang="es">

<head>
    <title>Login sistema</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
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
                        <a class="dropdown-item" href="Login.php">Ingresa</a>
                    <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="Registro.php">Registrate</a>
                    </div>
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
        <div class="row d-flex justify-content-center align-items-center" style="margin: 10% 20%">
            <div class="col-12 p-3 mb-5 bg-white rounded">
                <h1 class="text-center">INGRESO</h1>
                <form action="login.php" method="POST" class="m-4">
                    <div class="form-group">
                        <label for="correo_user">Correo</label>
                        <input type="email" class="form-control" name="email_user" id="email_user">
                    </div>
                    <div class="form-group">
                        <label for="contraseña_user">Contraseña</label>
                        <input type="password" class="form-control" name="contraseña_user" id="contraseña_user">
                    </div>
                    <span>
                        <?php
                        //manera 1
                        // if(isset($_GET['e'])){
                        //     echo $_GET['e'];
                        // }

                        //manera 2
                        echo (isset($_GET['e'])) ? $_GET['e'] : "";
                        
                        ?>
                    </span>
                    <button type="submit" class="btn btn-primary btn-block">Ingresar</button>
                </form>
            </div>
        </div>
    </div>

    <?php
    if($_POST){
        session_start();
        require_once "includes/class_conexion.php";
        $conex = new Conexion();
        $conex_login = $conex->conexion_bd_notas();
        $conex_login->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $usuario_form = $_POST['correo_user'];
        $pass_user = $_POST['pass_user'];


        $sql = "SELECT * FROM tb_usuario WHERE correo = :usuario AND pass = :pass";
        $query = $conex_login->prepare($sql);
        $query->bindParam(':usuario', $usuario_form);
        $query->bindParam(':pass', $pass_user );
        $query->execute();

        $usurio_data = $query->fetch(PDO::FETCH_ASSOC);

        if( $usurio_data){
            $_SESSION['id'] = $usurio_data['id_usuario'];
            $_SESSION['id_rol'] =  $usurio_data['id_rol'];
            header("location: admin.php");
        }else{
            $error_login = "Usuario y/o contraseña invalida";
            header("location: login.php?e=".$error_login );
        }

    }
    
    ?>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>