<?php
include_once '../../dao/users.php';
$usersDAO = new Users();
$aUsers = array();
$usersSelected = $usersDAO->select();
foreach($usersSelected as $row){
    array_push($aUsers,$row);
} 
echo json_encode($aUsers);
?>
