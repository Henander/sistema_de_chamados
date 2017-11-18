<?php

require_once '../funcionarios/funcionarios_login.php';

verificar_login('../');


require '../area_tecnica/area_tecnica_sql.php';

$titulo = "Registrar Chamado";


$action = "inserir_chamado.php";

date_default_timezone_set('America/Sao_Paulo');

$chamado = [
    'id_funcionario'    => usuario()['id_funcionario'],
    'login'             => usuario()['login'],
    'email'             => usuario()['email'],
    'assunto'           => '',
    'id_area_tecnica'   => '',
    'data'              => date("d/m/Y H:i")
];

$options_area_tecnica = options_area_tecnica($chamado['id_area_tecnica']);

$base_url = '../';

include 'layout/chamado.php';