<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Cadastro do Competidor</title>
</head>
<body>
	<div style="text-align: center;">
		<h2> Cadastro de Competidor</h2>
		<form method="post" action="script.php">
			<p> 
				Nome: <input type="text" name="nome" >
				<span style="color: red;">*</span>
			</p>
			<br />
			<p>
				Idade: <input type="text" name="idade" >
				<span style="color: red;">*</span>
			</p>
	     	<br />
	     	<p>
				<input type="submit" name="botao_submit" value="Enviar">
				<input type="reset" name="botao_reset" value="Apagar">
			</p>
		</form>
	</div>
</body>
</html>