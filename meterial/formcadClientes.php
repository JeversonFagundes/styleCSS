<!DOCTYPE html>
<html lang="pt-br">

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

    <main class="container">

        <h1 class="center-align">Cadastrar</h1>

        <form action="inserir.php" method="post">
            <div class="card-panel">

                <div class="row">

                    <div class="input-field col s12">
                        <input placeholder="Digite no formato XXX.XXX.XXX-XX" id="cpf" type="text" class="validate" pattern="\d{3}\.\d{3}\.\d{3}-\d{2}" required>
                        <label for="cpf">CPF</label>
                        <span class="helper-text" data-error="O campo deve ser preenchido no formato XXX.XXX.XXX-XX"></span>
                    </div>
                    <div class="input-field col s12">
                        <input placeholder="Digite o seu nome" id="nome" type="text" class="validate" required>
                        <label for="nome">Nome Completo</label>
                        <span class="helper-text" data-error="Você deve preencher corretamente esse campo"></span>
                    </div>
                    <div class="input-field col s12">
                        <input placeholder="Digite sua matricula" id="matricula" type="text" class="validate" pattern="\d{1,10}" required>
                        <label for="mat">Matricula</label>
                        <span class="helper-text" data-error="A sua matricula deve ter no máximo 10 caracteres e deve conter apenas números"></span>
                    </div>
                    <div class="input-field col s12">
                        <input id="dataNasc" type="text" class="datepicker" name="dataNasc" required>
                        <label for="dataNasc">Data do seu nascimento</label>
                    </div>

                </div>

            </div>
        </form>
    </main>
    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="js/materialize.min.js"></script>

    <script>
        // Inicializa o date picker
        document.addEventListener('DOMContentLoaded', function() {
            var elems = document.querySelectorAll('.datepicker');
            M.Datepicker.init(elems, {
                autoClose: true, // Fecha o date picker automaticamente após a seleção
                format: 'dd/mm/yyyy', // Define o formato da data
                yearRange: [1900, 2100], // Define o intervalo de anos
                onSelect: function(date) {
                    console.log('Data selecionada: ', date);
                }
            });
        });
    </script>
</body>

</html>