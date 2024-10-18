﻿<!DOCTYPE html>
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

<body class="brown  lighten-5">
  <?php include_once "header.php" ?>

  <main class="container">

    <div style="margin-top: 10px;">
      <div class="row">
        <div class="col s12 m2  offset-m3 center-align"> <img class="responsive-img" src="logo01.webp"> <br> Comida </div>
        <div class="col s12 m2  center-align"> <img class="responsive-img" src="logo02.webp"> <br> Diversão </div>
        <div class="col s12 m2  center-align"> <img class="responsive-img" src="logo03.webp"> <br> Relax </div>
        <div class="col s12  m3 center-align"> </div>
      </div>
    </div>


    <div class="row">
      <div class="col s12 m6 center-align "> <img class="responsive-img materialboxed" src="img01.webp"> </div>
      <div class="col s12 m6 center-align "> <img class="responsive-img materialboxed" src="img02.webp"> </div>
    </div>

    <div class="row">
      <div class="col s12 m6 center-align"> <img class="responsive-img materialboxed" src="img03.webp"> </div>
      <div class="col s12 m6 center-align"> <img class="responsive-img materialboxed" src="img04.webp"> </div>
    </div>


    <div class="row">
      <div class="col s12 m6  center-align"> <img class="responsive-img materialboxed" src="img03.webp"> </div>
      <div class="col s12 m6 center-align"> <img class="responsive-img materialboxed" src="img01.webp"> </div>
    </div>





    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="js/materialize.min.js"></script>

    <script>
      document.addEventListener('DOMContentLoaded', function() {
        const materialboxElems = document.querySelectorAll('.materialboxed');
        M.Materialbox.init(materialboxElems);
      });
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
  </main>
</body>

</html>