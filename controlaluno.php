<?php

    include_once 'banco.php';//Faz a conexão com o banco
    $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);//filtra os dados
    $query_aluno = "insert INTO aluno (nome,curso,email,senha) VALUES ('".$dados['nome']."',
    '".$dados['curso']."', '".$dados['email']."', '".$dados['senha']."')";//insere os dados na tabela aluno
    $cadastro_aluno = $conn->prepare($query_aluno);//prepara a query para ser executada no banco
    $cadastro_aluno->execute();//executa a linha no banco
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1 align = "center">Sucesso no Casdastro do Aluno</h1>
 
    <a href="index.php">Voltar para página Inicial</a>
</body>
</html>