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

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Cadastrar <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="../chamados/novo_chamado.php">Chamado</a></li>
            <li><a href="../area_tecnica/novo_area_tecnica.php">Área Técnica</a></li>
            <li><a href="../setor/novo_setor.php">Setor</a></li>
            <li><a href="../status/novo_status.php">Status</a></li>
            <li><a href="../funcionarios/novo_funcionario.php">Funcioário</a></li>
            <li><a href="../area_tecnica/listar.php">Listar Área Técnica</a></li>
            <li><a href="../setor/listar.php">Listar Setores</a></li>
            <li><a href="../status/listar.php">Listar Status</a></li>
            <li><a href="../setor/listar.php">Listar Funcioários</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Histórico <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="<?= $base_url ?>cidades/listar.php">Listar</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

    <div class="container">
        <h1><?= $titulo ?></h1>

        <?php if (count($setor) > 0): ?>

            <table class="table table-striped">
                <tr>
                    <th>Setor</th>
                    <th>Opções</th>
                </tr>
                <?php foreach ($setor as $item): ?>
                    <tr>
                        <td><?= $item['setor'] ?></td>
                        <td>
                            <a href="../setor/editar_setor.php?id_setor=<?= $item['id_setor'] ?>" title="Editar">
                                <span class="glyphicon glyphicon-pencil"></span>Editar
                            </a>
                            <a href="../setor/excluir_setor.php?id_setor=<?= $item['id_setor'] ?>" title="Excluir">
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