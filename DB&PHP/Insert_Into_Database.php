<?php
$connection=mysqli_connect("localhost", "root", "#icuni4cu@");
$Selected=mysqli_select_db($connection, 'record');
if(isset($_POST["Submit"])){
    if(!empty($_POST["EName"]) && !empty($_POST["SSN"])){
$EName=mysqli_real_escape_string($connection, $_POST["EName"]);
$SSN=mysqli_real_escape_string($connection, $_POST["SSN"]);
$Dept=mysqli_real_escape_string($connection, $_POST["Dept"]);
$Salary=mysqli_real_escape_string($connection, $_POST["Salary"]);
$HomeAddress=mysqli_real_escape_string($connection, $_POST["HomeAddress"]);
    

$Query= "INSERT INTO emp_record(enam, ssn, dept, salary,homeaddress) VALUES('$EName', '$SSN', '$Dept', '$Salary', '$HomeAddress')";
$Execute=mysqli_query($connection, $Query);
if($Execute){
    echo '<span class="success">Record Has Been Added</span>';
}
}
    else{
        echo '<span class="FieldInfoHeading">Please add Name and Social Security Number</span>';
    }
}
 ?>


<!DOCTYPE>
<html>
<head>
    <title>Insert Into Database</title>
    </head>
    <body>
<style type="text/css">
    input[type="text"], textarea{
        border:1px solid_dashed;
        background-color: rgb(221, 216, 212);
        width: 480px;
        padding: .5em;
        font-size: 1.0em;
    }
    input[type="Submit"]{
        color: white;
        font-size: 1.0em;
        font-family: Bitter,Georgia,Times,"Times New Roman",serif;
        width: 200px;
        height: 40px;
        background-color: #5D0580;
        border: 5px solid;
        border-bottom-left-radius: 35px;
        border-bottom-right-radius: 35px;
        border-top-left-radius: 35px;
        border-top-right-radius: 35px;
        border-color: rgb(221,216, 212);
    }
    .FieldInfo{
        color: rgb(251, 174, 44);
        font-family: Bitter,Georgia,Times,"Times New Roman",serif;
        font-size: 1em;
    }
    .success{
        color: rgb(158, 27, 214);
        font-family: Bitter,Georgia,Times,"Times New Roman",serif;
        font-size: 1.4em;
        font-weight: bold;
        font-weight: bold;
    }
    .FieldInfoHeading{
        color: rgb(251, 174, 44);
        font-family: Bitter,Georgia,Times,"Times New Roman",serif;
        font-size: 1.3em;
    }
    div{
        width: 500px;
        margin-left: 360px;
    }
        
        </style>
        
    <div>
        <form action="Insert_Into_Database.php" method="post">
        <fieldset>
            
            <span class="FieldInfo">Employee Name:</span><br><input type="text" Name="EName" value=""><br>
            <span class="FieldInfo">Social Security Number:</span><br><input type="text" Name="SSN" value=""><br>
            <span class="FieldInfo">Department:</span><br><input type="text" Name="Dept" value=""><br>
            <span class="FieldInfo">Salary:</span><br><input type="text" Name="Salary" value=""><br>
            <span class="FieldInfo">Home Address:</span><br><textarea Name="HomeAddress"></textarea><br>
            <br><input type="Submit" Name="Submit" value="Submit Your Record"><br>
            </fieldset>
        
        
        
        
        
        </form>
        
        </div>
        
        
    <?php ?>
    
    
    
    </body>

</html>