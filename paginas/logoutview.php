<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sistemas Ladetec</title>
</head>
<style> 
    .background_black {
        top: 0px;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.8);
        position: fixed;
        zoom: 1; /* For IE 6/7 (trigger hasLayout) */
    } 
    * {
        padding:0;
        margin:0;
    }
    .intro {
        display: table;
        width: 100%;
        height: 100vh;
        padding: 100px 0;
        color: black;
        background: url("<?php $env ?>/dependencias/images/predio_polodequimica.jpg") no-repeat bottom center scroll;
        background-position: 30% 45%;
        background-size: cover;
    }
    a:link {
        color: white;
        text-decoration: underline;
    }
    a:visited {
        color: white;
        text-decoration: none;
    }
    a:hover {
        color: white;
        text-decoration: none;
    }
    a:active {
        color: white;
        text-decoration: none;
    }
</style>
<body>
    <div class="intro"></div>
        <div class="background_black">
            <div style="width:99%; margin-top: 60px; z-index: 99999999">
                <br/><br/><br/><br/><br/><br/><br/><br/>
                <p align="center">
                    <font face="verdana" size="6" color="white">
                        <b>SUA SESSÃO EXPIROU :(
                            <br/><br/>
                        <a href="<?php $env ?>">CLIQUE AQUI</a>
                        <br/>PARA FAZER LOGIN NOVAMENTE
                        </b>
                    </font>
                </p>
            </div>
        </div>
    </div>
</body>
</html>