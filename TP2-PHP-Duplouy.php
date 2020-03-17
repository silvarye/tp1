<?php
//ini_set('display_errors', "on");
//----------------------------------------------------------------------------------------------------------------------------
echo "<h1 style='background-color: burlywood'>TP2 : Operateurs, Tableaux et Structures de contrôle</h1>";
echo "<hr>";
echo "<h2 style='color: red; text-decoration: underline;'>Exercice 1 :</h2>";

$age= array(
    '0-12' => 'enfant',
    '13-19' => 'ado',
    '20-50' => 'adulte',
    '50-70' => 'senior',
    '70' => 'agé');

print_r($age);

$aleatoire=mt_rand(0,100);

echo "<br>";
echo "la personne généré aléatoirement est :";
switch ($aleatoire){
    case (0<=$aleatoire and $aleatoire<= 12) :
        echo "<b>  un enfant</b>";
        break;
    case (13<=$aleatoire and $aleatoire<= 19) :
        echo "<b>  un ado</b>";
        break;
    case (20<=$aleatoire and $aleatoire<= 50) :
        echo " <b> un adulte</b>";
        break;
    case (50<=$aleatoire and $aleatoire<= 70) :
        echo " <b> un senior</b>";
        break;
    case (70<=$aleatoire and $aleatoire<= 100) :
        echo "<b> une personne agé </b>";
        break;

}
//----------------------------------------------------------------------------------------------------------------------------
echo "<hr>";
echo "<h2 style='color: red; text-decoration: underline;'>Exercice 2 :</h2>";
$f1=0;
$f2=1;
$fn=0;
$compteur=1;
echo "<h3 style='text-decoration: underline;'>avec la boucle while :</h3>";
while($compteur<=20) {
    $fn = $f1 + $f2;
    $f1 = $f2;
    $f2 = $fn;
    $compteur++;
}
echo "la suite de fifi des 20 premiers termes est : $fn";
echo "<br>";
echo "<h3 style='text-decoration: underline;'>avec la boucle do while :</h3>";
$f1=0;
$f2=1;
$fn=0;
$f3=0;
$compteur=1;
do{
    $f3=$f2/$f1;
    $f3= round($f3,2);
    echo " $f3 |";
    $fn = $f1 + $f2;
    $f1 = $f2;
    $f2 = $fn;
    $compteur++;
} while($compteur<=30);
echo"<i><b> (c'est le nombre d'or)</i></b>";
echo "<br>";
echo "<br>";
//----------------------------------------------------------------------------------------------------------------------------
echo "<hr>";
echo "<h2 style='color: red; text-decoration: underline;'>Exercice 3 :</h2>";
echo "<h3 style='text-decoration: underline;'>precision de 15 :</h3>";
$pi=0;
for ($n=1; $n<=15; $n++){
    $pi+=6/($n**2);
}
$pi = $pi**0.5;
echo "$pi";
echo "<h3 style='text-decoration: underline;'>precision de 150 :</h3>";
$pi=0;
for ($n=1; $n<=150; $n++){
    $pi+=6/($n**2);
}
$pi = $pi**0.5;
echo "$pi";
echo "<h3 style='text-decoration: underline;'>precision de 1500 :</h3>";
$pi=0;
for ($n=1; $n<=1500; $n++){
    $pi+=6/($n**2);
}
$pi = $pi**0.5;
echo "$pi";
echo "<h3 style='text-decoration: underline;'>precision de 15000 :</h3>";
$pi=0;
for ($n=1; $n<=15000; $n++){
    $pi+=6/($n**2);
}
$pi = $pi**0.5;
echo "$pi";
echo "<br>";
echo "<br>";
//----------------------------------------------------------------------------------------------------------------------------
echo "<hr>";
echo "<h2 style='color: red; text-decoration: underline;'>Exercice 4 :</h2>";
$auteur=array(
    "Jacques B."=>"<i>Tout a une fin, sauf la banane qui en a deux.</i>",
    "Mustapha C."=>"<i>L’eau chaude n’oublie pas qu’elle a été froide.</i>",
    "Trevor J."=>"<i>Un homme qui se noie s’agrippe à l’eau.</i>",
    "Mickeal T."=>"<i>Si en te baignant tu as échappé au crocodile, prends garde au Léopard sur la berge.</i>",
    "Jean J."=>"<i>Si le crocodile a un pantalon, c’est qu’il a enfin trouvé ou ranger sa queue.</i>",
);
foreach($auteur as $cit => $element)
{
    echo '[' . $cit . '] a dit : ' . $element . '<br />';

}
echo "<br>";
//----------------------------------------------------------------------------------------------------------------------------
echo "<hr>";
echo "<h2 style='color: red; text-decoration: underline;'>Exercice 5 :</h2>";
$nbr=11;
$nbr2=10;
$table = '<table border="1">';
echo "<b style=' text-decoration: underline;'>table de multiplication de 1 a $nbr :</b>";
echo "<br>";
echo "<br>";

for ($a=1; $a <= $nbr; $a++) {
    $table .= '<tr>';
    for ($b=1; $b <= $nbr2 ; $b++) {
        $table .= '<td>'.$a*$b.'</td>';
    }
    $table .= '</tr>';
}
$table .= '</table>';
echo "$table";
echo "<br>";
echo"<hr>";
echo "<h2 style='color: red; text-decoration: underline;'>Exercice 6 :</h2>";
$n = 97;
echo "Les nombres premiers entre 2 et ".$n." sont : ";
$negatif = false;

for($i=2;$i<=$n;$i++){
    $nbDiv = 0;//Et on compte le nombre de diviseur
    for($j=1;$j<=$i;$j++){
        if($i%$j==0){
            $nbDiv++;
        }
    }
    if($nbDiv == 2){
        if($negatif){
            echo "-";
        }
        echo $i.", ";
    }
}



echo"<hr>";
echo "<h2 style='color: red; text-decoration: underline;'>Exercice 7 :</h2>";


$annuaire=array(
    "PUJOL Olivier"=>"03 89 72 84 48",
    "IMBERT Jo"=>"03 89 36 06 05",
    "SPIEGEL Pierre"=>"03 87 67 92 37",
    "THOUVENOT Frédéric"=>"01 42 86 02 12",
    "MEGEL Pierre"=>"09 59 71 46 96",
    "SUCHET Loïc"=>"03 89 33 10 54",
    "GIROIS Francis"=>"03 88 01 21 15",
    "HOFFMANN Emmanuel"=>"03 89 69 20 05",
    "KELLER Fabien"=>"04 18 52 34 25",
    "LEY Jean-Marie"=>"03 89 43 17 85",
    "ZOELLE Thomas"=>"04 18 65 67 69",
    "WILHELM Olivier"=>"03 89 60 48 78",
    "BLIN Nathalie"=>"01 28 59 23 25",
    "BICARD Pierre-Eric"=>"03 89 69 25 82",
    "ZIEGLER Thierry"=>"03 89 06 33 89",
    "BADER Jean"=>"03 89 25 65 72",
    "ROSSO Anne-Sophie"=>"01 56 20 02 36",
    "ROTTNER Thierry"=>"03 88 29 61 54",
    "WEBER Joao"=>"03 89 35 45 20",
    "SCHILLINGER Olivier"=>"03 84 21 38 40",
    "BICARD Muriel"=>"03 89 33 47 99 ",
    "KELLER Christian"=>"03 88 19 16 10 ",
    "GROELLY Antonio"=>"03 89 33 60 63",
    "ALLARD Aline"=>"03 89 56 49 19",
    "WINNINGER Bénédicte"=>"04 16 14 86 66");


ksort($annuaire);
foreach ($annuaire as $x => $x_value)
{
    echo "Personne : " . $x . ", Numéro = " . $x_value;
    echo "<br>";
}

echo"<hr>";
echo "<h2 style='color: red; text-decoration: underline;'>Exercice 8 :</h2>";
$A1=true;
$A2=false;
$A3=true;
$A4=false;
$A5=false;
$A6=false;

$lumiere= array($A1, $A2, $A3, $A4, $A5, $A6);
switch ($lumiere){
    case ($lumiere[0] == true && $lumiere[2]== true) :
        echo"La lumiere est allumée <br>";
        break;
    case($lumiere[0] == true && $lumiere[3]== true && $lumiere[4] == true):
        echo"La lumiere est allumée <br>";
        break;
    case($lumiere[1] == true && $lumiere[5]== true):
        echo"La lumiere est allumée <br>";
        break;

}


