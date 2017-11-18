<?php

require_once '../funcionarios/funcionarios_login.php';
verificar_login('../');

require 'historico_sql.php';

$titulo = 'Historico do Chamado';

$id_chamado = $_GET['id_chamado'];

$buscar_historico = procura_historico($id_chamado);

$url_prefix = '../';


include 'layout/listar_historico.php';
