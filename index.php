<?php require_once("cabecalho.php"); 
	require_once("logica-usuario.php");
?>

<?php
	mostraAlerta('success');
	mostraAlerta('danger');
?>

	<h1>Bem vindo.</h1>

	<?php $nome = "Edi Carlos";?>
	Loja do <?= $nome; ?>

	<?php
		if(usuarioEstaLogado()) {
	?>
		<p class="text-success">Você está logado como <?= usuarioLogado() ?>
		<a href="logout.php">Deslogar</a></p>
	<?php } else { ?>

	<h2>Login</h2>

	<form action="login.php" method="post">

		<table class="table">

			<tr>
				<td>Email</td>
				<td><input type="email" name="email" class="form-control"></td>
			</tr>
			<tr>
				<td>Senha</td>
				<td><input type="password" name="senha" class="form-control"></td>
			</tr>
			<tr>
				<td><button type="submit" class="btn btn-primary">Login</button></td>
			</tr>

		</table>

	</form>

	<?php } ?>

<?php

	$resultado = "true" === true;
	echo $resultado;

?>

<?php include("rodape.php") ?>