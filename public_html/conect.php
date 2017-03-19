<?php

//Conexion a la base de datos hosteria por medio de PDO
if ($_SERVER['REMOTE_ADDR'] == '127.0.0.1') {//localhost
    $username   = 'root';
    $passwd     = '';
    $host       = 'localhost';
    $dbname     ='hosteria';
} else {
    $username   = 'hosteria_userhsb';
    $passwd     = 'cxhsb2014';
    $host       = 'rock';
    $dbname     = 'hosteria_hosteria';
}
try {
    $string = "mysql:host={$host};dbname={$dbname}";
    $conect = new PDO($string, $username, $passwd);
    $conect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
    echo "Ha ocurrido un error en la operaci&oacute;n. Por favor int&eacute;ntelo m&aacute;s tarde.<br>";
    echo sprintf("%s -> %s",$e->getMessage(),$e->getTraceAsString());
    //mail("lucasjaviluna@gmail.com","Error Hosteria", sprintf("%s -> %s",$e->getMessage(),$e->getTraceAsString()));
    exit();
}
?>
