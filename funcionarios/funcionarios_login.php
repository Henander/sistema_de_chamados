<?php

session_start();

function usuario_logado() {
    return (isset($_SESSION['autenticado']) and $_SESSION['autenticado'] === true);
}

function verificar_login($url_prefix = '') {
    if (!usuario_logado()) {
        header("Location: funcionarios/entrar.php");
    }
}

function usuario() {
    if (usuario_logado()) {
        return [
            'id_funcionario'    =>  $_SESSION['id_funcionario'],
            'email'             =>  $_SESSION['email'],
            'usuario'           =>  $_SESSION['usuario'],
            'login'             =>  $_SESSION['login'],
            'id_area_tecnica'   =>  $_SESSION['id_area_tecnica'],
            'id_setor'          =>  $_SESSION['id_setor']
        ];
    }
    else {
        return false;
    }
}
