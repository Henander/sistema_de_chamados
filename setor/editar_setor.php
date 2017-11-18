<?php

require_once '../funcionarios/funcionarios_login.php';

verificar_login('../');

require 'setor_sql.php';

$id_setor = $_GET['id_setor'];

$titulo = "Editando Setor {$id_setor}";

$action = "alterar_setor.php?id_setor={$id_setor}";

$setor = obter_setores($id_setor);

//$base_url = '../';

include 'layout/setor.php'; 
