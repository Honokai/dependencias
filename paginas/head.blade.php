<?php
    $url = $_GET['url'];
    $push = $_GET['push'];
?>
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-143362354-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-143362354-1');
    </script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Sistemas Ladetec</title>
    <link rel="stylesheet" type="text/css" href="https://<?php echo $_SERVER['HTTP_HOST']; ?>/dependencias/css_js/bootstrap/4.2.1/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://<?php echo $_SERVER['HTTP_HOST']; ?>/dependencias/css_js/personalizacoes/css.php">
    <link rel="stylesheet" href="https://<?php echo $_SERVER['HTTP_HOST']; ?>/dependencias/css_js/fontawesome/5.11.2/css/all.css">
    <script src="https://<?php echo $_SERVER['HTTP_HOST']; ?>/dependencias/css_js/popper/1.14.7/popper.js"></script>
    <script src="https://<?php echo $_SERVER['HTTP_HOST']; ?>/dependencias/css_js/ajax/3.3.1/jquery.js"></script>
    <link href="https://<?php echo $_SERVER['HTTP_HOST']; ?>/dependencias/css_js/select2/4.0.11/select2.min.css" rel="stylesheet" />
    <script src="https://<?php echo $_SERVER['HTTP_HOST']; ?>/dependencias/css_js/select2/4.0.11/select2.min.js"></script>
    <script src="https://<?php echo $_SERVER['HTTP_HOST']; ?>/dependencias/css_js/mask/1.14.10/jquery.mask.min.js"></script>
    <script src="https://<?php echo $_SERVER['HTTP_HOST']; ?>/dependencias/css_js/bootstrap/bootstrap.js"></script>
</head>
<body>