		<h2>Usuários</h2>
		<form method="post" action="">
			<div class="form-group">
				<input type="text" name="pesquisa" value="<?php if( isset($_REQUEST['pesquisa']) ) echo $_REQUEST['pesquisa'];?>" class="" placeholder="O que procura?">
				<input type="submit" name="search" value="Filtrar" class="">
			</div>
		</form>
		<table class="table">
			<tr style="background: #33B5E5; color: #FFF;">
				<th>Nome</th>
				<th width="10px">Idade</th>
				<th>E-mail</th>
			</tr>

		<?php
			$pesquisa = ( isset($_REQUEST['pesquisa']) ) ? "nome = '{$_REQUEST['pesquisa']}'" : '1=1';
			$select = mysqli_query($conn, "SELECT * FROM usuarios WHERE $pesquisa ")or die("Erro.:: ".mysqli_error($conn));

			while( $dados = mysqli_fetch_array($select) )
			{
				echo "
				<tr>
					<td>{$dados['nome']}</td>
					<td align='center'>{$dados['idade']}</td>
					<td>{$dados['email']}</td>
				</tr>
				";
			}
		?>
		</table>