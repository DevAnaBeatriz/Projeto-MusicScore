<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="author" content="Kodinger">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>Cadastro de Professores</title>
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
						<a href="index.php"><img src="img/logomusic.png" alt="bootstrap 4 login page"></a>	
					</div>
					<div class="card fat">
						<div class="card-body">
							<h4 class="card-title">Inscrever-se</h4>
							<form name= "cadastro" method= "POST" action="criar.php" class="my-login-validation" enctype="multipart/form-data"> 
							<div class="radio">
                                <label>
                                    <input type="radio" name="tipo" checked id="tipo" value="1">
                                    Professor
                                </label>
                                </div>

                            <div class="form-group">

									<label for="name">Login</label>
									<input id="name" type="text" class="form-control" name="login" autocomplete="off"  required >
									<div class="invalid-feedback">
										Qual o seu login?
									</div>
								</div>
								
                            <div class="form-group">
									<label for="name">Nome</label>
									<input id="name" type="text" class="form-control" name="nome" autocomplete="off"  required >
									<div class="invalid-feedback">
										Qual o seu nome?
									</div>
								</div>

								

								<div class="form-group">
									<label for="email">Seu endereço de email</label>
									<input id="email" type="email" class="form-control" name="email" autocomplete="off" required>
									<div class="invalid-feedback">
										Seu endereço de e-mail é inválido
									</div>
								</div>

								<div class="form-group">
									<label for="password">Senha</label>
									<input id="password" type="password" class="form-control" name="senha" autocomplete="off"  required data-eye>
									<div class="invalid-feedback">
										Uma senha é necessária
									</div>
								</div>
                                
                                
								
								<div class="form-group">
									<label for="file">Documento Comprobatório de Professor</label>
									<input type="file"  name="image" required autofocus>
									<div class="invalid-feedback">
									
										Preciso fazer upload do documento
										
									</div>
									<?php
									if(isset($_FILES['image'])){
										$errors = array();
										$file_name= $_FILES['image']['name'];
										$file_size= $_FILES['image']['size'];
										$file_tmp = $_FILES['image']['tmp_name'];
										$file_type= $_FILES['image']['type'];

										$file_ext =explode(".",  $_FILES['image']['name']);
										$file_ext =strtolower(array_pop($file_ext));
										
										
										$expensions = array("jpeg","jpg","png");

										if(in_array($file_ext,$expensions)=== false){
											$errors[]="<br>Extensão não permitida, escolha um arquivo JPEG ou PNG..";
										}
										if($file_size>2097152){
											$errors[]='<br>O tamanho do arquivo deve ser exatamente 2 MG';
										}
										if(empty($errors)==true){
											move_uploaded_file($file_tmp,"imagens/".$file_name);
											echo "<h6><br>Imagem importada com sucesso</h6>";
										}else{
											print_r($errors);
										}
									}
									?>
								</div>

								<div class="form-group">
									<div class="custom-checkbox custom-control">
										<input type="checkbox" name="agree" id="agree" class="custom-control-input" required="">
										<label for="agree" class="custom-control-label">Concordo  <a href="#">Termos de uso</a> </label>
										<div class="invalid-feedback">
											Você deve concordar com nossos termos
										</div>
									</div>
								</div>

								<div class="form-group m-0">
									
									<button type="submit" class="btn btn-primary btn-block" name="creatProf">
										Inscrever-se
									</button>
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
	<script src="js/somenteN.js"></script>
	<script src="js/mascaraTel.js"></script>
</body>
</html>