<?php

$login = $_POST['login'];
$password = $_POST['password'];

if(isset($login) && isset($password)){
    $result = array(
    	'login' => $login,
        'password' => $password       
    ); 
    echo json_encode($result); 
}
?>


