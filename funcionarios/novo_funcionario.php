<?php

require_once '../funcionarios/funcionarios_login.php';

verificar_login('../');


require '../setor/setor_sql.php';

require '../area_tecnica/area_tecnica_sql.php';

$titulo = "Cadastrar Funcionário";

$action = "inserir.php";

$funcionario = [
    'nome'                  => '',
    'email'                 => '',
    'telefone'              => '',
    'login'                 => '',
    'senha'                 => '',
    'id_area_tecnica'       => '',
    'id_setor'              => ''
];

$options_setor = options_setor($funcionario['id_setor']);

$options_area_tecnica = options_area_tecnica($funcionario['id_area_tecnica']);

$url_prefix = '../';

include 'layout/cadastro_funcionario.php';