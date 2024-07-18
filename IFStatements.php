<!DOCTYPE>
<html>
<head>
    <title>IF Statement</title>
    </head>
    <body>
        
        <?php  ?><br>       
        <?php 
        $Weather="Sun";
        if($Weather=="Sunny"){
            echo "Weather is pleasant<br>";
        } elseif($Weather=="Rainy") {
            echo "its rainy";
        } elseif($Weather=="Cloudy"){
            echo"Cloud pleasant";
        } else{
            echo "Its hard to forecast weather";
        }
        ?><hr>
        
        <?php  
        $Bought_Product=false;
        if($Bought_Product){
            echo "<h1>Thank You</h1>";
            echo "<p>Your product will be dispatch soon</p>";
        }else{
            echo "<h1>Please wait</h1>";
            echo "<p>Your payment is pocessing</p>";
        }
        ?><hr>
        
        <?php 
        $a=4;
        $b=3;
        $c="Result cannot be out";
        if($b<5 && $a>0 ){
            $c=$a/$b;
        }
        echo $c;
        ?><br> 
    </body>
</html>