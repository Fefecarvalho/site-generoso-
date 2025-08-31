<?php

include "conexao.php";

$nome = $_POST['nome'];
$email = $_POST['email'];
$msg = $_POST['msg'];

$sql = "INSERT INTO mensagem (nome, email, msg) VALUES ('$nome', '$email', '$msg')";

if (mysqli_query($conn, $sql)) {
    echo "Obrigada pela participação $nome.";
} 


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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

        body{
            background: rgb(50,173,84);
            padding: 50px;
        }
    </style>
</head>
<body>
    <button><a href="http://localhost/coisas-feira/site-feira/form.html">Voltar</a></button>
</body>
</html>