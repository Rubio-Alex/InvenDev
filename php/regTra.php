<?php
//registro de la seccion indexLog
include("conexionbd.php"); //nombre de la bd


if(isset($_POST['registrar'])){ //name registra ->input
    
    if(strlen($_POST['nomPro']) >= 1 &&  //valor del input
        strlen($_POST['tipoTra']) >= 1 &&
        strlen($_POST['cant']) >= 1 &&
        strlen($_POST['fec']) >= 1 &&
        strlen($_POST['hrs']) >= 1 ){

        $nompro = $_POST['nomPro'];
        $tipotra = $_POST['tipoTra'];
        $canti = $_POST['cant'];
        $fecha = $_POST['fec']; // creo el nom de las variables y las obtengo de name
        $hrs = $_POST['hrs'];

        $inserta = "INSERT INTO transacciones(nomPro , tipoTra , cant,fec,hrs) VALUES ('$nompro','$tipotra','$canti','$fecha','$hrs')";


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