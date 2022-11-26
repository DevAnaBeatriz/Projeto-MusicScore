<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>musicscore</title>
		<link rel="icon" href="imagem/icon.ico" type="image/x-icon">
		<meta charset="UTF-8">
		<meta name="viewport" content="width= devide-width, initial-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet"/>
		<link href="css/style2.css" type="text/css" rel="stylesheet" />
		<script src="js/jquery-3.1.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<link rel="stylesheet" type="text/css" href="css/jquery-ui.css" media="all"/>
		
		<link rel="icon" href="img/favicon.ico">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,&display=block">
		<link rel="stylesheet" href="css/reset2.css">


		<link rel="stylesheet" href="css/container2.css">


	
		<link rel="stylesheet" href="css/main.css">
		<link rel="stylesheet" href="css/slider.css">
		<link rel="stylesheet" href="css/cursos.css">
		<link rel="stylesheet" href="css/video.css">
		<link rel="stylesheet" href="css/beneficios.css">
		<link rel="stylesheet" href="css/planos.css">
		<link rel="stylesheet" href="css/form-newsletter.css">
		<link rel="stylesheet" href="css/cabecalho.css">

		<link rel="icon"       href="img/favicon.ico">

	</head>

<body class="" > 
		<section class="cursos">
			<header>							
				<center>
					<a href="index.php">
						<img class="cabecalho__logo" src="img/LOGO.png" title="Ir para a página inicial da musicscore"
						alt="musicscore">
					</a>
				<center>
				<div>
					<?php session_start(); if(!isset($_SESSION['login'])){ session_destroy(); header('location: index.php'); echo"<script>alert('Falha de Login')";} ?>
					<h2 class="chamada__titulo"> Bem-Vindo(a) Professor(a) <?php echo $_SESSION['login']; 
					?> 
					!</h2><br><br><br>						
				</div>								
			</header>
			<br><br>			
		</section>
						
					
		<section class="body01">
			<hr class="linha2">
			<br><br>	
			<div class="content texto-destaque">			
				<h2 class="titulo-sobre">Administrar Boletim</h2>
		
									<div class="row">
									
										
										
										<div class="col-md-4">
											
											<form action="" method="POST">
												<input type="submit" name="logout" value="Sair" id="logoutprof" class="btn btn-default" />
											</form>

											<?php  if(isset($_REQUEST['logout'])){ session_start(); session_destroy(); header("Location: index.php"); exit; } ?>
										</div>
									</div>
									

			</div>
			<br><br>
					
			<nav>
			<?php 
					$login = $_SESSION['login'];
					$conexao = mysqli_connect('us-cdbr-east-06.cleardb.net','b21cfa3a8ffa73','82df25f3') or die ("ERRO: ao tentar conexão");
		$banco = mysqli_select_db($conexao, 'heroku_847b55fbc3b01a5') or die("ERRO: falha ao encontrar Banco de Dados");
								
					$sql = "SELECT usuarios.login, usuarios.nome,notas.id AS idnota , materias.nome AS matname,notas.p1,notas.p2,notas.faltas FROM notas JOIN usuarios ON id_usuario=login JOIN materias ON id_materia = materias.id WHERE tipo='2' AND ativo='1' ORDER BY materias.nome";
					$res = mysqli_query($conexao,$sql) or die("A consulta falhou:". mysqli_error($conexao)."<br/>SQL:".$sql);
					$same = null;
						
						echo"<table class='table table-hover text-center' border='2'>
						<tr><th>Disciplina</th><th>Nome</th><th>Faltas</th><th>Nota</th><th>Nota</th><th>Média</th></thead>";
								
						While($cmp = mysqli_fetch_array($res)){
							echo"<tbody><tr><td>".utf8_encode($cmp['matname'])."</td><td>".utf8_encode($cmp['nome'])."</td>
								<td><a data-toggle='tooltip' title='Alterar Faltas' href='faltas.php?falta=".$cmp["idnota"]."'>".$cmp['faltas']."</a></td>
								<td><a data-toggle='tooltip' title='Alterar Nota' href='nota1.php?idnota=".$cmp["idnota"]."'>".$cmp['p1']."</a></td>
								<td><a data-toggle='tooltip' title='Alterar Nota'  href='nota2.php?idnota2=".$cmp["idnota"]."'>".$cmp['p2']."</a></td>
								<td>".($cmp['p1']+$cmp['p2'])/2 ."</td></tr></tbody>";
															
											
								} echo"</table></br>";  
			?>						
				
							</nav>	


			<!-- TOOLTIP data-toggle="tooltip" title="" -->				
			<div class="tooltip top" id="tooltip" role="tooltip">
				<div class="tooltip-arrow">
					<div class="tooltip-inner">
					Alterar Nota!
					</div>
				</div>
			</div>
				<script>
					$(function () {
						$('[data-toggle="tooltip"]').tooltip()
					})
				</script>
			<!--TOOLTIP -->
							

			<!-- Modal -->
			<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
								<h4 class="modal-title text-center" id="myModalLabel">Alterar Senha</h4>
						</div>
						<div class="modal-body">
						<form class="form-inline" action="" method="POST">
							<label>Digite a Senha Atual <input class="form-control text-center" id="inline1" type="text" name="senhaantiga"></label><br><br>
							<label>Nova Senha  &nbsp &nbsp<input class="form-control text-center" id="inline2" type="text" name="senhanova"></label>
						</div>
						<div class="modal-footer">
							<button type="submit" class="btn btn-default">Salvar Alterações</button>
							<button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
						</div>
						</form>
					</div>
				</div>
			</div>



			<hr class="linha2">
				</section>
						


	
		<section class="caixa_texto_rodape">
			<br>
			<p class="texto-rodape-direitos">
				
			Sistema Music Score - © 2022 - Todos os direitos reservados
							
			</p>
			<br> 
		</section>
		<br>
	</body>
</html>


