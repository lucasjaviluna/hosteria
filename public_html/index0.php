<?php
//error_reporting(E_ALL);
//ini_set('display_errors', TRUE);
require_once('Smarty.php');

if(!isset($_GET['estilo'])) $page = 'index.html';
else $page = 'index2.html';

if(isset($_GET['target'])){
    switch ($_GET['target']){
      case 'home': $page = 'home.html'; break;
      case 'servicios': $page = 'servicios.html'; break; 
      case 'promociones': $page = 'promociones.html'; break;     
      case 'galeria': $page = 'galeria3.html'; break; 
      case 'contacto': $page = 'contacto.html'; break; 
      
    }
}

//PAra cargar los datos de las promociones desde la BD
/*if($page === 'promociones.html'){
    print_r($_SERVER);
    
    die();
    
    require_once 'conect.php';
    $sql = "Select * from promociones";
    $datos = $conect->query($sql)->fetch(PDO::FETCH_ASSOC);
    
    $contenido = utf8_encode($datos['contenido']);
    $smarty->assign('contenido_promociones',$contenido);
}*/

$smarty->display($page);

//echo "Cargado {$page}";
//echo "Cargado el index.php";

?>
