<?php
$paginaCorrente = basename($_SERVER['SCRIPT_NAME']);
//echo $pagina_corrente;
?>



<div class="navbar-fixed">
  <nav class="brown  lighten-3">
    <div class="nav-wrapper container">
      <a href="#" class="brand-logo"><img src="mala02.png" height="55" width="60"></a>
      <a href="#" data-target="mobile" class="sidenav-trigger"><i class="meterial-icons">menu</i></a>

      <ul class="right hide-on-med-and-down">
        <li <?php if ($paginaCorrente == 'index.php') {
              echo 'class="active"';
            } ?>> <a class="black-text" href="index.php">Home</a></li>
        <li <?php if ($paginaCorrente == 'clientes.php') {
              echo 'class="active"';
            } ?>> <a class="black-text" href="clientes.php">Clientes</a></li>
        <li <?php if ($paginaCorrente == 'quem.php') {
              echo 'class="active"';
            } ?>><a class="black-text" href="quem.php">Nós!</a></li>
        <li <?php if ($paginaCorrente == 'login.php') {
              echo 'class="active"';
            } ?>><a class="black-text" href="login.php">Login</a></li>
        <li <?php if ($paginaCorrente == 'destinos.php') {
              echo 'class="active"';
            } ?>><a class="black-text" href="destinos.php">Destinos</a></li>
      </ul>
    </div>
  </nav>
</div>

<ul id="mobile" class="sidenav">
  <li>
    <div style="background-size:cover; background-position: center; background-image:url('ema.jpg');" class="user-view">
      <a href="index02.php"><img class="circle" src="foto3.jpeg"></a>
      <a href="index02.php"><span class="white-text name">Viajando na maionese</span></a>
      <a href="#email"><span class="white-text email">ursula.ribeiro@iffarroupilha.edu.br</span></a>
    </div>
  </li>

  <li><a href="index02.php"><i class="material-icons">home</i> Home</a></li>
  <li><a href="clientes1.php">Clientes</a></li>
  <li><a href="quem.php">Quem somos</a></li>
  <li><a href="login.php">Login</a></li>
  <li><a href="destinos.php">Destinos</a></li>
  <li>
    <div class="divider"></div>
  </li>
  <li><a class="subheader">Outras opções</a></li>
  <li><a href="#!">BLA BLA</a></li>
</ul>