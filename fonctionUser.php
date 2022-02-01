<?php
// function bonjour ($nom = 'madame, monsieur') { //madame, monsieur est le nom par defaut
//     return 'Bonjour ' . $nom . "\n";
// }

// $salutation = bonjour("brian\n ");
// echo $salutation;
?>
------------------------------
<!-- ou -->

 <?php
// function salut ($nom = null) { //on retourne que bonjour si le nom est nul
//     return "salut\n ";
// }

// $salutation = salut();
// echo $salutation;
?> 

------------------------------

<?php
// function repondre_oui_non ($phrase) {
//     while (true) {
//         $reponse = readline($phrase . " - (o)ui/(n)on : ");
//         if ($reponse === "o") {
//             return true;
//         } elseif ($reponse === "n") {
//             return false;
//         }   
//     }
// }



 //function demander_creneau($phrase = 'Veuillez entrer un creneau') {
//     echo $phrase . "\n";
//    while (true) {
//     $ouverture = (int)readline('Heure d\'ouverture : ');
//     if ($ouverture >= 0 && $ouverture <= 23) {
//         break;
//     }
//    }
//    while (true) {
//         $fermeture = readline('Heure fermeture : ');
//         if ($ouverture >= 0 && $ouverture <= 23 && $fermeture > $ouverture) {
//             break;
//         }
//     }
//     return [$ouverture,$fermeture];
// }


// $creneau = demander_creneau();
// $creneau2 = demander_creneau('Veuillez entrer votre creneau');
// $creneau3 = demander_creneau('Veuillez entrer votre dernier creneau');
// //si le user tape "o" => true"
// //si le user tape "n" => false"
// var_dump($creneau, $creneau2, $creneau3);
?>

------------------------------

<?php
function repondre_oui_non ($phrase) {

}
function demander_creneau($phrase = 'Veuillez entrer un creneau') {

}

function demander_creneaux ($phrase ="Veuillez entrez vos creneaux : ") {
    $creneaux = [];
    $continuer = true;
    while ($continuer) {
        $creneaux[] = demander_creneau();
        $continuer = repondre_oui_non('voulez vous continuer ? ');
    }
    return $creneaux;
}
/*
/[
/   [0, 19],
/   [2, 18]
/[
*/

$creneaux = demander_creneaux('Entrez vos creneaux');
var_dump($creneaux);


?>