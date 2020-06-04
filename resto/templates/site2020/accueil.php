<?php include "include/head.php" ?>
<?php
//var_dump($contenuSite);
?>
  <main>

        <div class="container">
            <h1><?php echo $contenuSite["accueil"]["titre"]?></h1>
            <div>
              <?php
                echo $contenuSite["accueil"]["text"]
                ?>
          </div>
        <div>
  </main>

  <?php include "include/footer.php" ?>
