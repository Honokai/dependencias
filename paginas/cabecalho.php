<!DOCTYPE html>
<head>
    <title>Sistemas Ladetec</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- google analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-143362354-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'UA-143362354-1');
    </script>
    <!-- js e css -->
    <link rel="stylesheet" type="text/css" href="https://<?php echo $_SERVER['HTTP_HOST']; ?>/dependencias/css_js/bootstrap/4.2.1/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://<?php echo $_SERVER['HTTP_HOST']; ?>/dependencias/css_js/personalizacoes/css.css">
    <link rel="stylesheet" href="https://<?php echo $_SERVER['HTTP_HOST']; ?>/dependencias/css_js/fontawesome/5.11.2/css/all.css">
    <script src="https://<?php echo $_SERVER['HTTP_HOST']; ?>/dependencias/css_js/popper/1.14.7/popper.js"></script>
    <script src="https://<?php echo $_SERVER['HTTP_HOST']; ?>/dependencias/css_js/ajax/3.3.1/jquery.js"></script>
    <link href="https://<?php echo $_SERVER['HTTP_HOST']; ?>/dependencias/css_js/select2/4.0.11/select2.min.css" rel="stylesheet" />
    <script src="https://<?php echo $_SERVER['HTTP_HOST']; ?>/dependencias/css_js/select2/4.0.11/select2.min.js"></script>
    <script src="https://<?php echo $_SERVER['HTTP_HOST']; ?>/dependencias/css_js/mask/1.14.10/jquery.mask.min.js"></script>
    <script type="text/javascript" src="https://<?php echo $_SERVER['HTTP_HOST']; ?>/dependencias/css_js/sweetalert/9.5.4/dist/sweetalert2.all.min.js"></script>
</head>
<body>

    <!-- Modal padrão utilizado pelos sistemas -->
    <div id="modal" class="modal fade bd-modal-medium" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-medium">
            <div class="modal-content">
                <div style="text-align:right;" class="modal_header">
                    <a href="" style="cursor: pointer;" onclick="location.reload()"> <i class="fas fa-sync-alt"></i> <i class="fas fa-times-circle"></i></a>&nbsp;
                </div>
                <div class="modal-body">
                    <!-- iframe abre com os parâmetros segundo função js 'abrirIFrame' -->
                    <iframe id="js_iframe" scrolling="auto" src="" width="100%" height="544px" frameborder="0"></iframe>
                </div>
            </div>
        </div>
    </div>