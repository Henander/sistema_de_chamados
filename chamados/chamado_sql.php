<?php

require_once '../conexao.php';

function buscar_chamados() {

    $sql = 'select * 
            from chamados c
            left join funcionarios f on f.id_funcionario = c.id_funcionario
            left join areas_tecnicas a on a.id_area_tecnica = c.id_area_tecnica
            order by fechado';

    $db = conexao();

    try{
        $qry = $db->query($sql);
    
        return $qry->fetchAll();
    }
    catch (PDOException $e) {
        
        $mensagem = 'Não foi possível consultar os chamados.';
        $erro = $e->getMessage();
        
        $url_prefix = '../';
        include '../layout/erro.php';
        exit();
    }
}


function buscar_chamados_usuario($id_funcionario){
    
    $sql = 'select * 
            from chamados c
            left join areas_tecnicas a on a.id_area_tecnica = c.id_area_tecnica
            where c.id_funcionario = :id_funcionario';
    
    $db = conexao();
                
                    
    try {
        $qry = $db->prepare($sql);
        $qry->bindParam(':id_funcionario', $id_funcionario);
        $qry->execute();
                    
        return $qry->fetchAll();
    }
    catch (PDOException $e) {
                    
        $mensagem = 'Não foi possível consultar os chamados.';
        $erro = $e->getMessage();
                    
        $url_prefix = '../';
        include '../layout/erro.php';
        exit();
    }
}

function buscar_chamados_area_tecnica($id_area_tecnica){
    
    $sql = 'select * 
            from chamados c
            left join areas_tecnicas a on a.id_area_tecnica = c.id_area_tecnica
            left join funcionarios f on f.id_funcionario = c.id_funcionario
            where c.id_area_tecnica = :id_area_tecnica';
    
    $db = conexao();
                
                    
    try {
        $qry = $db->prepare($sql);
        $qry->bindParam(':id_area_tecnica', $id_area_tecnica);
        $qry->execute();
                    
        return $qry->fetchAll();
    }
    catch (PDOException $e) {
                    
        $mensagem = 'Não foi possível consultar os chamados.';
        $erro = $e->getMessage();
                    
        $url_prefix = '../';
        include '../layout/erro.php';
        exit();
    }
}



function inserir_chamado($valores) {

    $sql = 'insert into chamados (hora_chamado, assunto, descricao,fechado, id_funcionario, id_area_tecnica)
            values (CURRENT_TIMESTAMP, :assunto, :descricao, :fechado, :id_funcionario, :id_area_tecnica)';

    $db = conexao();

    try{
        $qry = $db->prepare($sql);
        
        return $qry->execute($valores);
    }
    catch (PDOException $e) {
        
        $mensagem = 'Não foi possível inserir o chamado.';
        $erro = $e->getMessage();
        
        $url_prefix = '../';
        include '../layout/erro.php';
        exit();
    }
    
}

function alterar_contato($valores) {

    $sql = 'update contatos set
            nome = :nome,
            email = :email,
            cidade_id = :cidade_id
            where id = :id';

    $db = conexao();
    $qry = $db->prepare($sql);

    return $qry->execute($valores);
}

function excluir_chamado($id_chamado) {

    $sql = 'delete from chamados where id_chamado = :id_chamado';

    $db = conexao();
    $qry = $db->prepare($sql);
    $qry->bindParam(':id_chamado', $id_chamado);

    return $qry->execute();
}
