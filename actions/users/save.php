<?php 
include_once '../../dao/users.php';
$usersDAO = new Users();

$msg = [];
if($usersDAO->insert($_POST)){
    $msg['successMsg'] = 'Usuário salvo com sucesso!';
}else{
    $msg['errorMsg'] = 'Não foi possível salvar o usuário!';
}
echo json_encode($msg);

?>