<html>
<head>
  <title>Cadatro de Funcionários</title>
  <meta charset="utf-8">
  <link href="../css/bootstrap.css" rel="stylesheet" />
  <link href="../css/CssForms.css" rel="stylesheet" />
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
  <div class="principal">


  
  <h1 class="col-md-8 col-md-offset-4"><?= $titulo ?></h1>
  <br/>
  <br/>
  <br/>
  <br/>


<form id="formulario" class="form-horizontal" action="<?= $action ?>" method="post" onsubmit="return validar()">

    <fieldset>

    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="nome">Nome:</label>  
      <div class="col-md-4">
      <input id="nome" name="nome" placeholder="nome" class="form-control input-md" 
      value="<?= $funcionario['nome'] ?>" required type="text"> 
      </div>
    </div>

    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="email">Email:</label>  
      <div class="col-md-4">
      <input type="email" name="email" placeholder="email" class="form-control" value="<?= $funcionario['email'] ?>" required>
      </div>
    </div>

    <div class="form-group">
      <label class="col-md-4 control-label" for="telefone">Telefone:</label>  
      <div class="col-md-4">
      <input id="telefone" name="telefone" placeholder="digite um telefone" class="form-control input-md" 
      value="<?= $funcionario['telefone'] ?>" required type="text"> 

    </div>
    </div>


    <div class="form-group">
      <label class="col-md-4 control-label">Setor:</label>
      <div class="col-md-4 selectContainer">
        <select class="form-control" name="id_setor" id="id_setor" required="required">
          <?= $options_setor ?>
        </select>
      </div>
    </div>
    

    <div class="form-group">
      <label class="col-md-4 control-label" for="login">Login:</label>  
      <div class="col-md-4">
      <input id="login" name="login" placeholder="digite um login" class="form-control input-md" 
      value="<?= $funcionario['login'] ?>" required type="text">  
      </div>
    </div>

    <div class="form-group">
      <label class="col-md-4 control-label" for="senha"> Senha:</label>  
      <div class="col-md-4">
      <input id="senha" name="senha" placeholder="digite uma senha" class="form-control input-md" 
      value="<?= $funcionario['senha'] ?>" required type="password">
      </div>
    </div>

    <div class="form-group">
      <label class="col-md-4 control-label" for="confirma_senha"> Confirmar senha:</label>  
      <div class="col-md-4">
      <input id="confirma_senha" name="confirma_senha" placeholder="confirme sua senha" 
        class="form-control input-md" type="password">
      </div>
    </div> 

    <div class="form-group">
      <label class="col-md-4 control-label">Área Técnica:</label>
      <div class="col-md-4 selectContainer">
        <select class="form-control" name="id_area_tecnica" id="id_area_tecnica" required="required">
          <?= $options_area_tecnica ?>
        </select>
      </div>
    </div>

    <!-- Button -->
    <div class="form-group">
      <div class="span7 text-center col-md-4 col-md-offset-4">
        <button id="enviar" name="enviar" class="btn btn-primary">Cadastrar</button>
      </div>
    </div>

    </fieldset>
  </form>

  <script src="layout/validar_senha.js"></script>

</body>
</html>
