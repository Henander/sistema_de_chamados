<?php

require_once '../funcionarios/funcionarios_login.php';

verificar_login('../');


require '../status/status_sql.php';

$titulo = "Editar Chamado";


$action = "editar_chamado.php";

date_default_timezone_set('America/Sao_Paulo');

$id_chamado = $_GET['id_chamado'];

$chamado = [
    'id_chamado'        => $id_chamado,
    'id_status'         => ''
];

$options_status = options_status($chamado['id_status']);

$base_url = '../';

include 'layout/historico.php';