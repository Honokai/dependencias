<style>
    /* Tamanho do texto para todos os sistemas */
    body {
        font-size: 14px;
    }

    /* Bootstrap cor do hover das listas em zebra */
    .table-hover tbody tr:hover td,
    .table-hover tbody tr:hover th {
        background-color: #ADD8E6;
    }

    /* Muda o cursor de eta para mão - View principal chamado */
    .arrow-hover-hand {
        cursor: pointer;
    }

    /* Texto negrito - View principal chamado */
    .text-bold {
        font-weight: bold;
    }

    /*.table-striped tbody, .table-hover tbody {
    background-color: #DCDCDC;
    }*/

    /* Super dropdown menu dos Sistemas */
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