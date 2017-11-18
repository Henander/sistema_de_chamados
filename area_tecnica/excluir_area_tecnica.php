<?php

require_once '../funcionarios/funcionarios_login.php';

verificar_login('../');

require 'area_tecnica_sql.php';

$id_area_tecnica = $_GET['id_area_tecnica'];

excluir_area_tecnica($id_area_tecnica);

header('Location: listar.php');
