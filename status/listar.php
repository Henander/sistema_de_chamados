<?php

require_once '../funcionarios/funcionarios_login.php';

verificar_login('../');

require 'status_sql.php';

$titulo = 'Lista de Status';

$status = obter_status();

$base_url = '../';

include 'layout/lista_status.php';
