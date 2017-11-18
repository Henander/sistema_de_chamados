<?php

require_once '../funcionarios/funcionarios_login.php';

verificar_login('../');


require 'chamado_sql.php';

$id_chamado = $_GET['id_chamado'];

excluir_chamado($id_chamado);

header('Location: listar.php');
