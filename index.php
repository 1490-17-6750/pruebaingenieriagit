<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/estilos.css">
    <script src="./js/validar.js"></script>
</head>
<body>
    <div class="navegacion">
    <a class="navbar-brand"><img src="./img/tienda.png" width="50px" height="50px" alt="">Los Buenos Precios </a>
    <a class="navbar-brand" href="index.php">Login </a>
        <div class="navegacion-large">
            <ul>
                
            </ul>

        </div>
    </div>
    <div class="principal">
        <br>
        <form action="./Controlador/usuario.php" method="POST" onsubmit="return formulario();"> 
        <h1 align="center">Inicio de Sesion</h1>
        <input type="text" placeholder="Usuario" id="usuario" name="usuario">
        <input type="password" placeholder="Contraseña" id="contra" name="contra" >
        <input type="submit" value="Iniciar Sesion">    
    </form>
    </div>
</body>
</html>