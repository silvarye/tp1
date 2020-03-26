<html style="background-color: darkgrey">
<style>
    body {
        background-image: url("fondgris.jpg");
    }
</style>
<h1 style='font-size: 260%;  background-color: green'>TP7 : POO (Héritage et polymorphisme)</h1>
<div style="margin-left: 10%; margin-right: 10%;background-color: lightgray" >

    <hr>
    <div style="margin-left: 10%">
        <h2 style='color: green; text-decoration: underline;'>Exercice 1 :</h2>
        <?php
        class Formulaire
        {
            protected $html = "";
            private $interieur = "";
            function __construct($fichier, $method)
            {
                $this->html .= "<form method='$method' action='$fichier'>";
            }
            function ajouterzonetexte($text){
                $this->html .= $text." <input type='text'name='nom6'/><br><br>";
            }
            function ajouterbouton(){
                $this->html .= "<button>Envoyer</button><br><br>";
            }
            function getform(){
                return $this->html . "</form>";
            }
        }
        class Form2 extends Formulaire{
            function ajouterRadio($text){
                $this->html .= $text." <input type='radio'name='nom6'/><br>";
            }
            function ajouterSelect($text){
                $this->html .= $text." <input type='checkbox'><br>$text<input type='checkbox'><br>";
            }
        }
        $p1 = new Form2("TP6-PHP-Duplouy.php","post");
        $p1->ajouterzonetexte("Votre nom :");
        $p1->ajouterzonetexte("Votre code :");
        $p1->ajouterbouton();
        $p1->ajouterSelect('homme');
        $p1->ajouterRadio('Tennis');
        $p1->ajouterRadio('Equitation');

        echo $p1->getform();



        ?>
    </div>
</div>
</html>