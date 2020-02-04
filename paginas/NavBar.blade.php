<?php
if($_GET['push'] === 'hml/')
    $ambiente = '/hml';
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
                        <table class="table table-sm table-hover arrow-hover-hand table-borderless">
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
                        <table class="table table-sm table-hover arrow-hover-hand table-borderless">
                            <thead>
                                <tr>
                                    <th>
                                        <font color="#565656">DASHBOARD</font>
                                    </th>
                                </tr>
                            </thead>
                            <tr onClick=carregarPagina("'.$ambiente.'/login");>
                                <td>
                                    <font color="gray">MINHA DASHBOARD</font>
                                </td>
                            </tr>
                            <tr onclick=abrirIFrame("'.$ambiente.'/suporte/chamados/create"); id="rota"; data-target="#modal"; data-toggle="modal";>
                                <td>
                                    <font color="gray">NOVO CHAMADO</font>
                                </td>
                            </tr>
                        </table>
                    </div>
                ';
                        break;
                    case "almoxarife":
                        echo '
                    <div style="margin: 20px">
                        <table class="table table-sm table-hover arrow-hover-hand table-borderless">
                            <thead>
                                <tr>
                                    <th>
                                        ALMOXARIFE <a href="#" data-toggle="modal" data-target="#modalMenuAlmoxarife"><span class="badge badge-info">?</span></a>
                                    </th>
                                </tr>
                                <tr>
                                    <th>
                                        MEU ESTOQUE
                                    </th>
                                </tr>
                            </thead>
                            <tr onClick=carregarPagina("'.$ambiente.'/almoxarife/material/");>
                                <td>
                                    <a href="#">MATERIAIS</a>
                                </td>
                            </tr>
                            <tr onClick=carregarPagina("'.$ambiente.'/almoxarife/entrada-padrao");>
                                <td>
                                    <a href="#">ENTRADA DE PADRÕES</a>
                                </td>
                            </tr>
                            <thead>
                                <tr>
                                    <th>
                                        ESTOQUE GERAL
                                    </th>
                                </tr>
                            </thead>
                            <tr onClick=carregarPagina("'.$ambiente.'/almoxarife/material_all");>
                                <td>
                                    <a href="#">MATERIAIS</a>
                                </td>
                            </tr>
                            <tr onClick=carregarPagina("'.$ambiente.'/almoxarife/entrada-padrao_all");>
                                <td>
                                    <a href="#">ENTRADA DE PADRÕES</a>
                                </td>
                            </tr>
                            <tr onClick=carregarPagina("'.$ambiente.'/almoxarife/padrao");>
                                <td>
                                    <a href="#">PADRÕES</a>
                                </td>
                            </tr>
                            <thead>
                                <tr>
                                    <th>
                                        ÁREA ADMINISTRATIVA
                                    </th>
                                </tr>
                            </thead>
                            <tr onClick=carregarPagina("'.$ambiente.'/almoxarife/log-material");>
                                <td>
                                    <a href="#">EDITAR DE SAÍDAS DE MATERIAL</a>
                                </td>
                            </tr>
                            <tr onClick=carregarPagina("'.$ambiente.'/almoxarife/log-padrao");>
                                <td>
                                    <a href="#">EDITAR DE SAÍDAS DE PADRAO</a>
                                </td>
                            </tr>
                            <tr onClick=carregarPagina("'.$ambiente.'/almoxarife/localizacao");>
                                <td>
                                    <a href="#">EDITAR LOCALIZAÇÕES</a>
                                </td>
                            </tr>
                        </table>
                    </div>
                ';
                        break;
                    case "suporte":
                        echo '
                    <div style="margin: 20px">
                        <table class="table table-sm table-hover arrow-hover-hand table-borderless">
                            <thead>
                                <tr>
                                    <th>
                                        <font color="#565656">SUPORTE <a href="#"></font>
                                    </th>
                                </tr>
                            </thead>
                            <tr onClick=carregarPagina("'.$ambiente.'/suporte/chamado/geral");>
                                <td>
                                    <font color="gray">PÁGINA PRINCIPAL</font>
                                </td>
                            </tr>
                            <tr onclick=abrirIFrame("'.$ambiente.'/suporte/chamados/create"); id="rota"; data-target="#modal"; data-toggle="modal";>
                                <td>
                                    <font color="gray">NOVO CHAMADO</font>
                                </td>
                            </tr>
                            <thead>
                                <tr>
                                    <th>
                                        <font color="#565656">VISUALIZAR CHAMADOS
                                    </th>
                                </tr>  
                            </thead> 
                            <tr onClick=carregarPagina("'.$ambiente.'/suporte/chamado/bioinformatica");>
                                <td>
                                    <font color="gray">BIOINFORMÁTICA</font>
                                </td>
                            </tr> 
                            <tr onClick=carregarPagina("'.$ambiente.'/suporte/chamado/calibração");>
                                <td>
                                    <font color="gray">CALIBRAÇÃO</font>
                                </td>
                            </tr>
                            <tr onClick=carregarPagina("'.$ambiente.'/suporte/chamado/suprimentos");>
                                <td>
                                    <font color="gray">SUPRIMENTOS</font>
                                </td>
                            </tr>
                            <tr onClick=carregarPagina("'.$ambiente.'/suporte/chamado/manutencao");>
                                <td>
                                    <font color="gray">MANUTENÇÃO</font>
                                </td>
                            </tr>
                            <tr onClick=carregarPagina("'.$ambiente.'/suporte/chamado/qualidade");>    
                                <td>
                                    <font color="gray">QUALIDADE</font>
                                </td>
                            </tr>
                            <tr onClick=carregarPagina("'.$ambiente.'/suporte/chamado/secretaria");>
                                <td>
                                    <font color="gray">SECRETARIA</font>
                                </td>
                            </tr>
                            <tr onClick=carregarPagina("'.$ambiente.'/suporte/chamado/spet");>
                                <td>
                                    <font color="gray">SPET</font>
                                </td>
                            </tr>
                            <tr onClick=carregarPagina("'.$ambiente.'/suporte/chamado/ti");>
                                <td>
                                    <font color="gray">TI</font>
                                </td>
                            </tr>
                            <tr onClick=carregarPagina("'.$ambiente.'/suporte/chamado/financeiro");>
                                <td>
                                    <font color="gray">FINANCEIRO</font>
                                </td>
                            </tr>
                            <thead>
                                <tr>
                                    <th>
                                        <font color="#565656">AREA ADMINISTRATIVA</font>
                                    </th>
                                </tr>
                            </thead>
                            <tr onClick=carregarPagina("'.$ambiente.'/suporte/categorias/");>
                                <td>
                                    <font color="gray">CATEGORIAS</font>
                                </td>
                            </tr>
                        </table>
                    </div>
                ';
                break;
                case "rh":
                        echo '
                    <div style="margin: 20px">
                        <table class="table table-sm table-hover-menu arrow-hover-hand table-borderless">
                            <thead>
                                <tr>
                                    <th>
                                        <font color="#565656">COLABORADORES<a href="#"></font>
                                    </th>
                                </tr>
                            </thead>
                            <tr onClick=carregarPagina("'.$ambiente.'/rh/colaboradores");>
                                <td>
                                    <font color="gray">ATIVOS</font>
                                </td>
                            </tr>
                            <tr onclick=carregarPagina("'.$ambiente.'/rh/colaboradores/inativos");>
                                <td>
                                    <font color="gray">INATIVOS</font>
                                </td>
                            </tr>
                            <tr onclick=carregarPagina("'.$ambiente.'/rh/colaboradores/desatualizados");>
                                <td>
                                    <font color="gray">DESATUALIZADOS</font>
                                </td>
                            </tr>
                            <thead>
                                <tr>
                                    <th>
                                        <font color="#565656">VISUALIZAR<a href="#"></font>
                                    </th>
                                </tr>
                            </thead>
                            <tr>
                                <td onclick=carregarPagina("'.$ambiente.'/rh/listar/aniversarios");>
                                    <font color="gray">ANIVERSARIANTES</font>
                                </td>
                                <td onclick=carregarPagina("'.$ambiente.'/rh/export/aniversarios")>
                                    <b><i class="fas fa-file-download"></i></b>
                                </td>
                            </tr>
                            <tr>
                                <td onclick=carregarPagina("'.$ambiente.'/rh/listar/contatos");>
                                    <font color="gray">TELEFONES</font>
                                </td>
                                <td onclick=carregarPagina("'.$ambiente.'/rh/export/contatos")>
                                    <b><i class="fas fa-file-download"></i></b>
                                </td>
                            </tr>
                            <tr>
                                <td onclick=carregarPagina("'.$ambiente.'/rh/listar/ramais");>
                                    <font color="gray">RAMAIS</font>
                                </td>
                                <td onclick=carregarPagina("'.$ambiente.'/rh/export/ramais");>
                                    <b><i class="fas fa-file-download"></i></b>
                                </td>
                            </tr>
                            <tr>
                                <td onclick=carregarPagina("'.$ambiente.'/rh/listar/veiculos");>
                                    <font color="gray">VEICULOS</font>
                                </td>
                                <td onclick=carregarPagina("'.$ambiente.'/rh/export/veiculos");>
                                    <b><i class="fas fa-file-download"></i></b>
                                </td>
                            </tr>
                            <thead>
                                <tr>
                                    <th>
                                        <font color="#565656">AREA ADMINISTRATIVA<a href="#"></font>
                                    </th>
                                </tr>
                            </thead>
                            <tr>
                                <td onclick=abrirIFrame("'.$ambiente.'/rh/instituicoes"); id="rota"; data-target="#modal"; data-toggle="modal";>
                                    <font color="gray">INSTITUIÇÕES</font>
                                </td>
                            </tr>
                            <tr>
                                <td onclick=abrirIFrame("'.$ambiente.'/rh/cursos"); id="rota"; data-target="#modal"; data-toggle="modal";>
                                    <font color="gray">CURSOS</font>
                                </td>
                            </tr>
                            <tr>
                                <td onclick=abrirIFrame("'.$ambiente.'/rh/vinculos"); id="rota"; data-target="#modal"; data-toggle="modal";>
                                    <font color="gray">VINCULOS</font>
                                </td>
                            </tr>
                            <tr>
                                <td onclick=abrirIFrame("'.$ambiente.'/rh/cargos"); id="rota"; data-target="#modal"; data-toggle="modal";>
                                    <font color="gray">CARGOS</font>
                                </td>
                            </tr>
                            
                            <tr>
                                <td onclick=abrirIFrame("'.$ambiente.'/rh/carreira"); id="rota"; data-target="#modal"; data-toggle="modal";>
                                    <font color="gray">CARREIRAS</font>
                                </td>
                            </tr>
                        </table>
                    </div>
                ';
                break;
                }
                ?>
            </div>
            <!-- Fim Menu Principal -->    

            <!-- Informa o nome do sistema em que usuário está -->
            <b><?php echo ucfirst($_GET['sistema']).' '.substr(strstr($_GET['pagina'], '/'), 1) ?></b>
            
            <!-- Busca (não exibe em alguns casos, ex.: aniversariantes do RH)  -->
            <?php if($_GET['pagina'] != '0'){ ?>
                <div class="input-group" style="width:60%;">
                    <input type="text" size="60%" class="form-control ml-4" id="search" name="search" onkeyup="javascript:verificaSubmit(event);" placeholder="Pesquisar" style="border-color: #FFFFFF;-webkit-box-shadow: none; box-shadow: none; background-color: #e9e9e9">
                    <div class="input-append">
                        <button class="btn btn-link" type="button" onclick="javascript:buscar();" style="background-color: #FFFFFF;">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </div>
            <?php } ?>

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
                                        <a href="<?php echo $ambiente ?>/suporte/chamado/geral"><div id="divLogoSistemas" style="background: red"><img src="<?php echo $ambiente ?>/dependencias/images/ti.png" width="60" height="60"></div>SUPORTE</a>
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
                                        <a href="<?php echo $ambiente ?>/ftp"><div id="divLogoSistemas" style="background: lightblue"><img src="<?php echo $ambiente ?>/dependencias/images/ft.png" width="60" height="60"></div>FTP</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="33,3%" align="center">
                                        <div id="divLogoSistemas" style="background: lightgray;" style="background: green"><img src="<?php echo $ambiente ?>/dependencias/images/fc.png" width="60" height="60"></div>SECRETARIA
                                    </td>
                                    <td width="33,3%" align="center">
                                        <a href="http://10.10.0.14/rh/"><div id="divLogoSistemas" style="background: green"><img src="<?php echo $ambiente ?>/dependencias/images/ga.png" width="60" height="60"></div>RH</a>
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
                                <a href="<?php echo $ambiente ?>/dependencias/paginas/logout.php?env=<?php echo $ambiente ?>">Sair do sistema</a>
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
                    <br>Aqui você poderá visualizar as baixas de material e padrão de todos os setores. <br />A opção de editar uma saída está disponível somente para o setor de Suprimentos.<br><br>
                    <b>ÁREA ADMINISTRATIVA</b>
                    <br>Edições de baixas e criação de localização disponivel somente para o setor de Suprimentos.  <br /> Pode cancelar baixas ou transferências de materiais ou padrões realizadas erroneamente pelos usuários. <br /> Também irá editar as localizações permitidas aos setores para armazenar seu estoque.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                </div>
            </div>
        </div>
    </div>
</div>