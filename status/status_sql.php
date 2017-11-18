<?php

require_once '../conexao.php';

function obter_status() {

    $sql = 'select * from status order by status';

    $db = conexao();
    $qry = $db->query($sql);

    return $qry->fetchAll();
}

function obtem_status($id_status) {
    
    $sql = 'select * from status where id_status = :id_status';
    
    $db = conexao();
    $qry = $db->prepare($sql);
    $qry->bindParam(':id_status', $id_status);
    $qry->execute();
    
    return $qry->fetch();
}

function options_status($status) {
    
     $itens = obter_status();
    
    $options = ['<option>(Selecione)</option>'];
        
    foreach ($itens as $item) {
    
        if ($item['id_status'] == $status) $selected = ' selected';
        else $selected = '';
    
        $options[] = "<option value=\"{$item['id_status']}\"{$selected}>{$item['status']}</option>";
    }
    
    return join("\n", $options);
}


function inserir_status($valor) {
    
    $sql = 'insert into status (status)
                values (:status)';
    
    $db = conexao();
    $qry = $db->prepare($sql);
    
    return $qry->execute($valor);
}
    
function alterar_status($valor) {
    
    $sql = 'update status set
            status = :status
            where id_status = :id_status';
    
    $db = conexao();
    $qry = $db->prepare($sql);
    
    return $qry->execute($valor);
}
    
function excluir_status($id_status) {
    
    $sql = 'delete from status where id_status = :id_status';
    
    $db = conexao();
    $qry = $db->prepare($sql);
    $qry->bindParam(':id_status', $id_status);
    
    return $qry->execute();
}