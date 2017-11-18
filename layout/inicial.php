<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title><?= $titulo ?></title>

    <link href="css/bootstrap.css" rel="stylesheet">
</head>
<body>
    <?php include 'menu.php' ?>

    

    <div class="container">
        <div class="jumbotron">
            <h1><?= $titulo ?></h1>
            <p>Seja bem vindo ao Sistema de Chamados HTJ!</p>
        </div>
    </div>

    <?php include 'layout/jquery.js.php' ?>
    <?php include 'layout/bootstrap.js.php' ?>
    
</body>
</html>