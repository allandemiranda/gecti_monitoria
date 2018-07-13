﻿<!DOCTYPE HTML>
<html>
<head>
    <title>Sistema de Gerenciamento de Grupos</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
    <!-- Custom Theme files -->
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <!--js-->
    <script src="js/jquery-2.1.1.min.js"></script>
    <!--icons-css-->
    <link href="css/font-awesome.css" rel="stylesheet">
    <!--Google Fonts-->
    <link href='//fonts.googleapis.com/css?family=Carrois+Gothic' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Work+Sans:400,500,600' rel='stylesheet' type='text/css'>
    <!--static chart-->
    <script src="js/Chart.min.js"></script>
    <!--//charts-->
    <!-- geo chart -->
    <script src="//cdn.jsdelivr.net/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>
    <script>window.modernizr || document.write('<script src="lib/modernizr/modernizr-custom.js"><\/script>')</script>
    <!--<script src="lib/html5shiv/html5shiv.js"></script>-->
    <!-- Chartinator  -->
    <script src="js/chartinator.js"></script>
    <!--skycons-icons-->
    <script src="js/skycons.js"></script>
    <!--//skycons-icons-->
</head>
<body>
    <div class="page-container">
        <div class="left-content">
            <div class="mother-grid-inner">
                <!--header start here-->
                <div class="header-main">
                    <div class="header-left">
                        <div class="logo-name">
                            <a href="index.html">
                                <h1>GECTI</h1>
                                <!--<img id="logo" src="" alt="Logo"/>-->
                            </a>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="header-right">
                        <div class="profile_details">
                            <ul>
                                <li class="dropdown profile_details_drop">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                        <div class="profile_img">
                                            <div class="user-name">
                                                <p>PrimeiroNome</p>
                                                <span>Tipo de Conta</span>
                                            </div>
                                            <i class="fa fa-angle-down lnr"></i>
                                            <i class="fa fa-angle-up lnr"></i>
                                            <div class="clearfix"></div>
                                        </div>
                                    </a>
                                    <ul class="dropdown-menu drp-mnu">
                                        <li> <a href="#"><i class="fa fa-cog"></i> Configurações</a> </li>
                                        <li> <a href="#"><i class="fa fa-user"></i> Perfil</a> </li>
                                        <li> <a href="#"><i class="fa fa-sign-out"></i> Logout</a> </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <!--heder end here-->
                <!-- script-for sticky-nav -->
                <script>
                    $(document).ready(function () {
                        var navoffeset = $(".header-main").offset().top;
                        $(window).scroll(function () {
                            var scrollpos = $(window).scrollTop();
                            if (scrollpos >= navoffeset) {
                                $(".header-main").addClass("fixed");
                            } else {
                                $(".header-main").removeClass("fixed");
                            }
                        });

                    });
                </script>
                <!-- /script-for sticky-nav -->
                <!--inner block start here-->
                <div class="inner-block">
                    <h3>Grupo [código] </h3>
                    <div style="margin-top:3%;"></div>
                    <div class="col-sm-12 col-md-12 col-lg-12 mb-60">
                        <div class="horizontal-tab">
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#OP1" data-toggle="tab" aria-expanded="true">OP1</a></li>
                                <li class=""><a href="#OP2" data-toggle="tab" aria-expanded="false">OP2</a></li>
                                <li class=""><a href="#OP3" data-toggle="tab" aria-expanded="false">OP3</a></li>
                                <li class=""><a href="#OP4" data-toggle="tab" aria-expanded="false">OP4</a></li>
                                <li class=""><a href="#OP5" data-toggle="tab" aria-expanded="false">OP5</a></li>
                                <li class=""><a href="#OP6" data-toggle="tab" aria-expanded="false">OP6</a></li>
                            </ul>
                            <form>
                                <div class="tab-content">
                                    <div class="tab-pane active" id="OP1">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <h1>
                                                    Alunos do grupo
                                                </h1>
                                                <div class="table-responsive">
                                                    <table class="table table-hover">
                                                        <thead>
                                                            <tr>
                                                                <th>#</th>
                                                                <th>Nome</th>
                                                                <th>Email</th>
                                                                <th>Presente</th>
                                                                <th>Ausente</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>1</td>
                                                                <td>Allan</td>
                                                                <td>teste@teste.com</td>
                                                                <td><input type="radio" name="OP1#1" value="presente" /></td>
                                                                <td><input type="radio" name="OP1#1" value="ausente" /></td>
                                                            </tr>
                                                            <tr>
                                                                <td>2</td>
                                                                <td>Allan</td>
                                                                <td>teste@teste.com</td>
                                                                <td><input type="radio" name="OP1#2" value="presente" /></td>
                                                                <td><input type="radio" name="OP1#2" value="ausente" /></td>
                                                            </tr>
                                                            <tr>
                                                                <td>3</td>
                                                                <td>Allan</td>
                                                                <td>teste@teste.com</td>
                                                                <td><input type="radio" name="OP1#3" value="presente" /></td>
                                                                <td><input type="radio" name="OP1#3" value="ausente" /></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <h1>
                                                    Avaliar Atendimento
                                                </h1>
                                                <div class="table-responsive">
                                                    <table class="table table-hover">
                                                        <thead>
                                                            <tr>
                                                                <th>#</th>
                                                                <th>Verificar</th>
                                                                <th>Índice</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>1</td>
                                                                <td>Trajetória de C&T</td>
                                                                <td><input type="number" /> %</td>
                                                            </tr>
                                                            <tr>
                                                                <td>2</td>
                                                                <td>Aplicações das possíveis tecnologias</td>
                                                                <td><input type="number" /> %</td>
                                                            </tr>
                                                            <tr>
                                                                <td>3</td>
                                                                <td>Mercados impactados</td>
                                                                <td><input type="number" /> %</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <h1>
                                                    Observações
                                                </h1>
                                                <div style="margin-top: 2%;">
                                                    <textarea style="width: 100%"></textarea>
                                                </div>
                                                <div class="hvr-fade">
                                                    <input type="submit" value="Salvar" style="margin-top: 3%;" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="OP2">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <h1>
                                                    Alunos do grupo
                                                </h1>
                                                <div class="table-responsive">
                                                    <table class="table table-hover">
                                                        <thead>
                                                            <tr>
                                                                <th>#</th>
                                                                <th>Nome</th>
                                                                <th>Email</th>
                                                                <th>Presente</th>
                                                                <th>Ausente</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>1</td>
                                                                <td>Allan</td>
                                                                <td>teste@teste.com</td>
                                                                <td><input type="radio" name="OP2#1" value="presente" /></td>
                                                                <td><input type="radio" name="OP2#1" value="ausente" /></td>
                                                            </tr>
                                                            <tr>
                                                                <td>2</td>
                                                                <td>Allan</td>
                                                                <td>teste@teste.com</td>
                                                                <td><input type="radio" name="OP2#2" value="presente" /></td>
                                                                <td><input type="radio" name="OP2#2" value="ausente" /></td>
                                                            </tr>
                                                            <tr>
                                                                <td>3</td>
                                                                <td>Allan</td>
                                                                <td>teste@teste.com</td>
                                                                <td><input type="radio" name="OP2#3" value="presente" /></td>
                                                                <td><input type="radio" name="OP2#3" value="ausente" /></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <h1>
                                                    Avaliar Atendimento
                                                </h1>
                                                <div class="table-responsive">
                                                    <table class="table table-hover">
                                                        <thead>
                                                            <tr>
                                                                <th>#</th>
                                                                <th>Verificar</th>
                                                                <th>Índice</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>1</td>
                                                                <td>Diagnóstico dos mercados impactados</td>
                                                                <td><input type="number" /> %</td>
                                                            </tr>
                                                            <tr>
                                                                <td>2</td>
                                                                <td>Sobre a Trajetória da bancada ao mercado</td>
                                                                <td><input type="number" /> %</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <h1>
                                                    Observações
                                                </h1>
                                                <div style="margin-top: 2%;">
                                                    <textarea style="width: 100%"></textarea>
                                                </div>
                                                <div class="hvr-fade">
                                                    <input type="submit" value="Salvar" style="margin-top: 3%;" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="OP3">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <h1>
                                                    Alunos do grupo
                                                </h1>
                                                <div class="table-responsive">
                                                    <table class="table table-hover">
                                                        <thead>
                                                            <tr>
                                                                <th>#</th>
                                                                <th>Nome</th>
                                                                <th>Email</th>
                                                                <th>Presente</th>
                                                                <th>Ausente</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>1</td>
                                                                <td>Allan</td>
                                                                <td>teste@teste.com</td>
                                                                <td><input type="radio" name="OP3#1" value="presente" /></td>
                                                                <td><input type="radio" name="OP3#1" value="ausente" /></td>
                                                            </tr>
                                                            <tr>
                                                                <td>2</td>
                                                                <td>Allan</td>
                                                                <td>teste@teste.com</td>
                                                                <td><input type="radio" name="OP3#2" value="presente" /></td>
                                                                <td><input type="radio" name="OP3#2" value="ausente" /></td>
                                                            </tr>
                                                            <tr>
                                                                <td>3</td>
                                                                <td>Allan</td>
                                                                <td>teste@teste.com</td>
                                                                <td><input type="radio" name="OP3#3" value="presente" /></td>
                                                                <td><input type="radio" name="OP3#3" value="ausente" /></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <h1>
                                                    Avaliar Atendimento
                                                </h1>
                                                <div class="table-responsive">
                                                    <table class="table table-hover">
                                                        <thead>
                                                            <tr>
                                                                <th>#</th>
                                                                <th>Verificar</th>
                                                                <th>Índice</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>1</td>
                                                                <td>nº1</td>
                                                                <td><input type="number" /> %</td>
                                                            </tr>
                                                            <tr>
                                                                <td>2</td>
                                                                <td>nº2</td>
                                                                <td><input type="number" /> %</td>
                                                            </tr>
                                                            <tr>
                                                                <td>3</td>
                                                                <td>nº3</td>
                                                                <td><input type="number" /> %</td>
                                                            </tr>
                                                            <tr>
                                                                <td>4</td>
                                                                <td>nº4</td>
                                                                <td><input type="number" /> %</td>
                                                            </tr>
                                                            <tr>
                                                                <td>5</td>
                                                                <td>nº5</td>
                                                                <td><input type="number" /> %</td>
                                                            </tr>
                                                            <tr>
                                                                <td>6</td>
                                                                <td>nº6</td>
                                                                <td><input type="number" /> %</td>
                                                            </tr>
                                                            <tr>
                                                                <td>7</td>
                                                                <td>nº7</td>
                                                                <td><input type="number" /> %</td>
                                                            </tr>
                                                            <tr>
                                                                <td>8</td>
                                                                <td>nº8</td>
                                                                <td><input type="number" /> %</td>
                                                            </tr>
                                                            <tr>
                                                                <td>9</td>
                                                                <td>nº9</td>
                                                                <td><input type="number" /> %</td>
                                                            </tr>
                                                            <tr>
                                                                <td>10</td>
                                                                <td>nº10</td>
                                                                <td><input type="number" /> %</td>
                                                            </tr>
                                                            <tr>
                                                                <td>11</td>
                                                                <td>nº11</td>
                                                                <td><input type="number" /> %</td>
                                                            </tr>
                                                            <tr>
                                                                <td>12</td>
                                                                <td>nº12</td>
                                                                <td><input type="number" /> %</td>
                                                            </tr>
                                                            <tr>
                                                                <td>13</td>
                                                                <td>nº13</td>
                                                                <td><input type="number" /> %</td>
                                                            </tr>
                                                            <tr>
                                                                <td>14</td>
                                                                <td>nº14</td>
                                                                <td><input type="number" /> %</td>
                                                            </tr>
                                                            <tr>
                                                                <td>15</td>
                                                                <td>nº15</td>
                                                                <td><input type="number" /> %</td>
                                                            </tr>
                                                            <tr>
                                                                <td>16</td>
                                                                <td>nº16</td>
                                                                <td><input type="number" /> %</td>
                                                            </tr>
                                                            <tr>
                                                                <td>17</td>
                                                                <td>nº17</td>
                                                                <td><input type="number" /> %</td>
                                                            </tr>
                                                            <tr>
                                                                <td>18</td>
                                                                <td>nº18</td>
                                                                <td><input type="number" /> %</td>
                                                            </tr>
                                                            <tr>
                                                                <td>19</td>
                                                                <td>nº19</td>
                                                                <td><input type="number" /> %</td>
                                                            </tr>
                                                            <tr>
                                                                <td>20</td>
                                                                <td>nº20</td>
                                                                <td><input type="number" /> %</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <h1>
                                                    Observações
                                                </h1>
                                                <div style="margin-top: 2%;">
                                                    <textarea style="width: 100%"></textarea>
                                                </div>
                                                <div class="hvr-fade">
                                                    <input type="submit" value="Salvar" style="margin-top: 3%;" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="OP4">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <h1>
                                                    Alunos do grupo
                                                </h1>
                                                <div class="table-responsive">
                                                    <table class="table table-hover">
                                                        <thead>
                                                            <tr>
                                                                <th>#</th>
                                                                <th>Nome</th>
                                                                <th>Email</th>
                                                                <th>Presente</th>
                                                                <th>Ausente</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>1</td>
                                                                <td>Allan</td>
                                                                <td>teste@teste.com</td>
                                                                <td><input type="radio" name="OP4#1" value="presente" /></td>
                                                                <td><input type="radio" name="OP4#1" value="ausente" /></td>
                                                            </tr>
                                                            <tr>
                                                                <td>2</td>
                                                                <td>Allan</td>
                                                                <td>teste@teste.com</td>
                                                                <td><input type="radio" name="OP4#2" value="presente" /></td>
                                                                <td><input type="radio" name="OP4#2" value="ausente" /></td>
                                                            </tr>
                                                            <tr>
                                                                <td>3</td>
                                                                <td>Allan</td>
                                                                <td>teste@teste.com</td>
                                                                <td><input type="radio" name="OP4#3" value="presente" /></td>
                                                                <td><input type="radio" name="OP4#3" value="ausente" /></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <h1>
                                                    Avaliar Atendimento
                                                </h1>
                                                <div class="table-responsive">
                                                    <table class="table table-hover">
                                                        <thead>
                                                            <tr>
                                                                <th>#</th>
                                                                <th>Verificar</th>
                                                                <th>Índice</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>1</td>
                                                                <td>Discussão dos conceitos-chaves de GECTI em contraponto as informações das pesquisas</td>
                                                                <td><input type="number" /> %</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <h1>
                                                    Observações
                                                </h1>
                                                <div style="margin-top: 2%;">
                                                    <textarea style="width: 100%"></textarea>
                                                </div>
                                                <div class="hvr-fade">
                                                    <input type="submit" value="Salvar" style="margin-top: 3%;" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="OP5">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <h1>
                                                    Alunos do grupo
                                                </h1>
                                                <div class="table-responsive">
                                                    <table class="table table-hover">
                                                        <thead>
                                                            <tr>
                                                                <th>#</th>
                                                                <th>Nome</th>
                                                                <th>Email</th>
                                                                <th>Presente</th>
                                                                <th>Ausente</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>1</td>
                                                                <td>Allan</td>
                                                                <td>teste@teste.com</td>
                                                                <td><input type="radio" name="OP5#1" value="presente" /></td>
                                                                <td><input type="radio" name="OP5#1" value="ausente" /></td>
                                                            </tr>
                                                            <tr>
                                                                <td>2</td>
                                                                <td>Allan</td>
                                                                <td>teste@teste.com</td>
                                                                <td><input type="radio" name="OP5#2" value="presente" /></td>
                                                                <td><input type="radio" name="OP5#2" value="ausente" /></td>
                                                            </tr>
                                                            <tr>
                                                                <td>3</td>
                                                                <td>Allan</td>
                                                                <td>teste@teste.com</td>
                                                                <td><input type="radio" name="OP5#3" value="presente" /></td>
                                                                <td><input type="radio" name="OP5#3" value="ausente" /></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <h1>
                                                    Avaliar Atendimento
                                                </h1>
                                                <div class="table-responsive">
                                                    <table class="table table-hover">
                                                        <thead>
                                                            <tr>
                                                                <th>#</th>
                                                                <th>Verificar</th>
                                                                <th>Índice</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>1</td>
                                                                <td>Título</td>
                                                                <td><input type="number" /> %</td>
                                                            </tr>
                                                            <tr>
                                                                <td>2</td>
                                                                <td>Autores / CPF / Filiação</td>
                                                                <td><input type="number" /> %</td>
                                                            </tr>
                                                            <tr>
                                                                <td>3</td>
                                                                <td>Resumo</td>
                                                                <td><input type="number" /> %</td>
                                                            </tr>
                                                            <tr>
                                                                <td>4</td>
                                                                <td>Abstract</td>
                                                                <td><input type="number" /> %</td>
                                                            </tr>
                                                            <tr>
                                                                <td>5</td>
                                                                <td>Introdução</td>
                                                                <td><input type="number" /> %</td>
                                                            </tr>
                                                            <tr>
                                                                <td>6</td>
                                                                <td>Desenvolvimento (OP1, OP2 e OP3)</td>
                                                                <td><input type="number" /> %</td>
                                                            </tr>
                                                            <tr>
                                                                <td>7</td>
                                                                <td>Discussão dos resultados (OP4)</td>
                                                                <td><input type="number" /> %</td>
                                                            </tr>
                                                            <tr>
                                                                <td>8</td>
                                                                <td>Considerações finais</td>
                                                                <td><input type="number" /> %</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <h1>
                                                    Observações
                                                </h1>
                                                <div style="margin-top: 2%;">
                                                    <textarea style="width: 100%"></textarea>
                                                </div>
                                                <div class="hvr-fade">
                                                    <input type="submit" value="Salvar" style="margin-top: 3%;" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="OP6">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <h1>
                                                    Alunos do grupo
                                                </h1>
                                                <div class="table-responsive">
                                                    <table class="table table-hover">
                                                        <thead>
                                                            <tr>
                                                                <th>#</th>
                                                                <th>Nome</th>
                                                                <th>Email</th>
                                                                <th>Presente</th>
                                                                <th>Ausente</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>1</td>
                                                                <td>Allan</td>
                                                                <td>teste@teste.com</td>
                                                                <td><input type="radio" name="OP6#1" value="presente" /></td>
                                                                <td><input type="radio" name="OP6#1" value="ausente" /></td>
                                                            </tr>
                                                            <tr>
                                                                <td>2</td>
                                                                <td>Allan</td>
                                                                <td>teste@teste.com</td>
                                                                <td><input type="radio" name="OP6#2" value="presente" /></td>
                                                                <td><input type="radio" name="OP6#2" value="ausente" /></td>
                                                            </tr>
                                                            <tr>
                                                                <td>3</td>
                                                                <td>Allan</td>
                                                                <td>teste@teste.com</td>
                                                                <td><input type="radio" name="OP6#3" value="presente" /></td>
                                                                <td><input type="radio" name="OP6#3" value="ausente" /></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>                                            
                                            <div class="col-md-12">
                                                <h1>
                                                    Observações
                                                </h1>
                                                <div style="margin-top: 2%;">
                                                    <textarea style="width: 100%"></textarea>
                                                </div>
                                                <div class="hvr-fade">
                                                    <input type="submit" value="Salvar" style="margin-top: 3%;" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--slider menu-->
        <div class="sidebar-menu">
            <div class="logo">
                <a class="sidebar-icon">
                    <span class="fa fa-bars"></span>
                </a>
            </div>
            <div class="menu">
                <ul id="menu">
                    <li>
                        <a>
                            <i class="fa fa-users"></i>
                            <span>Grupos</span>
                        </a>
                        <ul>
                            <li><a href="#">Abertos</a></li>
                            <li><a href="#">Fechados</a></li>
                        </ul>
                    </li>
                    <li>
                        <a>
                            <i class="fa fa-trello"></i>
                            <span>Novo Grupo</span>
                        </a>
                    </li>
                    <li>
                        <a>
                            <i class="fa fa-user"></i>
                            <span>Usuários</span>
                        </a>
                        <ul>
                            <li><a href="#">Adicionar</a></li>
                            <li><a href="#">Deletar</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <div class="clearfix"> </div>
    </div>
    <!--slide bar menu end here-->
    <script>
        var toggle = true;

        $(".sidebar-icon").click(function () {
            if (toggle) {
                $(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
                $("#menu span").css({ "position": "absolute" });
            }
            else {
                $(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
                setTimeout(function () {
                    $("#menu span").css({ "position": "relative" });
                }, 400);
            }
            toggle = !toggle;
        });
    </script>
    <!--scrolling js-->
    <script src="js/jquery.nicescroll.js"></script>
    <script src="js/scripts.js"></script>
    <!--//scrolling js-->
    <script src="js/bootstrap.js"></script>
    <!-- mother grid end here-->
</body>
</html>                     