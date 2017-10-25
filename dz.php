<!DOCTYPE html>
<html>
<body>
<?php
$pocetakvremena = mktime(0,0,0,1,1,2000);
$sada = getdate();
$sati = (($sada["year"]-date("Y",$pocetakvremena))*365.242199*24)+(($sada["mon"]-date("n",$pocetakvremena))*30.4368499*24)+(($sada["mday"]-date("j",$pocetakvremena))*24)+$sada["hours"];
echo "Od ",date("j.n.Y.", $pocetakvremena)," do sada, proteklo je ",$sati," sati.";
?>
</body>
</html>