<html>
<head></head>
<body>
<form action="" method="post">
  <input name="search" type="search" autofocus>
  <input type="submit" name="button">
</form>
<?php
include('connection.php');
if(isset($_POST['button']))
{
  $search1=$_POST['search'];
  echo $search1;
  $query=mysqli_query( $conn ," SELECT `customerid`, `customername`, `phonenumber`, `city`, `state` FROM `customertable` WHERE `customerid` LIKE '%{$search1}%' || `customername` LIKE '%{$search1}%'|| `phonenumber` LIKE '%{$search1}%'|| `city` LIKE '%{$search1}%'||`state` LIKE '%{$search1}%'");
  // print_r($query);
  echo "<table>";
  echo "<tr><th>Customer Id</th><th>Customer Name</th><th>Phone Number</th><th>City</th><th>State</th></tr>";
  while($row=mysqli_fetch_array($query))
  {
    echo "<tr><td>";
    echo $row['customerid'];
    echo "</td><td>";
    echo $row['customername'];
    echo "</td><td>";
    echo $row['phonenumber'];
    echo "</td><td>";
    echo $row['city'];
    echo "</td><td>";
    echo $row['state'];
    echo "</td></tr>";
  }
  echo "</table>";
}
else
{
   $query=mysqli_query( $conn ," SELECT * FROM `customertable`");
   print_r($query);
   echo "<table>";
   echo "<tr><th>Customer Id</th><th>Customer Name</th><th>Phone Number</th><th>City</th><th>State</th></tr>";
  while($row=mysqli_fetch_array($query))
  {
    echo "<tr><td>";
    echo $row['customerid'];
    echo "</td><td>";
    echo $row['customername'];
    echo "</td><td>";
    echo $row['phonenumber'];
    echo "</td><td>";
    echo $row['city'];
    echo "</td><td>";
    echo $row['state'];
    echo "</td></tr>";
  }
  echo "</table>";
}
?>
</body>
</html>