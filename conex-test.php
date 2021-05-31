<?php
    $host = 'localhost';
    $usuariodb = 'root';
    $clabedb = '';
    $basededatos = 'prueba';
    
    $table_db1 = "usuarios";


    $conexion= new mysqli($host,$usuariodb,$clabedb,$basededatos);

    if($conexion->connect_errno){
        echo "No es posible la conexion";
        exit();
    }


?>