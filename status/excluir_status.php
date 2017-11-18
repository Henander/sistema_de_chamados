<?php

require_once '../funcionarios/funcionarios_login.php';

verificar_login('../');

require 'status_sql.php';

$id_status = $_GET['id_status'];

excluir_status($id_status);

header('Location: listar.php');
