<?php
if($_GET['push'] === 'dev/')
    $ambiente = '/dev';
else
    $ambiente = '';
?>

<!-- Div fecha todos os menus -->
<div id="fechar_allmenu" style="display:none;" class="fechar_allmenu" onmouseover="javascript:fecharAllMenu();"></div>

<!-- Div info timeout -->
<div id="timeout_logout" style="display:none;" class="timeout_logout">
    <font size="5">
        <br/><br/><br/><br/><br/><br/><br/><br/>
        Sua sessão irá expirar em breve.<br />
        Atualize a página para se manter conectado <br /><br />
        <a href="#" onclick="location.reload()">Atualizar página</a> ● <a href="#" onclick="fecharTimeout()">Fechar e continuar assim mesmo</a>
    </font>
</div>

<!-- Navbar -->
<div>
    <header>
        <nav class="navbar navbar-expand navbar-light fixed-top" style="border-bottom: 1px;
        -webkit-box-shadow: 2px 2px 2px rgba(50, 50, 50, 0.45);
        -moz-box-shadow: 2px 2px 2px rgba(50, 50, 50, 0.45);
        box-shadow: 2px 2px 2px rgba(50, 50, 50, 0.45);
        background-color: #f5f5f5">

            <!-- Menu Principal -->
            <div style="margin: 4px">
                <a class="nav-link" href="#" onmouseover="javascript:exibeMenuPrincipal();">
                    <img src="/dependencias/images/sistemas/menu.png" width="18" height="18">
                </a>
            </div>
            
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
                    <div style="margin: 20px">
                        <table class="table table-sm table-borderless table-hover">
                            <thead>
                                <tr>
                                    <th>
                                        SUPORTE
                                    </th>
                                </tr>
                            </thead>
                            <tr>
                                <td>
                                    <a href="/suporte/chamados/create" onclick=abrirIFrame("/suporte/chamados/create") id="rota" data-target="#modal" data-toggle="modal">NOVO CHAMADO</a>
                                </td>
                            </tr>
                            <thead>
                                <tr>
                                    <th>
                                        VISUALIZAR CHAMADOS
                                    </th>
                                </tr>  
                            </thead>  
                            <tr>
                                <td>
                                    CALIBRAÇÂO
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    COMPRAS
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    MANUTENÇÃO
                                </td>
                            </tr>
                            <tr>    
                                <td>
                                    QUALIDADE
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    SECRETARIA
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    SPET
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="/suporte/chamados/31">TI</a>
                                </td>
                            </tr>
                            <thead>
                                <tr>
                                    <th>
                                        AREA ADMINISTRATIVA
                                    </th>
                                </tr>
                            </thead>
                            <tr>
                                <td>
                                    <a href="/suporte/categorias/">CATEGORIAS</a>
                                </td>
                            </tr>
                        </table>
                    </div>
                ';
                }
                ?>
            </div>
            <!-- Fim Menu Principal -->    

            <!-- Busca -->
            <div class="input-group" style="width:60%;">
                <input type="text" size="60%" class="form-control ml-4" id="search" name="search" onkeyup="javascript:verificaSubmit(event);" placeholder="Pesquisar" style="border-color: #FFFFFF;-webkit-box-shadow: none; box-shadow: none;">
                <div class="input-append">
                    <button class="btn btn-link" type="button" onclick="javascript:buscar();" style="background-color: #FFFFFF;">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </div>

            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Fim Busca -->

            <div id="navbarCollapse" class="navbar-collapse">
                <ul class="navbar-nav ml-auto">
                    <!-- Menu todos os sistemas -->
                    <li class="nav-item">
                        <div style="margin: 4px">
                            <a class="nav-link" href="#" onmouseover="javascript:exibeMenuSistemas();">
                                <img src="/dependencias/images/sistemas/sistemas.png" width="18" height="18">
                            </a>
                        </div>
                        <div id="menuSistemas" style="display:none;" class="groupMenuSistemas">
                            <br/>
                            <table class="table table-sm table-borderless">
                                <tr>
                                    <td width="33,3%" align="center">
                                        <a href="/login"><div id="divLogoSistemas" style="background: orange;"><img src="/dependencias/images/sistemas/adm.png" width="60" height="60"></div>DASHBOARD</a>
                                    </td>
                                    <td width="33,3%" align="center">
                                        <a href="/suporte"><div id="divLogoSistemas" style="background: red"><img src="/dependencias/images/sistemas/ti.png" width="60" height="60"></div>SUPORTE</a>
                                    </td>
                                    <td width="33,3%" align="center">
                                        <div id="divLogoSistemas" style="background: lightgray;"><img src="/dependencias/images/sistemas/bs.png" width="60" height="60"></div>SOLUÇÃO
                                    </td>
                                </tr>
                                <tr>
                                    <td width="33,3%" align="center">
                                        <div id="divLogoSistemas" style="background: lightgray;"><img src="/dependencias/images/sistemas/alm.png" width="60" height="60"></div>ALMOLAB
                                    </td>
                                    <td width="33,3%" align="center">
                                        <a href="/almoxarife"><div id="divLogoSistemas"><img src="/dependencias/images/sistemas/almo.png" width="60" height="60"></div>ALMOXARIFE</a>
                                    </td>
                                    <td width="33,3%" align="center">
                                        <a href="http://10.10.0.6/labdop/" target="blank"><div id="divLogoSistemas" style="background: lightpink"><img src="/dependencias/images/sistemas/lbcd.png" width="60" height="60"></div>LABDOP</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="33,3%" align="center">
                                        <a href="http://10.10.0.25/Biblivre5/" target="blank"><div id="divLogoSistemas" style="background: purple"><img src="/dependencias/images/sistemas/bibi.png" width="60" height="60"></div>BIBLIVRE</a>
                                    </td>
                                    <td width="33,3%" align="center">
                                        <div id="divLogoSistemas" style="background: lightgray;" style="background: orange"><img src="/dependencias/images/sistemas/ga.png" width="60" height="60"></div>SECRETARIA
                                    </td>
                                    <td width="33,3%" align="center">
                                        <div id="divLogoSistemas" style="background: lightgray;" style="background: orange"><img src="/dependencias/images/sistemas/gt.png" width="60" height="60"></div>TI
                                    </td>
                                </tr>
                                <tr>
                                    <td width="33,3%" align="center">
                                        <div id="divLogoSistemas" style="background: lightgray;" style="background: green"><img src="/dependencias/images/sistemas/fc.png" width="60" height="60"></div>FICHA C.
                                    </td>
                                    <td width="33,3%" align="center">
                                        <a href="/ftp"><div id="divLogoSistemas" style="background: green"><img src="/dependencias/images/sistemas/ft.png" width="60" height="60"></div>FTP</a>
                                    </td>
                                    <td width="33,3%" align="center">

                                    </td>
                                </tr>    
                            </table>
                        </div>              
                    </li>
                    <!-- Fim Menu todos os sistemas --> 
                    <!-- Menu User -->
                    <li class="nav-item">
                        <div style="margin: 4px">
                            <a class="nav-link" href="#" onmouseover="javascript:exibeMenuUsuario();">
                                <img src="/dependencias/images/sistemas/user.png" width="18" height="18">
                            </a>
                        </div>
                        <div id="menuUsuario" style="display:none;" class="DivMenuUser">
                            <div align="center">
                                <?php print_r($_COOKIE); ?>
                                <br/><a href="/dependencias/paginas/logout.php?env=$ambiente">Sair do sistema</a>
                            </div>
                        </div>
                    </li>
                    <!-- Fim Menu User -->
                    <!-- Time logoff -->
                    <li class="nav-item">
                        <div style="margin-top: 14px">
                            <span id="time">load</span>
                        </div>
                    </li>
                    <!-- Fim Time logoff -->
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