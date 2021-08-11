<?php

include_once'./banco.php';

$id = filter_input(INPUT_GET, "id", FILTER_SANITIZE_NUMBER_INT);

$query_monitor = "SELECT idmonitor FROM monitor WHERE idmonitor = $id LIMIT 1";
$prepara_monitor= $conn->prepare($query_monitor);
$prepara_monitor->execute();
if (($prepara_monitor) AND ($prepara_monitor->rowCount() != 0)) {
    $query_del_monitor = "DELETE FROM monitor WHERE idmonitor = $id";
    $apagar_monitor = $conn->prepare($query_del_monitor);

    if ($apagar_monitor->execute()) {
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