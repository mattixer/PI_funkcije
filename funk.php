<?php
function prosjekucenika($ucenik){
    $prosjek = 0; $ctr=0;
    foreach ($ucenik as $value){
        $prosjek += $value;
        $ctr++;
    }
    return ($prosjek/$ctr);
}

function prosjekpredmeta($predmeti){
    $hrvatski = 0;
    $matematika = 0;
    $povijest = 0;
    $ctr = 0;
    foreach ($predmeti as $item){
        $hrvatski += $item["Hrvatski"];
        $matematika += $item["Matematika"];
        $povijest += $item["Povijest"];
        $ctr++;
    }
	echo "Hrvatski: ",$hrvatski/$ctr,"</br>";
	echo "Matematika: ",$matematika/$ctr,"</br>";
	echo "Povijest: ",$povijest/$ctr,"</br>";
}