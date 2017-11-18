<?php

require_once '../funcionarios/funcionarios_login.php';

verificar_login('../');

$titulo = "Registrar Setor";

$action = "inserir_setor.php";

$setor = [
    'setor'  => ''
];

$base_url = '../';

include 'layout/setor.php';