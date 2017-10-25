<!DOCTYPE html>
<html>
<body>
<?php
require "funk.php";
$ocjene = array ( "Ivica" => array ("Hrvatski" => 4,
                                    "Matematika" => 5,
                                    "Povijest" => 4),

                    "Tomica" => array("Hrvatski" => 5,
                                      "Matematika" => 5,
                                      "Povijest" => 4),

                    "Perica" => array("Hrvatski" => 5,
                                      "Matematika" => 3,
                                      "Povijest" => 4)   );
echo "Ivičin prosjek: ",prosjekucenika($ocjene["Ivica"]),"</br>";
prosjekpredmeta($ocjene);
?>
</body>
</html>