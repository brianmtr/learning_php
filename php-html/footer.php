<footer class="footer mt-auto py-3 bg-light">
  <div class="container">
    <div class="row">
        <ul>
        <li class="nav-item">
            <a class="nav-link  <?php if ($nav === 'index'): ?>active<?php endif; ?>" href="/index.php">accueil</a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php if ($nav === 'contact'): ?>active<?php endif; ?>" href="/contact.php">contact</a>
          </li>
        </ul>
    </div>
  </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>