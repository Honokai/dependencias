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
        <br/><br/><br/><br/><br/><br/>
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
                    <img src="<?php echo $ambiente ?>/dependencias/images/menu.png" width="18" height="18">
                </a>
            </div>
            
            <div id="menuPrincipal" style="display:none;" class="groupMenuPrincipal">
                <?php
                switch ($_GET['sistema']) {
                    case "ftp":
                        echo '
                        <div style="margin: 20px">
                        <table class="table table-sm table-borderless table-hover">
                            <thead>
                                <tr>
                                    <th>
                                        FTP
                                    </th>
                                </tr>
                            </thead>
                            <tr>
                                <td>
                                    <a href="'.$ambiente.'/ftp/usada">USADA</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="'.$ambiente.'/ftp/idtm">IDTM</a>
                                </td>
                            </tr>
                        </table>
                    </div>
                ';
                    break;
                    case "login":
                        echo '
                    <div style="margin: 20px">
                        <table class="table table-sm table-borderless table-hover">
                            <thead>
                                <tr>
                                    <th>
                                        DASHBOARD
                                    </th>
                                </tr>
                            </thead>
                            <tr>
                                <td>
                                    <a href="'.$ambiente.'/login">MINHA DASHBOARD</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="'.$ambiente.'/suporte/chamados/create" onclick=abrirIFrame("'.$ambiente.'/suporte/chamados/create") id="rota" data-target="#modal" data-toggle="modal">NOVO CHAMADO</a>
                                </td>
                            </tr>
                        </table>
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
                            <a href="'.$ambiente.'/almoxarife/material/">MATERIAIS</a> <br>
                            <a href="'.$ambiente.'/almoxarife/entrada-padrao">ENTRADA DE PADRÕES</a> <br> <br>
                        </div>
                        <div style="background-color:#E6E6E6">
                            <font color="#A4A4A4">ESTOQUE GERAL</font>
                        </div>
                        <div>
                            <a href="'.$ambiente.'/almoxarife/material_all">MATERIAIS</a><br>
                            <a href="'.$ambiente.'/almoxarife/entrada-padrao_all">ENTRADA DE PADRÕES</a><br> 
                            <a href="'.$ambiente.'/almoxarife/padrao">PADRÕES</a><br><br>
                        </div>
                    </div>
                    <div id="DivMenuPrincipal">
                        <div style="background-color:#E6E6E6">
                            <font color="#A4A4A4">ÁREA ADMINISTRATIVA</font>
                        </div>
                        <div>
                            <a href="'.$ambiente.'/almoxarife/log-material">EDITAR DE SAÍDAS DE MATERIAL</a> <br>
                            <a href="'.$ambiente.'/almoxarife/log-padrao">EDITAR DE SAÍDAS DE PADRAO</a> <br>
                            <a href="'.$ambiente.'/almoxarife/localizacao">EDITAR LOCALIZAÇÕES</a>
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
                                        SUPORTE <a href="#"><span class="badge badge-info">?</span></a>
                                    </th>
                                </tr>
                            </thead>
                            <tr>
                                <td>
                                    <a href="'.$ambiente.'/suporte/chamado/geral">PÁGINA PRINCIPAL</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="'.$ambiente.'/suporte/chamados/create" onclick=abrirIFrame("'.$ambiente.'/suporte/chamados/create") id="rota" data-target="#modal" data-toggle="modal">NOVO CHAMADO</a>
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
                                    <a href="'.$ambiente.'/suporte/chamado/Bioinformática">BIOINFORMÁTICA</a>
                                </td>
                            </tr> 
                            <tr>
                                <td>
                                    <a href="'.$ambiente.'/suporte/chamado/Calibração">CALIBRAÇÃO</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="'.$ambiente.'/suporte/chamado/Compras">COMPRAS</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="'.$ambiente.'/suporte/chamado/Manutencao">MANUTENÇÃO</a>
                                </td>
                            </tr>
                            <tr>    
                                <td>
                                    <a href="'.$ambiente.'/suporte/chamado/Qualidade">QUALIDADE</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="'.$ambiente.'/suporte/chamado/Secretaria">SECRETARIA</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="'.$ambiente.'/suporte/chamado/SPET">SPET</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="'.$ambiente.'/suporte/chamado/TI">TI</a>
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
                                    <a href="'.$ambiente.'/suporte/categorias/">CATEGORIAS</a>
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
                <input type="text" size="60%" class="form-control ml-4" id="search" name="search" onkeyup="javascript:verificaSubmit(event);" placeholder="Pesquisar" style="border-color: #FFFFFF;-webkit-box-shadow: none; box-shadow: none; background-color: #e9e9e9">
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
                                <img src="<?php echo $ambiente ?>/dependencias/images/sistemas.png" width="18" height="18">
                            </a>
                        </div>
                        <div id="menuSistemas" style="display:none;" class="groupMenuSistemas">
                            <br/>
                            <table class="table table-sm table-borderless">
                                <tr>
                                    <td width="33,3%" align="center">
                                        <a href="<?php echo $ambiente ?>/login"><div id="divLogoSistemas" style="background: orange;"><img src="<?php echo $ambiente ?>/dependencias/images/adm.png" width="60" height="60"></div>DASHBOARD</a>
                                    </td>
                                    <td width="33,3%" align="center">
                                        <a href="<?php echo $ambiente ?>/suporte"><div id="divLogoSistemas" style="background: red"><img src="<?php echo $ambiente ?>/dependencias/images/ti.png" width="60" height="60"></div>SUPORTE</a>
                                    </td>
                                    <td width="33,3%" align="center">
                                        <div id="divLogoSistemas" style="background: lightgray;"><img src="<?php echo $ambiente ?>/dependencias/images/bs.png" width="60" height="60"></div>SOLUÇÃO
                                    </td>
                                </tr>
                                <tr>
                                    <td width="33,3%" align="center">
                                        <div id="divLogoSistemas" style="background: lightgray;"><img src="<?php echo $ambiente ?>/dependencias/images/alm.png" width="60" height="60"></div>ALMOLAB
                                    </td>
                                    <td width="33,3%" align="center">
                                        <a href="<?php echo $ambiente ?>/almoxarife"><div id="divLogoSistemas" style="background: #1b80a5;"><img src="<?php echo $ambiente ?>/dependencias/images/almo.png" width="60" height="60"></div>ALMOXARIFE</a>
                                    </td>
                                    <td width="33,3%" align="center">
                                        <a href="<?php echo $ambiente ?>/ftp"><div id="divLogoSistemas" style="background: green"><img src="<?php echo $ambiente ?>/dependencias/images/ft.png" width="60" height="60"></div>FTP</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="33,3%" align="center">
                                        <div id="divLogoSistemas" style="background: lightgray;" style="background: green"><img src="<?php echo $ambiente ?>/dependencias/images/fc.png" width="60" height="60"></div>FICHA C.
                                    </td>
                                    <td width="33,3%" align="center">
                                        <div id="divLogoSistemas" style="background: lightgray;" style="background: orange"><img src="<?php echo $ambiente ?>/dependencias/images/ga.png" width="60" height="60"></div>SECRETARIA
                                    </td>
                                    <td width="33,3%" align="center">
                                        <div id="divLogoSistemas" style="background: lightgray;" style="background: orange"><img src="<?php echo $ambiente ?>/dependencias/images/gt.png" width="60" height="60"></div>TI
                                    </td>
                                </tr>
                                <tr>
                                    <td width="33,3%" align="center">
                                        <a href="http://10.10.0.25/Biblivre5/" target="blank"><div id="divLogoSistemas" style="background: purple"><img src="<?php echo $ambiente ?>/dependencias/images/bibi.png" width="60" height="60"></div>BIBLIVRE</a>
                                    </td>
                                    <td width="33,3%" align="center">
                                        <a href="http://10.10.0.6/labdop/" target="blank"><div id="divLogoSistemas" style="background: lightpink"><img src="<?php echo $ambiente ?>/dependencias/images/lbcd.png" width="60" height="60"></div>LABDOP</a>
                                    </td>
                                    <td width="33,3%" align="center">
                                            <div id="divLogoSistemas" style="background: lightgray"><img src="<?php echo $ambiente ?>/dependencias/images/sm_pb.png" width="60" height="60"></div>SM WEB</a>
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
                                <img src="<?php echo $ambiente ?>/dependencias/images/user.png" width="18" height="18">
                            </a>
                        </div>
                        <div id="menuUsuario" style="display:none;" class="DivMenuUser">
                            <div align="center">
                                <iframe src="<?php echo $ambiente ?>/dependencias/paginas/MenuUser.php" scrolling="auto" width="100%" height="50px" frameborder="0"></iframe>
                                <br/><a href="<?php echo $ambiente ?>/dependencias/paginas/logout.php?env=<?php echo $ambiente ?>">Sair do sistema</a>
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

<!-- Modal chamado new, link na navbar -->
<div id="modal" class="modal fade bd-modal-medium" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-medium">
        <div class="modal-content"> 
            <div class="modal-header">
                <h4 class="modal-title"></h4>
                <button type="button" class="close" onclick="location.reload()" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <!-- iframe abre com os parâmetros segundo função js 'abrirIFrame' -->
                <iframe id="js_iframe" scrolling="auto" src="" width="100%" height="590px" frameborder="0"></iframe>
            </div>
        </div>
    </div>
</div>