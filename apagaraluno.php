<?php

include_once'./banco.php';

$id = filter_input(INPUT_GET, "id", FILTER_SANITIZE_NUMBER_INT);

$query_aluno = "SELECT idaluno FROM aluno WHERE idaluno = $id LIMIT 1";
$prepara_aluno= $conn->prepare($query_aluno);
$prepara_aluno->execute();
if (($prepara_aluno) AND ($prepara_aluno->rowCount() != 0)) {
    $query_del_aluno = "DELETE FROM aluno WHERE idaluno = $id";
    $apagar_aluno = $conn->prepare($query_del_aluno);

    if ($apagar_aluno->execute()) {
        $_SESSION['msg'] = "<p style='color: green;'>Usuário apagado com sucesso!</p>";
        header("Location: index.php");
    } else {
        $_SESSION['msg'] = "<p style='color: #f00;'>Usuário não apagado com sucesso!</p>";
        header("Location: index.php");
    }
} else {
    $_SESSION['msg'] = "<p style='color: #f00;'>Erro: Usuário não encontrado!</p>";
    header("Location: index.php");
}