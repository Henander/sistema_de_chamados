<?php

require_once 'funcionarios_login.php';
verificar_login('../');


require 'funcionarios_sql.php';

require '../area_tecnica/area_tecnica_sql.php';

$titulo = 'Lista de Funcionários';

$funcionario = obter_funcionarios();

$url_prefix = '../';


include 'layout/listar_funcionario.php';
