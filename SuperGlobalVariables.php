<!DOCTYPE>
<html>
<head>
    <title>Super Global Variables</title>
    </head>
    <body>
        
        <?php  ?><br>       
        <?php 
        
        $x=75;
        $y=25;
        function addition(){
            
            $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
        }
        addition();
        print_r($GLOBALS);
        echo "<br>".$z;
        ?><hr>
        <?php  ?><br> 
    </body>
</html>