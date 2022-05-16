<?php
if (!isset($_SESSION)) {
    session_start();
}
?>
<!doctype html>
<html lang="fr">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css2?family=Robotodisplay=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title><?php $pageTitle ?></title>
  </head>
  
<body>
  <div class="container">
    <header class="row">
      <div class="image">
        <img src="logoFinDevCompany.jpg" class="logo">
      </div>
    </header>
    <main class="row">


        <!-- ============================================================================================================== -->
        <!-- ============================================================================================================== -->
        <!-- ============================================================================================================== -->
        <?= $pageContent ?>
        <!-- ============================================================================================================== -->
        <!-- ============================================================================================================== -->
        <!-- ============================================================================================================== -->
        </main>
    <footer class="row">
      <p class="toolName">Business Intelligence Tool</p>
    </footer>
  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
</body>  
</html>