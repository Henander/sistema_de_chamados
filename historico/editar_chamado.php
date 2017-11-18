<?php

require_once '../funcionarios/funcionarios_login.php';
verificar_login('../');


require 'historico_sql.php';

$descricao          = $_POST['descricao'];
$id_chamado         = $_POST['id_chamado'];
$id_status          = $_POST['id_status'];

function verifica_status($id){
    if($id == 1){
        $f = 0;
    }
    elseif($id == 2){
        $f = 2;
    }
    elseif($id == 3){
        $f = 3;
    }
    else{
        $f = 1;
    }

    return $f;

}

$fechado = verifica_status($id_status);

$dados = [
    'descricao'         => $descricao,
    'id_chamado'        => $id_chamado,
    'id_status'         => $id_status
];

$update_fechado = [
    'fechado'           => $fechado,
    'id_chamado'        => $id_chamado
];

inserir_historico($dados);

alterar_fechado($update_fechado);

header('Location: ../index.php');
