
<!DOCTYPE html>
<html>
<head>
	<title>Inscreva-se</title>
	<meta charset="UTF-8">
	<style type="text/css">

	body{
		background-image: url(gordo.gif);
		background-repeat: no-repeat;
		background-size: 100%;
		font-family: arial;
		padding-left: 15%;
	}
	#div2{
		margin-left: 25%;
		margin-top: 5%;
		background-color: white;
		margin: 10px;
		height: 35px;
		width: 50px;
		float: right;
		top: 75%;
		left: 75%;
		position: absolute;
		font-size: 20px;
	}
	header{
		position: relative;
		background-color: #04B4AE;
		height: 100px;
		padding: 10px;
		margin: 10px;
		width: 80%;
		box-sizing: border-box;
	}
	#main{
		background-color: white;
		width: 80%;
		height: 685px;
		border: solid black 1px;
		padding: 20px;
		margin: 10px;
		font-size: 20px;
		box-sizing: border-box;
		position: relative;
	}
	footer{
		background-color: #0B2F3A;
		height: 100px;
		padding: 10px;
		margin: 10px;
		color: white;
		width: 80%;
		box-sizing: border-box;
	}
	a:link {
    	color: black;
    	text-decoration: none;
	}
	a:visited {
    	color: black;
    	text-decoration: none;
	}
	a:hover {
	    color: hotpink;
	    text-decoration: none;
	    font-size:105%;
	}
	a:active {
    	color: black;
    	text-decoration: none;
	}
	#mensagem{
		margin-left: 10%; 
		bottom: 10px;
		color:red;
		margin-bottom: 20%;
		position: absolute;
	}
	</style>
</head>
<body>
	<header>
		<h1>Inscreva-se</h1>
	</header>
	<div id="main">
		<form name="form" method="post" action="inscrever.php">	
			<label for="user">Username:</label><br>
			<input name="user" type="text"><br><br>

			<label for="senha">Senha:</label><br>
			<input name="senha" type="password"><br><br>

			<label for="nome">Nome:</label><br>
			<input name="nome" type="text"><br><br>

			<label for="sobrenome">Sobrenome:</label><br>
			<input name="sobrenome" type="text"><br><br>

			<label for="nasci">Data de Nascimento:</label><br>
			<input name="nasci" type="date" style="width:167px;"><br><br>

			<label for="sexo">Sexo:</label><br>
			<input name="sexo" value="Masculino" id="m" type="radio" checked><labe for="m">Masculino</labe><br>
			<input name="sexo" value="Feminino" id="f" type="radio"><labe for="f">Feminino</labe><br><br>

			<label for="email">Email:</label><br>
			<input name="email" type="email"><br><br>

			<input name="submit" type="submit" value="Enviar">
			</div>
		</form>
		<?php
			if(isset($_COOKIE['mensagem'])){
				if($_COOKIE['mensagem']){
					$mensagem=$_COOKIE['mensagem'];
					echo "<font id='mensagem'>$mensagem</font>";
				}
			}
		?>
		<div id="div2">
			<a href="index.php">Voltar</a>
		</div>
	</div>
	<footer>
		<p>Páginazinha TOP hein?</p>
	</footer>
</body>
</html>
