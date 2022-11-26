<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="author" content="Kodinger">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>Login </title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/my-login.css">
	<link rel="icon" href="img/favicon.ico">
</head>
<body class="my-login-page">
	<section class="h-100">
		<div class="container h-100">
			<div class="row justify-content-md-center ">
				<div class="card-wrapper">
					<div class="brand">
						<img src="img/logomusic.png" alt="logo">
					</div>

<?php 
			session_start();
							if(!isset($_SESSION['login'])){ 
								session_destroy(); 
										header('location: index.php'); 
										echo"<script>alert('Falha de Login')";
										}
			
		
			
										$conexao = mysqli_connect('us-cdbr-east-06.cleardb.net','b21cfa3a8ffa73','82df25f3') or die ("ERRO: ao tentar conexão");
										$banco = mysqli_select_db($conexao, 'heroku_847b55fbc3b01a5') or die("ERRO: falha ao encontrar Banco de Dados");

		if(isset($_REQUEST['login'])){
			$login = $_REQUEST['login'];
			$sql = "DELETE FROM usuarios WHERE login='$login'";
			
		}
		else if(isset($_REQUEST['id'])){
			$id = $_REQUEST['id'];
			$sql = "DELETE FROM materias WHERE id='$id'";
			
		}
		$query = mysqli_query($conexao,$sql) or die("A Exclusão falhou: ".mysqli_error($conexao)."<br/>SQL: ".$sql);
		mysqli_close($conexao);
		?>

		<div class="card fat">
						<div class="card-body">
							<h4 class="card-title">Exclusão realizada com sucesso!</h4>
                            <a href="adm.php" ><button type="submit" class="btn btn-primary btn-block">
                                Voltar
                            </button></a>
								</div>
							</form>
						</div>
					</div>

		</div>
					<div class="footer">
						ETEC Zona Leste &copy; 2022 &mdash; MusicScore
					</div>
				</div>
			
			</div>
		
		</section>

		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
		<script src="js/my-login.js"></script>
	</body>
</html>