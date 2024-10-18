<?php
//registro de la seccion indexLog
include("conexionbd.php"); //nombre de la bd


if(isset($_POST['registrar'])){ //name registra ->input
    
    if(strlen($_POST['nomProducto']) >= 1 &&  //name de cada input del form
       strlen($_POST['desProducto']) >= 1 &&
       strlen($_POST['marProducto']) >= 1 &&
       strlen($_POST['categoria']) >= 1 &&
       strlen($_POST['preComProduc']) >= 1 &&
       strlen($_POST['preVenProduc']) >= 1 &&     
       strlen($_POST['prove']) >= 1 && 
       strlen($_POST['stockProduc']) >= 1 && 
       strlen($_POST['stocMinProduc']) >= 1 && 
       strlen($_POST['ubica']) >= 1){

        $nomProducto = $_POST['nomProducto']; // creo el nom de las variables y las obtengo de name
        $desProducto = $_POST['desProducto'];
        $marProducto = $_POST['marProducto'];
        $IdCat = $_POST['categoria'];
        $preComProduc = $_POST['preComProduc'];
        $preVenProduc = $_POST['preVenProduc'];
        $prov = $_POST['prove'];
        $stockProduc = $_POST['stockProduc'];
        $stocMinProduc = $_POST['stocMinProduc'];
        $IdUbicacion = $_POST['ubica'];


        $inserta = "INSERT INTO productos(nomProduc, desProduc, marProduc, catProduc, pCompra, pVenta, emProve, stock, stockMin, ubicacion) 
        VALUES ('$nomProducto','$desProducto','$marProducto','$IdCat','$preComProduc',' $preVenProduc','$prov','$stockProduc','$stocMinProduc','$IdUbicacion')";

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