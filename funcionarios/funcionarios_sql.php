<?php

require_once '../conexao.php';


function obter_funcionarios() {
    
    $sql = 'select *
            from funcionarios f
            left join areas_tecnicas a on a.id_area_tecnica = f.id_area_tecnica
            left join setores s on s.id_setor = f.id_setor
            order by f.nome';
    
    $db = conexao();
    
    try {
        $qry = $db->query($sql);
        return $qry->fetchAll();
    }
    catch (PDOException $e) {
    
        $mensagem = 'Não foi possível consultar o contato.';
        $erro = $e->getMessage();
    
        $url_prefix = '../';
        include '../layout/erro.php';
        exit();
    }
}


function obter_funcionario($id_funcionario) {
    
    $sql = 'select *
            from funcionarios f
            left join areas_tecnicas a on a.id_area_tecnica = f.id_area_tecnica
            left join setores s on s.id_setor = f.id_setor
            where f.id_funcionario = :id_funcionario';
    
    $db = conexao();

    
    try {
        $qry = $db->prepare($sql);
        $qry->bindParam(':id_funcionario', $id_funcionario);
        $qry->execute();
    
        return $qry->fetch();
    }
    catch (PDOException $e) {
    
        $mensagem = 'Não foi possível consultar o funcionario.';
        $erro = $e->getMessage();
    
        $url_prefix = '../';
        include '../layout/erro.php';
        exit();
    }
}


function obter_usuario($login) {

    $sql = 'select * from funcionarios where login = :login';

    $db = conexao();

    try{
        $qry = $db->prepare($sql);
        $qry->bindParam(':login', $login);
        $qry->execute();
    
        return $qry->fetch();
    }
    catch (PDOException $e) {
        
        $mensagem = 'Não foi possível localizar o usuario.';
        $erro = $e->getMessage();
        
        $url_prefix = '../';
        include '../layout/erro.php';
        exit();
    }

    
}

function inserir_funcionario($valores) {

    

    $sql = 'insert into funcionarios (nome, email, telefone, login, senha, id_area_tecnica, id_setor)
            values (:nome, :email, :telefone, :login, :senha, :id_area_tecnica, :id_setor)';

    $db = conexao();

    try{
        $qry = $db->prepare($sql);
        return $qry->execute($valores);
    }
    catch (PDOException $e) {
        
        $mensagem = 'Não foi possível inserir o funcionario.';
        $erro = $e->getMessage();
        
        $url_prefix = '../';
        include '../layout/erro.php';
        exit();
    }
}

function alterar_funcionario($valores) {


    $sql = 'update funcionarios set
            nome                    = :nome,
            email                   = :email,
            telefone                = :telefone,
            login                   = :login,
            senha                   = :senha,
            id_area_tecnica         = :id_area_tecnica,
            id_setor                = :id_setor
            where id_funcionario    = :id_funcionario';

    $db = conexao();

    try{
        $qry = $db->prepare($sql);
        
        return $qry->execute($valores);
    }
    catch (PDOException $e) {
        
        $mensagem = 'Não foi possível alterar o funcionario.';
        $erro = $e->getMessage();
        
        $url_prefix = '../';
        include '../layout/erro.php';
        exit();
    }
    
    
}

function excluir_funcionario($id_funcionario) {

    $sql = 'delete from funcionarios where id_funcionario = :id_funcionario';

    $db = conexao();

    try{
        $qry = $db->prepare($sql);
        $qry->bindParam(':id_funcionario', $id_funcionario);
        return $qry->execute();
    }
    catch (PDOException $e) {
        
        $mensagem = 'Não foi possível excluir o funcionario.';
        $erro = $e->getMessage();
        
        $url_prefix = '../';
        include '../layout/erro.php';
        exit();
    }

    
}
