<?php
session_start();

if(!isset($_SESSION['login'])){
	header("Location: index.php");
}

$_SESSION['_token'] = ( !isset($_SESSION['_token']) ) ? hash('sha512', rand(100, 1000)) : $_SESSION['_token'];

require_once 'config/config.php';
?>
<html>
<head>
	<title>Um projeto vuneravel</title>
	<!--boostrap-->
	<link href="style/bootstrap.css" rel="stylesheet">
	<link href="style/bootstrap.min.css" rel="stylesheet">
	<link href="style/style.css" rel="stylesheet">
</head>
<body>
	<nav class="navbar navbar-default" role="navigation">
        <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="?pag=home.php">
              	<img src="img/logo.png" alt="EspecializaTi" class='img-logo'>
              </a>
            </div>
        
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav scroll">
					<li>
						<a href="?pag=home.php">Listar</a>
					</li>
					<li>
						<a href="?pag=cadastrar.php">Cadastrar</a>
					</li>
					<li>
						<a href="?pag=sobre.php">Sobre</a>
					</li>
				</ul>
            </div>
        </div>
    </nav>

	<div class="container">
		<?php
		if(!$_GET){
			include 'home.php';
		}
		else{
			if( file_exists("{$_GET['pag']}") )
				include "{$_GET['pag']}";
			else
				echo 'A pagina nao existe.';
		}
		?>
	</div>
	<footer>
		<p>Portal EspecializaTi - especializati.com.br</p>
	</footer>
</body>
</html>