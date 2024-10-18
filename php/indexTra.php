<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/styleInv.css">
    <title>Guitar Shop</title>
</head>
<body>
  <header class="header">
    <div class="logo">
        <img src="../img/logo.png" alt="Logo de la marca">
        
    </div>
    <P class="guitar">Registro de Inventario</P>
    <nav>
        
       <ul class="nav-links">
            <li><a href="../index/indexPri.html">Inicio</a></li>
            <li><a href="../php/indexLog.php">Registro</a></li>
       </ul>            
    </nav>
</header>
  <section class="form-register">
    <h4>Registro Transaccion</h4>
  
    <form method="post">

    <input class="controls" type="text" placeholder="Nombre del Producto" name="nomPro">

    <input class="controls" type="text" placeholder="Tipo de Transaccion" name="tipoTra">

    <input class="controls" type="number" placeholder="Cantidad" name="cant">
  
    <input class="controls" type="date" placeholder="Fecha" name="fec">
  
    <input class="controls" type="time" placeholder="Hora" name="hrs">
 
  

  <input class="botons" type="submit" value="Registrar" name="registrar">

  </form>

</section> 

<?php
      include("regTra.php")
?>

</body>
</html>






