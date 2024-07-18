<!DOCTYPE>
<html>
<head>
    <title>For each loop structure</title>
    </head>
    <body>
        
        <?php  ?><br>       
        <?php  
        
        $Number=array(8,60,168,995,45,25,5,100);
        foreach($Number as $Num){
            echo "Numbers: {$Num} <br>";
        }
        ?><hr>
        
        <?php  
        
        $Food=array(
                "item_number"=>1050,
                "name"=>"Pizza",
                "region"=>"Italy",
                "Side_food"=>"Pasta",
                "drink"=>"Coca Cola",
                "package_price"=>12000
        );
        foreach($Food as $Key=>$Value){
            $Data=ucwords(str_replace("_", " ", $Key));
            if($Key=="package_price"){
                if(is_numeric($Value)){
                }else{
                    $Value="Cannot be determined";
                }
            }
            echo "{$Data} : {$Value}<br>";
        }
        ?><br> 
    </body>
</html>