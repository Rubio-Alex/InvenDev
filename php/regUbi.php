<?php

include("conexionbd.php"); //conexion a la bd


if(isset($_POST['registrar'])){ //name registra ->input
    
    if(strlen($_POST['nomUbi']) >= 1){

        $nomubi = $_POST['nomUbi']; // creo el nom de las variables y las obtengo de name

        $inserta = "INSERT INTO ubicacion(nomUbicacion) VALUES ('$nomubi')";


       // "INSERT INTO registro(nomUsuario,password) VALUES ('$usuario',' $password')"; inserto en la tabla registro de la bd


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