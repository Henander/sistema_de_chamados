<?php

require_once '../funcionarios/funcionarios_login.php';

verificar_login('../');

require 'area_tecnica_sql.php';

$id_area_tecnica = $_GET['id_area_tecnica'];

$titulo = "Editando Área Técnica {$id_area_tecnica}";

$action = "alterar_area_tecnica.php?id_area_tecnica={$id_area_tecnica}";

$area_tecnica = obter_areas_tecnicas($id_area_tecnica);

//$base_url = '../';


include 'layout/area_tecnica.php'; 
