<?php

require_once 'funcionarios_login.php';
verificar_login('../');


require 'funcionarios_sql.php';

$id_funcionario = $_GET['id_funcionario'];

excluir_funcionario($id_funcionario);

header('Location: listar.php');
