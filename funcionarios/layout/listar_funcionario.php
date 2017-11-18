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

        <?php if (count($funcionario) > 0): ?>

            <table class="table table-striped">
                <tr>
                    <th>Nome</th>
                    <th>E-mail</th>
                    <th>Telefone</th>
                    <th>Login</th>
                    <th>Área Técnica</th>
                    <th>Setor</th>
                    <th>Opções</th>
                </tr>
                <?php foreach ($funcionario as $item): ?>
                    <tr>
                        <td><?= $item['nome'] ?></td>
                        <td><?= $item['email'] ?></td>
                        <td><?= $item['telefone'] ?></td>
                        <td><?= $item['login'] ?></td>
                        <td><?= $item['nome_area_tecnica'] ?></td>
                        <td><?= $item['setor'] ?></td>
                        <td>
                            <a href="../funcionarios/editar.php?id_funcionario=<?= $item['id_funcionario'] ?>" title="Editar">
                                <span class="glyphicon glyphicon-pencil"></span>Editar
                            </a>
                            <a href="javascript:excluir(<?= $item['id_funcionario'] ?>)" title="Excluir">
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
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="layout/excluir.js"></script>

</body>
</html>