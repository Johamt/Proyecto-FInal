<?php

require_once "class_conexion.php";

class Usuario extends Conexion{
    private $nombre;
    private $trama;
    private $caps;
    private $conexion;
    function __construct()
    {
        $this->conexion = new Conexion();
        $this->conexion = $this->conexion->conexion_bd_notas();
    }

function guardar_anime($nombre_form, $trama_form, $capitulos_form){
        $this->nombre = $nombre_form;
        $this->email = $trama_form;
        $this->pass = $caps_form;

        $mi_consulta = "INSERT INTO tb_animes (nombre, trama, capitulos) VALUES (?,?,?)";
        $insert = $this->conexion->prepare($mi_consulta);
        $array_data_user = array(
            $this->nombre,
            $this->trama,
            $this->captulos
        );
        $insert->execute($array_data_user);
        return " Registro exitoso";
    }