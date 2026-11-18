<?php
declare(strict_types=1);

//fecha fija de expiración (fecha pasada)
header("Expires: Sun, 31 Jan 2021 23:59:59 GMT");
$now = time();
//expira en 3 horas desde ahora
$tresHorasDespues = gmdate("D, d M Y H:i:s", $now +3*60*60). " GMT";
header("Expires: $tresHorasDespues");
