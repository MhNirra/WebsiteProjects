<?php
function conectar(){
    $conexion=mysqli_connect("127.0.0.1","mneira", "21270499","mneira");
    $conexion->set_charset("utf8");
    if($conexion){
        return $conexion;
        
    }
    else{
        echo "Error al conectar a la BD";
    }
    
}
?>