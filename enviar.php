<?php
include("conex.inc");
$conexion=conectar();

$nombre=$_POST["nombre"];
$apellido=$_POST["apellido"];
$nacimineto=$_POST["nacimiento"];
$sexo=$_POST["Sexo"];
$sueldo=$_POST["Sueldo"];
$departamento=$_POST["Departamento"];
$descripcion=$_POST["Descripcion"];

$consulta="INSERT INTO empleados (Nombre, Apellido, FechaNacimiento, Sexo, Sueldo, Departamento, descripcion) VALUES ('$nombre', '$apellido', '$nacimineto', '$sexo', '$sueldo', '$departamento', '$descripcion')";

$resultado=mysqli_query($conexion, $consulta);

if($resultado){
    echo "Datos Guardados";
}else{
    echo "Datos no guardados";
}
echo "<script> alert('Formulario enviado'); location.href='index.php'</script>";
?>