<?php
$url = $_GET['url'];

$push = $_GET['push'];
?>
<script type="text/javascript">
    // Abre e Fecha super menus 
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

    // Busca 
    function buscar() {
        sistema = '<?php echo $_GET['sistema'] ?>';
        pagina = '<?php echo $_GET['pagina'] ?>';
        search = document.getElementById('search').value.trim();
        if (search == '')
            window.location = window.location.origin + '/' + sistema + '/' + pagina;
        else
            window.location = window.location.origin + '/' + sistema + '/' + pagina + '/search/' + search;
    }

    // Busca pressionando enter no teclado
    function verificaSubmit(event) {
        if (event.key === "Enter" || event.keyCode == 13) {
            buscar();
        }
    }

    // (suporte.create) Recarrega a página após um post dentro de modal
    function recarregarPagina(link) {
        window.location.href = link;
    }

    // Contador para abrir div informando timout de sessão (em milessegundo, 1h:55min)
    onload = setTimeout(function() {
        document.getElementById('timeout_logout').style.display = 'block';
    }, 6900000);

    // Contador encaminha para logoff (em segundo, 2h)
    var contador = '7200';

    function startTimer(duration, display) {
        var timer = duration,
            minutes, seconds;
        setInterval(function() {
            minutes = parseInt(timer / 60, 10)
            seconds = parseInt(timer % 60, 10);

            minutes = minutes < 10 ? "0" + minutes : minutes;
            seconds = seconds < 10 ? "0" + seconds : seconds;

            display.textContent = minutes + "m" + ":" + seconds + "s";

            if (--timer < 0) {
                window.location.href = "http://10.10.0.14/dependencias/paginas/logout.php";
            }
        }, 1000);
    }

    // Contador exibe na tela tempo restante antes de timeout de sessão (5 min antes do timeout)
    window.onload = function() {
        var count = parseInt(contador),
            display = document.querySelector('#time');
        startTimer(count, display);
    }

    // Contador, Fecha div de timeout
    function fecharTimeout() {
        document.getElementById('timeout_logout').style.display = 'none';
    }

    // (suporte.chamadoshow) textarea responder aumentar tamanho de acordo com linhas do texto 
    $("textarea").bind("input", function(e) {
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

    // (suporte.create) Select2
    $('.categorias').select2({
        placeholder: 'Pesquisar, ex.: Formulario, Compra, Porta, Pipeta, Computador ou etc.',
        ajax: {
            url: '/suporte/select2ChamadoNewCategoria',
            dataType: 'json',
            delay: 250,
            processResults: function(data) {
                return {
                    results: $.map(data, function(item) {
                        return {
                            id: item.id,
                            text: item.categoria + ' - ' + item.sub_categoria,
                        }
                    })
                };
            },
            cache: false
        }
    });

    $('.computador').select2({
        placeholder: 'Pesquisar, ex.: Formulario, Compra, Porta, Pipeta, Computador ou etc.',
        ajax: {
            url: '/suporte/select2ChamadoNewComputador',
            dataType: 'json',
            delay: 250,
            processResults: function(data) {
                return {
                    results: $.map(data, function(item) {
                        return {
                            id: item.id,
                            text: item.descricao,
                        }
                    })
                };
            },
            cache: false
        }
    });

    //TODO:Ordem em que o jQuery foi carregado no sistema está incorreta.
    //Carregando o jQuery depois de app.js, que é o certo.
    loadFile('<?php echo $url; ?>/<?php echo $push; ?>dependencias/css_js/ajax/3.4.0/jquery.js');
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
        }
    });
    $('.categorias').on("change", function(e) {
        var subcategoria = $(this).val();
        //Carrega setores da categoria
        $.ajax({
            url: '/suporte/select2ChamadoNewRecuperaSetor/' + subcategoria,
            method: 'get',
            success: function(data) {
                $('input[name=setor]').val(data);
            }
        });
        //Carrega template da categoria
        $.ajax({
            url: '/suporte/select2ChamadoNewRecuperaTemplate/' + subcategoria,
            method: 'get',
            success: function(data) {
                $('textarea[name=solicitacao_inicial]').text(JSON.parse(data));
            }
        });
    });

    $('.computador').on("change", function(e) {
        var computador = $(this).val();
        //Carrega localização do computador
        $.ajax({
            url: '/suporte/select2ChamadoNewRecuperaLocalizacao/' + computador,
            method: 'get',
            success: function(data) {
                $('input[name=localizacao]').val(data);
            }
        });
    });

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