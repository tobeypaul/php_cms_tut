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
        Welcome();echo "<hr>";
        function Addition(){
            $a=5;
            $b=2;
            $c=$a+$b;
            echo "Addition is $c <br>";
        }
        Addition();echo "<hr>";
        function Addition_Using_Function_Parameter($x,$y){
            $Result=$x+$y;
            echo "Addition Using Function Parameter is: {$Result} <br>";
        }
        Addition_Using_Function_Parameter(12,4);
        Addition_Using_Function_Parameter(120,44);
        Addition_Using_Function_Parameter(1200, 84);echo "<hr>";
        function Addition_Using_Return($p,$q){
            $F=$p+$q;
            return $F;
        }
        $Total=Addition_Using_Return(50,50);
        echo $Total;
        
        ?><hr>
        <?php  ?><br> 
    </body>
</html>