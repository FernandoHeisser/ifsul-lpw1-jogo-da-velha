<?php
	session_start();
	$linha = array();
	$i=0; $cont=0;
	if(!empty($_POST['user']) && !empty($_POST['senha'])){                         //Linha[0]==User
		$arquivo=fopen('text.txt', 'r');                                           //Linha[1]==Senha
		while (!feof($arquivo)) {                                                  //Linha[2]==Nome
			$linha[$i]=fgets($arquivo);                                            //Linha[3]==Sobrenome
			$i++;                                                                  //Linha[4]==Nascimento
		}                                                                          //Linha[5]==Sexo
        //                                                                         //Linha[6]==Email
		$test_user=$_POST['user'];
		$test_senha=$_POST['senha'];

		for ($j=0; $j < $i; $j++) { 
			$linha[$j]=rtrim($linha[$j]);
		}
		for ($k=0; $k < $i; $k++) { 
			if($linha[$k]==$test_user && $linha[$k+1]==$test_senha){
				$usuario['user']      =$linha[$k];
				$usuario['senha']     =$linha[$k+1];
				$usuario['nome']      =$linha[$k+2];
				$usuario['sobrenome'] =$linha[$k+3];
				$usuario['nascimento']=$linha[$k+4];
				$usuario['sexo']      =$linha[$k+5];
				$usuario['email']     =$linha[$k+6];

				$_SESSION['usuariologado'] = $usuario;

				header('location: inicio.php');
			}
		}

		if(!isset($usuario)){
			setcookie('mensagem', 'Login ou Senha estão incorretos.', time()+1);
			header('location: login.php');
		}
	}
	else{
		setcookie('mensagem', 'Preencha todos os campos.', time()+1);
		header('location: login.php');
	}
?>
