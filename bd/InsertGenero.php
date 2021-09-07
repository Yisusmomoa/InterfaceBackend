<?php

include_once "conexion.php";
$objeto= new Conexion();
$conexion=$objeto->Conectar();


$usuario=(isset($_POST['usuario'])) ? $_POST['usuario'] : '';