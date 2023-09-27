<?php
function generate_Password ($length){

    
    $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()-_+=';
    $password = "";

    for ($i=0; $i <=$length ; $i++) { 
        $password .= $characters[rand(0, strlen($characters)-1)];
    }
    return $password;
}

echo generate_Password(11);
