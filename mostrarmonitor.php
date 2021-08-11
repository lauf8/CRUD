
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
    include_once'./banco.php';
    $query_mostrar_monitores = "select idmonitor,nome,formacao,email from monitor";
    $result_mostrar_monitores = $conn->prepare($query_mostrar_monitores);
    $result_mostrar_monitores-> execute();
    if (($result_mostrar_monitores) AND ($result_mostrar_monitores->rowCount() != 0)) {
      while ($row_monitor = $result_mostrar_monitores->fetch(PDO::FETCH_ASSOC)) {
          extract($row_monitor);
               echo "ID:".$row_monitor['idmonitor']."<br>";
                echo "Nome:".$row_monitor['nome']."<br>";
                echo "Formação:".$row_monitor['formacao']."<br>";
                echo "Email:".$row_monitor['email']."<br>"; 
                echo "<a href=http://localhost/editarmonitor.php?id=$idmonitor>Editar<a><br>";
                echo "<a href=http://localhost/apagarmonitor.php?id=$idmonitor>Apagar</a><br>";
                echo "<hr>";                  
      }
    }
?>
</body>
</html>