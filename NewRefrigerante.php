<?php
    require_once 'Refrigerante.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Refrigerante</title>

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
            padding: 50px;
            border-radius: 25px;
            color: #836FFF;
        }
        .resultado{
            background-color:rgba(0, 0, 0, 0.8);
            position:absolute;
            top:83%;
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
            <h1>Refrigerante</h1>
            <label>Nome:</label>
            <input type="text" name="nome" id="nome" value=""/><br><br>
            <label>Preço: </label>
            <input type="text" name="preco" id="preco" value=""/><br><br>
            <label>Retornavel: </label>
            <select name="retornavel" id="retornavel">
                <option value="sim">Sim, é retornável</option>
                <option value="não">Não é retornável</option>
            </select><br><br>
            <button name="btnReset" id="btnReset" value="Reset">Reset</button>   
            <button name="btnEnviar" id="btnEnviar" value="Enviar">Enviar</button>
            <br><br>
        </form>    
    </div>
    <div class="resultado">
    <?php

    if(isset($_POST['btnEnviar'])){
        //criar um objeto
        $refrigerante = new Refrigerante();
        $refrigerante->setNome($_POST['nome']);
        $refrigerante->setPreco($_POST['preco']);
        $refrigerante->setRetornavel($_POST['retornavel']);
        echo $refrigerante->mostraBebida();
        if($refrigerante->verificaPreco($_POST['preco']) == true){
            echo "<br/>Dentro do Orçamento";
        }else{
            echo "<br/>Caro";
        }


    }
    
    
    ?>
    </div>
</body>
</html>