<?php
$retiraSistema = preg_replace('/(\.\w+)+/', '', $_SERVER['SERVER_NAME']);

$dominio = preg_replace('/('.$retiraSistema.')+/', '', $_SERVER['SERVER_NAME']);

header("Location: https://login".$dominio."/deslogar");

exit();