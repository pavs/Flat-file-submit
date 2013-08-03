<?php
/* Configuration */
$dataFile = './data/data.csv';

/* Required Files */
require_once './process/write.php'; 
/* require_once './process/read.php'; */
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Submit Your Favorite Quotes</title>
        <link href="css/stylesheet.css" rel="stylesheet" media"screen">
       <link rel="stylesheet" type="text/css" href="./css/screen.css"> 
    </head>
    <body>
    </br>
        <button type="button" class="btn btn-primary"><a href="index.php">Back to Quotes</a></button>

        <br/>
        <div class="wrap">

        <div id="form">
            <form action="<?php echo basename(__FILE__); ?>" method="post">
                <p><label for="posting_user">Who Said it:</label></p>
                <p><input type="text" name="posting_user" size="40" <?php if (isset($_POST['posting_user']))
                echo 'value="' . $_POST['posting_user'] . '"';
            ?>> </p>

            <!--
                <label for="posting_site">Site (Without http://)</label>
                <input type="text" name="posting_site" size="20" <?php if (isset($_POST['posting_user']))
                           echo 'value="' . $_POST['posting_site'] . '"';
            ?>> 
            -->
                <p><label for="posting_message">Quote:</label></p>
                <p><textarea name="posting_message" rows="8" cols="100"> <?php if (isset($_POST['posting_user']))
                           echo $_POST['posting_message'];
            ?></textarea></p>
                <p><input type="submit" class= "btn" name="submit" value="Post!"></p>
            </form>
        </div>
    </div>
    </body>
</html>
