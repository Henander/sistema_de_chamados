<?php

function conexao() {

    $driver   = 'mysql';
    $servidor = 'localhost';
    $banco    = 'htj';
    $usuario  = 'root';
    $senha    = '';

    $dsn = "{$driver}:host={$servidor};dbname={$banco}";

    try{

        $pdo = new PDO($dsn, $usuario, $senha);
        
        $pdo->setAttribute(PDO::ATTR_ERRMODE,
                               PDO::ERRMODE_EXCEPTION);
        
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,
                            PDO::FETCH_ASSOC);
        
    }
    catch (PDOException $e) {
        
        $mensagem = 'Não foi possível conectar-se ao banco de dados.';
        $erro = $e->getMessage();
        
        include 'layout/erro.php';
        exit();
    }

   
    return $pdo;
}
