<!DOCTYPE>
<html>
<head>
    <title>Connection</title>
    </head>
    <body>
    <?php   
        $connection=mysqli_connect("localhost", "root", "#icuni4cu@");
        if($connection){
            echo 'Database connected<br>';
        }else{
            echo 'error';
        }
        $Selected=mysqli_select_db($connection, 'record');
        if($Selected){
            echo 'Databse selected';
        }else{
            echo 'error';
        }
        
        
        ?>
    
    
    
    </body>

</html>