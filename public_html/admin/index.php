<?php
error_reporting(E_ALL);
ini_set('display_errors', TRUE);
require_once('../Smarty.php');

$page = 'templates/adm_promociones.html';
$smarty->clearCache('templates/adm_promociones.html');

//PAra cargar los datos de las promociones desde la BD
//require_once '../conect.php';
//$sql = "Select * from promociones";
//$datos = $conect->query($sql)->fetch(PDO::FETCH_ASSOC);
//$contenido = $datos['contenido'];

//FIX hasta arreglar problema con la DB
$contenido = "";
$handleFile = fopen('promociones.txt', 'r');
while(!feof($handleFile))
{
    $contenido.= fgets($handleFile);
}
fclose($handleFile);
//FIX

$smarty->assign('contenido',$contenido);

$smarty->display($page);

?>
