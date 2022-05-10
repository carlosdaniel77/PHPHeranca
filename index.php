<?php

    require_once 'Bebida.php';
    require_once 'Vinho.php';
    require_once 'Suco.php';
    require_once 'Refrigerante.php'; 

    $Vinho = new Vinho();
    $objSuco = new Suco();
    $objRefrigerante = new Refrigerante();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro de Bebidas</title>

    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(45deg, Navy, Black); 
        }
        
        div{
            background-color:rgba(0, 0, 0, 0.8);
            position:absolute;
            top:50%;
            left:50%;
            transform: translate(-50%, -50%);
            padding: 30px;
            border-radius: 15px;
            color: cyan;
        }

        a:link {
            transition: all 0.3s ease; 
            text-decoration: none;
            font-size: 1.3em; 
            font-family: verdana; 
            padding:0px; 
            color: #B0C4DE; 
        }

        a:visited {
            color: #7B68EE; 
        }

        a:hover {
            color: #4682B4; 
        }

        a:active {
            color: #27cc4d; 
        }        
    </style>
</head>
<body>
    <div>
        <form method="post">
            <h1>Cadastro de Bebidas</h1>

            <h2>Escolha sua Bebida:</h2>
           
                <a href="NewVinho.php"><h2>Vinho</h2></a>
                <a href="NewSuco.php"><h2>Suco</h2></a>
                <a href="NewRefrigerante.php"><h2>Refrigerante</h2></a>
        </form>
    </div>      
</body>
</html>

