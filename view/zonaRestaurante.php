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
            <a href='../view/zonaRestaurante.php?espacio=VIPs'>VIPs</a>
            <a href='../view/zonaRestaurante.php?espacio=Terraza'>Terraza</a>
            <a href='../view/zonaRestaurante.php?espacio=Comedor'>Comedor</a>
            
        </div>
        
            
        <?php
        include_once '../model/mesaDAO.php';

        // INSTANCIAMOS LA CLASE MESADAO PARA PODER USAR SUS METODOS
        $mesaDAO = new MesaDAO();
        echo "<table id='table' style='margin-left: auto;margin-right: auto;border-spacing: 55px'>";
        echo "<tbody>";
        echo $mesaDAO->getMesas();
        echo "</table>";

        // CONTROLAMOS QUE VARIABLES ESTAN INICIALIZADAS Y SEGÚN ESTO, LLAMAMOS AL METODO CORRESPONDIENTE
        // EL CUAL CONTROLA EL CONTENIDO DE LA TABLA
        if(isset($_REQUEST['id_mesa'])) {
            if($_REQUEST['disp_mesa'] == "Libre") {
                $mesaDAO->updateSalida();
            } else if ($_REQUEST['disp_mesa'] == "Ocupada") {
                $mesaDAO->updateEntrada();
            } else {
                $mesaDAO->fixMesa();
            }
        }
        ?>

        </tbody>
        </table>
    </body>
</html>