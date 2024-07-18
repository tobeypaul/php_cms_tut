<?php
$connection=mysqli_connect("localhost", "root", "#icuni4cu@");
$Selected=mysqli_select_db($connection, 'record');
$Update_Record=mysqli_real_escape_string($connection, $_GET['Update']);
$ShowQuery="SELECT * FROM emp_record WHERE id='$Update_Record'";
$Update=mysqli_query($connection, $ShowQuery);
while($DataRows=mysqli_fetch_array($Update)){
    $Update_Id=$DataRows['id'];
    $EName=$DataRows['enam'];
    $SSN=$DataRows['ssn'];
    $Dept=$DataRows['dept'];
    $Salary=$DataRows['salary'];
    $HomeAddress=$DataRows['homeaddress'];
}

?>


<!DOCTYPE>
<html>
<head>
    <title>Update . PHP</title>
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
        <form action="Update.php?Update_Id=<?php echo $Update_Id;?>" method="post">
        <fieldset>
            
            <span class="FieldInfo">Employee Name:</span><br><input type="text" Name="EName" value="<?php echo $EName;?>"><br>
            <span class="FieldInfo">Social Security Number:</span><br><input type="text" Name="SSN" value="<?php echo $SSN;?>"><br>
            <span class="FieldInfo">Department:</span><br><input type="text" Name="Dept" value="<?php echo $Dept;?>"><br>
            <span class="FieldInfo">Salary:</span><br><input type="text" Name="Salary" value="<?php echo $Salary;?>"><br>
            <span class="FieldInfo">Home Address:</span><br><textarea Name="HomeAddress"><?php echo $HomeAddress;?></textarea><br>
            <br><input type="Submit" Name="Submit" value="Update"><br>
            </fieldset>
        
        
        
        
        
        </form>
        
        </div>
        
        
    <?php ?>
    
    
    
    </body>

</html>


<?php
$connection=mysqli_connect("localhost", "root", "#icuni4cu@");
if(isset($_POST["Submit"])){
    if(!empty($_POST["EName"]) && !empty($_POST["SSN"])){
$Update_id=mysqli_real_escape_string($connection, $_GET['Update_Id']);
$ENam=mysqli_real_escape_string($connection, $_POST["EName"]);
$Ssn=mysqli_real_escape_string($connection, $_POST["SSN"]);
$Dep=mysqli_real_escape_string($connection, $_POST["Dept"]);
$Slry=mysqli_real_escape_string($connection, $_POST["Salary"]);
$Homeaddress=mysqli_real_escape_string($connection, $_POST["HomeAddress"]);
    

$Selected=mysqli_select_db($connection, 'record');
$UpdateQuery= "UPDATE emp_record SET enam='$ENam', ssn='$Ssn', dept='$Dep', salary='$Slry',homeaddress='$Homeaddress' WHERE id='$Update_id'";
$Execute=mysqli_query($connection, $UpdateQuery);
if($Execute){
    function redirect_to($NewLocation){
        header("Location:".$NewLocation);
        exit;
    }
    redirect_to("Update_Into_Database.php?Updated=Record Update Successful");
}else{
        echo '<span class="success">Record Has Not Been Added</span>';
    }
}
   
    }
 ?>