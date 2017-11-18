<?php

require_once '../funcionarios/funcionarios_login.php';
verificar_login('../');


require 'chamado_sql.php';

$assunto            = $_POST['assunto'];
$descricao          = $_POST['descricao'];
$fechado            = 0;
$id_funcionario     = usuario()['id_funcionario'];
$id_area_tecnica    = $_POST['id_area_tecnica'];

$dados = [
    'assunto'           => $assunto,
    'descricao'         => $descricao,
    'fechado'           => $fechado,
    'id_funcionario'    => $id_funcionario,
    'id_area_tecnica'   => $id_area_tecnica
];

inserir_chamado($dados);

header('Location: listar.php');
