<?php 

include 'connection.php';

$name = $_POST['name'];
$login = $_POST['login'];
$emai = $_POST['email'];
$password = $_POST['password'];
$password_config = $_POST['password_config'];
$complite = $_POST['complite'];

function addUser($users, $name, $login, $email, $password) {
    $nextUserIndex = count($users);
    $users->addChild('user');
    $users->user[$nextUserIndex]->addChild('name', $name);
    $users->user[$nextUserIndex]->addChild('login', $login);
    $users->user[$nextUserIndex]->addChild('email', $email);
    $users->user[$nextUserIndex]->addChild('password', $password);
    return true;
}


function validateUser($users, $login, $email){
    foreach ($users->user as $item) {
        if ($item->login != $login) {
            if ($item->email != $email) {               
                return true;
            }

            else{
                echo 'This email already use';  
                return false;              
            }
        }

        else{
            echo 'This login already use';
            return false;
        }
    }    
}

if(isset($complite) && $name!='' && $login!='' && $email!='' && $password!='' && $password_config!=''){    
    if($password==$password_config){  
        if(validateUser($users, $login, $email)){             
            $bytes = random_bytes(5);
            $salt = md5($bytes);
            $password_hash = $salt.md5($password);       
                
            if(addUser($users, $name, $login, $email, $password_hash)){
                header('Location: signin.php');
            }
        }
    }
    else{
        echo 'Passwords mismatch';
    }
}

else{
    echo 'Please, fill all fields!';
}
?>