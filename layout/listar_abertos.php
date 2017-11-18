<?php

require_once 'funcionarios_login.php';
verificar_login('../');


require '../chamados/chamado_sql.php';

$titulo2 = 'Lista de Chamados em Aberto';

$chamados_aberto = buscar_chamados_abertos(usuario()['id_funcionario']);

$url_prefix = '../';


include 'layout/inicial.php';
