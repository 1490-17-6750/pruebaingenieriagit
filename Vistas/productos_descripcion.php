<?php
    $cadena=$_POST['buscar'];
    require_once('../modelo/obtenerusuario.php');
    $productos=new obtenerusuario();
    $datos=$productos->descripcion($cadena);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Busqueda</title>
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
    <div>
    <br>
    <h1>Resultado de la busqueda <?= $cadena?></h1><br>
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