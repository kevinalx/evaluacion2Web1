<?php
include('BaseDeDatos.php');


//validar que se hizo clic en el boton consultar
if(isset($_POST["btnBuscar"])){

    //1.crear objeto
    $operacionEnBaseDeDatos= new BaseDatos();

    //2.recibir dato
    $nombre=$_POST["nombreBuscar"];
    echo($nombre);

    //3.crear consulta para agregar datos
    $consulta="SELECT Nombre, Correo, password FROM usuario WHERE nombre='$nombre'";

    //4.utilizar el metodo consultarbasededatos
    $resultado=$operacionEnBaseDeDatos->consultarEnBaseDatos($consulta);
    echo("<br>");
    print_r(json_encode($resultado));
    echo("<br>");
}else{
    echo("haga clic en el boton");
}



?>