<?php
    include "include/head.php";
    //var_dump($menu_a_afficher);

?>

  <main>
    <div class="container">
        <h1><?php echo $titre?></h1>
        <h2>Entrée</h2>
        <?php echo $entree ?>

        <h2>Plat</h2>
        <?php echo $plat ?>

        <h2>Dessert</h2>
        <?php echo $dessert ?>

    </div>
  </main>


<?php
include "include/footer.php";
?>
