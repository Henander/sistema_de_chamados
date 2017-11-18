<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Chamados: Algo deu errado!</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous"> -->

</head>
<body>
    <?php include "menu.php" ?>

    <div class="container">
        <div class="alert alert-danger">
            <h1>Algo deu errado!</h1>
            <p><?= $mensagem ?></p>

            <hr>
            <a data-toggle="collapse" href="#mais_detalhes" aria-expanded="false" aria-controls="mais_detalhes">
                mais detalhes
            </a>

            <div class="collapse" id="mais_detalhes">
            <div class="well">
                <samp><?= $erro ?></samp>
            </div>
            </div>
        </div>
    </div>

    <?php include "jquery.js.php" ?>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</body>
</html>