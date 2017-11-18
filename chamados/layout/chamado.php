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
                    <label>Usuário</label> 
                     <input id="usuario" name="usuario" placeholder="" class="form-control input-md" 
                     value="<?= $chamado['login'] ?>" required="" type="text" readonly="readonly">
					 
					 <label>Email</label> 
                     <input type="email" id="email" name="email" class="form-control" 
                     value="<?= $chamado['email'] ?>" required readonly="readonly">
                 
                    <label>Assunto</label> 
                    <input type="text" id="assunto" name="assunto" class="form-control" 
                    value="<?= $chamado['assunto'] ?>" required >
					
					 <label>Área Técnica</label> 
                     <select class="form-control" name="id_area_tecnica" id="id_area_tecnica">
                     <?= $options_area_tecnica ?>
                    </select>

					 <label>Data e Hora</label> 
					 <br/>
                     <input type="text" id="data_hora" name"data_hora" readonly="readonly" 
                     value='<?= $chamado['data'] ?>' >

					
                </div>
                <div class="col-md-6">
                	<label>Descrição do Problema</label> 
                    <textarea class="form-control input-lg" id="descricao" name="descricao" rows="10"></textarea>
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