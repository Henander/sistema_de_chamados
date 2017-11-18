<?php

require_once 'funcionarios_login.php';
verificar_login('../');


require 'funcionarios_sql.php';
require '../area_tecnica/area_tecnica_sql.php';
require '../setor/setor_sql.php';

$id_funcionario = $_GET['id_funcionario'];

$titulo = "Editando o Funcionario";

$action = "alterar.php?id_funcionario={$id_funcionario}";

$funcionario = obter_funcionario($id_funcionario);

$options_setor = options_setor($funcionario['id_setor']); 

$options_area_tecnica = options_area_tecnica($funcionario['id_area_tecnica']);

$url_prefix = '../';

include 'layout/cadastro_funcionario.php';
