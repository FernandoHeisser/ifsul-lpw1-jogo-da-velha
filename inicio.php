<!DOCTYPE html>
<html>
<head>
	<title>Inicio</title>
	<meta charset="UTF-8">
	<style type="text/css">

	body{
		background-image: url(gordo.gif);
		background-repeat: no-repeat;
		background-size: 100%;
		font-family: arial;
		padding-left: 15%;
	}
	#jogador1{
		position: absolute;
		padding: 5px;
		width: 50%;
		height: 50%;
		box-sizing: border-box;
		text-align: center;
		top: 40%;
	}
	#jogador2{
		position: absolute;
		padding: 5px;
		width: 50%;
		height: 50%;
		box-sizing: border-box;
		left: 50%;
		text-align: center;
		top: 40%;
	}
	header{
		position: relative;
		background-color: #04B4AE;
		height: 100px;
		padding: 10px;
		margin: 10px;
		text-align: center;
		width: 80%;
		box-sizing: border-box;
	}
	#main{
		background-color: white;
		width: 80%;
		height: 660px;
		border: solid black 1px;;
		margin: 10px;
		font-size: 40px;
		box-sizing: border-box;
		background-color: rgba(255,255,255,0.6);
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
	table{
    	border-collapse: collapse;
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
		color:red;
	}
	#div2{
		margin-left: 25%;
		margin-top: 5%;
		margin: 10px;
		height: 35px;
		width: 50px;
		float: right;
		top: 85%;
		left: 90%;
		position: absolute;
	}
	#start{
		margin-right: 25%;
		margin-top: 5%;
		margin: 10px;
		height: 35px;
		width: 50px;
		float: right;
		top: 85%;
		right: 90%;
		position: absolute;
	}
	</style>
</head>
<body>
	<?php
		session_start();
		$usuario = $_SESSION['usuariologado'];

		if($usuario['sexo']=='Masculino'){
			$vindo='vindo';
		}
		else{
			$vindo='vinda';
		}

		$nome=ucfirst($usuario['nome']);
	?>
	<header>
		<h1>Bem <?php echo $vindo.', '.$nome.'.' ?></h1>
	</header>
	<div id="main">
		<form name="form" method="get" action="script_jogo.php">
			<div id="jogador1">
				<label for="jogador1">Nome do Jogador N° 1</label><br>
				<input name="jogador1" type="text" style="height:30px; width:200px; font-size:25px;">
			</div>
			<div id="jogador2">
				<label for="jogador2">Nome do Jogador N° 2</label><br>
				<input name="jogador2" type="text" style="height:30px; width:200px; font-size:25px;">
			</div>
			<div id="start">
			<input name="start" value="Começar" type="submit" style="height:50px; width:150px; font-size:25px;">
			</div>
		</form>
		<div id="div2">
			<a href="logout.php">Sair</a>
		</div>
	</div>
	<footer>
		<p>Páginazinha TOP hein?</p>
	</footer>
</body>
</html>
