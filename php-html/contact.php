<?php
 $title = "Nous contacter";
 $nav= "contact";
 require 'header.php'; 
 require_once 'config.php';
 require_once 'functions.php';

?>
<main class="flex-shrink-0">
  <div class="row">
    <div class="col-md-8">
      <h1 class="mt-5">Nous contacter</h1>
      <p class="lead">Lorem ipsum dolor, sit amet consectetur adipisicing elit. A quisquam eveniet, laboriosam delectus ab reprehenderit necessitatibus voluptatibus aut et fugiat autem officia debitis veniam laudantium ipsam neque sed minus itaque!.</p>
    </div>
    <div class="col-md-4">
    <h2>Ouvert d'ouverture:</h2>
    <div class="div aler alert-success">
        Le magasin est ouvert
    </div>
    <div class="div aler alert-danger">
        Le magasin est fermé
    </div>
    <ul>
      <?php foreach(JOURS as $k => $jour): ?>

        <li <?php if ($k + 1 === (int)date('N')): ?> style="color:green" <?php endif ?>>
          <strong><?= $jour ?></strong> :
        <?= creneaux_html(CRENEAUX[$k]); ?>
      </li>
        <?php endforeach ?>
    </ul>
    </div>
  </div>
</main>
<!-- Begin page content -->




<?php require 'footer.php'; ?>