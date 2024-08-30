<!DOCTYPE html>
<html lang="pt-br">
<html>

<head>
  <meta charset="UTF-8">
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>
  <?php
  include_once "header.php";
  require_once "conecta.php";
  ?>
  <main>

    <table class="container">

      <h1 class="container">Lista de clientes</h1>
      <thead>
        <tr>
          <th>ID</th>
          <th>Nome do cliente</th>
          <th>cpf</th>
          <th>Data de nascimento</th>
          <th>Editar</th>
          <th>Excluir</th>
        </tr>
      </thead>

      <tbody>

        <?php

        $sql = "SELECT * FROM clientes";
        $resultado = mysqli_query($mysql, $sql);

        while ($dados = mysqli_fetch_array($resultado)) {

        ?>

          <tr>
            <td><?php echo $dados['id']; ?></td>
            <td><?php echo $dados['nomeCliente']; ?></td>
            <td><?php echo $dados['CPF']; ?></td>
            <td><?php echo $dados['dataNasc']; ?></td>
            <td> <a class="btn-floating btn-small waves-effect waves-light greenyellow"><i class="material-icons">edit</i></a></td>
            <td> <a class="btn-floating btn-small waves-effect waves-light red"><i class="material-icons">delete</i></a></td>
          </tr>
      </tbody>
    <?php
        }
    ?>

    </table>

  </main>


  <!--Import jQuery before materialize.js-->
  <script type="text/javascript" src="js/materialize.min.js"></script>

</body>

</html>