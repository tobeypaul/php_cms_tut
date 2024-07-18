<?php
if(isset($_POST["Submit"])){
$Username=$_POST["Username"];
$Password=$_POST["Password"];

if($Username=="Jazeeb" && $Password=="Akram"){
    echo "<h2>Welcome : {$_POST["Username"]}</h2>";
}else{
    echo "Account Doesn't exist | Try Again";
}
}else{
    echo "<h2>Login Required</h2>";
} 
?>

<!DOCTYPE>
<html>
<head>
    <title>Forms</title>
    </head>
    <body>
        
        <!--<?php  ?><br>       
        <?php  ?><br>-->
        
        <fieldset>
            <legend>HTML 5 Form</legend>
            <form action="Forms.php" method="POST">
            <label for="username">Username:</label>
            <input id="Username" type="text" name="Username"><br><br>
            <label for="Password">Password:</label>
            &nbsp;<input id="Password" type="Password" name="Password"><br><br>
            <input type="Submit" name="Submit" value="Submitted">
            </form>
        </fieldset>
        
    </body>
</html>