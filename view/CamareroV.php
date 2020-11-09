<?php
include_once '../model/camareroDAO.php';
$camareroDAO = new CamareroDAO();
        echo "<table id='table' style='margin-left: auto;margin-right: auto;border-spacing: 55px'>";
        echo "<tbody>";
        echo $camareroDAO->mostrarCamarero();
        echo "</table>";