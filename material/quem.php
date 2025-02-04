<!DOCTYPE html>
<html lang="pt-br">
<html>

<head>
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />

  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body class="brown  lighten-5">
  <?php include_once "header.php" ?>

  <main class="container">
    <h1 class="center-align"> Quem somos</h1>
  </main>
  <!--JavaScript at end of body for optimized loading-->
  <script type="text/javascript" src="js/materialize.min.js"></script>

  <script>
    document.addEventListener('DOMContentLoaded', function() {
      // Inicializa a sidenav
      var elems = document.querySelectorAll('.sidenav');
      var instances = M.Sidenav.init(elems, {
        edge: 'left'
      });

      // Configura a largura da sidenav
      var sidenav = document.querySelector('.sidenav');
      sidenav.style.width = '250px'; // Ajuste a largura conforme necessário
    });
  </script>
</body>

</html>