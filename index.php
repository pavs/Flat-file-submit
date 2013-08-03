<!DOCTYPE html>
<html>
<head>
	<title></title>

<link rel="stylesheet" type="text/css" href="./css/screen.css">


</head>
<body>

<button type="button" class="btn btn-primary"><a href="submit.php">Submit a Quote</a></button>

<?php

$dataFile = './data/data.csv';
require_once './process/read.php';

?>


<?php
        if ($error !== false):
?>

        <div id="error"><?php echo $error; ?></div>
            
<?php
        endif;
?>
        
            
<?php
  
            
            if (!empty($contents)) {
                foreach ($posts as $post):
                	
                
                	
?>

       <div id="container">
       <div id="content">
                    
            <blockquote><?php echo $post['postedMessage']; ?> </blockquote>                         
            <p class="cite">- <?php echo $post['postingUser']; ?> </p>
                        
       </div> 
       </div>  
	
<?php

                endforeach;
            } else {
                echo '';
            }
 
?>




</body>
</html>


