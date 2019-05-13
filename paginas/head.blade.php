<?php
    $url = $_GET['url'];
    $push = $_GET['push'];
?>
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Sistemas Ladetec</title>
    <link rel="stylesheet" type="text/css" href="<?php echo $url; ?>/<?php echo $push; ?>dependencias/css_js/bootstrap/4.2.1/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $url; ?>/<?php echo $push; ?>dependencias/css_js/personalizacoes/css.php">
    <link rel="stylesheet" href="<?php echo $url; ?>/<?php echo $push; ?>dependencias/css_js/fontawesome/5.5.0/fontawesome.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <script src="<?php echo $url; ?>/<?php echo $push; ?>dependencias/css_js/popper/1.14.7/popper.js"></script>
    <script src="<?php echo $url; ?>/<?php echo $push; ?>dependencias/css_js/ajax/3.3.1/jquery.js"></script>
    <link href="<?php echo $url; ?>/<?php echo $push; ?>dependencias/css_js/select2/4.0.5/select2.min.css" rel="stylesheet" />
    <script src="<?php echo $url; ?>/<?php echo $push; ?>dependencias/css_js/select2/4.0.5/select2.min.js"></script>

</head>
<body>
