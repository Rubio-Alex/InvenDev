<?php
//registro de la seccion indexLog
include("conexionbd.php"); //nombre de la bd


if(isset($_POST['registrar'])){ //name registra ->input
    
    if(strlen($_POST['emProv']) >= 1 &&  //name de cada input del form
       strlen($_POST['nomProv']) >= 1 &&
       strlen($_POST['telProv']) >= 1 &&
       strlen($_POST['emaProv']) >= 1 ){

        $emprov = $_POST['emProv']; // creo el nom de las variables y las obtengo de name
        $nomprov = $_POST['nomProv'];
        $tel = $_POST['telProv'];
        $ema = $_POST['emaProv'];



        $inserta = "INSERT INTO proveedores(empProv, nomProv,  numProv,emailProv) 
        VALUES ('$emprov','$nomprov','$tel','$ema')";


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