<?php  
 $connect = mysqli_connect("localhost", "root", "root", "mydatabase");  
 $sql = "DELETE FROM tablecreation WHERE id = '".$_POST["id"]."'";  
 if(mysqli_query($connect, $sql))  
 {  
      echo 'Data Deleted';  
 }  
 ?>
