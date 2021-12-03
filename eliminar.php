<?php
include("conex.inc");
$conexion=conectar();

$id=$_GET['id'];

$consulta="DELETE FROM empleados WHERE id='$id'";
$borrar=mysqli_query($conexion, $consulta);

if($borrar){
    echo "Datos eliminados";
}else{
    echo "Datos no eliminados";
}
echo "<script> alert('Datos eliminados'); location.href='datos.php'</script>";
?>