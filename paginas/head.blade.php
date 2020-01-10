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
    <link rel="stylesheet" type="text/css" href="<?php echo $url; ?>/<?php echo $push; ?>dependencias/css_js/bootstrap/4.2.1/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $url; ?>/<?php echo $push; ?>dependencias/css_js/personalizacoes/css.php">
    <link rel="stylesheet" href="<?php echo $url; ?>/<?php echo $push; ?>dependencias/css_js/fontawesome/5.11.2/css/all.css">
    <script src="<?php echo $url; ?>/<?php echo $push; ?>dependencias/css_js/popper/1.14.7/popper.js"></script>
    <script src="<?php echo $url; ?>/<?php echo $push; ?>dependencias/css_js/ajax/3.3.1/jquery.js"></script>
    <link href="<?php echo $url; ?>/<?php echo $push; ?>dependencias/css_js/select2/4.0.5/select2.min.css" rel="stylesheet" />
    <script src="<?php echo $url; ?>/<?php echo $push; ?>dependencias/css_js/select2/4.0.5/select2.min.js"></script>
    <script src="<?php echo $url; ?>/<?php echo $push; ?>dependencias/css_js/mask/1.14.10/jquery.mask.min.js"></script>

</head>
<body>

<!-- Modal chamado new, link na navbar -->
<div id="modal" class="modal fade bd-modal-medium" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-medium">
        <div class="modal-content">
            <div style="text-align:right;" class="modal_header">
                <font size="2" color="gray" style="cursor: pointer;" onClick="location.reload()"> fechar e atualizar <b><span aria-hidden="true">&times;</spam></b>&nbsp;</font>
            </div>
            <div class="modal-body">
                <!-- iframe abre com os parâmetros segundo função js 'abrirIFrame' -->
                <iframe id="js_iframe" scrolling="auto" src="" width="100%" height="544px" frameborder="0"></iframe>
            </div>
        </div>
    </div>
</div>