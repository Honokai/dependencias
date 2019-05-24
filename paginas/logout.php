<?php

if (!empty($_COOKIE)) {
    foreach ($_COOKIE as $name => $value) {
        unset($_COOKIE[$name]);
        setcookie($name, "", time() - 3600, '/');
    }
}

// Condição se logoff vier de timeout, encaminha para página diferente de login, devido a erro de cookie do laravel que se expira
if($_GET['logout'] == 'timeout'){
    header("Location: $env/dependencias/paginas/logoutview.php");
}else{
    header("Location: $env/login");
}

exit();