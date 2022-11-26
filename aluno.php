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
<body class="">
	<section class="cursos">
		<header>
			<center>
				<a href="index.php">
					<img class="cabecalho__logo" src="img/LOGO.png" title="Ir para a página inicial da musicscore"
					alt="musicscore">
				</a>
			<center>
			<?php session_start(); if(!isset($_SESSION['login'])){ session_destroy(); header('location: index.php'); echo"<script>alert('Falha de Login')";} ?>
			<h2 class="chamada__titulo">Bem-vindo(a) Aluno(a) <?php echo $_SESSION['login']; ?>!</h2><br><br><br>

		</header>
		<br><br>
	</section>

	<section class="body01">
			<hr class="linha2">
			<br><br>	
			<div class="content texto-destaque">			
				<h2 class="titulo-sobre">Meu Boletim</h2>
		
					<div class="row">
			
						<div class="col-md-4">
							<form action="" method="POST">
								<input type="submit" name="logout" value="Sair" id="logoutaluno" class="btn btn-default" />
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
					$sql = "SELECT  materias.nome,notas.p1,notas.p2,notas.faltas FROM  materias,notas WHERE materias.id=id_materia AND id_usuario ='$login'";
					$res = mysqli_query($conexao,$sql) or die("A consulta falhou:". mysqli_error($conexao)."<br/>SQL:".$sql);					
								
				?>
								
								

			<table class='table table-hover text-center' border="2" >
				<tr>
					<td><b>Disciplina</b></b></td>
					<td><b>Prova1</b></td>
					<td><b>Prova2</b></td>
					<td><b>Faltas</b></td>
					<td><b>Media</b></td>
				</tr>
					<?php while($campo = mysqli_fetch_array($res)){
							$media = ($campo['p1']+$campo['p2'])/2;
							echo"<tr><td>".utf8_encode($campo['nome'])."</td><td>".$campo['p1']."</td><td>".$campo['p2']."</td>
							<td>".$campo['faltas']."</td><td>".$media."</td></tr>"; 
						} 
					?>
			</table></br>
		</div>
					</nav>

							
	<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
    	<div class="modal-content">

      		<div class="modal-header">
        		<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        			<h4 class="modal-title text-center" id="myModalLabel">Alterar Senha</h4>
      		</div>

  			<form class="form-inline" action="" method="POST">
				<div class="modal-body">
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

