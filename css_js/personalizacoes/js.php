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

    // Text area aumentar tamanho de acordo com linhas do texto
    $("textarea").bind("input", function(e) {
        while ($(this).outerHeight() < this.scrollHeight + parseFloat($(this).css("borderTopWidth")) + parseFloat($(this).css("borderBottomWidth")) &&
            $(this).height() < 500
        ) {
            $(this).height($(this).height() + 1);
        };
    });

    // Almoxarife/suporte - Função js abre iframe no modal somente quando é chamado
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
        placeholder: 'Pesquisar, ex.: Formulario, Instalação, Impressora ou etc.',
        ajax: {
            url: '/suporte/select2-autocomplete-ajax',
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