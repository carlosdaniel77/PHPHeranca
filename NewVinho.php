<?php
require_once 'Vinho.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro de Vinho</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(45deg, Navy, Black); 
        }
        .cadastro{
            background-color:rgba(0, 0, 0, 0.8);
            position:absolute;
            top:50%;
            left:50%;
            transform: translate(-50%, -50%);
            padding: 60px;
            border-radius: 25px;
            color: #836FFF;
        }
        .resultado{
            background-color:rgba(0, 0, 0, 0.8);
            position:absolute;
            top:90%;
            left:50%;
            transform: translate(-50%, -50%);
            padding: 20px;
            border-radius: 25px;
            color: white;
        }
        input{
            padding:12px;
            border-radius:5px;
            outline:none;
            font-size:20px;
        }

        button{
            background-color: dodgerblue;
            border: none;
            padding: 20px;
            width:49%;
            border-radius: 20px;
            color: white;
            font-size:20px;
        }

    </style>
</head>
<body>
    <div class="cadastro">
        <form action="" method="post">
            <h1>Vinho</h1>
            <label for="">Nome:</label>
            <input type="text" name="nome" id="nome" value=""/><br><br>
            <label for="">Preco:</label>
            <input type="text" name="preco" id="preco" value=""/><br><br>
            <label for="">Safra:</label>
            <input type="text" name="safra" id="safra" value=""/><br><br>
            <label for="">Tipo:</label>
            <input type="text" name="tipo" id="tipo" value=""><br><br>
            
            <button name="btnReset" id="btnReset" value="Reset">Reset</button>   
            <button name="btnEnviar" id="btnEnviar" value="Enviar">Enviar</button>
            <br><br>
        </form>
    </div>
    <div class="resultado">
    <?php
        if(isset($_POST['btnEnviar'])){
            $vinho = new Vinho();
            $vinho->setNome($_POST['nome']);
            $vinho->setPreco($_POST['preco']);
            $vinho->setSafra($_POST['safra']);
            $vinho->setTipo($_POST['tipo']);
            echo $vinho->mostraBebida();
            if($vinho->verificaPreco($_POST['preco']) == true){
                echo "<br/>Dentro do Orçamento";
            }else{
                echo "<br/>Caro";
            }
        }
    ?>
    </div>
</body>
</html>