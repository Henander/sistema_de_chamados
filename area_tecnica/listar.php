<?php

require_once '../funcionarios/funcionarios_login.php';

verificar_login('../');

require 'area_tecnica_sql.php';

$titulo = 'Lista de Área Técnica Cadastrados';

$area_tecnica = obter_area_tecnica();

$base_url = '../';

include 'layout/lista_area_tecnica.php';
