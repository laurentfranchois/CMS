<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">
    <title>Factorian</title>
    <!-- Bootstrap core CSS -->
    <link href="<?php echo $view->getThemePath(); ?>./bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="<?php echo $view->getThemePath(); ?>./accueil2.css" rel="stylesheet">

    <?php Loader::element('header_required');?>

  </head>
<br>
<br>
<br>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-md-4">
            <a href="accueil.php"><img src="<?php echo $view->getThemePath();?>/logo.png"></a>
        </div>
        <div class="col-md-8" id="navbar">
            <?php
              $a=new GlobalArea('Menu');
              $a->display($c);
             ?>
        </div>
      </div>
    </div>
