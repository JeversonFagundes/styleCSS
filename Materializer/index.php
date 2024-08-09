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

    <meta charset="UTF-8">

    <title>Materializer</title>
</head>

<body>

    <?php require_once "header.php"; ?>

    <h1>Home</h1>
    <div class="container ">


        <div class="card-panel teal lighten-2">This is a card panel with a teal lighten-2 class</div>

        <div class="card-panel">
            <span class="blue-text text-darken-2">This is a card panel with dark blue text</span>
        </div>

        <div class="row">
            <div class="col s1 #ff5722 deep-orange">1</div>
            <div class="col s1 #ff5722 deep-orange">2</div>
            <div class="col s1 #ff5722 deep-orange">3</div>
            <div class="col s1 #ff5722 deep-orange">4</div>
            <div class="col s1 #ff5722 deep-orange">5</div>
            <div class="col s1 #ff5722 deep-orange">6</div>
            <div class="col s1 #ff5722 deep-orange">7</div>
            <div class="col s1 #ff5722 deep-orange">8</div>
            <div class="col s1 #ff5722 deep-orange">9</div>
            <div class="col s1 #ff5722 deep-orange">10</div>
            <div class="col s1 #ff5722 deep-orange">11</div>
            <div class="col s1 #ff5722 deep-orange">12</div>
        </div>

        <div class="row">
            <div class="col s12 red">1</div>
            <div class="col s16 blue">2</div>
            <div class="col s16 red">3</div>

        </div>

        <div class="row">
            <div class="col s6 red offset-s6">1</div>
        </div>

        <div class="row">
            <div class="col s6 m8 yellow">1</div>
            <div class="col s6 m4 green">2</div>
        </div>

        <div class="row">
            <div class="col s12 m8 l6 yellow">Testando colunas</div>
            <div class="col s12 m4  l6 green">Testando colunas</div>
        </div>

    </div>
    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="js/materialize.min.js"></script>
</body>

</html>