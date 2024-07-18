<!DOCTYPE>

<html>
<head>
    <title>File 2</title>
    </head>
    <body>
    
        <?php  ?>
        <pre>
        <?php  
        print_r($_GET);
        ?>
        </pre>
        <br>
        <?php  $Name=$_GET['Name'];
        echo $Name; 
        ?><br>
        <?php  $Position=$_GET['Position'];
        echo $Position; 
        ?>
    
    </body>
</html>