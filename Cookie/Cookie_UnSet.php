<?php
        $ExpireTime=time()+86400;
        setcookie("Name", "Jazeb",$ExpireTime);
        setcookie("Age","24", $ExpireTime);
        //UnSet Cookie
        $ExipreTime_Unset=time()-86400;
        //setcookie("Name","Jazeeb",$ExipreTime_Unset);
        setcookie("Name",null);
        
        if(isset($_COOKIE['Name'])){
            echo 'Cookie is set with the Name of '.$_COOKIE['Name'];
        }else{
            echo 'Cookie is not set';
        }
        
        ?>
<!DOCTYPE>

<html>
<head>
    <title>Setting Cookie</title>
    </head>
    <body>
    <?php  ?>
    
    
    
    </body>

</html>