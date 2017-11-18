<!DOCTYPE html>
<html>

<head>

    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title><?= $titulo ?>: <?= $acao ?></title>
    <?php include '../layout/bootstrap.css.php' ?>

</head>


<body role="login">
  <div class="container" style="margin-top:70px">
  <div class="row">
    <div class="col-sm-6 col-md-4 col-sm-offset-3 col-md-offset-4">
      <div class="panel panel-default">
      
        <div class="panel-body">
          <?php if (isset($erro)): ?>
            <div class="alert alert-danger alert-dismissible">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <p><strong>Credenciais inválidas!</strong> Verifique o usuário e a senha informados e tente novamente.</p>
            </div>
          <?php endif ?>

          <form class="horizontal-form" method="post" action="entrar.php">  
            <fieldset>
              <div class="row">
                <div class="center-block"> <img class="profile-img" src="http://3rwebtech.com/logo2.png" class="img-responsive" alt=""> </div>
          
                <hr>
              </div>
              <div class="row">
                <div class="col-sm-12 col-md-10  col-md-offset-1 ">
                  <div class="form-group">
                  <label>Login:</label>
                    <div class="input-group"> <span class="input-group-addon"> <i class="glyphicon glyphicon-user"></i> </span>
                      <input class="form-control" placeholder="Usuário" id="login" name="login" 
                      type="text" autofocus>
                    </div>
                  </div>
                  <div class="form-group">
                  <label>Senha:</label>
                    <div class="input-group"> <span class="input-group-addon"> <i class="glyphicon glyphicon-lock"></i> </span>
                      <input class="form-control" placeholder="Senha" id="senha" name="senha" type="password">
                    </div>
                  </div>

                  <div class="btn-group-vertical btn-block">
                    <button class="btn btn-primary btn-lg"><?= $acao ?></button>
                    <a class="btn btn-default btn-lg" href="../index.php">Voltar</a>
                  </div>
                  
            </fieldset>
          </form>
      
        </div>
      </div>
    </div>
  </div>

    <?php include '../layout/jquery.js.php' ?>
    <?php include '../layout/bootstrap.js.php' ?>
    <script src="layout/entrar.js"></script>

</body>

</html>