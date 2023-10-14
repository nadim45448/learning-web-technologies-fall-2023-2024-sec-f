<?php

    $userName = $_REQUEST['username'];
    $password = $_REQUEST['password'];

    $isUserNameValid = true;
    $isPasswordValid = true;
    
    
    if(strlen($userName) < 2){
        $isUserNameValid = false;
        echo 'User Name must contain atleat two(2) Characters '<br>;
    }
    
    for($i = 0; $i < strlen($userName) ; $i++){
        if( !(ord($userName[$i]) >= 65 && ord($userName[$i]) <= 90) && !(ord($userName[$i]) >= 97 && ord($userName[$i]) <= 122) && $userName[$i] != '-' && $userName[$i] != '.' && $userName[$i] != '_' ){
            $isUserNameValid = false;
            echo 'User name can contain alpha numeric characters, period, dash or underscore only';
            break;
        }
        
    }
    
    
    
    if(strlen($password) < 8){
        $isPasswordValid = false;
        echo ' Password must not be less than eight (8) characters <br>';
    }
    if(!str_contains($password, '@') && !str_contains($password, '#') && !str_contains($password, '$') && !str_contains($password, '%')){
        $isPasswordValid = false;
        echo 'Password must contain at least one of the special character (@, #, $, %) <br>';
    }


    if($isUserNameValid && $isPasswordValid) {
        echo 'Valid User';
    }
    else{
        echo 'Invalid User';

    }

?>
