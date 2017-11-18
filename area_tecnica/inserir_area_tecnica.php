<?php

require_once '../funcionarios/funcionarios_login.php';

verificar_login('../');


require 'area_tecnica_sql.php';

$nome_area_tecnica      = $_POST['nome_area_tecnica'];

$dados = [
    'nome_area_tecnica'      => $nome_area_tecnica
];

inserir_area_tecnica($dados);

header('Location: listar.php');



