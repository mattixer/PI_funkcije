<!DOCTYPE html>
<html>
<body>
<?php
$niz = "blood of my enemies";
if (strlen($niz)<10){
    echo substr($niz,0,5);
}else{
    echo substr($niz, 0, 20);
}

?>
</body>
</html>