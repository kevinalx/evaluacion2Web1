<?php
include('BaseDeDatos.php');

//validar que se hizo clic en el boton
if(isset($_POST["btnEliminar"])){

    //1.objeto de la clase BaseDatos
    $operacionEnBaseDeDatos= new BaseDatos();

    //2.recibir el dato del formulario
    $nombre=$_POST["nombreEliminar"];

    //3.consulta para eliminar
    $consulta= "DELETE FROM usuario WHERE nombre='$nombre'";

    //4.utilizar metodo alterar
    $resultado=$operacionEnBaseDeDatos->alterarBaseDatos($consulta);
    echo("<br>");
    echo("se elimino correctamente");
}else{
    echo("no se hizo clic en el boton");
}
?>