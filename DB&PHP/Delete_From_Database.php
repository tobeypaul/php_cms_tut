<!DOCTYPE>

<html>
<head>
    <title>Delete From Database</title>
    </head>
    
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
    .success, caption{
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
    <body>
        <div>
    <form action="Search_From_Database.php" method="GET">
        <fieldset>
            <input type="text" Name="Search" value="" placeholder="Search by Employee Name or SSN">
            <input type="Submit" Name="SearchButton" value="Search">
        </fieldset>
        </form>
            </div>
    <h2 class="success"><?php echo @$_GET['Deleted'];?></h2>
    <?php  ?>
    <table width="1000" border="5" align="center">
        <caption>View From Database</caption>
        <tr>
        <th>ID</th>
        <th>Employee Name</th>
        <th>SSN</th>
        <th>Department</th>
        <th>Salary</th>
        <th>Home Address</th>
        <th>Delete</th>
        <th>Update</th>
        
        
        
        </tr>
        
<?php  
        
$connection=mysqli_connect("localhost", "root", "#icuni4cu@");
$Selected=mysqli_select_db($connection, 'record');
$ViewQuery="SELECT * FROM emp_record";
$Execute=mysqli_query($connection, $ViewQuery);
while($DataRows=mysqli_fetch_array($Execute)){
    $Id=$DataRows['id'];
    $Ename=$DataRows['enam'];
    $SSN=$DataRows['ssn'];
    $Dept=$DataRows['dept'];
    $Salary=$DataRows['salary'];
    $HomeAddress=$DataRows['homeaddress'];


        ?><tr>        
        <td><?php echo $Id;?></td>
        <td><?php echo $Ename;?></td>
        <td><?php echo $SSN;?></td>
        <td><?php echo $Dept;?></td>
        <td><?php echo $Salary;?></td>
        <td><?php echo $HomeAddress;?></td>
        <td><a href="Delete.php?Delete=<?php echo $Id;?>">Delete</a></td>
        <td>Update</td>
        <?php } ?></tr>
        </table>
    
    
    </body>

</html>