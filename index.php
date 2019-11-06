<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>PHP e BD</title>
</head>
<body>
	<H2>Novo Aluno</H2>
	<form action="gravaaluno.php" method="POST">
		<label for="c1">Matrícula</label>
		<input type="number" name="matricula" maxlength="5" min="1" max="99999" required id="c1" title="Digite um número" />
		<label for="c2">Nome</label>		
		<input type="text" name="nome" maxlength="50" required pattern="[A-Za-z ]{1,50}" id="c2"/>
		<label for="c3">Endereço</label>
		<input type="text" name="endereco" required id="c3">
		<label for="c4">Sexo</label>
		<select name="sexo">
			<option value="masculino">Masculino</option>
 		 	<option value="feminino">Feminino</option>
		<input type="submit" value="Enviar">
	</form>
</body>
</html>
