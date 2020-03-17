<?php
//ini_set('display_errors', "on");
echo "<h1 style='background-color: burlywood'>TP3 : Fonctions</h1>";
echo "<hr>";
echo "<h2 style='color: red; text-decoration: underline;'>Exercice 1 :</h2>";
$a=function (&$var=0){
    $var++;
    echo $var."<br>";
};
echo $a($var);
echo $a($var);
echo $a($var);
echo $a($var);
echo "<hr>";
echo "<h2 style='color: red; text-decoration: underline;'>Exercice 2 :</h2>";
$a=function (&$var=0){
    $var++;
    echo $var."<br>";
};
echo $a($var);
echo $a($var);
echo $a($var);
echo $a($var);
echo "<hr>";
echo "<h2 style='color: red; text-decoration: underline;'>Exercice 3 :</h2>";
$identite = ['alain', 'basile', 'David', 'Edgar'];
$age = [1, 15, 35, 65];
$mail = ['penom.nom@gtail.be', 'truc@bruce.zo', 'caro@caramel.org', 'trop@monmel.fr'];
function mailReturn($mail)
{

    $split=substr($mail,strpos($mail, '@'), strlen($mail));
    $split2=substr($split,strpos($split, '.')+1, strlen($split));
    $split=substr($split, 0, strpos($split, '.'));
   // echo "domaine : ";
   //  print_r($split);
   // echo"<br>";
   // echo "extension : ";
   // print_r($split2);
    $tab=[$split,$split2];
   //  echo"<br>";

    return $tab;

}
for ($i=0;$i<  sizeof($mail);$i++) {
    print_r(mailReturn($mail[$i]));
    echo "<br>";
}

function Arg($identite, $age, $mail, $indice)
{
    for ($i=0; $i<4; $i++)
    {
        $identite[$i][0]=strtoupper($identite[$i]);
        echo "Je me nomme $identite[$i] j'ai ";
        echo "$age[$i]";
        if ($age[$i]<$indice)
        {
            echo " an";
        }
        else{
            echo " ans";
        }
        $tab=mailReturn($mail[$i]);
        echo " et mon mail est $mail[$i] du domaine $tab[0] avec l'extension $tab[1]";
        echo"<br>";
    }
    echo "indice aleatoire : $indice";
}

Arg($identite, $age, $mail, random_int(0,65));
echo "<br>";
echo "<hr>";
echo "<h2 style='color: red; text-decoration: underline;'>Exercice 4 :</h2>";

function ligne ($nb){
    for ($i=0;$i<$nb;$i++){
        echo "*";
    }
}
echo 'ligne :';
echo "<br>";
ligne(8);
echo "<br>";
echo "<br>";
function carrePlein($nb){
    for ($i=0;$i<$nb;$i++){
        ligne($nb);
        echo "<br>";
    }
}
echo 'carre plein :';
echo "<br>";
carrePlein(5);
echo "<br>";
function triangleIso($nb){
    for ($i=0;$i<=$nb;$i++){
        ligne($i);
        echo "<br>";
    }
}
echo 'Triangle iso :';
triangleIso(5);
function carreVide($nb){
    ligne($nb);
    for ($i=0;$i<$nb;$i++){

        echo "<br>";
    }
}
echo "<hr>";
echo "<h2 style='color: red; text-decoration: underline;'>Exercice 5 :</h2>";

function cryptage(&$msg, $pas) {
    for ($i=0;$i<strlen($msg);$i++) {
        if(ord($msg[$i]) >= 65 && ord($msg[$i]) <= 90 || ord($msg[$i]) >= 97 && ord($msg[$i]) <= 122) {
            if (ord($msg[$i]) > 90 - $pas || ord($msg[$i]) > 122 - $pas) {
                $msg[$i] = chr(ord($msg[$i]) + -26 + $pas);
            } else {
                $msg[$i] = chr(ord($msg[$i]) + $pas);
            }
        }
    }
}

function decryptage(&$msg, $pas) {
    for ($i=0;$i<strlen($msg);$i++) {
        if(ord($msg[$i]) >= 65 && ord($msg[$i]) <= 90 || ord($msg[$i]) >= 97 && ord($msg[$i]) <= 122) {
            if (ord($msg[$i]) >= 65 + $pas || ord($msg[$i]) >= 97 + $pas) {
                $msg[$i] = chr(ord($msg[$i]) - $pas);
            } else {
                $msg[$i] = chr(ord($msg[$i]) +26 - $pas);
            }
        }
    }
}



$msg="BONJOUR";
echo "message crypté :";
echo "<br>";
cryptage($msg,1);
echo $msg;
echo "<br>";
decryptage($msg,1);
echo "message décrypté :";
echo "<br>";
echo $msg;

echo "<hr>";
echo "<h2 style='color: red; text-decoration: underline;'>Exercice 11 :</h2>";
function numValid($num)
{
    $taille = strlen($num);
    $total = 0;
    for($i=$taille-1;$i>=0;$i--)
    {
        $chiffre = substr($num, $i, 1);

        if ((($taille - $i) % 2) == 0)
        {
            $chiffre = $chiffre*2;
            if ($chiffre>9)
            {
                $chiffre = $chiffre-9;
            }
        }
        $total += $chiffre;
    }

    return (($total % 10) == 0);
}
$numeros=538235013346635;
echo "le numéro de la carte est : $numeros";
echo "<br>";
if (numValid($numeros)==true){
    echo "le numero est valide";
}
else{
    echo"le numero n'est pas valide";
}
echo "<br>";
