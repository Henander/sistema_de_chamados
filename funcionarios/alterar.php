<?php

require_once 'funcionarios_login.php';
verificar_login('../');


require 'funcionarios_sql.php';

$id_funcionario     = $_GET['id_funcionario'];
$nome               = $_POST['nome'];
$email              = $_POST['email'];
$telefone           = $_POST['telefone'];
$login              = $_POST['login'];
$senha              = $_POST['senha'];
$id_area_tecnica    = $_POST['id_area_tecnica'];
$id_setor           = $_POST['id_setor'];


$dados = [
    'id_funcionario'        => $id_funcionario,
    'nome'                  => $nome,
    'email'                 => $email,
    'telefone'              => $telefone,
    'login'                 => $login,
    'senha'                 => $senha,
    'id_area_tecnica'       => $id_area_tecnica,
    'id_setor'              => $id_setor
];

alterar_funcionario($dados);

header('Location: listar.php');
