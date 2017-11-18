<?php

require_once '../funcionarios/funcionarios_login.php';

verificar_login('../');

require 'status_sql.php';

$id_status = $_GET['id_status'];

$titulo = "Editando Status {$id_status}";

$action = "alterar_status.php?id_status={$id_status}";

$status = obtem_status($id_status);

//$base_url = '../';

include 'layout/status.php'; 
