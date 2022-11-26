<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="author" content="Kodinger">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>Redefinição de Senha</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/my-login.css">
	<link rel="icon" href="img/favicon.ico">
</head>
<body class="my-login-page">
	<section class="h-100">
		<div class="container h-100">
			<div class="row justify-content-md-center align-items-center h-100">
				<div class="card-wrapper">
					<div class="brand">
						<a href="index.php"><img src="img/logomusic.png" alt="bootstrap 4 login page"></a>	
					</div>
					<div class="card fat">
						<div class="card-body">
							<h4 class="card-title">Esqueceu a senha</h4>
							<form class="form-horizontal" action="" method="POST">
							
							<div class="form-group">
							<label for="login">Login</label>
							<input type="text" class="form-control"  name="verlogin"  id="inputlogin" placeholder="" autocomplete="off"  required >
							</div>

							<div class="form-group">
							<label for="nome" >Nome</label>
							<input type="text" class="form-control"  name="vernome"  id="inputnome" placeholder="" autocomplete="off"  required >
							</div>

							<div class="form-group">
							<label for="email" >Email</label>
							<input  type="email" class="form-control" name="veremail"  id="inputemail" placeholder="" autocomplete="off"  required >
							</div>

							<div class="form-group">
							<label for="senha" >Nova Senha</label>
							<input type="password"  class="form-control" name="novasenha"  id="inputsenha" placeholder="" autocomplete="off"  required >
							</div>


							
					
						<div class="modal-footer">
						<button type="submit" name="changesenha"  class="btn btn-primary btn-block" >Salvar Alterações</button>
</div>
			<?php //troca de senha
			if(isset($_REQUEST['verlogin']) and isset($_REQUEST['vernome']) and isset($_REQUEST['veremail']) and isset($_REQUEST['novasenha']))
			{
				$l = $_REQUEST['verlogin'];
				$n = $_REQUEST['vernome'];
				$e = $_REQUEST['veremail'];
				$s = $_REQUEST['novasenha'];
			
				$conexao = mysqli_connect('us-cdbr-east-06.cleardb.net','b21cfa3a8ffa73','82df25f3') or die ("ERRO: ao tentar conexão");
		$banco = mysqli_select_db($conexao, 'heroku_847b55fbc3b01a5') or die("ERRO: falha ao encontrar Banco de Dados");
		
			$q = "SELECT login, nome,email FROM usuarios WHERE login='$l' AND nome='$n' AND email='$e' AND ativo='1' AND tipo > 0 ";
				$v = mysqli_query($conexao,$q) or die ("A consulta falhou:". mysqli_error($conexao)."<br/>SQL:".$q);
				
				if(mysqli_num_rows($v) == 1){
						$res = "UPDATE usuarios SET senha='$s' WHERE login='$l'";
						$finish = mysqli_query($conexao,$res) or die("A atualização falhou".mysqli_error($conexao)."</br>SQL:".$res);
						echo"<div class='alert alert-success' id='errologin' role='alert'>
					<strong>Dados Confirmados </br> Senha Alterada</strong></div></br>
								 <script type='text/javascript'>
										$(document).ready(function () {
											setTimeout(function () {
												$('#errologin').fadeOut(3000);
											},1500);
										});
								</script>";
				}
				else{
					echo " <div class='alert alert-danger' id='errologin' role='alert'>
					<strong>Dados Incorretos </br> Contate Administrador</strong></div></br>
								 <script type='text/javascript'>
										$(document).ready(function () {
											setTimeout(function () {
												$('#errologin').fadeOut(3000);
											},1500);
										});
								</script>";
				}
						
			}
		?>
							</form>
						</div>
					</div>
					<div class="footer">
						ETEC Zona Leste &copy; 2022 &mdash; MusicScore
					</div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/my-login.js"></script>
</body>
</html>