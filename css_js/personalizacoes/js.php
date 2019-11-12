<?php
    $url = $_GET['url'];
    $push = $_GET['push'];
?>
<script type="text/javascript">
    // (Menu) Abre e Fecha super menus 
    function exibeMenuSistemas() {
        document.getElementById('menuSistemas').style.display = 'block';
        document.getElementById('fechar_allmenu').style.display = 'block';
        document.getElementById('menuPrincipal').style.display = 'none';
        document.getElementById('menuUsuario').style.display = 'none';
    }

    function exibeMenuPrincipal() {
        document.getElementById('menuPrincipal').style.display = 'block';
        document.getElementById('fechar_allmenu').style.display = 'block';
        document.getElementById('menuUsuario').style.display = 'none';
        document.getElementById('menuSistemas').style.display = 'none';
    }

    function exibeMenuUsuario() {
        document.getElementById('menuUsuario').style.display = 'block';
        document.getElementById('fechar_allmenu').style.display = 'block';
        document.getElementById('menuSistemas').style.display = 'none';
        document.getElementById('menuPrincipal').style.display = 'none';
    }

    function fecharAllMenu() {
        document.getElementById('fechar_allmenu').style.display = 'none';
        document.getElementById('menuPrincipal').style.display = 'none';
        document.getElementById('menuSistemas').style.display = 'none';
        document.getElementById('menuUsuario').style.display = 'none';
    }

    // (Busca) Buscar identificando o sistema em que se está 
    function buscar() {
        sistema = '<?php echo $_GET['sistema'] ?>';
        pagina = '<?php echo $_GET['pagina'] ?>';
        search = document.getElementById('search').value.trim();
        if (search == '') {
            <?php setcookie('buscaVazia', 1, time() + 3600); ?>;
            // window.location = window.location.origin + '/' + sistema + '/' + pagina;
            location.reload();
        } else
            window.location = window.location.origin +/* '/' + sistema + */'/' + pagina + '/search/' + search;
    }

    // (Busca) Busca ser realizado quando botão ENTER do teclado ser pressionado
    function verificaSubmit(event) {
        if (event.key === "Enter" || event.keyCode == 13) {
            buscar();
        }
    }

    // (Contador) Abrir div informando timout de sessão (em milessegundo, 1h:55min)
    onload = setTimeout(function() {
        document.getElementById('timeout_logout').style.display = 'block';
    }, 6600000);

    // (Contador) Encaminha para logoff (em segundo, 2h)
    var contador = '7000';

    function startTimer(duration, display) {
        var timer = duration,
            minutes, seconds;
        setInterval(function() {
            minutes = parseInt(timer / 60, 10)
            seconds = parseInt(timer % 60, 10);

            minutes = minutes < 10 ? "0" + minutes : minutes;
            seconds = seconds < 10 ? "0" + seconds : seconds;

            display.textContent = minutes + ":" + seconds;

            if (--timer < 0) {
                window.location.href = "<?php echo $url.'/'.$push; ?>dependencias/paginas/logout.php";
            }
        }, 1000);
    }

    // (Contador) Exibe na tela tempo restante antes de timeout de sessão (5 min antes do timeout)
    /* window.onload = function() {
        var count = parseInt(contador),
            display = document.querySelector('#time');
        startTimer(count, display);
    } */

    // (Contador) Fecha div de timeout
    function fecharTimeout() {
        document.getElementById('timeout_logout').style.display = 'none';
    }

    // (suporte.create, suporte.categoria.new) Recarrega a página após um post dentro de modal
    function carregarPagina(link) {
        window.location.href = link;
    }

    // (suporte.chamadoshow) textarea responder aumentar tamanho de acordo com linhas do texto 
    $("textarea.responsive").bind("input", function(e) {
        while ($(this).outerHeight() < this.scrollHeight + parseFloat($(this).css("borderTopWidth")) + parseFloat($(this).css("borderBottomWidth")) &&
            $(this).height() < 500
        ) {
            $(this).height($(this).height() + 1);
        };
    });

    // (almoxarife.index, suporte.index) Função js abre iframe no modal somente quando é chamado
    function abrirIFrame(rota) {
        document.getElementById("js_iframe").src = rota;
    }

    // (Select2 - suporte.new) Funções aceleram o carregamento durante as buscas do Select2
    //TODO:Ordem em que o jQuery foi carregado no sistema está incorreta.
    //Carregando o jQuery depois de app.js, que é o certo.
    loadFile('<?php echo $url; ?>/<?php echo $push; ?>dependencias/css_js/ajax/3.4.0/jquery.js');
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
        }
    });

    // (Select2 idem acima)
    function loadFile(filename) {
        // Create a script tag, set its source
        var scriptTag = document.createElement("script"),
            filePath = filename;

        // And listen to it
        scriptTag.onload = function(loadEvent) {
            // This function is an event handler of the script tag
            // console.log('script carregado.');
        }

        // Make sure this file actually loads instead of a cached version
        // Add a timestamp onto the URL (i.e. file.js?bust=12345678)
        var cacheBuster = "";

        cacheBuster = "?bust=" + new Date().getTime();

        // Set the type of file and where it can be found
        scriptTag.type = "text/javascript";
        scriptTag.src = filePath + cacheBuster;

        // Finally add it to the <head>
        document.getElementsByTagName("head")[0].appendChild(scriptTag);
    }    
</script>