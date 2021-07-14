<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php
require_once "../includes/class_user.php";
$user_sistema = new Usuario();
$respuesta = $user_sistema->guardar_usuario(
    $_POST['nombre_user'], 
    $_POST['email_user'],
    $_POST['pass_user']
);
echo "<script>
Swal.fire(
    'Usuario Eliminado!',
    'El usuario quedo sin registro en su BD.',
    'success'
)
setTimeout('redireccion()', 2000);
function redireccion(){
    window.location = 'http://localhost/ProyectoFinal/Index.php';
}
</script>";