<?php



$toutesLesTaches = [];

$file = fopen("data.csv","r");

while(! feof($file))
{
    $task = fgetcsv($file);
    if($task != false) {
        $toutesLesTaches[] = $task ;
    }
}

fclose($file);

$tacheQuejeGarde = [];

for ($i = 0 ; $i < count($toutesLesTaches) ; $i++) {
    if(in_array($i, $_POST["delete"])) {

    } else {
        $tacheQuejeGarde[] = $toutesLesTaches[$i];
    }

}

$file = fopen("data.csv","w");

for ($i = 0 ; $i < count($tacheQuejeGarde) ; $i++) {
    fputcsv($file, $tacheQuejeGarde[$i]);
}

fclose($file);

header("Location:index.php");
die();

