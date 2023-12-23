<!DOCTYPE html>
<html lang="en" class="no-js">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
<meta charset="utf-8"/>
<title>Multidados TI</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<meta content="" name="description"/>
<meta content="" name="author"/>
<meta name="MobileOptimized" content="320">
<!-- BEGIN GLOBAL MANDATORY STYLES -->
<link href="assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
<link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="assets/css/themes/default.css" rel="stylesheet" type="text/css"/>
<!-- END GLOBAL MANDATORY STYLES -->
<!-- BEGIN THEME STYLES -->
<link href="assets/css/style-metronic.css" rel="stylesheet" type="text/css"/>
<link href="assets/css/style.css" rel="stylesheet" type="text/css"/>
<link href="assets/css/style-responsive.css" rel="stylesheet" type="text/css"/>
<link href="assets/css/plugins.css" rel="stylesheet" type="text/css"/>
<link href="assets/css/themes/default.css" rel="stylesheet" type="text/css" id="style_color"/>
<link href="assets/css/custom.css" rel="stylesheet" type="text/css"/>
<!-- END THEME STYLES -->
<link rel="shortcut icon" href="favicon.ico"/>
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="page-header-fixed">
	<?php include('cabecalho.php'); ?>
<div class="clearfix">
</div>
<!-- BEGIN CONTAINER -->
<div class="page-container">
	<?php include('menu.php'); ?>
	<!-- BEGIN CONTENT -->
	<div class="page-content-wrapper">
		<div class="page-content">
			<!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			<div class="modal fade" id="portlet-config" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
							<h4 class="modal-title">Modal title</h4>
						</div>
						<div class="modal-body">
							 Widget settings form goes here
						</div>
						<div class="modal-footer">
							<button type="button" class="btn blue">Save changes</button>
							<button type="button" class="btn default" data-dismiss="modal">Close</button>
						</div>
					</div>
					<!-- /.modal-content -->
				</div>
				<!-- /.modal-dialog -->
			</div>
			<!-- /.modal -->
			<!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			<!-- BEGIN PAGE HEADER-->
			<div class="row">
				<div class="col-md-12">
					<!-- BEGIN PAGE TITLE & BREADCRUMB-->
					<h3 class="page-title">
					Dashboard <small>tudo que você precisa à um click.</small>
					</h3>
					<ul class="page-breadcrumb breadcrumb">
						<li>
							<i class="fa fa-home"></i>
							<a href="index.html">Home</a>
							<i class="fa fa-angle-right"></i>
						</li>
						<li>
							<a href="#">Dashboard</a>
						</li>
						<li class="pull-right">
							<div id="dashboard-report-range" class="dashboard-date-range tooltips" data-placement="top" data-original-title="Change dashboard date range">
								<i class="fa fa-calendar"></i>
								<span>
								</span>
								<i class="fa fa-angle-down"></i>
							</div>
						</li>
					</ul>
					<!-- END PAGE TITLE & BREADCRUMB-->
				</div>
			</div>
			<!-- END PAGE HEADER-->
			<!-- BEGIN DASHBOARD STATS -->
			<?php
				include('DataRequest.php');

				$dataRequest = new DataRequest;

				$qtdClientes = $dataRequest->dadosClientes('c');
				$qtdUsuarios = $dataRequest->dadosUsuarios('c');		
				$qtdFornecedores = $dataRequest->dadosFornecedores('c');
			?>
			<div class="row">
				<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
					<div class="dashboard-stat blue">
						<div class="visual">
							<i class="fa fa-shopping-cart"></i>
						</div>
						<div class="details">
							<div class="number">
								<?php echo $qtdClientes; ?>
							</div>
							<div class="desc">
								 Clientes
							</div>
						</div>
						<a class="more" href="#" id="btnClientes">
						Visualizar <i class="m-icon-swapright m-icon-white"></i>
						</a>
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
					<div class="dashboard-stat green">
						<div class="visual">
							<i class="fa fa-group"></i>
						</div>
						<div class="details">
							<div class="number">
								<?php echo $qtdUsuarios ?>
							</div>
							<div class="desc">
								Usuários
							</div>
						</div>
						<a class="more" href="#" id="btnUsuarios">
						Visualizar <i class="m-icon-swapright m-icon-white"></i>
						</a>
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
					<div class="dashboard-stat purple">
						<div class="visual">
							<i class="fa fa-globe"></i>
						</div>
						<div class="details">
							<div class="number">
								<?php echo $qtdFornecedores ?>
							</div>
							<div class="desc">
								Fornecedores
							</div>
						</div>
						<a class="more" href="#" id="btnFornecedores">
						Visualizar <i class="m-icon-swapright m-icon-white"></i>
						</a>
					</div>
				</div>
			</div>
			<!-- END DASHBOARD STATS -->
			<div class="clearfix">
			</div>
			<!--Tabela-->
			<div class="row">
				<div class="col-md-12">
					<!-- BEGIN SAMPLE TABLE PORTLET-->
					<div class="portlet box grey">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-folder-open"></i>Tabela Simples
							</div>
							<div class="tools">
								<a href="javascript:;" class="collapse"></a>
								<a href="#portlet-config" data-toggle="modal" class="config"></a>
								<a href="javascript:;" class="reload"></a>
								<a href="javascript:;" class="remove"></a>
							</div>
						</div>
						<div class="portlet-body">
							<div class="table-responsive">
								<table class="table table-hover">
								<thead>
								<tr>
									<th>
										#
									</th>
									<th>
										Nome
									</th>
									<th>
										Sobrenome
									</th>
									<th>
										Usuario
									</th>
									<th>
										Status
									</th>
								</tr>
								</thead>
								<tbody id="tbBody">
								<tr>
									<td>
										1
									</td>
									<td>
										Mark
									</td>
									<td>
										Otto
									</td>
									<td>
										makr124
									</td>
									<td>
										<span class="label label-sm label-success">
											Aprovado
										</span>
									</td>
								</tr>
								<tr>
									<td>
										2
									</td>
									<td>
										Jacob
									</td>
									<td>
										Nilson
									</td>
									<td>
										jac123
									</td>
									<td>
										<span class="label label-sm label-info">
											Pendente
										</span>
									</td>
								</tr>
								<tr>
									<td>
										3
									</td>
									<td>
										Larry
									</td>
									<td>
										Cooper
									</td>
									<td>
										lar
									</td>
									<td>
										<span class="label label-sm label-warning">
											Suspenso
										</span>
									</td>
								</tr>
								<tr>
									<td>
										4
									</td>
									<td>
										Sandy
									</td>
									<td>
										Lim
									</td>
									<td>
										sanlim
									</td>
									<td>
										<span class="label label-sm label-danger">
											Bloqueado
										</span>
									</td>
								</tr>
								</tbody>
								</table>
							</div>
						</div>
					</div>
					<!-- END SAMPLE TABLE PORTLET-->
				</div>
			</div>
		</div>
	</div>
	<!-- END CONTENT -->
</div>
<!-- END CONTAINER -->
	<?php include('rodape.php'); ?>
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<script src="assets/plugins/jquery-1.10.2.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>
<!-- IMPORTANT! Load jquery-ui-1.10.3.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
<script src="assets/plugins/jquery-ui/jquery-ui-1.10.3.custom.min.js" type="text/javascript"></script>
<script src="assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="assets/plugins/bootstrap-hover-dropdown/twitter-bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery.cockie.min.js" type="text/javascript"></script>
<script src="assets/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="assets/scripts/app.js" type="text/javascript"></script>
<script src="assets/scripts/index.js" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<script>
	jQuery(document).ready(function() {    
	App.init(); // initlayout and core plugins
	Index.init();
	});
</script>
<script>
		$(document).ready(function() {
		// Evento de clique nos botões específicos
		$('#btnClientes, #btnUsuarios, #btnFornecedores').on('click', function(event) {
			event.preventDefault();

			// Determina a cor com base no ID do botão
			var cor = obterCorBotao(this.id);
			
			// Aplica a cor à tabela
			$('.portlet-body').css('background-color', cor);
		});

		// Função para determinar a cor com base no ID do botão
		function obterCorBotao(botaoId) {
			switch (botaoId) {
				case 'btnClientes':
					return '#27a9e3'; // Azul
				case 'btnUsuarios':
					return '#28b779'; // Verde
				case 'btnFornecedores':
					return '#852b99'; // Roxo
				default:
					return '#ffffff'; // Branco
			}
		}
	});
</script>
<script>

$(document).ready(function() {
    $(document).on('click', '#btnClientes, #btnUsuarios, #btnFornecedores', function(event) {
        event.preventDefault();
        var tipo = $(this).attr('id').replace('btn', ''); 
		atualizarCabecalhoTabela(tipo);
        atualizarTabela(tipo);
		
    });

	function atualizarCabecalhoTabela(tipo) {
        var thead = $('#tbBody').closest('table').find('thead');
        thead.empty();

        var cabecalho = '<tr><th>#</th><th>Nome</th><th>CPF</th>';

        if (tipo === 'Clientes')
			cabecalho += '<th>Endereço</th><th>Telefone</th><th>Email</th>';
        if (tipo === 'Usuarios')
			cabecalho += '<th>Endereço</th><th>Telefone</th><th>Usuário</th>';
        if (tipo === 'Fornecedores')
			cabecalho += '<th>Cidade</th><th>Email</th>';

        cabecalho += '</tr>';
        thead.append(cabecalho);
    }

    function atualizarTabela(tipo) {
        $.ajax({
            type: 'POST',
            url: 'ajaxHandler.php',
            data: { tipo: tipo },
            dataType: 'json',
            success: function(data) {

                if (data !== null && Array.isArray(data) && data.length > 0) {
                    var tabela = $('#tbBody');
                    tabela.empty();

                    data.forEach(function(item, index) {
                        var row = '<tr>' +
                            '<td>' + (index + 1) + '</td>' +
                            '<td>' + item.nome + '</td>' +
                            '<td>' + item.cpf + '</td>';
                        if (item.endereco) row += '<td>' + item.endereco + '</td>';
                        if (item.telefone) row += '<td>' + item.telefone + '</td>';
						if (tipo === 'Fornecedores' && item.cidade) row += '<td>' + item.cidade + '</td>';
						if (tipo === 'Usuarios' && item.usuario) row += '<td>' + item.usuario + '</td>';
                        if (item.email) row += '<td>' + item.email + '</td>' +
                            '</tr>';
                        tabela.append(row);
                    });
                }
            }
        });
    }
});
</script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>