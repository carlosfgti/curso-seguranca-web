<?php
session_start();

if(isset($_SESSION['login'])){
	header("Location: seguranca.php");
}

require_once 'config/config.php';
?>
<html>
<head>
	<title>Login</title>

	<!--boostrap-->
	<link href="style/bootstrap.css" rel="stylesheet">
	<link href="style/bootstrap.min.css" rel="stylesheet">
	<link href="style/style.css" rel="stylesheet">
</head>
<body>
	<div class="container">
		<form method="post" action="" class="form-login">
			<h3>Acessar área restrita</h3>
			<div class="form-group">
				<input type="text" name="email" class="form-control" placeholder="Seu e-mail">
			</div>
			<div class="form-group">
				<input type="password" name="senha" class="form-control" placeholder="Sua senha">
			</div>
			<div class="form-group">
				<input type="submit" name="entrar" class="form-control btn btn-success" value="Acessar">
			</div>
			<?php
			if( isset($_REQUEST['entrar']) ){
				$verifica = mysqli_query($conn, " SELECT * FROM usuarios WHERE email = '{$_REQUEST['email']}' AND senha = '{$_REQUEST['senha']}' ")or die(mysql_error());

				if( mysqli_num_rows($verifica) > 0 ){
					$_SESSION['login'] = $_REQUEST['email'];
					header("Location: ?pag=seguranca.php");
				}
				else{
					echo '
			              <div class="alert alert-error">
			                Login inválido.
			              </div>
			            ';
				}
			}
			?>
		</form>
	</div>
	<footer>
		<p>Portal EspecializaTi - especializati.com.br</p>
	</footer>
</body>
</html>	