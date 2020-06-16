<?php

$name = $_POST['name'];
$login = $_POST['login'];
$emai = $_POST['email'];
$password = $_POST['password'];
$password_config = $_POST['password_config'];

if(isset($name) && isset($login) && isset($email) && isset($password) && isset($password_config)){
    $result = array(
    	'name' => $name,
        'login' => $login,
        'email' => $email,
        'password' => $password       
    ); 
    echo json_encode($result); 
}
?>


