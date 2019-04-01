<?php

unset($_COOKIE['setor']);
setcookie('setor', null, -1, '/');
unset($_COOKIE['usuario']);
setcookie('usuario', null, -1, '/');
unset($_COOKIE['area']);    
setcookie('area', null, -1, '/');
unset($_COOKIE['XSRF-TOKEN']);    
setcookie('XSRF-TOKEN', null, -1, '/');
unset($_COOKIE['laravel_session']);    
setcookie('laravel_session', null, -1, '/');

unset($_COOKIE['setores0']);    
setcookie('setores0', null, -1, '/');
unset($_COOKIE['setores1']);    
setcookie('setores1', null, -1, '/');
unset($_COOKIE['setores2']);    
setcookie('setores2', null, -1, '/');
unset($_COOKIE['setores3']);    
setcookie('setores3', null, -1, '/');
unset($_COOKIE['setores4']);    
setcookie('setores4', null, -1, '/');
unset($_COOKIE['setores5']);    
setcookie('setores5', null, -1, '/');
unset($_COOKIE['setores6']);    
setcookie('setores6', null, -1, '/');
unset($_COOKIE['setores7']);    
setcookie('setores7', null, -1, '/');
unset($_COOKIE['setores8']);    
setcookie('setores8', null, -1, '/');
unset($_COOKIE['setores9']);    
setcookie('setores9', null, -1, '/');
unset($_COOKIE['setores10']);    
setcookie('setores10', null, -1, '/');
unset($_COOKIE['setores11']);    
setcookie('setores11', null, -1, '/');
unset($_COOKIE['setores12']);    
setcookie('setores12', null, -1, '/');
unset($_COOKIE['setores13']);    
setcookie('setores13', null, -1, '/');
unset($_COOKIE['setores14']);    
setcookie('setores14', null, -1, '/');
unset($_COOKIE['setores15']);    
setcookie('setores15', null, -1, '/');

header('Location: /login');
exit;