
<?php
date_default_timezone_set("America/Rosario");
setlocale(LC_TIME,"es_AR.utf8");
define('SMARTY_DIR_BASE','Smarty/');
define('SMARTY_CONFIG', SMARTY_DIR_BASE. 'configs/');
define('SMARTY_CACHE',SMARTY_DIR_BASE.'cache/');
define('SMARTY_TEMPLATES',SMARTY_DIR_BASE.'templates/');
define('SMARTY_TEMPLATES_C',SMARTY_DIR_BASE.'templates_c/');
define('SMARTY_LIBS',SMARTY_DIR_BASE.'libs/');
require(SMARTY_LIBS. 'Smarty.class.php');

$smarty = new Smarty;

$smarty->cache_dir= SMARTY_CACHE;
$smarty->config_dir= SMARTY_CONFIG;
$smarty->template_dir= SMARTY_TEMPLATES;
$smarty->compile_dir= SMARTY_TEMPLATES_C;
$smarty->caching = true;

//$smarty->assign('msj',"HOLA MUNDO");

//$smarty->display('contacto.html');
//class Smarty{
//}

?>
