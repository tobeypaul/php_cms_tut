<!DOCTYPE>
<html>
<head>
    <title>User Defined Functions</title>
    </head>
    <body>
        
        <?php  ?><br>       
        <?php  
        
        $Number=3564562;
        function Addition(){
            global $Number;
            $a=5;
            $b=2;
            $c=$a+$b;
            echo "New global addition".($Number+$c)."<br>";
            echo "Addition is $c <br>";
        }
        Addition();
        
        ?><hr>
        <?php  ?><br> 
    </body>
</html>