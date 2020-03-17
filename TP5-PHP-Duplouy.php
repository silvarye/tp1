<?php

setcookie('cookie0', 'test0',time()+3600);
setcookie('cookie1', 'test1', time()+3600*24*15);
setcookie('nom', 'DUPLOUY',time()+3600);
setcookie('age', '21', time()+3600);
setcookie('num',1,time()+3600*2);


?>




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
<a href='TP5-PHP-Duplouy.php?valeur=15'>cliquer pour avoir une valeur en degré</a>
<br>
        <br>


<?php
//ini_set('display_errors', "on");
if ($_GET['valeur'] == NULL ){

}
else {
    $Tf = $_GET['valeur'];
    $Tc = (($Tf - 32) * 5 / 9);
    echo "la valeur en degré est $Tc";
}

?>

<form action="TP5-PHP-Duplouy.php" method="port">
    valeur en Fahrenheit : <input type="text" name="valenfa"/>
    <input type="submit" value ="Convertir">
</form>
    </div>
<?php
if ($_GET['valenfa'] == NULL ){

}
else {
    $Tf = $_GET['valenfa'];
    $Tc = (($Tf - 32) * 5 / 9);
    echo "la valeur en degré est $Tc";
}
?>

<hr>
    <div style="margin-left: 10%">
<h2 style='color: green; text-decoration: underline;'>Exercice 2 :</h2>
<form action="TP5-PHP-Duplouy.php" method="post">
    nom : <input type="text" name="nom"/>
    prénom : <input type="text" name="prénom"/>
    <br>
    Débutant : <input type="radio" name="niv" value="debutant"/>
    Avancé : <input type="radio" name="niv" value="avance"/>
    <br>
    <input type="reset" value ="Effacer">
    <input type="submit" value ="Envoyer">
</form>

<?php
if(isset($_POST['nom'])&&isset($_POST['prénom'])&&isset($_POST['niv'])){
    echo "Bonjour " .$_POST['nom']." ".$_POST['prénom'].". Vous avez un niveau ".$_POST['niv'].".";
}
?>
    </div>
<br>
<hr>
    <div style="margin-left: 10%">
<h2 style='color: green; text-decoration: underline;'>Exercice 3 :</h2>
<form action="TP5-PHP-Duplouy.php" method="post">
    nom : <input type="text" name="nom2"/>
    prénom : <input type="text" name="prénom2"/>
    age : <input type="text" name="age2"/>
    <br>
    <br>
    Langues pratiquées (choisir  au minimum 2)<br>
    <select name="langues[]" multiple="multiple">
        <option value="français" > français</option>
        <option value="anglais" > anglais</option>
        <option value="allemand" > allemand</option>
        <option value="espagnol" > espagnol</option>
    </select><br><br>
    Compétences informatiques (choisir au minimum 2)<br>
    HTML <input type="checkbox" name="niv2[]" value="HTML"/>
    CSS  <input type="checkbox" name="niv2[]" value="CSS"/>
    PHP <input type="checkbox" name="niv2[]" value="PHP"/>
    SQL <input type="checkbox" name="niv2[]" value="SQL"/>
    C <input type="checkbox" name="niv2[]" value="C"/>
    C++ <input type="checkbox" name="niv2[]" value="C++"/>
    JS <input type="checkbox" name="niv2[]" value="JS"/>
    Python <input type="checkbox" name="niv2[]" value="Python"/><br><br>
    <input type="reset" value ="EFFACER">
    <input type="submit" value ="ENVOI">
</form>
<?php
if(!empty($_POST['nom2'])&&!empty($_POST['prénom2'])&&!empty($_POST['age2'])&&!empty($_POST['langues'])&&!empty($_POST['niv2']))
{
    echo"<h2><b>Récapitulatif de votre fiche d'information personnelle : </b></h2>";
    echo "Vous êtes ".$_POST['prénom2'].' '.$_POST['nom2'].".";
    echo "<br>Vous avez ".$_POST['age2']. ' ans.';
    echo "<br>Vous parlez : ";
    echo "<br>";
    $langues=$_POST['langues'];
    if($langues[1]==NULL){
        echo "<br>";
        echo "<div style='color: green;'>Pas assez de langues séléctionnées.</div>";
    }
    else {
        foreach ($langues as $valeur) {
            echo " <li> $valeur </li>";
        }
    }
    echo "<br>Vous avez des compétences informatique en : ";
    echo "<br>";
    $Niv2=$_POST['niv2'];
    if($Niv2[1]==NULL){
        echo "<br>";
        echo "<div style='color: green;'>Pas assez de compétences séléctionnées.</div>";
        echo "<br>";
    }
    else {
        foreach ($Niv2 as $valeur) {
            echo " <li> $valeur </li>";
        }
        echo "<br>";
    }
}
?>
    </div>
<br>
<hr>
    <div style="margin-left: 10%">
<h2 style='color: green; text-decoration: underline;'>Exercice 4 :</h2>
<br>
<form action="TP5-PHP-Duplouy.php" method="post">
    <div style="margin-left: 20%"> Nombre 1 : <input type="text" name="nb1"/></div>
    <br>
    <div style="margin-left: 20%"> Nombre 2 : <input type="text" name="nb2"/></div>
    <br>
    <div style="margin-left: 21%;"> Résultat : <input type="text" name="resultat" value="<?php calcul(); ?>"/> </div>
    <br>
    Cliquer sur un boutton : <input type="submit" value ="Addition x+y" name="operation">
                             <input type="submit" value ="Soustraction x-y" name="operation">
                             <input type="submit" value ="Division x/y" name="operation">
                            <input type="submit" value ="Puissance x^y" name="operation">
</form>
        <?php
        function calcul()
        {
            $result = 0;
            if (isset($_POST['operation'])) {
                $value1 = $_POST['nb1'];
                $value2 = $_POST['nb2'];
                $sign = $_POST['operation'];

                if ($value1 == '') {
                    echo "erreur nb1 ";
                }
                if ($value2 == '') {
                    echo "erreur nb2 ";
                }
                if ($sign == 'Addition x+y') {
                    $result = $value1 + $value2;
                    echo $result;
                }

                if ($sign == 'Soustraction x-y') {
                    $result = $value1 - $value2;
                    echo $result;
                }

                if ($sign == 'Division x/y') {
                    if ($value2 == 0){
                        echo "division par 0 erreur. ";
                    }
                    else {
                        $result = $value1 / $value2;
                        echo $result;
                    }
                }
                if ($sign == 'Puissance x^y') {
                    $result = pow($value1, $value2);
                    echo $result;
                }

            }
           return $result;
        }
            ?>


        <br>
        <br>

    </div>
    <br>
    <hr>
    <div style="margin-left: 10%">
        <h2 style='color: green; text-decoration: underline;'>Exercice 5 :</h2>
        <br>
        <form action="TP5-PHP-Duplouy.php" method="post"  enctype="multipart/form-data">
            Fichier 1 <input type="file" name="photo" />
            <br>
            Fichier 2 <input type="file" name="photo2" />
            <br>
            <input type="submit" value ="Envoi">
        </form>
        <br>
        <?php
        if (isset($_FILES['photo2']['tmp_name'])||isset($_FILES['photo']['tmp_name'])) {
            $retour = copy($_FILES['photo']['tmp_name'], $_FILES['photo']['name']);
            $retour2 = copy($_FILES['photo2']['tmp_name'], $_FILES['photo2']['name']);
            if($retour2||$retour) {
                echo'<table border="1">';
                echo'<tr>';
                echo'<td> </td>';
                echo'<td>Fichier 1</td>';
                echo'<td>Fichier 2</td>';
                echo'</tr>';
                echo'<tr>';
                echo'<td>Name</td>';
                echo'<td>'.$_FILES['photo']['name'].'</td>';
                echo'<td>'.$_FILES['photo2']['name'].'</td>';
                echo'</tr>';
                echo'<tr>';
                echo'<td>type</td>';
                echo'<td>'.$_FILES['photo']['type'].'</td>';
                echo'<td>'.$_FILES['photo2']['type'].'</td>';
                echo'</tr>';
                echo'<tr>';
                echo'<td>tmp_name</td>';
                echo'<td>'.$_FILES['photo']['tmp_name'].'</td>';
                echo'<td>'.$_FILES['photo2']['tmp_name'].'</td>';
                echo'</tr>';
                echo'<tr>';
                echo'<td>error</td>';
                echo'<td>'.$_FILES['photo']['error'].'</td>';
                echo'<td>'.$_FILES['photo2']['error'].'</td>';
                echo'</tr>';
                echo'<tr>';
                echo'<td>size</td>';
                echo'<td>'.$_FILES['photo']['size'].'</td>';
                echo'<td>'.$_FILES['photo2']['size'].'</td>';
                echo'</tr>';
                echo'<tr>';
                echo'<td>image</td>';
                echo'<td><img src="' . $_FILES['photo']['name'] . '"></td>';
                echo'<td><img src="' . $_FILES['photo2']['name'] . '"></td>';
                echo'</tr>';
                echo'</table>';
            }
        }
        ?>
    </div>
    <br>
    <hr>
    <div style="margin-left: 10%">
        <h2 style='color: green; text-decoration: underline;'>Exercice 6 :</h2>
        <h3>Installation de cookie inspector ok.</h3>
    </div>
    <br>
    <hr>
    <div style="margin-left: 10%">
        <h2 style='color: green; text-decoration: underline;'>Exercice 7 :</h2>

        <?php
        echo '<h4>Affichage des cookies avant suppression : '.'</h4>';
        echo $_COOKIE["cookie0"];
        echo '<br>';
        echo $_COOKIE["cookie1"];
        echo '<br>';

        setcookie('cookie0');
        unset($_COOKIE['cookie0']);
        setcookie('cookie1');
        unset($_COOKIE['cookie1']);
        echo '<h4>Affichage des cookies apres suppression : '.'</h4>';
        echo 'si rien ne s affiche : ok';
        echo $_COOKIE["cookie0"];
        echo $_COOKIE["cookie1"];
        ?>

    </div>
    <br>
    <hr>
    <div style="margin-left: 10%">
        <h2 style='color: green; text-decoration: underline;'>Exercice 8 :</h2>
        <?php
        echo '<h4>Utilisation des cookies : '.'</h4>';
        echo 'Bonjour monsieur ' . $_COOKIE["nom"] . ' ! ' . 'Vous avez ' .$_COOKIE["age"].'ans. ';

        ?>

    <br>
    </div>
    <br>
    <hr>
    <div style="margin-left: 10%">
        <h2 style='color: green; text-decoration: underline;'>Exercice 9 :</h2>
        <?php
        session_id('ADUPLOUY');
        session_start(['cookie_lifetime' => 3600]);
        $id = session_id();
        echo '<b>Identifiant de la session active : </b> ';
        echo $id;
        $_SESSION['time'] = time();
        $_SESSION['page pref'] = 'page1.php';
        echo '<br>';
        echo '<br>';
        echo 'Bonjour '.$id;
        echo '<br>';
        echo 'Ta première connexion était '.date('d/m/Y H:i:s', $_SESSION['time']);
        echo '<br /><a href="https://www.youtube.com/">Cliquer pour ouvir votre site préféré</a>';

        ?>
    </div>
    <br>
    <hr>
    <div style="margin-left: 10%">
        <h2 style='color: green; text-decoration: underline;'>Exercice 10 :</h2>
        <?php
        $id_file=fopen("test-fic.txt", "r");
        if ($id_file) {
            $nb_ligne=0;
            while ($ligne=fgets($id_file)){
                $nb_ligne++;
                echo $ligne.'<br>';
            }
            fclose($id_file);
        }
        echo '<br>';

        $id_file=fopen("test-fic.txt", "a+");
      //  fwrite($id_file, " <br>DUPLOUY Alexandre");
        fclose($id_file);
        echo '--------------------------------------------------------------<br><br>';

        $id_file=fopen("test-fic.txt", "r");
        if ($id_file) {
            $nb_ligne=0;
            while ($ligne=fgets($id_file)){
                $nb_ligne++;
                echo $ligne.'<br>';
            }
            fclose($id_file);
        }
        $lines = file('test-fic.txt');
        $fp = fopen('file.csv', 'w');
        fputcsv($fp, $lines);

        ?>
    </div>
    <br>
    <br>
    <hr>
    <div style="margin-left: 10%">
        <h2 style='color: green; text-decoration: underline;'>Exercice 11 :</h2>
        <?php
        $lignes = file("contact.txt");
        echo "<table border='1'>";
        for ($i=0; $i<count($lignes); $i++)
        {
            echo "<tr>";
            $personne=explode(";",$lignes[$i]);
            for($j = 0; $j < count($personne); $j++)
            {
                echo "<td>" . $personne[$j] . "</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
        ?>
    </div>
    <br>
    <br>
    <hr>
    <div style="margin-left: 10%">
        <h2 style='color: green; text-decoration: underline;'>Exercice 12 :</h2>
        <form action="TP5-PHP-Duplouy.php" method="post">
            nom : <input type="text" name="nom4"/>
            prénom : <input type="text" name="prénom4"/>
            <br>
            <br>
            <input type="submit" value ="Enregistrer" name ="best">
            <input type="reset" value ="Effacer">
            <br><br>
            <input type="submit" value="Supprimer la session" name="supp"/>
            <br>
        </form>
        <?php
        session_start();
        if( isset($_SESSION['compteur']) ) {
            $_SESSION['compteur']++;
        } else {
            $_SESSION['compteur'] = 1;
        }
        if(isset($_POST['supp'])) {
            session_destroy();
            unlink('file2.txt');
        }
        if (isset($_POST['nom4'])&&isset($_POST['prénom4'])) {
            if (file_exists('file2.txt')) {
                $fichier = fopen('file2.txt', 'a');
            }
            else{
                $fichier = fopen('file2.txt', 'w');
                fwrite($fichier, 'numéros;prénom;nom;date<br>');
                fwrite($fichier, "\n");
            }
            $name = $_POST['nom4'];
            $prename = $_POST['prénom4'];
            $time=time();
            fwrite($fichier, $_SESSION['compteur']);
            fwrite($fichier, ';');
            fwrite($fichier, $prename);
            fwrite($fichier, ';');
            fwrite($fichier, $name);
            fwrite($fichier, ';');
            fwrite($fichier, date('d/m/Y H:i:s',$time));
            fwrite($fichier, "\n");


        }
        $lignes2 = file("file2.txt");
        echo "<table border='1'>";
        for ($i=0; $i<count($lignes2); $i++)
        {
            echo "<tr>";
            $personne=explode(";",$lignes2[$i]);
            for($j = 0; $j < count($personne); $j++)
            {
                echo "<td>" . $personne[$j] . "</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
        ?>

    </div>
    <br>
    <br>
    <hr>
    <div style="margin-left: 10%">
        <h2 style='color: green; text-decoration: underline;'>Exercice 15 :</h2>
        <div class="header">
            <p class="header_titre">TODOLIST </p>
        </div>
        <br>
        <form method = "POST" action ="ajout.php">
            <input type="text" name="title" placeholder="Titre">
            <br>
            <textarea rows="6" name="description" placeholder = "Description"></textarea>
            <br>
            <label> Date de réalisation : </label>

            <select name="day">
                <?php
                for ($i=1; $i <= 31; $i++) {
                    echo "<option value='". $i ."'> ".$i."</option>";
                }

                ?>
            </select>

            <select name="month">
                <option value="01"> janvier </option>
                <option value="02"> février </option>
                <option value="03"> mars </option>
                <option value="04"> avril </option>
                <option value="05"> mai </option>
                <option value="06"> juin </option>
                <option value="07"> juillet </option>
                <option value="08"> août </option>
                <option value="09"> septembre </option>
                <option value="10"> octobre </option>
                <option value="11"> novembre </option>
                <option value="12"> décembre </option>
            </select>

            <select name="year">
                <?php
                for ($i=2020; $i <= 2035; $i++) {
                    echo "<option value='". $i ."'> ".$i."</option>";
                }

                ?>
            </select>


            <br></br>
            <label> priorité : </label>
            <select name="priority">
                <option value="faible"> faible </option>
                <option value="moyen"> moyen </option>
                <option value="urgent"> urgent </option>
            </select>
            <br></br>
            <button> Submit </button>
        </form>
        <h2 style="color: green">Liste de toutes mes taches</h2>

        <form method="POST" action="remove-checked.php">

            <?php

            for ($i = 0 ; $i < count($toutesLesTaches) ; $i++)
            {

                $uneTache = $toutesLesTaches[$i];
                $timestamp = strtotime($uneTache[2]);
                $time = time();

                echo "<input type ='checkbox' name='delete[]' value='$i'>" . $uneTache[0] . " - ";
                echo $uneTache[1] . " - ";
                echo $uneTache[2] . " ";

                if($uneTache[3] == "faible")
                {
                    echo "<span style=\"color: green; \">  ($uneTache[3]) </span>";
                } elseif($uneTache[3] == "moyen")
                {
                    echo "<span style=\"color: orange; \">  ($uneTache[3]) </span>";
                } elseif ($uneTache[3] == "urgent")
                {
                    echo "<span style=\"color: red; \"> ($uneTache[3]) </span>";
                }
                if($timestamp < $time) {
                    echo "<span style=\"color: red; \">  en retard </span>";
                }

                echo "<br>";
            }


            ?>
            <p> Nombre de taches à exécuter :
                <?php
                echo count($toutesLesTaches);
                ?>
            </p>
            <button> Supprimer la(les) tache(s) sélectionnée(s) </button>

        </form>

        <br>
        <a href="remove-all.php"> Supprimer toutes les taches </a>



    </div>
    <br>
    <br>
</div>

<style>


    .header{
        width : 600px;
        height : 60px;
        background-color: green;
    }

    .header_titre {
        text-decoration: underline;
        color : white;
        text-align : center;
        font-size : 28px;

    }

    body {
        margin : 0;
    }


    th {
        border: 1px solid green;
        padding : 10px;
    }

    td {
        border : 1px solid green;
        text-align : center;
        padding : 10px;
    }

</style>
</html>