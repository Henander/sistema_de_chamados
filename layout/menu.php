<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php">Página Inicial</a>
    </div>


    <?php if (usuario_logado()): ?>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
      <?php if (usuario()['id_area_tecnica'] == 1): ?>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Cadastrar <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="area_tecnica/novo_area_tecnica.php">Área Técnica</a></li>
            <li><a href="setor/novo_setor.php">Setor</a></li>
            <li><a href="status/novo_status.php">Status</a></li>
            <li><a href="funcionarios/novo_funcionario.php">Funcioário</a></li>
            <li><a href="area_tecnica/listar.php">Listar Área Técnica</a></li>
            <li><a href="setor/listar.php">Listar Setores</a></li>
            <li><a href="status/listar.php">Listar Status</a></li>
            <li><a href="funcionarios/listar.php">Listar Funcioários</a></li>
          </ul>
        </li>
        <?php endif ?>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Chamados <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="chamados/novo_chamado.php">Novo</a></li>
            <li><a href="chamados/listar.php">Listar Chamados</a></li>
          </ul>
        </li>
      </ul>
      <?php endif ?>

      <ul class="nav navbar-nav navbar-right">
        <?php if (!usuario_logado()): ?>
        <li><a href="funcionarios/entrar.php">
          <span class="glyphicon glyphicon-user"></span>
          Entrar
        </a></li>
        <?php else: ?>
        <li><a href="funcionarios/sair.php">
          <span class="glyphicon glyphicon-off"></span>
          Sair (<?= usuario()['login'] ?>)
        </a></li>
        <?php endif ?>
      </ul>
      
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>