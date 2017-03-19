<?php


$datos = $_POST['editor'];

//require_once '../conect.php';
//$sql = "Update promociones set contenido = '{$datos}' where id = 1";
//$datos = $conect->query($sql);
//
//if(!$datos) echo "error";
//else echo "OK";

//FIX hasta arreglar problema con la DB
$contenido = "";
try
{
    $handleFile = fopen('promociones.txt', 'w+');
    if(!$handleFile) throw new Exception("No se pudo abrir el archivo promociones.txt");
    if(fwrite($handleFile, $datos) === false) throw new Exception("No se pudo escribir el archivo promociones.txt");;
    fclose($handleFile);
}
catch(Exception $e)
{
    if($handleFile) fclose ($handleFile);
    echo "error";
}
echo "OK";
//FIX
?>
