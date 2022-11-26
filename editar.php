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
<?php  

session_start();

	  if(!isset($_SESSION['login']) and $_SESSION['tipo']>0){ 

		  session_destroy(); 

			  header('location: index.php'); 

			  echo"<script>alert('Falha de Login')";

			  }



$login = $_REQUEST['login'];
$conexao = mysqli_connect('us-cdbr-east-06.cleardb.net','b21cfa3a8ffa73','82df25f3') or die ("ERRO: ao tentar conexão");
		$banco = mysqli_select_db($conexao, 'heroku_847b55fbc3b01a5') or die("ERRO: falha ao encontrar Banco de Dados");


$sql = "SELECT nome, senha, email, tipo FROM usuarios WHERE login='$login'";



$resultado = mysqli_query($conexao,$sql) or die("A consulta falhou:". mysqli_error($conexao)."<br/>SQL:".$sql);



if($campo = mysqli_fetch_array($resultado)){

?>

	<section class="h-100">
		<div class="container h-100">
			<div class="row justify-content-md-center ">
				<div class="card-wrapper">
				<div class="brand">
						<a href="index.php"><img src="img/logomusic.png" alt="bootstrap 4 login page"></a>	
					</div>
					<div class="card fat">
						<div class="card-body">
						<h4 class="card-title">Alterações</h4>
						<form method="POST" class="my-login-validation" novalidate="">
								<div class="form-group">
                                    <label for="email">Login:
									<b class="form-control-static"> <?php echo $login ;?> </b></label>
									
								</div>

								<div class="form-group">
								<label for="nome">Nome</label>		
								<input type="text" class="form-control" value="<?php echo $campo["nome"] ?>" name="nome" id="inputnome" >
								</div>


								<div class="form-group">
								<label for="senha" >Senha</label>		
								<input type="text"  class="form-control" value="<?php echo $campo["senha"] ?>" name="senha" id="inputsenha" >
								</div>

								<div class="form-group">
								<label for="email" >E-mail</label>
								<input type="email"  class="form-control" value="<?php echo $campo["email"] ?>" name="email" id="inputemail" >
								</div>
								<div class="form-group">


								<div class="radio" id="tipo1">

        <label>

          <input type="radio" name="tipo" checked id="tipo" value="1">

            Professor

        </label>

      </div>

      <div class="radio" id="tipo1">

        <label>

          <input type="radio" name="tipo" id="tipo2" value="2">

            Aluno

        </label>

              

      </div>
	  <div class="form-group">

<div class="modal-footer" id="modalfooter1">

  <button type="submit" name="alterar" class="btn btn-primary btn-block" >Salvar Alterações</button><br>

  <button type="button" class="btn btn-primary btn-block" onclick=location.href="adm.php" data-dismiss="modal">Cancelar</button>

</div>
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
		</div>
	</section>

	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script src="js/my-login.js"></script>
</body>
</html>
<?php 

    if(isset($_REQUEST['alterar'])){

    

          if(isset($_REQUEST['nome'])){

            $nome = $_REQUEST['nome'];

          }

          $senha = $_REQUEST['senha'];

          $email = $_REQUEST['email'];

          $tipo = $_REQUEST['tipo'];

          

          $res = "UPDATE usuarios SET nome='$nome', senha='$senha', email='$email',tipo='$tipo' WHERE login='$login'";

          

          $query = mysqli_query($conexao,$res) or die("A Alteração falhou: ".mysqli_error($conexao)."<br/>SQL: ".$sql);

          

          mysqli_close($conexao);

      

        header('location: adm.php');

      }
	}
?>