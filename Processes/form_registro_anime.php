<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php
require_once "../includes/class_user.php";
$user_sistema = new Usuario();
$respuesta = $user_sistema->guardar_anime(
    $_POST['nombre_anime'], 
    $_POST['trama_anime'],
    $_POST['caps_anime']
);
echo "<script>
Swal.fire(
    'Anime Registrado!',
    'El anime ha sido registrado en su BD.',
    'success'
)
setTimeout('redireccion()', 2000);
function redireccion(){
    window.location = 'http://localhost/ProyectoFinal/User_loged.php';
}
</script>";