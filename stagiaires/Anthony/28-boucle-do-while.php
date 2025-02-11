  <?php
/*
 * Les boucles do while
 */

// chargement des données
include 'array.php';

// on trie $depFr par ordre alphabétique en retirant les clefs
$depFr = array_values($depFr);
// On compte le nombre de pays dans le tableau $depFr
$nbPays = count($depFr);
// On initialise la variable $nbPaysParPage
$nbPaysParPage = 20;
// On calcule le nombre de pages nécessaires
// pour afficher toutes les régions, ceil arrondit à l'entier supérieur
$nbPages = ceil($nbPays / $nbPaysParPage);

// on va récuperer la page actuelle depuis la variable $Get si elle existe

//Si elle existe et qu'elle n'est pas vide (!empty) et qu'elle  contient une chaine de caractère composée uniquement de numérique (ctype_digit) (0123456789)
if(!empty($_GET['pg']) && ctype_digit($_GET['pg'])){
    //transformation de la variable globale en variable locale traitée :
        //transtypage avec (int), transforme en entier donne 0 en cas d'erreur 
        $pageActu = (int) $_GET['pg'];
        // équivaut à $pageActu = intval($_GET['pg']); qui renvoie 1 en cas d'erreur (et un warning)
        //équivaut à settype(($_GET['pg'], "integer", mais renvoie false en cas d'erreur)

}
else{
    //Page par défaut
    $pageActu = 1;
}
?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>28-boucle-do-while</title>
</head>
<body>
    <h1>28-boucle-do-while</h1>
    <h2>Créez la pagination avec la boucle do while</h2>
    <p>Puis créez le menu pour passer d'une page à l'autre en utilisant la variable $_GET nommée 'pg'</p>
    <p>Exemple d'un lien valide : <a href="?pg=3">3</a></p>
    <?php
    echo "Pour ce tableau de $nbPays régions, répartis par $nbPaysParPage régions par page,
 vous obtiendrez $nbPages pages<br>";
    ?>
<h2>Les régions de France</h2>

    <h4>Page
        <?php
        //initialisation de la variable de boucle
        $i = 1;
        //on fait le do 1x que le while soit juste ou non
        do{
            //si on veut afficher la page actuel
            if($pageActu === $i):
                //affichage de la page sans lien
                ?>

        <?=$i?>
        <?php
       else:
        if($i === 1):
            ?>
        <a href="?pg=<?=$i?>"><?=$i?></a> 
        <?php
            //Création du lien cliquable vers la racine du site 
        
 //Sinon (on est plus sur la page 1)
       else:
    //Si le lien à afficher est la page 1
               
                //Création du lien cliquable
            ?>
        <a href="?pg=<?=$i?>"><?=$i?></a> 
        <?php
        endif;
        //fin du if
        endif;
        //incrémentation 
        $i++;
        }
        while($i <= $nbPages);

        ?>
    </h4>
<p>Affichez ensuite la liste des régions suivant la variable $_GET nommée 'pg'</p>
    <hr>
    <p>
    <?php
    $begin=($pageActu-1)*$nbPaysParPage;
    $end = $begin + $nbPaysParPage;
    $i=0;
   do{
    echo "$depFr[$begin] <br> ";
    $begin++;
   }
   while($begin < $end && $begin < $nbPays);

    ?>
</p>
    <hr>
    <?php
  $i=1;
  do{
    if($pageActu === $i){
        echo "$i - ";
    }
    elseif($i===1){
        echo "<a href='28-boucle-do-while.php'>$i</a> - ";
    }
    else{
        echo "<a href='?pg=$i'>$i</a> - ";
    }
 
      $i++;
  }while($i <= $nbPages);
  echo "</br>";
 
 
    ?>
   
    </h4>
</body>
</html>
