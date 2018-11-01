<?php  
include('connection.php'); 
 $sql = "DELETE FROM `customertable` WHERE customerid = '".$_POST["customerid"]."'";  
 if(mysqli_query($conn, $sql))  
 {  
      echo 'Data Deleted';  
 }  
 ?>
