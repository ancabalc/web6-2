<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">

    <title><?php echo $title;?></title>
    <!-- Latest compiled and minified BOOTSTRAP 4  -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.3/css/bootstrap.min.css" integrity="sha384-MIwDKRSSImVFAZCVLtU0LMDdON6KVCrZHyVQQj6e8wIEJkW4tvwqXrbMIya1vriY" crossorigin="anonymous">
     <!-- Latest  JQuery -->
    <script   src="https://code.jquery.com/jquery-3.1.0.js"   integrity="sha256-slogkvB1K3VOkzAI8QITxV3VzpOnkeNVsKvtkYLMjfk="   crossorigin="anonymous"></script>
     <!-- Latest compiled and minified CSS -->
    <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">-->
    <!-- Optional theme -->
    <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">-->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css" type="text/css">
    
    <script type="text/javascript" src="//ajax.aspnetcdn.com/ajax/jquery.validate/1.15.1/jquery.validate.js"></script>
    
    <script type="text/javascript" src="<?php echo base_url();?>/assets/js/tether.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.3/js/bootstrap.min.js" integrity="sha384-ux8v3A6CPtOTqOzMKiuo3d/DomGaaClxFYdCu2HPMBEkf6x2xiDyJ7gkXU0MWwaD" crossorigin="anonymous"></script>
    
    <script type="text/javascript" src="<?php echo base_url();?>/assets/js/helpers/common.js"></script>

    
    <script type="text/javascript" src="<?php echo base_url();?>/assets/js/createFormVaidation.js"></script>

    <script src="https://use.fontawesome.com/31bddb0d74.js"></script>
        <!-- Latest compiled and minified JQuery -->
        <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>-->
         <!-- Latest compiled and minified JavaScript -->
    <!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>-->
</head>
<body>
    <header>
                <nav class="navbar navbar-light bg-faded">
                <a class="navbar-brand" href="#page-top">LOGO</a>
                    <button class="navbar-toggler hidden-sm-up" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar2" aria-controls="exCollapsingNavbar2" aria-expanded="false" aria-label="Toggle navigation">&#9776;</button>
                    <div class="collapse navbar-toggleable-xs" id="exCollapsingNavbar2">
                      <ul class="nav navbar-nav pull-sm-right">
                        <li class="nav-item active">
                          <a class="nav-link" href="<?php echo base_url();?>">Cereri <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="<?php echo base_url();?>offers">Oferte </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="<?php echo base_url();?>create">Creaza cont</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="<?php echo base_url();?>login">Intra in cont</a>
                        </li>
                      </ul>
                      </div>
                </nav>
        <!--</nav>-->
        <!--</div>-->
    </header>
    
    
    <div class="content">
        <?php include $pageContent; ?>
    </div>
    
    <footer>
        footer
    </footer>
    
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/js/umd/tooltip.js" integrity="sha256-ziCfLy91WAidvbK53uuAfylbZ/UvOKVn/X+Q32qBfxI=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="<?php echo base_url();?>/assets/js/passwordsafety.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>/assets/js/offerslist.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>/assets/js/createApp.js"></script>
   
</body>
</html>