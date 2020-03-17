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

include "TP5-PHP-Duplouy.php";
