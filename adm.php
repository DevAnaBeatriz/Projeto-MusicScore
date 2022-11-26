<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>Administrador</title>
		<link rel="icon" href="img/icon.ico" type="image/x-icon">
		<meta charset="UTF-8">
		<meta name="viewport" content="width= devide-width, initial-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet"/>
		<link href="css/style2.css" type="text/css" rel="stylesheet" />
		<script src="js/jquery-3.1.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>

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
	
<body>
		<section class="cursos">
				<header>							
					<center>
						<a href="index.php">
							<img class="cabecalho__logo" src="img/LOGO.png" title="Ir para a página inicial da musicscore"
							alt="musicscore">
						</a>
					<center>
					<h2 class="chamada__titulo"> Bem-Vindo(a) Administrador(a)! </h2><br><br><br>
				</header>
				<br><br>			
		</section>
		<section class="body01">
			<hr class="linha2">
			<br><br>
	
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-6">
					<div id="tbbotoes">
					<!-- Nav tabs -->
		
						<ul class="nav nav-pills" role="tablist">
							<li role="presentation">
								<button type="button" class="btn btn-default " data-toggle="modal" data-target="#myModal1">CRIAR NOVO USUÁRIO</button>
							</li>
							<li role="presentation">
								<button type="button" class="btn btn-default " data-toggle="modal" data-target="#myModal2">CRIAR NOVA MATÉRIA</button>
							</li>
						</ul>											
					</div>
	
				</div>
				<div class="col-md-6">
						<?php session_start(); if(!isset($_SESSION['login'])){ session_destroy(); header('location: index.php'); echo"<script>alert('Falha de Login')";} ?>
						
						<form action="" method="POST">
							<input type="submit" name="logout" value="Sair" id="logoutadm" class="btn btn-default" />
						</form>

						<?php  if(isset($_REQUEST['logout'])){ session_start(); session_destroy(); header("Location: index.php"); exit; } ?>
				</div>
			</div>
			<br><br>
		</div>

	</header>

	<?php
		$conexao = mysqli_connect('us-cdbr-east-06.cleardb.net','b21cfa3a8ffa73','82df25f3') or die ("ERRO: ao tentar conexão");
		$banco = mysqli_select_db($conexao, 'heroku_847b55fbc3b01a5') or die("ERRO: falha ao encontrar Banco de Dados");
		$sql = "SELECT login, nome, email, tipo, ativo FROM usuarios WHERE tipo >= '1' ORDER BY tipo ";
		$res = mysqli_query($conexao,$sql) or die("A consulta falhou:". mysqli_error($conexao)."<br/>SQL:".$sql);
	?>		
	
	
	<!--TABELA USUÁRIOS-->		 
							
	<div class="row">	
		<div class="col-xs-8">						
			<table class='table' border="2">
			<p class="texto-titulo-tabela">Usuários</p>
			<hr class="linha5">
					<thead>
						<tr>
						<th>Tipo</th>
							
							<th>Nome</th>
							<td> &nbsp </td>
							
						</tr>
					</thead>	 	
					
					<?php while($campo = mysqli_fetch_array($res)) {
						$atv = $campo["ativo"] == 1 ? 'ATIVADO' : 'DESATIVADO';
						$tipo = $campo["tipo"] == 1 ? 'Professor' : 'Aluno';
						
						echo "<tr><td>".$tipo."</td><td>".$campo["nome"]."</td><td><a href='excluir.php?login=".$campo["login"]."'><span id='edit' class='glyphicon glyphicon-trash' aria-hidden='true'></td></span></a> <td><a href='editar.php?login=".$campo['login']."'><span id='edit' class='glyphicon glyphicon-pencil' aria-hidden='true'></span></a>";

						
					} ?>
			</table></br> 
		</div>
	</div>		
	
	
	
	<?php
		$conexao = mysqli_connect('us-cdbr-east-06.cleardb.net','b21cfa3a8ffa73','82df25f3') or die ("ERRO: ao tentar conexão");
		$banco = mysqli_select_db($conexao, 'heroku_847b55fbc3b01a5') or die("ERRO: falha ao encontrar Banco de Dados");
		$sql = "SELECT login, tipo, ativo FROM usuarios WHERE tipo >= '1' ORDER BY tipo ";
		$res = mysqli_query($conexao,$sql) or die("A consulta falhou:". mysqli_error($conexao)."<br/>SQL:".$sql);
	?>	
	<div class="row">	
		<div class="col-xs-8">						
			<table class='table' border="2">
			<p class="texto-titulo-tabela">Usuários</p>
			<hr class="linha5">
					<thead>
						<tr>
							<th>Login</th>
							<th>Ativo</th>
							
						</tr>
					</thead>	 	
					
					<?php while($campo = mysqli_fetch_array($res)) {
						$atv = $campo["ativo"] == 1 ? 'ATIVADO' : 'DESATIVADO';
						$tipo = $campo["tipo"] == 1 ? 'Professor' : 'Aluno';
						
						echo "<tr><td>". $campo["login"]."</td> <td>".$atv."</td><td><a href='excluir.php?login=".$campo["login"]."'></a>";
	
						if($atv == 'ATIVADO'){
							echo"<a id='ativador' href='desativar.php?login=".$campo['login']."'> Desativar</a></td></tr>";
						}
						else {
							echo"<a id='ativador' href='ativar.php?login=".$campo['login']."'>Ativar</a></td></tr>";
						}
					} ?>
			</table></br> 
		</div>
	</div>		
	<div id="tbmaterias">
	
				<?php
				$query = "SELECT * FROM materias ";
				$tab = mysqli_query($conexao,$query) or die("A consulta falhou:". mysqli_error($conexao)."<br/>SQL:".$tab);
				?>

						<!--TABELA MATERIAS-->		 

						<div class="row">	
							<div class="col-xs-8">	
								<table class='table' border="2">
								<p class="texto-titulo-tabela">Matérias</p>
								<hr class="linha5">
										<thead>
											<tr>
												<th>Sigla</th>
												<th>Disciplina</th>
												<th>Curso</th>
												<td> &nbsp </td>
											</tr>
										</thead>
										
										<?php 	
										while($materias = mysqli_fetch_array($tab)){
											echo"<tr><td>".$materias["sigla"]."</td><td>".utf8_encode($materias["nome"])."</td><td>".$materias["curso"]."</td><td><a href='excluir.php?id=".$materias["id"]."'><span id='edit' class='glyphicon glyphicon-trash' aria-hidden='true'></span></a></td></tr>";
											}
										?>
								</table></br>
							</div>
						</div>
					</div>	
									
									

				<!-- BOTÃO 1 NOVO USUARIO -->
				<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
										<h4 class="modal-title" id="myModalLabel">Novo Usuário</h4>
								</div>

								<!-- FORM  USUARIO-->
							<div class="modal-body">
								<form class="form-horizontal" action="criar2.php" method="POST">
									<div class="form-group" id="formgroup2">
										<label for="login" class="col-sm-2 control-label">Login</label>
										<input type="text" class="form-control text-center"  name="login"  id="inputlogin" placeholder="Login">
									</div>

									<div class="form-group" id="formgroup2">
										<label for="nome" class="col-sm-2 control-label">Nome</label>
										<input type="text" class="form-control text-center"  name="nome"  id="inputnome" placeholder="Nome">
									</div>

									<div class="form-group" id="formgroup2">
										<label for="senha" class="col-sm-2 control-label">Senha</label>
										<input type="password" class="form-control text-center" name="senha"  id="inputsenha" placeholder="Senha">
									</div>

									<div class="form-group" id="formgroup2">
										<label for="email" class="col-sm-2 control-label">E-mail</label>
										<input type="email" class="form-control text-center" name="email"  id="inputemail" placeholder="E-mail">
									</div>

									<div class="radio">
										<label>
											<input type="radio" name="tipo" checked id="tipo" value="1">
											Professor
										</label>
									</div>

									<div class="radio">
										<label>
											<input type="radio" name="tipo" id="tipo" value="2">
											Aluno
										</label>
									</div>
						
									<div class="modal-footer">
										<button type="submit" name="create" class="btn btn-default" >Salvar Alterações</button>
										<button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>


				
				<!-- BOTÃO 2 ADICIONAR MATÉRIA -->
				<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
									<h4 class="modal-title" id="myModalLabel">Adicionar Matéria</h4>
							</div>
								<!-- FORM MATERIAS -->
							<div class="modal-body">
								<form class="form-horizontal" action="criar2.php" method="POST">
									<div class="form-group" id="formgroup2">
										<label for="nome" class="col-sm-2 control-label">Nome</label>
										<input type="text" name="nome" class="form-control text-center"  id="inputnome" placeholder="Nome da Matéria" >
									</div>
<br>
									<div class="form-group" id="formgroup2">
										<label for="sigla" class="col-sm-2 control-label">Sigla</label>
										<input type="text" name="sigla" class="form-control text-center"  id="inputsigla" placeholder="Sigla" >
									</div>
									<br>
									<div class="form-group" id="formgroup2">
										<label for="curso" class="col-sm-2 control-label">Curso</label>
										<input type="text" name="curso" class="form-control text-center"  id="inputcurso" placeholder="Curso" >
									</div>
									
									<div class="modal-footer">
										<button type="submit" name="createmat" class="btn btn-default" >Salvar Alterações</button>
										<button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
									</div>
								</form>
							</div>
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