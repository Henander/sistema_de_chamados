<?php

require_once '../funcionarios/funcionarios_login.php';

verificar_login('../');

require 'area_tecnica_sql.php';

$id_area_tecnica        = $_GET['id_area_tecnica'];
$nome_area_tecnica      = $_POST['nome_area_tecnica'];

$dados = [
    'id_area_tecnica'        => $id_area_tecnica,
    'nome_area_tecnica'      => $nome_area_tecnica
];

alterar_area_tecnica($dados);

header('Location: listar.php');
