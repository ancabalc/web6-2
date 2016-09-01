<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    
    <link rel="stylesheet" href="assets/css/style.css" type="text/css" />

    <title><?php echo $title;?></title>
</head>
<body>
    <header>
        header
    </header>
    
    <div class="content">
        <?php include $pageContent; ?>
    </div>
    
    <footer>
        footer
    </footer>
    <script type="text/javascript" src="//code.jquery.com/jquery-2.2.1.js"></script>
    <script type="text/javascript" src="assets/js/passwordsafety.js"></script>
</body>
</html>