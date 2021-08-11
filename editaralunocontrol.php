<?php
  include_once 'banco.php';
  ob_start();
  
  $id = filter_input(INPUT_GET, "id", FILTER_SANITIZE_NUMBER_INT);
  $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
  $query_atualizar_aluno= "UPDATE aluno SET nome=:nome,curso=:curso,email=:email,       senha=:senha WHERE idaluno=:id"; 
  $atualizar_aluno = $conn->prepare($query_atualizar_aluno);//prepara a query para ser executada no banco
  $atualizar_aluno->bindParam(':nome', $dados['nome'], PDO::PARAM_STR);
  $atualizar_aluno->bindParam(':curso', $dados['curso'], PDO::PARAM_STR);
  $atualizar_aluno->bindParam(':email', $dados['email'], PDO::PARAM_STR);
  $atualizar_aluno->bindParam(':senha', $dados['senha'], PDO::PARAM_STR);
  $atualizar_aluno->bindParam(':id', $id, PDO::PARAM_INT);
      if($atualizar_aluno->execute()){
        header("Location: index.php");

    }
    
                
?>