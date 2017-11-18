<?php

require_once '../conexao.php';

function obter_setor() {

    $sql = 'select * from setores order by setor';

    $db = conexao();
    $qry = $db->query($sql);

    return $qry->fetchAll();
}

function obter_setores($id_setor) {
    
    $sql = 'select * from setores where id_setor = :id_setor';
    
    $db = conexao();
    $qry = $db->prepare($sql);
    $qry->bindParam(':id_setor', $id_setor);
    $qry->execute();
    
    return $qry->fetch();
}


function options_setor($setor) {
    
     $itens = obter_setor();
    
    $options = ['<option>(Selecione)</option>'];
        
    foreach ($itens as $item) {
    
        if ($item['id_setor'] == $setor) $selected = ' selected';
        else $selected = '';
    
        $options[] = "<option value=\"{$item['id_setor']}\"{$selected}>{$item['setor']}</option>";
    }
    
    return join("\n", $options);
}


function inserir_setor($valor) {
    
    $sql = 'insert into setores (setor)
                values (:setor)';
    
    $db = conexao();
    $qry = $db->prepare($sql);
    
    return $qry->execute($valor);
}
    
function alterar_setor($valor) {
    
    $sql = 'update setores set
            setor = :setor
            where id_setor = :id_setor';
    
    $db = conexao();
    $qry = $db->prepare($sql);
    
    return $qry->execute($valor);
}
    
function excluir_setor($id_setor) {
    
    $sql = 'delete from setores where id_setor = :id_setor';
    
    $db = conexao();
    $qry = $db->prepare($sql);
    $qry->bindParam(':id_setor', $id_setor);
    
    return $qry->execute();
}