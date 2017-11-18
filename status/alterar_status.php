<?php

require_once '../funcionarios/funcionarios_login.php';

verificar_login('../');

require 'status_sql.php';

$id_status               = $_GET['id_status'];
$status                  = $_POST['status'];

$dados = [
    'id_status'          => $id_status,
    'status'             => $status
];

alterar_status($dados);

header('Location: listar.php');
