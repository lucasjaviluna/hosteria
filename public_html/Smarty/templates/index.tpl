<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Prueba de Smarty</title>
</head>

<body>
Prueba de funcionamiento de Smarty: <br/>
{$msj} <br />

Fecha: {$smarty.now|date_format:"%A %d de %B de %Y"} <br />
Hora: {$smarty.now|date_format: "%H:%M:%S"}
</body>
</html>
