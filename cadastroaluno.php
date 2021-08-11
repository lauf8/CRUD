<?php
    include_once'./banco.php';
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
  <H1>Sistema de Cadasto do aluno</H1>
  <form action="./controlaluno.php" method="post">
    <div>
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" />
    </div>
    <div>
        <label for="email">E-mail:</label>
        <input type="email" id="email" name="email" />
    </div>
    <div>
        <label for="Nome">curso:</label>
        <input type="text" id="email" name="curso" />
    </div>

    <div>
        <label for="senha">Senha:</label>
        <input type="password" id="password" name="senha" />
    </div>
    
    <div class="button">
        <button type="submit">Enviar Fomulário</button>
    </div>
</form>
</body>

</html>