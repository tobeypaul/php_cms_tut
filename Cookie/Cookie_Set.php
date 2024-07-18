<!DOCTYPE>

<html>
<head>
    <title>Setting Cookie</title>
    </head>
    <body>
    <?php  ?>
    <?php
        $ExpireTime=time()+86400;
        setcookie("Name", "Jazeb",$ExpireTime);
        setcookie("Age","24", $ExpireTime);
        echo 'my name is : '. $_COOKIE["Name"].' and my age is'.$_COOKIE["Age"]."<br>";
        ?>
    
    
    </body>


</html>