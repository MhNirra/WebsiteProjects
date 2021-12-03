<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="daesti.css">
    <link rel="shortcut icon" href="https://cdn.discordapp.com/attachments/508726530248278028/882161966074966046/unknown.png">
    <script src="func.js"></script>
    <title>Mostrar Datos</title>
</head>
<body>
    <header>
        <ul>
            <li><a href="index.php">Volver</a></li>
        </ul>
    </header>
    <aside>
        <h1 class="titulop"> Mostrar datos</h1>
        <table class="tabla" border="1">
        <p>Ingresa el nombre para buscar: </p>
        <input class="anto" id="this" type="text">
        <input class="anto" id="bott" type="button" value="buscar">
        <p id="tomar">Total de personas por sexo</p>
        <input id="bot2" type="button" value="Calcular.">
            <thead>
                
                <tr>
                    <th>NoEmpleado</th>
                    <th>Apellido</th>
                    <th>Nombre</th>
                    <th>Nacimiento</th>
                    <th>Sexo</th>
                    <th>Sueldo</th>
                    <th>Departamento</th>
                    <th>Descripción</th>
                </tr>
            </thead>
            <tbody id="tablilla">
                <?php
                include("tabla.php");
                ?>
            </tbody>    
        </table>
    </aside>
    
</body>
</html>