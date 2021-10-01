<?php

session_start();
unset($_SESSION["s_usuario"]);
unset($_SESSION["s_usuario"][1]); //quitar si se pone muy complejo
session_destroy();
header("Location: ../html/index.php");

?>