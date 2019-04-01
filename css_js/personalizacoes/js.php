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

    // Select 2
    function selectext(texto) {
        document.getElementById('texto_escolhido').innerHTML = texto;
    }
    $(".myselect").select2();

    // Almoxarife - Função js abre iframe no modal somente quando é chamado
    function abrirIFrame(rota) {
        document.getElementById("js_iframe").src = rota;
    }
</script> 