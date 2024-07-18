
<!DOCTYPE>
<html>
<head>
    <title>Static Variables</title>
    </head>
    <body>
        
        <?php  ?><br>       
        <?php  
        
        function NormalV(){
            $value=1;
            echo $value."<br>";
            $value++;
        }
        NormalV();
        NormalV();
        NormalV();
        NormalV();
        function StaticV(){
            static $value=1;
            echo $value."<br>";
            $value++;
        }
        StaticV();
        StaticV();
        StaticV();
        StaticV();
        
        ?><hr>
        <?php  ?><br> 
    </body>
</html>