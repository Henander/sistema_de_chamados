<?php

require_once '../funcionarios/funcionarios_login.php';
verificar_login('../');

require 'chamado_sql.php';

$titulo = 'Lista de Chamados';


$por_usuario = buscar_chamados_usuario(usuario()['id_funcionario']);

$por_area_tecnica = buscar_chamados_area_tecnica(usuario()['id_area_tecnica']);

//var_dump($por_usuario);

//var_dump($por_area_tecnica);

$buscar_chamados = buscar_chamados();

$url_prefix = '../';


include 'layout/listar_chamado.php';
