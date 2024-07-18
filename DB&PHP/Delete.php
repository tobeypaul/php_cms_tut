<?php 
$connection=mysqli_connect("localhost", "root", "#icuni4cu@");
$Selected=mysqli_select_db($connection, 'record');
$Delete_record_id=mysqli_real_escape_string($connection, $_GET['Delete']);

$Delete_Query="DELETE FROM emp_record WHERE id='$Delete_record_id'";
$Execute=mysqli_query($connection, $Delete_Query);
if($Execute){
    echo '<script>window.open("Delete_From_Database.php?Deleted=Record Deleted Successfully","_self")</script>';
}


?>