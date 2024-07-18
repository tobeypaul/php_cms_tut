<!DOCTYPE>

<html>
<head>
    <title>URL</title>
    </head>
    <body>
    
        <?php  ?>
        <?php  
        $Web="Google Pakistan";
        $Search="Jazeeb Akram Online Courses & Website";
        $Result="https://".rawurlencode($Web)."?Search=".urlencode($Search);
        echo $Result;
        
        ?>
    
    </body>
</html>