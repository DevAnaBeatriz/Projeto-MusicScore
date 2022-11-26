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
						<a href="index.php"><img src="img/logomusic.png" alt="logo"></a>
					</div>
					<div class="card fat">
						<div class="card-body">
							<h4 class="card-title">Digite</h4>
							<form method="POST" class="my-login-validation" novalidate="">
								<div class="form-group">
									<label for="email">Login</label>
									<input id="email" type="email" class="form-control" name="login" value=""   autocomplete="off"required >
									<div class="invalid-feedback">
										Endereço de login invalido
									</div>
								</div>

								<div class="form-group">
									<label for="password">Senha
										<a href="forgot.php" class="float-right">
											Esqueceu a senha?
										</a>
									</label>
									<input id="password" type="password" class="form-control" name="senha"   autocomplete="off" required >
								    <div class="invalid-feedback">
								    	Uma senha é necessária
							    	</div>
								</div>

								<div class="form-group">
									<div class="custom-checkbox custom-control">
										<input type="checkbox" name="remember" id="remember" class="custom-control-input">
										<label for="remember" class="custom-control-label">lembre de mim</label>
									</div>
								</div>

								<div class="form-group m-0">
                               
									<button type="submit" class="btn btn-primary btn-block" name="btnenviar">
										Login
									</button>
								</div>
								<?php
									if(isset($_REQUEST['login']) and isset($_REQUEST['senha'])){
									
										$conexao = mysqli_connect('us-cdbr-east-06.cleardb.net','b21cfa3a8ffa73','82df25f3') or die ("ERRO: ao tentar conexão");
										$banco = mysqli_select_db($conexao, 'heroku_847b55fbc3b01a5') or die("ERRO: falha ao encontrar Banco de Dados");
										
											$login = mysqli_real_escape_string($conexao, $_POST['login']);
											$senha = mysqli_real_escape_string($conexao, $_POST['senha']);
											
											
											$sql = "SELECT * FROM usuarios WHERE login='$login' AND senha='$senha' AND ativo ='1'";
												
												$query = mysqli_query($conexao,$sql) or die("A consulta falhou:". mysqli_error($conexao)."<br/>SQL:".$sql);
											
													
											if($r = mysqli_num_rows($query) == 1){
															session_start();
															$_SESSION['login'] = $login;
														while($resultado = mysqli_fetch_array($query)){
															if($resultado['tipo'] == 0 ){
																	header('Location: curse_signup.php');
																}
																else if($resultado['tipo'] == 1){
																	header('Location: curse_signup.php');
																}
																else{
																	header('Location: curse_signup.php');
																}
														}
													}
													else{
														echo " <div class='alert alert-danger' id='errologin' role='alert'><strong>Login Inválido</strong></div></br>
																<script type='text/javascript'>
																		$(document).ready(function () {
																			setTimeout(function () {
																				$('#errologin').fadeOut(3000);
																			},1500);
																		});
																</script>";
														}
									}//if isset login,senha						
								?>
								<div class="mt-4 text-center">
									Não tem uma conta? <a href="botoes_register.php">Crie uma conta</a>
								</div>
								
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

	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script src="js/my-login.js"></script>
</body>
</html>
