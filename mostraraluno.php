
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

<?php
    include_once'./banco.php';// conecta com o banco
    $query_mostrar_alunos = "select idaluno,nome,curso,email from aluno";//linha que faz o select, mostrando os dados na tela
    $result_mostrar_alunos = $conn->prepare($query_mostrar_alunos);
    $result_mostrar_alunos-> execute();
    if (($result_mostrar_alunos) AND ($result_mostrar_alunos->rowCount() != 0)) {
      while ($row_aluno = $result_mostrar_alunos->fetch(PDO::FETCH_ASSOC)) {
          extract($row_aluno);
                echo "ID:".$row_aluno['idaluno']."<br>";
                echo "Nome:".$row_aluno['nome']."<br>";
                echo "Curso:".$row_aluno['curso']."<br>";
                echo "Email:".$row_aluno['email']."<br>";
                echo "<a href=http://localhost/editaraluno.php?id=$idaluno>Editar</a><br>";
                echo "<a href=http://localhost/apagaraluno.php?id=$idaluno>Apagar</a><br>";
                echo "<hr>";                      
      }
    }
?>
</body>
</html>