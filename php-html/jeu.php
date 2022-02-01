<?php 
$title = "Jeu";
$aDeviner = 150;
$erreur = null;
$succes = null;
$value = null;
if (isset($_POST['chiffre'])) {
    $value = (int)$_POST['chiffre'];

    if ($value > $aDeviner) {
        $erreur = "Votre chiffre est trop grand !";
    } elseif ($value < $aDeviner) {
        $erreur = "Votre chiffre est trop petit !";
    } else {
        $succes = "Bravo ! vous avez trouvé le bon chiffre <strong>$aDeviner</strong> !!";
    }

}
require 'header.php'; 
?>

<!-- Begin page content -->
<main class="flex-shrink-0">
  <div class="container">
    <h1 class="mt-5">Jeu</h1>  

    <!-- condition -->
    <? if ($erreur): ?>
        <div class="div alert alert-danger">
            <? echo $erreur ?>
        </div>
        <?php elseif ($succes): ?>
            <div class="div alert alert-success">
            <? echo $succes ?>
            </div>
        <?php endif ?>

        <!-- condition -->
    <form action="/jeu.php" method="POST">
        <div class="div form-group">
        <input type="number" class="form-control" name="chiffre" placeholder="entre 0 et 1000" value="<?= $value ?>"><br>
        <input type="text" class="form-control" name="demo" value="test"><br>
        </div>
        
        <button type="submit" class="btn btn-primary">Deviner</button>
    </form>
<H2>$_GET</H2>
    <pre>
        <?php var_dump($_GET) ?>
    </pre>

    <H2>$_POST</H2>
    <pre>
        <?php var_dump($_POST) ?>
    </pre>
  </div>
</main>

<?php require 'footer.php'; ?>