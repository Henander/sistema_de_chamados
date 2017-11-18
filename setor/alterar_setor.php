<?php

require_once '../funcionarios/funcionarios_login.php';

verificar_login('../');

require 'setor_sql.php';

$id_setor               = $_GET['id_setor'];
$setor                  = $_POST['setor'];

$dados = [
    'id_setor'          => $id_setor,
    'setor'             => $setor
];

alterar_setor($dados);

header('Location: listar.php');
