<html>
    <head>
        <title>Pagina Principal | Restaurante</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="../css/zonaRestaurante.css">
    </head>
    <body>
        <div class="nav"> 
            <!-- CONTROL DE SESIONES Y BOTONES -->
            <?php
                require_once '../controller/sessionController.php';
            ?>
        </div>

        <div class="subnav">
            <!-- SUBNAV CON LINK A LOS DIFERENTES ESPACIOS -->
            <a href='../view/CamareroV.php'>Camareros</a>
            <a href='../view/mantenimientoV.php'>Mantenimiento</a>
            <a href='../view/zonaRestaurante.php'>Proyecto</a>
            
        </div>
   
</body>