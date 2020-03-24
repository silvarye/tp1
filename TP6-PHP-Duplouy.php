<html style="background-color: darkgrey">
<style>
    body {
        background-image: url("fondgris.jpg");
    }
</style>
<h1 style='font-size: 260%;  background-color: green'>TP6 : POO (Abstraction et encapsulation)</h1>
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
        //echo "Fin \n";
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
    </div>
    <hr>
    <div style="margin-left: 10%">
        <h2 style='color: green; text-decoration: underline;'>Exercice 2 :</h2>
        <br>
        <?php
        class Formulaire
        {
            private $html = "";
            private $interieur = "";
            function __construct($fichier, $method)
            {
                $this->html .= "<form method='$method' action='$fichier'>";
            }
            function ajouterzonetexte($text){
                $this->html .= $text." <input type='text'name='nom6'/><br><br>";
            }
            function ajouterbouton(){
                $this->html .= "<button>Envoyer</button>";
            }
            function getform(){
                return $this->html . "</form>";
            }
        }

        $p1 = new Formulaire("TP6-PHP-Duplouy.php","post");
        $p1->ajouterzonetexte("Votre nom :");
        $p1->ajouterzonetexte("Votre code :");
        $p1->ajouterbouton();
        echo $p1->getform();

        ?>
    </div>
    <hr>
    <div style="margin-left: 10%">
        <h2 style='color: green; text-decoration: underline;'>Exercice 3 :</h2>
        <br>


    </div>

