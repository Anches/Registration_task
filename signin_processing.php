<?php

session_start();
include 'connection.php';

$login = $_POST['login'];
$password = $_POST['password'];
$complite = $_POST['complite'];
$logout = $_POST['logout'];

function checkUser($users, $login, $password) {
    foreach ($users->user as $item) {
        echo $item->login;
        if ($item->login == $login) {
            if ($item->password == $password){               
                echo 'hello, '.$item->name;
                return true;               
            }

            else{
                echo 'invalid password';
                return false;
            }
        }
    }

    echo 'User not found';    
    return false;
}

if(isset($complite) && $login!='' && $password!=''){

    setcookie("login_cook", $login, time()+3600);
    setcookie("password_cook", $password, time()+3600);

    $password_hash = $_SESSION['salt'].md5($password);
    if(checkUser($users, $login, $password)){
        $_SESSION['login'] = $item->login;
    }
}

else{
    echo 'Please, fill the field';
}



?>