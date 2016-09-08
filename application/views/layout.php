<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    
    <link rel="stylesheet" href="assets/css/style.css" type="text/css" />

    <title><?php echo $title;?></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.3/css/bootstrap.min.css" integrity="sha384-MIwDKRSSImVFAZCVLtU0LMDdON6KVCrZHyVQQj6e8wIEJkW4tvwqXrbMIya1vriY" crossorigin="anonymous">
    <script type="text/javascript" src="//code.jquery.com/jquery-2.2.1.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.3/js/bootstrap.min.js" integrity="sha384-ux8v3A6CPtOTqOzMKiuo3d/DomGaaClxFYdCu2HPMBEkf6x2xiDyJ7gkXU0MWwaD" crossorigin="anonymous"></script>
</head>
<body>
    <header>
        <div class = "container">
        <div class = "col-sm-3">
            <h3>LOGO</h3>
        </div>

    <div class = "col-sm-9" >
    
        <a href="#"style = "color:black">Cereri |</a>
        
        <a href="#"style = "color:black">Creeaza cont |</a>
        <a href="#"style = "color:black">Intra in cont</a>

    </div>
    </div>
    </header>
    
    
    <div class="content">
        <?php include $pageContent; ?>
    </div>
    
    <footer>
        footer
    </footer>
    <script type="text/javascript" src="assets/js/passwordsafety.js"></script>
</body>
</html>