<?php
if(isset($_POST['btn1'])){
    include("conex-test.php");

    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $correo = $_POST['correo'];
    $mensaje = $_POST['mensaje'];

    if (mysqli_query($conexion,"INSERT INTO usuarios(nombre,apellido,correo,mensaje) values ('$nombre','$apellido','$correo','$mensaje')"))
    echo "insertado correctamente";

    else{
        echo "Hubo un error";
    }

    // Datos para el correo
    $destinatario = "sebamercado73@gmail.com";
    $asunto = "Contacto desde nuestra web";
    $carta = "De: $nombre \n";
    $carta ="De: $apellido \n";
    $carta .= "Correo: $correo \n";
    $carta .= "Mensaje: $mensaje";
    
    // Enviando Mensaje
    mail($destinatario, $asunto, $carta);
    header('Location:mensaje-de-envio.html');

    include("cerrar-conexion.php");
}

?>