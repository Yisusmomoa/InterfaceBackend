<?php

    session_start();


    $idprod=$_POST['idprod'];
    $nombreprod=$_POST['nombreprod'];
    $Cantidad=$_POST['Cantidad'];
    $data="";
    $nuevo=array(
        "idProd"=>$idprod,
        "nombreProd"=>$nombreprod, 
        "cantidadProd"=>$Cantidad
    );
     $_SESSION['s_usuario'][1][]=$nuevo;
     $data= $_SESSION['s_usuario'][1];
     //print json_encode($data);
    // echo "1,".count($_SESSION['s_usuario'][1]);

    


?>