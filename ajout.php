<?php

$taches=[];

if(array_key_exists("title", $_POST) && (empty($_POST["title"]) == false)
    && array_key_exists("description", $_POST) && (empty($_POST["description"]) == false)
    && array_key_exists("day", $_POST)
    && array_key_exists("month", $_POST)
    && array_key_exists("year", $_POST)
    && array_key_exists("priority", $_POST))

{
    if (title)
    {

        array_push($taches, $_POST["title"], $_POST["description"], $_POST["day"].'-'.$_POST["month"].'-'.$_POST["year"], $_POST["priority"]);

        $file = fopen("data.csv", "a" );
        fputcsv($file, $taches);
        fclose($file);

        header("Location:index.php?success=ok");
        die();

    }

    header("Location:index.php?errortitle=ok");
    die();
}


header("Location:index.php?error=ok");
die();


?>