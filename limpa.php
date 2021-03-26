<?php
	session_start();
	unset($_SESSION['tabuleiro']);
	unset($_SESSION['jogada']);
	unset($_POST['submit']);
	$_SESSION['vez']='Vez de '.$_SESSION['jogador1'];
	if(isset($_POST['reset']))
		header('Location:script_jogo.php');
	if(isset($_POST['botao']))
		header('Location:rank.php');
?>