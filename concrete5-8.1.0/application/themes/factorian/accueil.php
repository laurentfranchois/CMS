<?php $view->inc('elements/header.php') ?>

    <div class="row">
      <div class="col-md-12">
        <?php
        $a = new Area('zone1');
        //$a -> enableGridContainer();
        $a -> display($c);
        ?>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <?php
          $a = new Area('zone2');
          //$a -> enableGridContainer();
          $a -> display($c);
          ?>
        </div>
        <div class="col-md-4">
          <?php
          $a = new Area('zone3');
          //$a -> enableGridContainer();
          $a -> display($c);
          ?>
        </div>
        <div class="col-md-4">
          <?php
          $a = new Area('zone4');
          //$a -> enableGridContainer();
          $a -> display($c);
          ?>
        </div>

      </div>
    </div>
       <!-- /container -->
      <div class="row" id="first">
        <div class="col-md-12" id="zone5">
          <?php $a = new Area('zone5');
          //$a -> enableGridContainer();
          $a -> display($c);
          ?>
        </div>
        <div class="container">
        <div class="row">
          <div class="col-md-12">
            <?php
            $a = new Area('zone6');
            //$a -> enableGridContainer();
            $a -> display($c);
            ?>
          </div>
        </div>
        </div>

    </div>



<?php $view->inc('elements/footer.php') ?>
