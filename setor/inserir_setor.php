<?php

require_once '../funcionarios/funcionarios_login.php';

verificar_login('../');

require 'setor_sql.php';

$setor      = $_POST['setor'];

$dados = [
    'setor'      => $setor
];

inserir_setor($dados);

header('Location: listar.php');



