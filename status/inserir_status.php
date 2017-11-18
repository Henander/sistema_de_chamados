<?php

require_once '../funcionarios/funcionarios_login.php';

verificar_login('../');

require 'status_sql.php';

$status      = $_POST['status'];

$dados = [
    'status'      => $status
];

inserir_status($dados);

header('Location: listar.php');



