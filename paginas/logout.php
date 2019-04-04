<?php

if (!empty($_COOKIE)) {
    foreach ($_COOKIE as $name => $value) {
        unset($_COOKIE[$name]);
        setcookie($name, "", time() - 3600, '/');
    }
}

header('Location: /dev/login');
exit;