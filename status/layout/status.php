<html>
<head>
    <title>Help Desk HTJ</title>
    <meta charset="utf-8">
     <link href="../css/bootstrap.css" rel="stylesheet" />
    <link href="../css/CssForms.css" rel="stylesheet" />
</head>

<body>
   <div class="navbar navbar-inverse navbar-fixed-top">
   <div class="container">
   <div class="navbar-header">
        <a href="../index.php" class="navbar-brand">Página Inicial </a>   
        </ul>
    </div>
    </div>
     </div>

<div class="container">
<div class="principal">

<br></br><br></br>
    <div class="row">
        <div class="col-md-8 col-md-offset-2 well contactform">

        <h1><?= $titulo ?></h1>

            <form  role="form" action="<?= $action ?>" method="post">
                <div class="col-md-6">
                    <label>Status</label> 
                     <input id="status" name="status" placeholder="Nome do Status" 
                     class="form-control input-md" required="" value="<?= $status['status'] ?>" type="text">
                </div>
                <br/>
                <div class="col-md-6">
                    <button class="btn btn-success" type="submit">
                        <span class="glyphicon glyphicon-send"></span>
                        Enviar
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>


</body>
      