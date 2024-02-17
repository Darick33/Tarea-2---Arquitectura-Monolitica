<?php
/*TODO: Requerimientos */
require_once("../config/cors.php");
require_once("../models/rol.models.php");
error_reporting(0);

$Rol = new Rol;
switch ($_GET["op"]) {
        
    case 'todos':
        $datos = array();
        $datos = $Rol->todos();
        while ($row = mysqli_fetch_assoc($datos)) {
            $todos[] = $row;
        }
        echo json_encode($todos);

        break;
       
    case 'uno':
        $idAccesos = $_POST["idAccesos"];
        $datos = array();
        $datos = $Sucursal->uno($idAccesos);
        $res = mysqli_fetch_assoc($datos);
        echo json_encode($res);
        break;
      
}
