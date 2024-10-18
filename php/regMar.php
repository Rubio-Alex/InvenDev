<?php
//registro de la seccion indexLog
include("conexionbd.php"); //nombre de la bd


if(isset($_POST['registrar'])){ //nom del born Registra
    
    if(strlen($_POST['nomMar']) >= 1 ){

 // creo el nom de las variables y las obtengo de name
        $marca = $_POST['nomMar'];
        
        $inserta = "INSERT INTO marca(nomMarca) VALUES ('$marca')"; //inserto en la tabla registro de la bd
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

