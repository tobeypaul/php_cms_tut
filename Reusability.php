<?php 
require("FunctionFile.php"); ?>
<!DOCTYPE>
<html>
<head>
    <title>Reusability</title>
    </head>
    <body>
        
        <?php  ?><br>       
        <?php 
        Welcome();
        $foo=Addition_Using_Function_Parameter(15,10);
        echo $foo;
        ?><hr>
        <?php  ?><br> 
    </body>
</html>