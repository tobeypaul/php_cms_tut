<!DOCTYPE>
<html>
<head>
    <title>PHP FILE</title>
    </head>
    <body>
        
        <!--<?php  ?><br>-->     
        <?php  
        
        print_r($_POST);
        
        
        $Username=$_POST["Username"];
        $Password=$_POST["Password"];
        $Submit=$_POST["Submit"];
        if(isset($_POST['Submit'])){
            echo "Successful Login<br>";
            echo "Welcome : {$Username}<hr>";
        }
        /*if(isset($Username) && !empty($Username)){
            echo "Username is set with the name of : {$Username}<br>";
        }else{
            echo "No username detected";
        }
        if(isset($Password) && !empty($Password)){
            echo "Password is : {$Password}<br>";
        }else{
            echo "No password detected";
        }*/
        if(isset($_POST["Username"])){
            $Username=$_POST["Username"];
            echo "$Username <br>";
        }else{
            $Username="";
        }
        if(isset($_POST["Password"])){
            $Password=$_POST["Password"];
            echo "$Password <br>";
        }else{
            $Password="";
        }
        
        ?><br>
        
        
    </body>
</html>