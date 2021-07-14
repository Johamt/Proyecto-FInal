<?php

require_once "class_conexion.php";

class Usuario extends Conexion{
    private $nombre;
    private $email;
    private $pass;
    private $conexion;

    function __construct()
    {
        $this->conexion = new Conexion();
        $this->conexion = $this->conexion->conexion_bd_notas();
    }

    function guardar_usuario($nombre_form, $email_form, $pass_form){
        $this->nombre = $nombre_form;
        $this->email = $email_form;
        $this->pass = $pass_form;

        $mi_consulta = "INSERT INTO tb_usuarios (nombre, email, pass) VALUES (?,?,?)";
        $insert = $this->conexion->prepare($mi_consulta);
        $array_data_user = array(
            $this->nombre,
            $this->email,
            $this->pass
        );
        $insert->execute($array_data_user);
        return " Registro exitoso";
    }
    
    function listar_usuario_x_id($id_usuario_bonito){
        $gato_consulta = "SELECT * FROM tb_usuario WHERE id = ?";
        $consulta = $this->conexion->prepare($gato_consulta);
        $data_user = array($id_usuario_bonito);
        $consulta->execute($data_user);
        $resultado  = $consulta->fetch(PDO::FETCH_ASSOC);
        return $resultado;
    }

    function actualiza_usuario($id, $nombre, $email, $pass){
        $this->nombre = $nombre;
        $this->nickname = $email;
        $this->email = $pass;
        $query_update = "UPDATE tb_usuarios SET nombre = ?, email = ?, pass = ? WHERE id = $id";
        $update = $this->conexion->prepare($query_update);
        $array_update = array(
            $this->nombre,
            $this->email,
            $this->pass
        );
        $respuesta = $update->execute($array_update);
        return $respuesta;
    }
    function eliminar_usuario($id){
        $query_delete = "DELETE FROM tb_usuarios WHERE id = ?";
        $delete = $this->conexion->prepare($query_delete);
        $array_delete = array($id);
        $delete = execute($array_delete);
        return "
        <script>
        Swal.fire(
            'El dato fue eliminado',
            'success'
        )
        </script>
        ";        
    }

}
