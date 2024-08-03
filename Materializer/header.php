<?php

$pagina_corrente = basename($_SERVER['SCRIPT_NAME']);
?>

<div class="navbar-fixed">

    <nav class="light-green lighten-3">
        <div class="nav-wrapper">
            <a href="#" class="brand-logo">Logo</a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li <?php if ($pagina_corrente == 'index.php') {echo 'class = "active"';}?>> <a href="index.php">Home</a></li>
                <li <?php if ($pagina_corrente == 'destinos.php') {echo 'class = "active"';}?>> <a href="destinos.php">Destinos</a></li>
                <li <?php if ($pagina_corrente == 'quem.php') {echo 'class = "active"';}?>> <a href="quem.php">Quem somos</a></li>
                <li <?php if ($pagina_corrente == 'login.php') {echo 'class = "active"';}?>> <a href="login.php">Login</a></li>
            </ul>
        </div>
    </nav>

</div>