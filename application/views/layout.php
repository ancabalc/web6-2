
<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">

    <title><?php echo $title;?></title>
     <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
      
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css" type="text/css">
    

    <script type="text/javascript" src="//code.jquery.com/jquery-2.2.1.js"></script>
    
    <script type="text/javascript" src="//ajax.aspnetcdn.com/ajax/jquery.validate/1.15.1/jquery.validate.js"></script>
    
    <script type="text/javascript" src="<?php echo base_url();?>/assets/js/tether.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.3/js/bootstrap.min.js" integrity="sha384-ux8v3A6CPtOTqOzMKiuo3d/DomGaaClxFYdCu2HPMBEkf6x2xiDyJ7gkXU0MWwaD" crossorigin="anonymous"></script>

    <script type="text/javascript" src="<?php echo base_url();?>/assets/js/helpers/common.js"></script>

    <script type="text/javascript" src="<?php echo base_url();?>/assets/js/createFormVaidation.js"></script>

    <script src="https://use.fontawesome.com/31bddb0d74.js"></script>
        <!-- Latest compiled and minified JQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
         <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
    <header>
        <div class="menu-top">
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-menu-collapse">
                        <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="#page-top"> 
                        LOGO
                    </a>
                </div>
                 <div class="collapse navbar-collapse navbar-menu-collapse">
                    <ul class="menu nav navbar-nav navbar-right">
                        <li>
                            <a  href="<?php echo base_url();?>">Cereri</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url();?>/create">Creeaza cont</a>
                        </li>
                        <li>
                            <a  href="<?php echo base_url();?>/login">Intra in cont</a>
                        </li>
                    </ul>
                </div>
        </nav>
        </div>
    </header>
    
    
    <div class="content">
        <?php include $pageContent; ?>
    </div>
    
    <footer>
        footer
    </footer>
    
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/js/umd/tooltip.js" integrity="sha256-ziCfLy91WAidvbK53uuAfylbZ/UvOKVn/X+Q32qBfxI=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="<?php echo base_url();?>/assets/js/passwordsafety.js"></script>
   
</body>
</html>