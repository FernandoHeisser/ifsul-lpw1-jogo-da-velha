<!DOCTYPE html>
<html>
<head>
	<title>Jogo da Velha</title>
	<meta charset="UTF-8">
	<style type="text/css">

	body{
		background-image: url(gordo.gif);
		background-repeat: no-repeat;
		background-size: 100%;
		font-family: arial;
		padding-left: 15%;
	}
	#sign{
		position: absolute;
		padding: 5px;
		width: 50%;
		height: 50%;
		box-sizing: border-box;
		text-align: center;
		top: 20%;
	}
	#sub{
		position: absolute;
		padding: 5px;
		width: 50%;
		height: 50%;
		box-sizing: border-box;
		left: 50%;
		text-align: center;
		top: 20%;
	}
	#rank{
		position: absolute;
		padding: 5px;
		width: 50%;
		height: 50%;
		box-sizing: border-box;
		text-align: center;
		top: 60%;
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
	</style>
</head>
<body>
	<header>
		<h1 >JOGO DA VELHA TOPZERA</h1>
	</header>
		<div id="main">
			<div id="sign">
				<a href="login.php">Entrar</a>
			</div>
			<div id="sub">
				<a href="sub.php">Inscreva-se</a>
			</div>
			<div id="rank">
				<a href="rank.php">Ranking</a>
			</div>
		</div>
	<footer>
		<p>Páginazinha TOP hein?</p>
	</footer>
</body>
</html>