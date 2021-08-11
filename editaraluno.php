<?php
include_once 'banco.php';//Faz a conexão com o banco
$id = filter_input(INPUT_GET, "id", FILTER_SANITIZE_NUMBER_INT);


$query_editar_aluno = "SELECT IDAluno, nome,curso,email,senha FROM aluno WHERE IDAluno = $id LIMIT 1";
$result_editar_aluno = $conn->prepare($query_editar_aluno);
$result_editar_aluno->execute();

$row_aluno = $result_editar_aluno->fetch(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html>

<head>
  <link href="style.css" rel="stylesheet">
  <!--Import Google Icon Font-->
  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />

  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body align="center">
  <H1>Editar dados do Aluno</H1>
  <form action="" method="post">
    <div>
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome"  value="<?php
        echo $row_aluno['nome'];
        ?>" />
    </div>
    <div>
        <label for="email">E-mail:</label>
        <input type="email" id="email" name="email" value="<?php
        echo $row_aluno['email'];
        ?>" />
    </div>
    <div>
        <label for="Nome">curso:</label>
        <input type="text" id="email" name="curso" value="<?php
        echo $row_aluno['curso'];
        ?>" />
    </div>

    <div>
        <label for="senha">Senha:</label>
        <input type="password" id="password" name="senha" value="<?php
        echo $row_aluno['senha'];
        ?>" />
    </div>   
    <input type="submit" value="Salvar" name="butao">
</form><br>
      <a href="index.php"><button>Página Inicial</button></a>
<?php

  $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
  $query_atualizar_aluno= "UPDATE aluno SET nome=:nome,curso=:curso,email=:email, senha=:senha WHERE idaluno=:id"; 
  $atualizar_aluno = $conn->prepare($query_atualizar_aluno);//prepara a query para ser executada no banco
      $atualizar_aluno->bindParam(':nome', $dados['nome'], PDO::PARAM_STR);
      $atualizar_aluno->bindParam(':curso', $dados['curso'], PDO::PARAM_STR);
      $atualizar_aluno->bindParam(':email', $dados['email'], PDO::PARAM_STR);
      $atualizar_aluno->bindParam(':senha', $dados['senha'], PDO::PARAM_STR);
      $atualizar_aluno->bindParam(':id', $id, PDO::PARAM_INT);
      $atualizar_aluno->execute();//executa a linha no banco  

?>
</body>
