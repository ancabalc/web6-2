
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Upload Form</title>
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>
    <div class = "info">
       <div class = "col-sm-12">
        <h3>Provider information</h4>
    </div>
    
        <textarea rows="10" cols="30" "text" name="description" placeholder="Description"></textarea>
        <br /><br />
        <?php echo $error;?>
        
        <?php echo form_open_multipart('provider/upload');?>
            
        <input type="file" name="userfile" size="20" />
            
        <br /><br />
            
        <input type="submit" value="upload" />

    </form>
 
 </div>
</body>
</html>


