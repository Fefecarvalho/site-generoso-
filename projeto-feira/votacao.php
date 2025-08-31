<?php

include "conexao.php";


$nome = $_POST['nome'];
$escola = $_POST['escola'];
$voto = $_POST['voto'];
$sala = $_POST['sala'];
$nota = $_POST['nota'];


$sql = "INSERT INTO votacaoproj (nome, escola, voto, sala, nota) VALUES ('$nome', '$escola', '$voto', '$sala', '$nota')";

if (mysqli_query($conn, $sql)) {
    echo "Obrigada por votar $nome.";
} 

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Votação</title>
    <link rel="stylesheet" href="style.css">
    <style>
        button{
            background-color: #f6ff00;
            color: black;
            border-radius: 20px;
            padding: 10px;
            border: 3px solid black;
            display: flex;
            align-items: center;
            height: 40px;
            margin: 10px;
        }

        button a{
            text-decoration: none;
            color: #000;  
        }
    </style>
</head>
<body>
    <br>
    <button><a href="http://localhost/coisas-feira/projeto-feira/index.html">Voltar</a></button>
</body>
</html>