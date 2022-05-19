<?php
if (!isset($_SESSION)) {
    session_start();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css2?family=Robotodisplay=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/styledevis.css">
    <link rel="stylesheet" href="./css/styleCharges.css">
    <link rel="stylesheet" href="./css/styleformulaire.css">
    <link rel="stylesheet" href="./css/style.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>Business Intelligence Tool</title>
</head>
<body>
    <div class="container">
        
        <header>
            <nav class="navbar fixed-top">
                <div class="container">
                    <a href="index.html" class="navbar-brand">
                        <img
                        class="logo"
                        src="./pictures/Logo.svg"
                        alt="Logo FinDevCompany"
                        />
                    </a>
                    <h1>Business Intelligence Tool</h1>
                    <button type="button" class="btn btn-outline-danger">
                        <span>Déconnexion</span>
                    </button>
                </div>
            </nav>
        
        </header>

        <main>


        <!-- ============================================================================================================== -->
        <!-- ============================================================================================================== -->
        <!-- ============================================================================================================== -->
        <?= $pageContent ?>
        <!-- ============================================================================================================== -->
        <!-- ============================================================================================================== -->
        <!-- ============================================================================================================== -->
        </main>
        <footer>
            <a href="#" class="text-dark">
                <span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
                    </svg>
                    Retour au menu principal
                </span>
            </a>
        </footer>


      </div>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>  
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>



</body>
</html>