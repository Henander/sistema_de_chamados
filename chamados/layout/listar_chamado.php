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

        <?php // gerente ?>
        <?php if (usuario()['id_area_tecnica'] == 1): ?>
            <?php if (count($buscar_chamados) > 0): ?>

                <table class="table table-striped">
                    <tr>
                        <th>Número do Chamado</th>
                        <th>Usuário</th>
                        <th>Área Técnica Destinada</th>
                        <th>Data e Hora</th>
                        <th>Problema</th>
                        <th>Descrição</th>
                        <th>Situação</th>
                        <th>Opções</th>
                    </tr>
                    <?php foreach ($buscar_chamados as $item): ?>
                        <tr>
                            <td><?= $item['id_chamado'] ?></td>
                            <td><?= $item['login'] ?></td>
                            <td><?= $item['nome_area_tecnica'] ?></td>
                            <td><?= $item['hora_chamado'] ?></td>
                            <td><?= $item['assunto'] ?></td>
                            <td><?= $item['descricao'] ?></td>
                            <?php if($item['fechado'] == 0): ?>
                                <td>Aberto</td>
                            <?php elseif($item['fechado'] == 2): ?>
                                <td>EM ATENDIMENTO</td>
                            <?php elseif($item['fechado'] == 3): ?>
                                <td>AGUARDANDO</td>
                                <?php else: ?>
                                <td>ENCERRADO</td>
                            <?php endif ?>
                            <td>
                                <a href="../historico/novo_historico.php?id_chamado=<?= $item['id_chamado'] ?>" title="Editar">
                                    <span class="glyphicon glyphicon-pencil"></span>Editar
                                </a>
                                <a href="../historico/listar.php?id_chamado=<?= $item['id_chamado'] ?>" title="Editar">
                                    <span class="btn btn-link"></span>Histórico
                                </a>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </table>
            <?php else: ?>
                <p>Desculpe, não encontramos nenhum registro.</p>
            <?php endif ?>
        <?php // usuario comum ?>
        <?php elseif (usuario()['id_area_tecnica'] == 4): ?>
            <?php if (count($por_usuario) > 0): ?>

                <table class="table table-striped">
                    <tr>
                        <th>Área Técnica Destinada</th>
                        <th>Data e Hora</th>
                        <th>Problema</th>
                        <th>Descrição</th>
                        <th>Situação</th>
                        <th>Opções</th>
                    </tr>
                    <?php foreach ($por_usuario as $item): ?>
                        <tr>
                            <td><?= $item['nome_area_tecnica'] ?></td>
                            <td><?= $item['hora_chamado'] ?></td>
                            <td><?= $item['assunto'] ?></td>
                            <td><?= $item['descricao'] ?></td>
                            <?php if($item['fechado'] == 0): ?>
                                <td>Aberto</td>
                            <?php elseif($item['fechado'] == 2): ?>
                                <td>EM ATENDIMENTO</td>
                            <?php elseif($item['fechado'] == 3): ?>
                                <td>AGUARDANDO</td>
                                <?php else: ?>
                                <td>ENCERRADO</td>
                            <?php endif ?>
                            <td>
                                <a href="javascript:excluir(<?= $item['id_chamado'] ?>)" title="Excluir">
                                    <span class="glyphicon glyphicon-trash"></span>Excluir
                                </a>
                                <a href="../historico/listar.php?id_chamado=<?= $item['id_chamado'] ?>" title="Historico">
                                    <span class="btn btn-link"></span>Histórico
                                </a>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </table>
            <?php else: ?>

                <p>Desculpe, não encontramos nenhum registro.</p>
            <?php endif ?>
        <?php else: ?>
            <?php if (count($por_area_tecnica) > 0): ?>

                <table class="table table-striped">
                    <tr>
                        <th>Número do Chamado</th>
                        <th>Usuário</th>
                        <th>Área Técnica Destinada</th>
                        <th>Data e Hora</th>
                        <th>Problema</th>
                        <th>Descrição</th>
                        <th>Situação</th>
                        <th>Opções</th>
                    </tr>
                    <?php foreach ($por_area_tecnica as $item): ?>
                        <tr>
                            <td><?= $item['id_chamado'] ?></td>
                            <td><?= $item['login'] ?></td>
                            <td><?= $item['nome_area_tecnica'] ?></td>
                            <td><?= $item['hora_chamado'] ?></td>
                            <td><?= $item['assunto'] ?></td>
                            <td><?= $item['descricao'] ?></td>
                            <?php if($item['fechado'] == 0): ?>
                                <td>Aberto</td>
                            <?php elseif($item['fechado'] == 2): ?>
                                <td>EM ATENDIMENTO</td>
                            <?php elseif($item['fechado'] == 3): ?>
                                <td>AGUARDANDO</td>
                                <?php else: ?>
                                <td>ENCERRADO</td>
                            <?php endif ?>
                            <td>
                                <a href="../historico/novo_historico.php?id_chamado=<?= $item['id_chamado'] ?>" title="Editar">
                                    <span class="glyphicon glyphicon-pencil"></span>Editar
                                </a>
                                <a href="../historico/listar.php?id_chamado=<?= $item['id_chamado'] ?>" title="Editar">
                                    <span class="btn btn-link"></span>Histórico
                                </a>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </table>     
            <?php else: ?>

                <p>Desculpe, não encontramos nenhum registro.</p>

            <?php endif ?>
        <?php endif ?>  
        

    
    

    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="layout/excluir.js"></script>
</body>
</html>