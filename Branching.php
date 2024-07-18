<!DOCTYPE>
<html>
<head>
    <title>Branching Statements</title>
    </head>
    <body>
        
        <?php  ?><br>       
        <?php  
        
        $Names=array("jazeeb", "akram", "Ali", "Alex", "Tait", "Shaan", "David", "Roth");
        for($i=0;$i<=7;$i++){
            if($Names[$i]=="Alex"){
                break;
            }echo $Names[$i]."<br>";
        }
        
        ?><hr>
        <?php  ?><br> 
    </body>
</html>