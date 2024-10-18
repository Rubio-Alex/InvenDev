<?php
include('conexionbd.php');
$usuario=$_POST['usuario'];
$contraseña=$_POST['pass'];
session_start();
$_SESSION['usuario']=$usuario;


$conexion=mysqli_connect("localhost","root","","inventariogs");

$consulta="SELECT * FROM registro WHERE nomUsuario='$usuario' AND pass='$contraseña'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas){

 // include("../php/indexLog.php");

}else{
  ?>
  <?php
  include("../index/indexPrin.html");

?>
<h1 class="bad">ERROR DE AUTENTIFICACION</h1>
<?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);
?>