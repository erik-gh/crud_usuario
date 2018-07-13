<?php

//Traemos la clase usuario.modelo
require_once '../models/Usuario.model.php';

$objUsuario = new UsuarioModel();

$idUser = !empty($_POST['hiddenUserId']) ? $_POST['hiddenUserId'] : null;

switch ($_GET["opt"]) {

    case 'saveUser':
        $firstNameUser = isset($_POST['first_name']) ? $_POST['first_name'] : null;
        $lastNameUser = isset($_POST['last_name']) ? $_POST['last_name'] : null;
        $emailUser = isset($_POST['email']) ? $_POST['email'] : null;
        $objUsuario->saveUsuario($firstNameUser, $lastNameUser, $emailUser, $idUser);
        break;

    case 'readUsers':
        $array_listUsers = $objUsuario->readUsuarios();
        $dataTable = [];
        foreach ($array_listUsers as $key) {
            $dataTable[] = [
                "0" => $key->id_user,
                "1" => $key->first_name,
                "2" => $key->last_name,
                "3" => $key->email,
                "4" => "<button onclick='getUserDetails(" . $key->id_user . ")' class='btn btn-warning'>Actualizar</button>",
                "5" => "<button onclick='deleteUser(" . $key->id_user . ")' class='btn btn-danger'>Eliminar</button>"
            ];
        }
        $results = array("aaData" => $dataTable);
        echo json_encode($results);
        break;

    case 'deleteUser':
        $objUsuario->deleteUsuario($idUser);
        break;

    case 'detailsUser':
        $det_usuario = $objUsuario->detailsUsuario($idUser);
        echo json_encode($det_usuario);
        break;
}
?>