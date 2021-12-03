<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="https://cdn.discordapp.com/attachments/508726530248278028/882161966074966046/unknown.png">
    <link rel="stylesheet" type="text/css" href="estilo.css">
    <title>MhNirra Website</title>
</head>
<body>
    <header>
        <nav>
            <h1 class="tituloH">Ficha</h1>
            <ul>
                <li><a href="datos.php" class="box">Datos empleados</a></li>
            </ul>
        </nav>
    </header>

    <main class="fondito">
        <h1 class="titulo">Ingrese datos</h1>

        <form class="formu"action="enviar.php" method="POST">
            <label>Nombre:</label>
            <input type="text" name="nombre"> <br><br>
            <label>Apellido:</label>
            <input type="text" name="apellido"><br><br>
            <label>Nacimiento: </label>
            <input type="date" name="nacimiento"><br><br>
            <label>Sexo: </label>
            <p><input type="radio" name="Sexo" class="circle" value="Masculino">Masculino</p>
            <p><input type="radio" name="Sexo" class="circle" value="Femenino">Femenino</p>
            <label>Sueldo: </label>
            <input type="number" name="Sueldo"><br><br>
            <label>Departamento: </label>
            <select name="Departamento" id="Departamento">
                            <option value="Finanzas">Finanzas</option>
                            <option value="Personal">Personal</option>
                            <option value="Producción">Producción</option>
                            <option value="Ventas">Ventas</option>
                            <option value="Mantención">Mantención</option>
                            <option value="Informática">Informática</option>
                            <option value="Deportes y Recreación">Deportes y Recreación</option>
                            <option value="Asesoría Legal">Asesoría Legal</option>
                            <option value="Publicidad y Marketing">Publicidad y Marketing</option>
                            <option value="Control de Producción">Control de Producción</option>
                        </select> <br> <br>
            <label>Descripción: </label>
            <input type="text" name="Descripcion"><br><br>
            <input type="submit">
        </form>
    </main>
    <br><br><br><br><br><br><br><br><br><br>
<footer>©Todos los derechos reservados para MhNirra.</footer>
</html>