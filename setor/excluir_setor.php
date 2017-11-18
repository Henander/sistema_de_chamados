<?php

require_once '../funcionarios/funcionarios_login.php';

verificar_login('../');

require 'setor_sql.php';

$id_setor = $_GET['id_setor'];

excluir_setor($id_setor);

header('Location: listar.php');
