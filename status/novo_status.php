<?php

require_once '../funcionarios/funcionarios_login.php';

verificar_login('../');

$titulo = "Registrar Status";

$action = "inserir_status.php";

$status = [
    'status'  => ''
];

$base_url = '../';

include 'layout/status.php';