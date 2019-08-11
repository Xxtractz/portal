<?php
use Core\Session;
use Core\FH;
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title><?=$this->siteTitle(); ?></title>
    <link rel="stylesheet" href="<?=PROOT?>css/custom.css?v=<?=VERSION?>" media="screen" title="no title" charset="utf-8">
    <link rel="stylesheet" href="<?=PROOT?>css/alertMsg.min.css?v=<?=VERSION?>" media="screen" title="no title" charset="utf-8">

      <!-- Font Awesome -->
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
      <!-- Bootstrap core CSS -->
      <link type="text/css" href="<?=PROOT?>css/bootstrap.min.css" rel="stylesheet">
      <!-- Material Design Bootstrap -->
      <link type="text/css" href="<?=PROOT?>css/mdb.min.css" rel="stylesheet">
      <!-- Your custom styles (optional) -->
      <link type="text/css" href="<?=PROOT?>css/style.css" rel="stylesheet">
      <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js"></script>

    <?= $this->content('head'); ?>

  </head>
  <body>
    <?php include 'main_menu.php' ?>
    <div class="container-fluid pb-5" style="min-height: calc(100vh - 72px);">
      <?= Session::displayMsg() ?>
      <?= $this->content('body'); ?>
    </div>
    <script src="<?=PROOT?>js/jQuery-3.3.1.min.js"></script>
    <script src="<?=PROOT?>js/popper.min.js" crossorigin="anonymous"></script>
    <script src="<?=PROOT?>js/alertMsg.min.js?v=<?=VERSION?>"></script>
    <!-- JQuery -->
    <script type="text/javascript" src="<?=PROOT?>js/jquery-3.4.1.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="<?=PROOT?>js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="<?=PROOT?>js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="<?=PROOT?>js/mdb.min.js"></script>
  </body>
</html>
