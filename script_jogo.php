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
                height: 730px;
                border: solid black 1px;;
                margin: 10px;
                font-size: 40px;
                box-sizing: border-box;
                background-color: rgba(255,255,255,0.6);
                position: relative;
            }
            #nome{
                margin-left: 10%;
                bottom: 92%;
                width: 80%;
                height: 10%;
                box-sizing: border-box;
                position: absolute;
            }
            #game{
                width: 50%;
                position: absolute;
                height: 80%;
                background-color: rgba(255,255,255,0.6);
                top: 10%;
                left: 25%;
                box-sizing: border-box;
            }
            #botao{
                margin-top: 30%;
                margin-left: 2.5%;
            }
            #botao2{
                margin-top: 40px;
                margin-left: 2.5%;
            }
            #botao3{
                margin-top: 30px;
                margin-left: 2.5%;
            }
            footer{
                background-color: #0B2F3A;
                height: 100px;
                padding: 10px;
                margin: 10px;
                color: white;
                width: 80%;
                box-sizing: border-box;
                position: relative;
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
            #div2{
                margin: 10px;
                float: right;
                left: 90%;
                position: absolute;
                font-size: 40px;
                bottom: 10%;
            }
            table{
                width: 100%;
                height: 100%;
                border-collapse: collapse;
                border: 5px solid rgba(255,255,255,0);
            }
            td{
                border: 5px solid white;
                text-align: center;
                height:185px;
            }
        </style>
    </head>
    <body>
        <?php
            session_start();
            if(isset($_GET['jogador1']) && isset($_GET['jogador2']) ){
                $_SESSION['jogador1']=$_GET['jogador1'];
                $_SESSION['jogador2']=$_GET['jogador2'];
            }
            if(isset($_POST['mat'])){
            	$_SESSION['tabuleiro'] = $_POST['mat'];
            }
            if(isset($_SESSION['jogada'])){
            $_SESSION['jogada']= $_SESSION['jogada'] + 1;
            }else {
                $_SESSION['jogada'] = 1;
            }
            ganhador();
            vez();
            
            function ganhador(){
                if(isset($_SESSION['tabuleiro'])){
                    if($_SESSION['tabuleiro'][1][1]=='x' && $_SESSION['tabuleiro'][1][2]=='x' && $_SESSION['tabuleiro'][1][3]=='x'){
                        $_SESSION['ganhador']=$_SESSION['jogador1'];
                        write();
                        return $_SESSION['jogador1'].' Venceu!';
                    }

                    elseif($_SESSION['tabuleiro'][2][1]=='x' && $_SESSION['tabuleiro'][2][2]=='x' && $_SESSION['tabuleiro'][2][3]=='x'){
                        $_SESSION['ganhador']=$_SESSION['jogador1'];
                        write();
                        return $_SESSION['jogador1'].' Venceu!';
                    }

                    elseif($_SESSION['tabuleiro'][3][1]=='x' && $_SESSION['tabuleiro'][3][2]=='x' && $_SESSION['tabuleiro'][3][3]=='x'){
                        $_SESSION['ganhador']=$_SESSION['jogador1'];
                        write();
                        return $_SESSION['jogador1'].' Venceu!';
                    }

                    elseif($_SESSION['tabuleiro'][1][1]=='x' && $_SESSION['tabuleiro'][2][1]=='x' && $_SESSION['tabuleiro'][3][1]=='x'){
                        $_SESSION['ganhador']=$_SESSION['jogador1'];
                        write();
                        return $_SESSION['jogador1'].' Venceu!';
                    }

                    elseif($_SESSION['tabuleiro'][1][2]=='x' && $_SESSION['tabuleiro'][2][2]=='x' && $_SESSION['tabuleiro'][3][2]=='x'){
                        $_SESSION['ganhador']=$_SESSION['jogador1'];
                        write();
                        return $_SESSION['jogador1'].' Venceu!';
                    }

                    elseif($_SESSION['tabuleiro'][1][3]=='x' && $_SESSION['tabuleiro'][2][3]=='x' && $_SESSION['tabuleiro'][3][3]=='x'){
                        $_SESSION['ganhador']=$_SESSION['jogador1'];
                        write();
                        return $_SESSION['jogador1'].' Venceu!';
                    }

                    elseif($_SESSION['tabuleiro'][1][1]=='x' && $_SESSION['tabuleiro'][2][2]=='x' && $_SESSION['tabuleiro'][3][3]=='x'){
                        $_SESSION['ganhador']=$_SESSION['jogador1'];
                        write();
                        return $_SESSION['jogador1'].' Venceu!';
                    }

                    elseif($_SESSION['tabuleiro'][1][3]=='x' && $_SESSION['tabuleiro'][2][2]=='x' && $_SESSION['tabuleiro'][3][1]=='x'){
                        $_SESSION['ganhador']=$_SESSION['jogador1'];
                        write();
                        return $_SESSION['jogador1'].' Venceu!';
                    }

                    elseif($_SESSION['tabuleiro'][1][1]=='o' && $_SESSION['tabuleiro'][1][2]=='o' && $_SESSION['tabuleiro'][1][3]=='o'){
                        $_SESSION['ganhador']=$_SESSION['jogador2'];
                        write();
                        return $_SESSION['jogador2'].' Venceu!';
                    }

                    elseif($_SESSION['tabuleiro'][2][1]=='o' && $_SESSION['tabuleiro'][2][2]=='o' && $_SESSION['tabuleiro'][2][3]=='o'){
                        $_SESSION['ganhador']=$_SESSION['jogador2'];
                        write();
                        return $_SESSION['jogador2'].' Venceu!';
                    }

                    elseif($_SESSION['tabuleiro'][3][1]=='o' && $_SESSION['tabuleiro'][3][2]=='o' && $_SESSION['tabuleiro'][3][3]=='o'){
                        $_SESSION['ganhador']=$_SESSION['jogador2'];
                        write();
                        return $_SESSION['jogador2'].' Venceu!';
                    }

                    elseif($_SESSION['tabuleiro'][1][1]=='o' && $_SESSION['tabuleiro'][2][1]=='o' && $_SESSION['tabuleiro'][3][1]=='o'){
                        $_SESSION['ganhador']=$_SESSION['jogador2'];
                        write();
                        return $_SESSION['jogador2'].' Venceu!';
                    }

                    elseif($_SESSION['tabuleiro'][1][2]=='o' && $_SESSION['tabuleiro'][2][2]=='o' && $_SESSION['tabuleiro'][3][2]=='o'){
                        $_SESSION['ganhador']=$_SESSION['jogador2'];
                        write();
                        return $_SESSION['jogador2'].' Venceu!';
                    }

                    elseif($_SESSION['tabuleiro'][1][3]=='o' && $_SESSION['tabuleiro'][2][3]=='o' && $_SESSION['tabuleiro'][3][3]=='o'){
                        $_SESSION['ganhador']=$_SESSION['jogador2'];
                        write();
                        return $_SESSION['jogador2'].' Venceu!';
                    }

                    elseif($_SESSION['tabuleiro'][1][1]=='o' && $_SESSION['tabuleiro'][2][2]=='o' && $_SESSION['tabuleiro'][3][3]=='o'){
                        $_SESSION['ganhador']=$_SESSION['jogador2'];
                        write();
                        return $_SESSION['jogador2'].' Venceu!';
                    }

                    elseif($_SESSION['tabuleiro'][1][3]=='o' && $_SESSION['tabuleiro'][2][2]=='o' && $_SESSION['tabuleiro'][3][3]=='o'){
                        $_SESSION['ganhador']=$_SESSION['jogador2'];
                        write();                  
                        return $_SESSION['jogador2'].' Venceu!';
                    }
                    else if($_SESSION['tabuleiro'][1][1]!=NULL && $_SESSION['tabuleiro'][1][2]!=NULL && $_SESSION['tabuleiro'][1][3]!=NULL &&
                            $_SESSION['tabuleiro'][2][1]!=NULL && $_SESSION['tabuleiro'][2][2]!=NULL && $_SESSION['tabuleiro'][2][3]!=NULL &&
                            $_SESSION['tabuleiro'][3][1]!=NULL && $_SESSION['tabuleiro'][3][2]!=NULL && $_SESSION['tabuleiro'][3][3]!=NULL){
                    	return 'Empatou!';
                    }
                }   
            }
            function vez(){
                if($_SESSION['jogada'] % 2 == 0){
                    $_SESSION['vez']='Vez de '.$_SESSION['jogador2'].', use O';
                  }  else{
                    $_SESSION['vez']='Vez de '.$_SESSION['jogador1'].', use X';
                  }
            }
            function write(){
                $arquivo=fopen('rank.txt', 'a+');
                if(isset($_SESSION['ganhador'])){
                    $ganhador=$_SESSION['ganhador']."\r\n";
                    fwrite($arquivo, $ganhador);
                }
                fclose($arquivo);
            }
        ?>
        <header>
            <h1>Jogo da Velha Maroto</h1>
        </header>

        <div id="main">
            
            <div id="nome">
                <p style="font-size:30px;">
                    <?php
                        if(ganhador()!=NULL) 
                            echo ganhador();
                        else{
                            if(isset($_SESSION['vez']))
                            echo $_SESSION['vez'];
                        
                        }
                    ?>
                </p>
            </div>
            <div id="game">
                <form name="form" method="post" action="script_jogo.php">
                    <table>
                        <tr>  
                            <td><input name="mat[1][1]" type="text" value="<?php if (isset($_SESSION['tabuleiro'][1][1])) {echo $_SESSION['tabuleiro'][1][1];}?>" style="height:100px; width:100px; font-size:100px; text-align: center;"></td> 

                            <td><input name="mat[1][2]" type="text" value="<?php if (isset($_SESSION['tabuleiro'][1][2])) {echo $_SESSION['tabuleiro'][1][2];}?>" style="height:100px; width:100px; font-size:100px; text-align: center;"></td>

                            <td><input name="mat[1][3]" type="text" value="<?php if (isset($_SESSION['tabuleiro'][1][3])) {echo $_SESSION['tabuleiro'][1][3];}?>" style="height:100px; width:100px; font-size:100px; text-align: center;"></td>  
                        </tr>
                        <tr>  
                            <td><input name="mat[2][1]" type="text" value="<?php if (isset($_SESSION['tabuleiro'][2][1])) {echo $_SESSION['tabuleiro'][2][1];}?>" style="height:100px; width:100px; font-size:100px; text-align: center;"></td> 

                            <td><input name="mat[2][2]" type="text" value="<?php if (isset($_SESSION['tabuleiro'][2][2])) {echo $_SESSION['tabuleiro'][2][2];}?>" style="height:100px; width:100px; font-size:100px; text-align: center;"></td> 

                            <td><input name="mat[2][3]" type="text" value="<?php if (isset($_SESSION['tabuleiro'][2][3])) {echo $_SESSION['tabuleiro'][2][3];}?>" style="height:100px; width:100px; font-size:100px; text-align: center;"></td>  
                        </tr>
                        <tr>  
                            <td><input name="mat[3][1]" type="text" value="<?php if (isset($_SESSION['tabuleiro'][3][1])) {echo $_SESSION['tabuleiro'][3][1];}?>" style="height:100px; width:100px; font-size:100px; text-align: center;"></td>  

                            <td><input name="mat[3][2]" type="text" value="<?php if (isset($_SESSION['tabuleiro'][3][2])) {echo $_SESSION['tabuleiro'][3][2];}?>" style="height:100px; width:100px; font-size:100px; text-align: center;"></td>

                            <td><input name="mat[3][3]" type="text" value="<?php if (isset($_SESSION['tabuleiro'][3][3])) {echo $_SESSION['tabuleiro'][3][3];}?>" style="height:100px; width:100px; font-size:100px; text-align: center;"></td>   
                        </tr>
                    </table>
            </div>   
            <div id="botao"><input name="submit" type="submit" value="Jogar" style="height:50px; width:100px; font-size:30px;"></div>
            </form>
            <form name="form2" method="post" action="limpa.php">
                <div id="botao2"><input name="reset" type="submit" value="Limpa" style="height:50px; width:100px; font-size:30px;"></div>
            </form>
            <form name="form3" method="post" action="limpa.php">
                <div id="botao2"><input name="botao" type="submit" value="Rank" style="height:50px; width:100px; font-size:30px;"></div>
            </form>
        </div>

        <footer>
            <p>OBS: Use com CapsLock Desligado!</p>
            <div id="div2">
                <a href="logout.php">Sair</a>
            </div>
        </footer>

    </body>
</html>