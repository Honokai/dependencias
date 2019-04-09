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

    // (suporte.chamadoshow) textarea aumentar tamanho de acordo com linhas do texto 
    $("textarea").bind("input", function(e) {
        while ($(this).outerHeight() < this.scrollHeight + parseFloat($(this).css("borderTopWidth")) + parseFloat($(this).css("borderBottomWidth")) &&
            $(this).height() < 500
        ) {
            $(this).height($(this).height() + 1);
        };
    });

    // (suporte.chamadoshow) textarea do tamanho do texto carregado do sistema
    document.addEventListener("DOMContentLoaded", function() {
        var txtarea = document.querySelector("textarea.form-auto-height");
        txtarea.style.height = txtarea.scrollHeight + 3 + "px";
    });

    // (almoxarife.index, suporte.index) Função js abre iframe no modal somente quando é chamado
    function abrirIFrame(rota) {
        document.getElementById("js_iframe").src = rota;
    }

    // Select 2
    function selectext(texto) {
        document.getElementById('texto_escolhido').innerHTML = texto;
    }
    $(".myselect").select2();

    // Select 2 /** CRIANDO/PROGRAMANDO/EM ANDAMENTO (Tiago) */
    $('.itemName').select2({
        placeholder: 'Pesquisar, ex.: Formulario, Compra, Porta, Pipeta, Computador ou etc.',
        ajax: {
            url: '/suporte/select2ChamadoNew',
            dataType: 'json',
            delay: 250,
            processResults: function(data) {
                return {
                    results: $.map(data, function(item) {
                        return {
                            text: item.categoria,
                            id: item.id,
                        }
                    })
                };
            },
            cache: false
        }
    });
</script>