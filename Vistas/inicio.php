<?php
        require_once('../modelo/obtenerusuario.php');
        $productos=new obtenerusuario();
        $datos=$productos->listar();    
    ?>
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
    <div >
    <br>
    <a class="texto" href="descripcion.php">
    <img src="../img/descripcion.png" width="30px" heigth="30px" alt="">
    Buscar por Descripción  </a>
    <a class="texto" href="precio.php">
    <img src="../img/precio.png" width="30px" heigth="30px" alt="">    
    Buscar por Precio  </a>
    <a class="texto" href="codigo.php">
    <img src="../img/codigo.png" width="30px" heigth="30px" alt="">        
    Buscar por Código  </a>
    <br>
    <br>
    <h1>Productos en Oferta</h1><br>
    <table class="tabla">
            <thead>
                <th>Codigo</th>
                <th>Descripcion</th>
                <th>Precio Venta</th>
                <th>Precio Oferta</th>
                <th>Oferta</th>
            </thead>
            <tbody>
                <?php foreach($datos as $data): ?>
                <tr>
                    <th><?= $data['codigo']; ?></th>
                    <td><?= $data['descripcion']; ?></td>
                    <td><?= number_format($data['precio_venta']); ?></td>
                    <td><?= number_format($data['precio_oferta']); ?></td>
                    <td><?= $data['oferta']; ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
    </table>
    </div>
</body>
</html>