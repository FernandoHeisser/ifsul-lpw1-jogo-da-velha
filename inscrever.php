<?php
		if(	!empty($_POST['user']) && !empty($_POST['senha']) && !empty($_POST['nome']) && !empty($_POST['sobrenome']) && !empty($_POST['nasci']) && !empty($_POST['sexo']) && !empty($_POST['email'])){
			
			$user=$_POST['user'];
			$senha=$_POST['senha'];
			$nome=$_POST['nome'];
			$sobrenome=$_POST['sobrenome'];
			$nascimento=$_POST['nasci'];
			$sexo=$_POST['sexo'];
			$email=$_POST['email'];

			$arquivo=fopen('text.txt', 'a+');

			$texto="$user\r\n$senha\r\n$nome\r\n$sobrenome\r\n$nascimento\r\n$sexo\r\n$email\r\n";//no windows tem que colocar esse \r

			fwrite($arquivo, $texto);
			fclose($arquivo);

			header("location: sucesso.php");			
		}
		else{
			setcookie('mensagem', 'Preencha todos os campos.', time()+1);
			header("Location: sub.php");	
		}
	?>