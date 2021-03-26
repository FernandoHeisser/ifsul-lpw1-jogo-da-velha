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
		font-size: 35px;
		box-sizing: border-box;
		background-color: rgba(255,255,255,0.6);
		position: relative;
		padding: 50px;
	}
	#rank{
		background-color: white;
		width: 55%;
		padding: 2%;
		border: black solid 1px;
	}
	#text{
		float: right;
		font-size: 25px;
		box-sizing: border-box;
	}
	#div2{
        float: right;
        left: 70%;
        position: absolute;
        font-size: 40px;
        bottom: 10%;
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
    	color: white;
    	text-decoration: none;
	}
	a:visited {
    	color: white;
    	text-decoration: none;
	}
	a:hover {
	    color: hotpink;
	    text-decoration: none;
	    font-size:105%;
	}
	a:active {
    	color: white;
    	text-decoration: none;
	}
	</style>
</head>
<body>
	<header>
		<h1 >SÓ OS TOPZERA!</h1>
	</header>
		<div id="main">
			<div id="rank">
				<?php
					$i=0;
					if(file_exists('rank.txt')){
						$arquivo=fopen('rank.txt', 'r');
						$conteudo=file_get_contents('rank.txt');
						fclose($arquivo);

						$array=str_word_count ($conteudo, 1);
						foreach ($array as $value) {
							$cont=substr_count ($conteudo, $value);
							$lista[$i] = $cont.'pts - '.$value;
							$i++;
						}
						$lista_limpa=array_unique($lista);
						arsort($lista_limpa);
						foreach ($lista_limpa as $nome) {
							echo $nome."<br>";
						}
					}
					else{
						echo "Ainda não tem ninguém. :(";
					}
				?>
			</div>
			<div id="text"><p>1 Vitória = 3 Pontos.</p></div>
		</div>
	<footer>
		<p>Páginazinha TOP hein?</p>
		<div id="div2">
            <?php 
            	session_start();

            	if(isset($_SESSION['jogador1']) && isset($_SESSION['jogador2'])){
            		echo "<a href='script_jogo.php'>Voltar</a>";
            	}
            	else{
            		echo "<a href='index.php'>Voltar</a>";
            	}
            ?>
        </div>
	</footer>
</body>
</html>