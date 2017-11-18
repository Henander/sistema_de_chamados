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

function procura_historico($id_chamado){
    $sql = 'select * 
    from historicos h
    left join status s on s.id_status = h.status_id_status
    where h.chamados_id_chamado = :id_chamado';

    $db = conexao();
            
                
    try {
    $qry = $db->prepare($sql);
    $qry->bindParam(':id_chamado', $id_chamado);
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


function buscar_chamados_usuario($id_funcionario){
    
    $sql = 'select * 
            from chamados c
            left join areas_tecnicas a on a.id_area_tecnica = c.id_area_tecnica
            where c.id_funcionario = :id_funcionario AND c.fechado = 0';
    
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
            where c.id_area_tecnica = :id_area_tecnica AND c.fechado = 0';
    
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



function inserir_historico($valores) {

    $sql = 'insert into historicos (descricao, datahora, chamados_id_chamado, status_id_status)
            values (:descricao, CURRENT_TIMESTAMP, :id_chamado, :id_status)';

    $db = conexao();

    try{
        $qry = $db->prepare($sql);
        
        return $qry->execute($valores);
    }
    catch (PDOException $e) {
        
        $mensagem = 'Não foi possível inserir o historico.';
        $erro = $e->getMessage();
        
        $url_prefix = '../';
        include '../layout/erro.php';
        exit();
    }
    
}

function alterar_fechado($valor) {

    $sql = 'update chamados set
            fechado = :fechado
            where id_chamado = :id_chamado';

    $db = conexao();
    $qry = $db->prepare($sql);

    return $qry->execute($valor);
}

