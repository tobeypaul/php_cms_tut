<!DOCTYPE>
<html>
<head>
    <title>User Defined Functions</title>
    </head>
    <body>
        
        <?php  ?><br>       
        <?php  
        
        function Welcome(){
            echo "Welcome to PHP course <br>";
        }
        

        function Addition_Using_Function_Parameter($x,$y){
            $Result=$x+$y;
            echo "Addition Using Function Parameter is: {$Result} <br>";
        }

        
        ?><hr>
        <?php  ?><br> 
    </body>
</html>