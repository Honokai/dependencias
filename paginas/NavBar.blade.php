<?php
if($_GET['push'] === 'dev/')
    $ambiente = '/dev';
else
    $ambiente = '';
?>
<script type="text/javascript">
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

    function buscar() {
        sistema = '<?php echo $_GET['sistema'] ?>';
        pagina = '<?php echo $_GET['pagina'] ?>';
        search = document.getElementById('search').value.trim();
        if (search == '') {
            <?php setcookie('buscaVazia', 1, time() + 3600); ?>;
            window.location = window.location.origin + '/' + sistema + '/' + pagina;
        } else
            window.location = window.location.origin + '/' + sistema + '/' + pagina + '/search/' + search;
    }

    function verificaSubmit(event) {
        if (event.key === "Enter" || event.keyCode == 13) {
            buscar();
        }
    }
</script>

<div id="fechar_allmenu" style="display:none;" class="fechar_allmenu" onmouseover="javascript:fecharAllMenu();"></div>

<div>
    <header>
        <nav class="navbar navbar-expand navbar-dark bg-dark fixed-top">

            <!-- Menu todos os sistemas -->
            <a class="nav-link" href="#" onmouseover="javascript:exibeMenuSistemas();">SISTEMAS</a>
            <div id="menuSistemas" style="display:none;" class="groupMenuSistemas">
                <div id="DivMenuSistemas">
                    <div style="background-color:#E6E6E6">
                        <font color="#A4A4A4">SUPORTE</font>
                    </div>
                    <div>
                        DASHBOARD <br/>
                        SUPORTE
                    </div>
                </div>
                <div id="DivMenuSistemas">
                    <div style="background-color:#E6E6E6">
                        <font color="#A4A4A4">GESTÃO</font>
                    </div>
                    <div>
                        SOLUÇÃO <br> ALMOLAB <br>
                        <a href="/almoxarife/material">ALMOXARIFE</a> <br>
                        OLD LABDOP <br> BIBLIVRE <br> ADMINISTRATIVO <br> TI <br>
                    </div>
                </div>
                <div id="DivMenuSistemas">
                    <div style="background-color:#E6E6E6">
                        <font color="#A4A4A4">OUTROS</font>
                    </div>
                    <div>
                        FICHA CADASTRAL <br>
                        <a href="/ftp"> FTP USADA/IDTM </a>
                    </div>
                </div>
            </div>

            <div class="input-group" style="width:310px;">
                <input type="text" size="60%" class="form-control ml-4" id="search" name="search" onkeyup="javascript:verificaSubmit(event);" placeholder="Pesquisar em todos os campos">
                <div class="input-append">
                    <button class="btn btn-primary" type="button" onclick="javascript:buscar();">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </div>

            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div id="navbarCollapse" class="navbar-collapse">
                <ul class="navbar-nav ml-auto">

                    <!-- Menu Principal -->
                    <li class="nav-item">
                        <a class="nav-link" href="#" onmouseover="javascript:exibeMenuPrincipal();">MENU</a>
                        <div id="menuPrincipal" style="display:none;" class="groupMenuPrincipal">
                            <?php
                            switch ($_GET['sistema']) {
                                case "ftp":
                                    echo '
                                <div id="DivMenuPrincipal">
                                    <div style="background-color:#E6E6E6">
                                    <font color="#A4A4A4">FTP
                                        <!-- Link para modal explicando as funcionalidades dos links do almoxarife -->
                                        <a href data-toggle="modal" data-target="#modalMenuAlmoxarife"></a>
                                    </font>
                                    </div>
                                    <div>
                                        <a href="/ftp/usada">USADA</a> <br>
                                        <a href="/ftp/idtm">IDTM</a> <br> <br>
                                    </div>
                                </div>
                            ';
                                    break;
                                case "almoxarife":
                                    echo '
                                <div id="DivMenuPrincipal">
                                    <div style="background-color:#E6E6E6">
                                        <font color="#A4A4A4">MEU ESTOQUE
                                            <!-- Link para modal explicando as funcionalidades dos links do almoxarife -->
                                            <a href="#" data-toggle="modal" data-target="#modalMenuAlmoxarife">(?)</a>
                                        </font>
                                    </div>
                                    <div>
                                        <a href="/almoxarife/material/">MATERIAIS</a> <br>
                                        <a href="/almoxarife/entrada-padrao">ENTRADA DE PADRÕES</a> <br> <br>
                                    </div>
                                    <div style="background-color:#E6E6E6">
                                        <font color="#A4A4A4">ESTOQUE GERAL</font>
                                    </div>
                                    <div>
                                        <a href="/almoxarife/material_all">MATERIAIS</a><br>
                                        <a href="/almoxarife/entrada-padrao_all">ENTRADA DE PADRÕES</a><br> 
                                        <a href="/almoxarife/padrao">PADRÕES</a><br><br>
                                    </div>
                                </div>
                                <div id="DivMenuPrincipal">
                                    <div style="background-color:#E6E6E6">
                                        <font color="#A4A4A4">ÁREA ADMINISTRATIVA</font>
                                    </div>
                                    <div>
                                        <a href="/almoxarife/log-material">EDITAR DE SAÍDAS DE MATERIAL</a> <br>
                                        <a href="/almoxarife/log-padrao">EDITAR DE SAÍDAS DE PADRAO</a> <br>
                                        <a href="/almoxarife/localizacao">EDITAR LOCALIZAÇÕES</a>
                                    </div>
                                </div>
                            ';
                                    break;
                                case "suporte":
                                    echo '
                                <div id="DivMenuPrincipal">
                                    <div style="background-color:#E6E6E6">
                                        <font color="#A4A4A4">SUPORTE</font>
                                    </div>
                                    <div>
                                        <a href="/suporte/chamados/create" onclick=abrirIFrame("/suporte/chamados/create") id="rota" data-target="#modal" data-toggle="modal">NOVO CHAMADO</a><br><br>
                                    </div>
                                    <div style="background-color:#E6E6E6">
                                        <font color="#A4A4A4">VISUALIZAR CHAMADOS</font>
                                    </div>
                                    <div>
                                        <a href="/suporte/chamados/CALIBRACAO">CALIBRAÇÃO</a><br>
                                        <a href="/suporte/chamados/COMPRAS">COMPRAS</a><br>
                                        <a href="/suporte/chamados/MANUTENCAO">MANUTENÇÃO</a><br>
                                        <a href="/suporte/chamados/QUALIDADE">QUALIDADE</a><br>
                                        <a href="/suporte/chamados/SECRETARIA">SECRETARIA</a><br>
                                        <a href="/suporte/chamados/SPET">SPET</a><br>
                                        <a href="/suporte/chamados/TI">TI</a>
                                    </div>
                                </div>
                                <div id="DivMenuPrincipal">
                                    <div style="background-color:#E6E6E6">
                                        <font color="#A4A4A4">ÁREA ADMINISTRATIVA</font>
                                    </div>
                                    <div>
                                        <a href="/suporte/categoria/">CATEGORIAS</a>
                                    </div>
                                </div>
                            ';
                            }
                            ?>
                        </div>
                    </li>

                    <!-- Menu User -->
                    <li class="nav-item">
                        <a class="nav-link" href="#" onmouseover="javascript:exibeMenuUsuario();">USER</a>
                        <div id="menuUsuario" style="display:none;" class="DivMenuUser">
                            <div>
                                <a href="/dependencias/paginas/logout.php?env=$ambiente">Sair do sistema</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <!-- Modal explicando as funcionalidades do menu do almoxarife -->
    <div id="modalMenuAlmoxarife" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-body">
                    <b>MEU ESTOQUE</b>
                    <br>Corresponde a área em que você estará editando o mínimo ou localização e realizando saída ou transferência do seu material ou padrão. <br> <br>
                    <b>ESTOQUE GERAL</b>
                    <br>Aqui você poderá visualizar / consultar o estoque de material e padrão de todos os setores. <br> <br>
                    <b>EDITAR SAÍDAS DE MATERIAL</b>
                    <br>Aqui você poderá visualizar as baixas de material e padrão de todos os setores. <br />A opção de editar uma saída está disponível somente para o setor de compras.<br><br>
                    <b>ÁREA ADMINISTRATIVA</b>
                    <br>Edições de baixas e criação de localização disponivel somente para o setor de compras. <br /> Pode cancelar baixas ou transferências de materiais ou padrões realizadas erroneamente pelos usuários. <br /> Também irá editar as localizações permitidas aos setores para armazenar seu estoque.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                </div>
            </div>
        </div>
    </div>
</div>