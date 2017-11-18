<?php

require_once '../funcionarios/funcionarios_login.php';

verificar_login('../');

require 'setor_sql.php';

$titulo = 'Lista de Setores';

$setor = obter_setor();

$base_url = '../';

include 'layout/lista_setor.php';
