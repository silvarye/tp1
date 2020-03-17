<?php

ini_set('display_errors', "on");

echo "<h1 style='background-color: burlywood'>TP1 : Variables et constantes</h1>";
echo "<hr>";
echo "<h2 style='color: red; text-decoration: underline;'>Exercice 1 :</h2>";

echo "1 - le livre \"ma vie\" est terrible !! <br>";
echo "2 - le livre \"ma vie\" est terrible !! <br>";
echo '3 - le livre "ma vie" est terrible !! <br>';
echo "4 - le livre \"ma vie\" est terrible !! et le public l'apprécie.<br><br>";
$mavie = "\"ma vie\"";
echo "5 - le livre $mavie est terrible !! <br>";
echo "6 - le livre $mavie est terrible !! <br>";
echo "<hr>";
echo "<h2 style='color: red; text-decoration: underline;'>Exercice 2 :</h2>";
echo "<i>J'ai l'esprit large et je n'admets pas qu'on dise le contraire. </i>".strtoupper("<b>Citation de Coluche</b>");
echo "<hr>";
echo "<h2 style='color: red; text-decoration: underline;'>Exercice 3 :</h2>";
$citation="J'ai l'esprit large et je n'admets pas qu'on dise le contraire.";
$auteur="Coluche";
if (isset($citation)==true){
    echo "true";
}
echo "<br>";
if (isset($auteur)==true){
    echo "true";
}
var_dump($auteur);
var_dump($citation);
unset($auteur);
unset($citation);
if (isset($citation)==false){
    echo "false";
}
echo "<br>";
if (isset($auteur)==false){
    echo "false";
}
echo "<hr>";
echo "<h2 style='color: red; text-decoration: underline;'>Exercice 4 :</h2>";
echo "$_SERVER";
echo "<br>";
echo "$GLOBALS";
echo "<hr>";
echo "<h2 style='color: red; text-decoration: underline;'>Exercice 5 :</h2>";

ini_set('upload_max_filesize', '5M');
phpinfo();
?>
