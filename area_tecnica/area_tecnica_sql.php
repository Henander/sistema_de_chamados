<?php

require_once '../conexao.php';

function obter_area_tecnica() {

    $sql = 'select * from areas_tecnicas order by nome_area_tecnica';

    $db = conexao();
    $qry = $db->query($sql);

    return $qry->fetchAll();
}

function obter_areas_tecnicas($id_area_tecnica) {
    
    $sql = 'select * from areas_tecnicas where id_area_tecnica = :id_area_tecnica';
    
    $db = conexao();
    $qry = $db->prepare($sql);
    $qry->bindParam(':id_area_tecnica', $id_area_tecnica);
    $qry->execute();
    
    return $qry->fetch();
}

function options_area_tecnica($area_tecnica) {

    $itens = obter_area_tecnica();

    $options = ['<option>(Selecione)</option>'];
    
    foreach ($itens as $item) {

        if ($item['id_area_tecnica'] == $area_tecnica) $selected = ' selected';
        else $selected = '';

        $options[] = "<option value=\"{$item['id_area_tecnica']}\"{$selected}>{$item['nome_area_tecnica']}</option>";
    }

    return join("\n", $options);
}


function inserir_area_tecnica($valor) {
    
    $sql = 'insert into areas_tecnicas (nome_area_tecnica)
                values (:nome_area_tecnica)';
    
    $db = conexao();
    $qry = $db->prepare($sql);
    
    return $qry->execute($valor);
}
    
function alterar_area_tecnica($valor) {
    
    $sql = 'update areas_tecnicas set
            nome_area_tecnica = :nome_area_tecnica
            where id_area_tecnica = :id_area_tecnica';
    
    $db = conexao();
    $qry = $db->prepare($sql);
    
    return $qry->execute($valor);
}
    
function excluir_area_tecnica($id_area_tecnica) {
    
    $sql = 'delete from areas_tecnicas where id_area_tecnica = :id_area_tecnica';
    
    $db = conexao();
    $qry = $db->prepare($sql);
    $qry->bindParam(':id_area_tecnica', $id_area_tecnica);
    
    return $qry->execute();
}