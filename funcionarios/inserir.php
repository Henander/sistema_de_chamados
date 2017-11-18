<?php

require_once 'funcionarios_login.php';
verificar_login('../');


require 'funcionarios_sql.php';

$nome               = $_POST['nome'];
$email              = $_POST['email'];
$telefone           = $_POST['telefone'];
$login              = $_POST['login'];
$senha              = $_POST['senha'];
$id_area_tecnica    = $_POST['id_area_tecnica'];
$id_setor           = $_POST['id_setor'];

$dados = [
    'nome'                  => $nome,
    'email'                 => $email,
    'telefone'              => $telefone,
    'login'                 => $login,
    'senha'                 => $senha,
    'id_area_tecnica'       => $id_area_tecnica,
    'id_setor'              => $id_setor
];

inserir_funcionario($dados);

header('Location: listar.php');
