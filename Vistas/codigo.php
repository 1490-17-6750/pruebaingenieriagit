<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/estilos.css">
    <script src="../js/validar.js"></script>
</head>
<body>
    <div class="navegacion">
    <a class="navbar-brand">
        <img src="../img/tienda.png" width="50px" height="50px" alt=""> Los Buenos Precios </a>
    <a class="navbar-brand" href="inicio.php">Inicio </a>
        <div class="navegacion-large">
            <ul>
                
            </ul>

        </div>
    </div>
    <div class="principal">
    <br>
        <form action="./productos_codigo.php" method="POST" onsubmit="return codigo();"> 
        <h1 align="center">Buscar por codigo</h1>
        <input type="text" placeholder="Ingrese codigo" id="buscar" name="buscar">
        <input type="submit" value="Buscar">    
    </div>
</body>
</html>