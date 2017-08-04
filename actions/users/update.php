<?php
include_once '../../dao/users.php';
$usersDAO = new Users();

$id = $_GET['id'];
$putValues = $_POST;

$return = [];
if($usersDAO->update($id, $putValues)){
    $return['successMsg'] = 'Usuário atualizado com sucesso!';
}else{
    $return['errorMsg'] = 'Falha ao atualizar o usuário';
}
echo json_encode($return);

?>