//<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" type="text/css" href="estilo.css">
    <title></title>
</head>
<body>
<div class="inicio">
<?php
        $palpite  =  isset($_GET['numero']) ? $_GET['numero'] : 0;
        $resposta = rand(1,10);

        if ($palpite == $resposta) {
            echo "Acertou, resposta é <b>$resposta</b>!";
        }   
            else {
                echo "Errou!, a resposta é <b>$resposta</b>!";
            }  
    ?> 
</div>
</body>
</html>
