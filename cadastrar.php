		<h2>Cadastrar novo usuário</h2>
		<form method="post" action="">
			<div class="form-group">
				<input type="text" name="nome" value="<?php if( isset($_REQUEST['nome']) ) echo $_REQUEST['nome'];?>" class="form-control" placeholder="Nome">
			</div>
			<div class="form-group">
				<input type="text" name="idade" value="<?php if( isset($_REQUEST['idade']) ) echo $_REQUEST['idade'];?>" class="form-control" placeholder="Idade">
			</div>
			<div class="form-group">
				<input type="text" name="email" value="<?php if( isset($_REQUEST['email']) ) echo $_REQUEST['email'];?>" class="form-control" placeholder="E-mail">
			</div>
			<div class="form-group">
				<input type="password" name="senha" value="<?php if( isset($_REQUEST['senha']) ) echo $_REQUEST['senha'];?>" class="form-control" placeholder="Senha">
			</div>
			<div class="form-group">
				<input type="submit" name="salvar" class="form-control btn btn-success">
			</div>
<?php

if( isset($_REQUEST['salvar']) ){

	$insere = mysqli_query($conn, "INSERT INTO usuarios (nome, idade, email, senha) VALUES ('{$_REQUEST['nome']}','{$_REQUEST['idade']}','{$_REQUEST['email']}','{$_REQUEST['senha']}') ")or die('Erro.:: '.mysqli_error($conn));

	if($insere){
		header("Location: ?pag=home.php");
	}
	else{
		echo '
              <div class="alert alert-error">
                Falha ao cadastrar!
              </div>
            ';
	}
}
?>
		</form>