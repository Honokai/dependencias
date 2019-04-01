<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Sistemas Ladetec</title>

    <link rel="stylesheet" type="text/css" href="http://10.10.0.14/dependencias/css_js/bootstrap/4.2.1/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="http://10.10.0.14/dependencias/css_js/personalizacao_css/personalizacao.css">
    <link rel="stylesheet" href="http://10.10.0.14/dependencias/css_js/fontawesome/5.5.0/fontawesome.css">
    <!-- <link rel="stylesheet" href="http://10.10.0.14/dependencias/css_js/fontawesome/5.5.0/solid.css"> -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/solid.css" integrity="sha384-rdyFrfAIC05c5ph7BKz3l5NG5yEottvO/DQ0dCrwD8gzeQDjYBHNr1ucUpQuljos" crossorigin="anonymous">
    <script src="http://10.10.0.14/dependencias/css_js/popper/1.14.7/popper.js"></script>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/js/select2.min.js"></script>

    <style type="text/css">
        #DivMenuSistemas {
            position: relative;
            width: 200px;
            float: left;
            padding: 15px;
        }

        .groupMenuSistemas {
            position: absolute;
            zoom: 1;
            /* For IE 6/7 (trigger hasLayout) */
            z-index: 9999;
            top: 48px;
            left: 20px;
            background-color: #FFFFFF;
            border: 1px solid #D8D8D8;
            border-radius: 5px;
            -webkit-box-shadow: 9px 7px 5px rgba(50, 50, 50, 0.45);
            -moz-box-shadow: 9px 7px 5px rgba(50, 50, 50, 0.45);
            box-shadow: 9px 7px 5px rgba(50, 50, 50, 0.45);
        }

        #DivMenuPrincipal {
            position: relative;
            width: 275px;
            float: left;
            padding: 15px;
        }

        .groupMenuPrincipal {
            position: absolute;
            zoom: 1;
            /* For IE 6/7 (trigger hasLayout) */
            z-index: 9999;
            right: 70px;
            background-color: #FFFFFF;
            border: 1px solid #D8D8D8;
            border-radius: 5px;
            -webkit-box-shadow: 9px 7px 5px rgba(50, 50, 50, 0.45);
            -moz-box-shadow: 9px 7px 5px rgba(50, 50, 50, 0.45);
            box-shadow: 9px 7px 5px rgba(50, 50, 50, 0.45);
        }

        .DivMenuUser {
            position: absolute;
            zoom: 1;
            /* For IE 6/7 (trigger hasLayout) */
            z-index: 9999;
            right: 20px;
            padding: 15px;
            background-color: #FFFFFF;
            border: 1px solid #D8D8D8;
            border-radius: 5px;
            -webkit-box-shadow: 9px 7px 5px rgba(50, 50, 50, 0.45);
            -moz-box-shadow: 9px 7px 5px rgba(50, 50, 50, 0.45);
            box-shadow: 9px 7px 5px rgba(50, 50, 50, 0.45);
        }

        .fechar_allmenu {
            top: 57px;
            width: 3000px;
            height: 1000px;
            position: fixed;
            zoom: 1;
            /* For IE 6/7 (trigger hasLayout) */
        }
    </style>

</head>

<body> 