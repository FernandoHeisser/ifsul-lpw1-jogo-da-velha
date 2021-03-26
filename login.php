
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<style type="text/css">

	body{
		background-image: url(gordo.gif);
		background-repeat: no-repeat;
		background-size: 100%;
		font-family: arial;
		padding-left: 15%;
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
		height: 300px;
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
	#div2{
		margin-left: 25%;
		margin-top: 5%;
		background-color: white;
		margin: 10px;
		height: 35px;
		width: 50px;
		float: right;
		top: 85%;
		left: 90%;
		position: absolute;
	}
	#mensagem{
		color: red;
	}
	</style>
</head>
<body>
	<header>
		<h1 >Entrar</h1>
	</header>
		<div id="main">
			<form name="form" method="post" action="testelogin.php">
				<label for="user">Login:</label><br>
				<input name="user" type="text"><br><br>
				<label for="senha">Senha:</label><br>
				<input name="senha" type="password"><br><br>
				<input name="submit" type="submit" value="Entrar"><br><br>
			</form>
			<div id="div2">
				<a href="index.php">Voltar</a>
			</div>
			<?php
				if(isset($_COOKIE['mensagem'])){
					if($_COOKIE['mensagem']){
						$mensagem=$_COOKIE['mensagem'];
						echo "<font id='mensagem'>$mensagem</font>";
					}
				}
			?>
		</div>
	<footer>
		<p>Páginazinha TOP hein?</p>
	</footer>
</body>
</html>