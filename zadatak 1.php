<!DOCTYPE html>
<html>
<body>
<?php
$vrijeme = getdate();
echo "{$vrijeme["mday"]}.{$vrijeme["mon"]}.{$vrijeme["year"]}.</br>";
echo "{$vrijeme["hours"]}:{$vrijeme["minutes"]}:{$vrijeme["seconds"]}";
echo "</br></br>";
echo "Day:    {$vrijeme["mday"]}</br>";
echo "Month:  {$vrijeme["mon"]}</br>";
echo "Year:   {$vrijeme["year"]}</br>";
echo "Hour:   {$vrijeme["hours"]}</br>";
echo "Minute: {$vrijeme["minutes"]}</br>";
echo "Second: {$vrijeme["seconds"]}</br>";
?>
</body>
</html>