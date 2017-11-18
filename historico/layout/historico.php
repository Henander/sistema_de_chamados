 <html>
<head>
    <title><?= $titulo ?></title>

    <meta charset="utf-8">
    
    <link href="../css/bootstrap.css" rel="stylesheet" />
    <link href="css/CssForms.css" rel="stylesheet" />
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

<h1 class="col-md-6 col-md-offset-2"><?= $titulo ?></h1>
    <div class="row">
        <div class="col-md-8 col-md-offset-2 well contactform">
            <form  role="form" action="<?= $action ?>" method="post">
                <div class="col-md-6">
                    <label>Número do Chamado</label> 
                     <input id="id_chamado" name="id_chamado" class="form-control input-md" 
                     value="<?= $chamado['id_chamado'] ?>" required="" type="text" readonly="readonly">

                    <br/>
                    <label>Status</label> 
                    <select class="form-control" name="id_status" id="id_status">
                    <?= $options_status ?>
                   </select>
                
					
                </div>
                <div class="col-md-6">
                	<label>Descrição do Problema</label> 
                    <textarea class="form-control input-lg" id="descricao" name="descricao" rows="12"></textarea>
                </div>
                <div class="col-md-6">
                    <button class="btn btn-success" type="submit">
                        <span class="glyphicon glyphicon-send"></span>
                        Enviar
                    </button>
                    <button id="cancelar" name="cancelar" class="btn btn-warning">Cancelar</button>
                </div>

            </form>
        </div>
    </div>
</div>