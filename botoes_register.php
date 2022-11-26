<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="author" content="Kodinger">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>Login Aluno</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/my-login.css">
	<link rel="icon" href="img/favicon.ico">
</head>

<body class="my-login-page">
	<section class="h-100">
		<div class="container h-100">
			<div class="row justify-content-md-center h-100">
				<div class="card-wrapper">
					<div class="brand">
						<a href="index.php"><img src="img/logomusic.png" alt="logo"></a>
					</div>
					<div class="card fat">
						<div class="card-body">
							<h4 class="card-title">Escolha o tipo de Cadastro</h4>
							<form method="POST" class="my-login-validation" novalidate="">

								<div class="form-group m-0">
									
                                    <a href="registerAluno.php" class="btn btn-primary btn-block">Cadastro Aluno</a>
								</div>

                                <div class="row">
                                    <div class="col">
                                      &nbsp;&nbsp;
                                    </div>
                                  </div>

                                <div class="form-group m-0">
									
                                    <a href="registerProfessor.php" class="btn btn-primary btn-block">Cadastro Professor</a>
								</div>

								<div class="mt-4 text-center">
									Você tem uma conta? <a href="login.php">Login</a>
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
