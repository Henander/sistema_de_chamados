<?php

require_once '../funcionarios/funcionarios_login.php';

verificar_login('../');

$titulo = "Registrar Área Técnica";

$action = "inserir_area_tecnica.php";

$area_tecnica = [
    'nome_area_tecnica'  => ''
];

$base_url = '../';

include 'layout/area_tecnica.php';