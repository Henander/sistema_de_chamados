<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title><?= $titulo ?></title>

    <link href="../css/bootstrap.css" rel="stylesheet">
    
</head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="../index.php">Página Inicial</a>
    </div>
</nav>    

<div class="container">
        <h1><?= $titulo ?></h1>

        <?php if (count($buscar_historico) > 0): ?>

            <table class="table table-striped">
                <tr>
                    <th>Número do Chamado</th>
                    <th>Descricao</th>
                    <th>Data e Hora</th>
                    <th>Status</th>
                </tr>
                <?php foreach ($buscar_historico as $item): ?>
                    <tr>
                        <td><?= $item['chamados_id_chamado'] ?></td>
                        <td><?= $item['descricao'] ?></td>
                        <td><?= $item['datahora'] ?></td>
                        <td><?= $item['status'] ?></td>
                    </tr>
                <?php endforeach ?>
            </table>

        <?php else: ?>

            <p>Desculpe, não encontramos nenhum registro.</p>

        <?php endif ?>
        

    
    

    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
</body>
</html>