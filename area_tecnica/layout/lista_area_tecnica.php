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

    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

    <div class="container">
        <h1><?= $titulo ?></h1>

        <?php if (count($area_tecnica) > 0): ?>

            <table class="table table-striped">
                <tr>
                    <th>Nome Área Técnica</th>
                    <th>Opções</th>
                </tr>
                <?php foreach ($area_tecnica as $item): ?>
                    <tr>
                        <td><?= $item['nome_area_tecnica'] ?></td>
                        <td>
                            <a href="../area_tecnica/editar_area_tecnica.php?id_area_tecnica=<?= $item['id_area_tecnica'] ?>" title="Editar">
                                <span class="glyphicon glyphicon-pencil"></span>Editar
                            </a>
                            <a href="../area_tecnica/excluir_area_tecnica.php?id_area_tecnica=<?= $item['id_area_tecnica'] ?>" title="Excluir">
                                <span class="glyphicon glyphicon-trash"></span>Excluir
                            </a>
                        </td>
                    </tr>
                <?php endforeach ?>
            </table>

        <?php else: ?>

            <p>Desculpe, não encontramos nenhum registro.</p>

        <?php endif ?>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
</body>
</html>