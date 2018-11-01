<?php include('connection.php'); ?>
<?php
$customerid=$_POST['customer_id'];
$customername=$_POST['customer_name'];
$phonenumber=$_POST['Phone_number'];
$city=$_POST['city'];
$state=$_POST['state'];
// echo $customerid."<br>";
// echo $customername."<br>";
// echo $phonenumber."<br>";
// echo $city."<br>";
// echo $state."<br>";
$customertable=mysqli_query($conn,"INSERT INTO `customertable`(`customerid`, `customername`, `phonenumber`, `city`, `state`) VALUES ('$customerid','$customername','$phonenumber','$city','$state')");
if(isset($_POST['submit']))
{
 ?><span style="color:green;"><?php echo "Customer registered successfully"; ?></span><?php
}
else
{ 
  ?><span style="color:red;"><?php echo "Customer not validated"; ?></span><?php
}
?>
