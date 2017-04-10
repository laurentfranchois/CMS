

    <?php $view->inc('elements/header.php');
  ?>
  <div class="container">
    <?php
    $a = new Area('Contenu');
    $a->display($c);
?>

  </div>

    <?php  $view->inc('elements/footer.php'); ?>
