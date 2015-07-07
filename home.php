		<h2>Users</h2>
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
				$nome = htmlspecialchars($dados['nome']);
				echo "
				<tr>
					<td>{$nome}</td>
					<td align='center'>{$dados['idade']}</td>
					<td>{$dados['email']}</td>
				</tr>
				";
			}
		?>
		</table>