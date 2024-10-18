<?php
//registro de la seccion indexLog
include("conexionbd.php"); //nombre de la bd


if(isset($_POST['registrar'])){ //nom del born Registra
    
    if(strlen($_POST['usuario']) >= 1 && 
       strlen($_POST['password'] >= 1)){

        $usuario = $_POST['usuario']; // creo el nom de las variables y las obtengo de name
        $password = $_POST['password'];
        $inserta = "INSERT INTO registro(nomUsuario,pass) VALUES ('$usuario',' $password')"; //inserto en la tabla registro de la bd
        $result = mysqli_query($conexion,$inserta);
        if($result){
            ?>
            <h3 class="edit1">REGISTRO EXITOSO</h3>
            <?php
        } 
    }else{
        ?>
        <h3 class="edit2">REGISTRO DENEGADO</h3>
  
        <?php

    }
}





?>