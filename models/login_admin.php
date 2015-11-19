<?php

function login_admin($username, $password)
{
    $username = 'admin';
    $password = 'pass';


    if (isset($_SERVER['PHP_AUTH_USER']) && isset($_SERVER['PHP_AUTH_PW']))
    {
        if ($_SERVER['PHP_AUTH_USER'] == $username && $_SERVER['PHP_AUTH_PW'] == $password)
        {
            echo "Регистрация прошла успешно<br>";
        }
        else 
        {
            die("Неверная комбинация имя пользователя–пароль.");

        }
        
    }
    
    else
    {
    header('WWW-Authenticate: Basic realm="Restricted Section"');
    header('HTTP/1.0 401 Unauthorized');
    die ("Пожалуйста, введите имя пользователя и пароль");
    }
}

?>