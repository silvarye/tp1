<?php
//ini_set('display_errors', "on");
echo "<h1 style='background-color: burlywood'>TP4 : Dates</h1>";
echo "<hr>";
echo "<h2 style='color: red; text-decoration: underline;'>Exercice 1 :</h2>";
setlocale( LC_TIME, "fr_FR.utf8");

echo 'EN : '.date("l jS F Y");
echo"<br>";

echo strftime("FR : %A  %d %B %Y", time());
echo"<br>";

echo 'Date et heure : '.date("d/m/Y").' '.date("H:i");
echo"<br>";
echo 'Il est passé '. time().'s depuis les premières apparitions d\'UNIX';
echo "<hr>";
echo "<h2 style='color: red; text-decoration: underline;'>Exercice 2 :</h2>";
$date1 = new DateTime("now");
$date2 = new DateTime("1999-01-26");
echo "Date de naissance : ".strftime("%d-%m-%Y",mktime(0,0,0,01,26,1999))."<br>";
echo "Date du jour : ".strftime("%d-%m-%Y",time())."<br>";
$datediff = date_diff($date1,$date2);
$secondes = $date1->format("%U")-$date2->format("%U");
echo "Age : ".$datediff->format("%Y ans %m mois et %D jours")." = ".$datediff->days." jours = ".($datediff->days*86400)." secondes";
echo "<hr>";
echo "<h2 style='color: red; text-decoration: underline;'>Exercice 3 :</h2>";

//09 février 2020 à 08h34min35s
echo"derniere pleine lune : ";
$date1 = new DateTime("2020-02-09 08:34:35");
echo $date1->format('Y-m-d H:i:s');
echo "<br>";

echo"prochaine pleine lune : ";
$interval = new DateInterval('P29DT12H44M3S');
$date1->add($interval);
echo $date1->format('Y-m-d H:i:s');
for($i = 0 ; $i<100 ; $i++){
    $date1->add($interval);
}
echo "<br>";
echo"prochaine 100ieme pleine lune : ";
echo $date1->format('Y-m-d H:i:s');

echo "<hr>";
echo "<h2 style='color: red; text-decoration: underline;'>Exercice 4 :</h2>";
if (checkdate(02,29,1962) == true) {
    echo "La date existe </br>";
} else {
    echo "La date n'existe pas </br>";
}
echo "<hr>";
echo "<h2 style='color: red; text-decoration: underline;'>Exercice 5 :</h2>";
$date = date('d-m-Y',mktime(0,0,0,3,3,1993));
echo date('l',strtotime($date))."</br>";
echo "<hr>";
echo "<h2 style='color: red; text-decoration: underline;'>Exercice 6 :</h2>";
$year = 2020;
for ($year;$year<=2062;$year++) {
    if (checkdate(02,29,$year) == true) {
        echo $year."</br>";
    }
}
echo "<hr>";
echo "<h2 style='color: red; text-decoration: underline;'>Exercice 7 :</h2>";
$year = 2020;
for ($year;$year<=2030;$year++) {
    $date = date('d-m-Y',mktime(0,0,0,5,1,$year));
    $day = date('w',strtotime($date));
    if($day == 1 || $day == 5) {
        echo $year." : WE prolongé </br>";
    } else {
        echo $year." : WE non prolongé </br>";
    }
}