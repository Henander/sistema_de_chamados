<?php

require_once 'funcionarios_sql.php';

if (isset($_POST['login']) and isset($_POST['senha'])) {

    $dados = obter_usuario($_POST['login']);

    if ($_POST['senha'] == $dados['senha']) {

        session_start();

        $_SESSION['autenticado']        = true;
        $_SESSION['usuario']            = $dados['nome'];
        $_SESSION['email']              = $dados['email'];
        $_SESSION['login']              = $dados['login'];
        $_SESSION['id_funcionario']     = $dados['id_funcionario'];
        $_SESSION['id_area_tecnica']    = $dados['id_area_tecnica'];
        $_SESSION['id_setor']           = $dados['id_setor'];

        header('Location: ../index.php');
    }
    else {

        $erro = true;
    }
}

$titulo = 'Chamados';
$acao = 'Entrar';

include 'layout/entrar.php';