<?php
include("conex.inc");
$conexion=conectar();

$consulta="SELECT * FROM empleados";
$muestra=mysqli_query($conexion, $consulta);

while($fila=mysqli_fetch_array($muestra)){
     echo "<tr>";
     echo "<td>".$fila['id']."</td>";
     echo "<td>".$fila['Apellido']."</td>";
     echo "<td>".$fila['Nombre']."</td>";
     echo "<td>".$fila['FechaNacimiento']."</td>";
     echo "<td>".$fila['Sexo']."</td>";
     echo "<td>".$fila['Sueldo']."</td>";
     echo "<td>".$fila['Departamento']."</td>";
     echo "<td>".$fila['descripcion']."</td>";
     echo "<td><a href='eliminar.php?id=".$fila['id']."'>Eliminar</a></td>";
     echo "</tr>";
}
?>