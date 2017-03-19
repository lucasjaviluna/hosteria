<?php

session_start();

$str = md5(microtime());
$aux = substr($str, 0, 6);

$_SESSION['captcha'] = $aux;
//$captcha = imagecreatefromgif("bgcaptcha1.gif");
$captcha = imagecreatefrompng("images/bgcaptcha2.png");
$colText = imagecolorallocate($captcha, 0, 0, 0);
imagestring($captcha, 5, 17, 7, $_SESSION['captcha'], $colText);

//header("Content-type: image/gif");
header("Content-type: image/png");
//imagegif($captcha);
imagepng($captcha);
imagedestroy($captcha);

?>
