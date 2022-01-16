<?php include_once("./functions/generics.php") ?>

<?php 

  function displayNavbarItemsDesktop($file){

    ?>
      <?php if (!(empty($_GET["page"])) and (strtolower($_GET["page"]) == removePHPExtension($file))) : ?>
        <a class="nav-link active" aria-current="page" href="./?page=<?= removePHPExtension($file) ?>"><?= removePHPExtension($file) ?></a>
      <?php else: ?>
        <a class="nav-link" aria-current="page" href="./?page=<?= removePHPExtension($file) ?>"><?= removePHPExtension($file) ?></a>
      <?php endif;?>
    <?php

  }

?>