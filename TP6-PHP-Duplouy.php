<html style="background-color: darkgrey">
<style>
    body {
        background-image: url("fondgris.jpg");
    }
</style>
<h1 style='font-size: 260%;  background-color: green'>TP5 : Transmission des données</h1>
<div style="margin-left: 10%; margin-right: 10%;background-color: lightgray" >

    <hr>
    <div style="margin-left: 10%">
        <h2 style='color: green; text-decoration: underline;'>Exercice 1 :</h2>
<?php
class equipe{
    private $nom="PSG";
    private $titre=12;
    static $NBequipe = 0;
    static function displays(){
        echo self::$NBequipe."\n";
    }
    function display()
    {
        echo $this->titre . $this->nom;
    }
    function __construct($name, $titres) {
        $this->nom = $name;
        $this->titre = $titres;
        ++self::$NBequipe;

    }

    public function getNom(): string
    {
        return $this->nom;
    }
    public function setNom(string $nom)
    {
        $this->nom = $nom;
    }
    public function getTitre(): int
    {
        return $this->titre;
    }
    public function setTitre(int $titre)
    {
        $this->titre = $titre;
    }
    function __destruct(){
        echo "Fin \n";
    }

}

$teste=new equipe(" eloi ",0);
$teste->display();
echo '<br>';
$testee=new equipe(" alexandre ",1);
$testee->display();
echo '<br>';
$testeee=new equipe(" paul ",3);
$testeee->display();
echo '<br>';
$testeeee=new equipe(" quentin ",2);
$testeeee->display();

echo '<br>';
equipe::displays();
?>

