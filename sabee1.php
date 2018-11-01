<!DOCTYPE html>
<html>
<head>
  <title>Sabeetha Application</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<style>
.header
{
  width:100%;
  height:500px !important;
}
button
{
  padding: 5px;
  text-align: center;
  margin-top: 24px;
  color: white;
  background-color:#2A4863; 
}
p 
{
margin-top: 20px;
}
body
{
  background: url(background.jpg);
}
input[type=text]
{
  width: 55%;
}
.portlet-box-green
{
  width: 80%;
  height: 500px;
  border: 5px solid #2A4863;
  border-radius: 10px;
  margin-top: -345px;
  margin-left: 140px;
  text-align: center;
}
.portlet-title span
{
  font-size: 20px;
  color:white;
}
.portlet-title
{
  background-color: #2A4863;
  width: 100%;
  height: 30px;
}
input[type=submit]
{
  padding: 4px;
  text-align: center;
  margin-top: -32px;
  color: white;
  background-color:#2A4863;
  height: 30px; 
}
input[type=button]
{
  padding: 4px;
  text-align: center;
  margin-top: -32px;
  color: white;
  background-color:#2A4863;
  height: 30px;  
}
button[type=clear]
{
  padding: 4px;
  text-align: center;
  margin-top: -32px;
  color: white;
  background-color:#2A4863;
  height: 30px; 
  width:50px; 
}
table
{
  /*border: 5px solid #2A4863;*/
  border-collapse: collapse;
  width: 70%;
  height: 50px;
  background: transparent;
  margin-top: 32px;
  margin-left: 182px;
  border-radius: 20px !important;
  padding: 2px !important;
}
th
{
  color: white;
  background-color: #2A4863;
  height:5px;
  padding: 2px !important;
  text-align: center;
  /*border-bottom: none;*/
 /*background: transparent;*/
}
td
{
   color: #2A4863;
   background: transparent;
   text-align: center;
  /* border-bottom: none;*/
}
tr,td,th,table
{
   border: 1px solid #2A4863;
}
</style>
<body>
<div class="header">
<h1 style="text-align: center;background-color:#2A4863;height: 117px;padding: 35px;color: white;">Customer Form</h1>
</div>
<div class="page-content-wrapper">
<div class="page-content">
      <div class="portlet-box-green">
      <div class="portlet-title"><span class="caption">Customer Identity</span></div>
      <div class="portlet-body">
        <form action="" method="POST">
          <div class="row" style="margin-top: 50px;">
                  <div class="col-md-6">
                  <div class="form-group">
                  <label for="customer_id">Customer Id:</label>
                  <input type="text" name="customer_id" id="customer_id"></input>            
                  </div>
                  </div>
                  <div class="col-md-6">
                  <div class="form-group">
                  <label for="customer_name">Customer Name:</label>
                  <input type="text" name="customer_name" id="customer_name"></input>            
                  </div>
                  </div>                             
          </div>
          <div class="row" style="margin-top: 50px;">           
                  <div class="col-md-6">
                  <div class="form-group">
                  <label for="Phone_number" style="margin-left: -24px;">Phone Number:</label>
                  <input type="text" name="Phone_number" id="Phone_number"></input>            
                  </div>
                  </div>
                  <div class="col-md-6">
                  <div class="form-group">
                  <label for="city" style="margin-left:90px;">City:</label>
                  <input type="text" name="city" id="city"></input>            
                  </div>
                  </div>                            
          </div>
          <div class="row" style="margin-top: 50px;">           
                  <div class="col-md-6">
                  <div class="form-group">
                  <label for="state" style="margin-left: 40px;">State:</label>
                  <input type="text" name="state" id="state"></input>            
                  </div>
                  </div>
          </div>
          <div class="row" style="margin-top: 70px;margin-left: 455px;">
          <input type="button" onclick="goBack()" name="goback" value="Go Back">
          <script>
              function goBack()
                {
                  window.history.back();
                }
          </script>          
          <input type="submit" name="submit1" value="insert">
          <input type="submit" name="submit2" value="update">
          <input type="submit" name="submit3" value="delete">
          <input type="submit" name="submit4" value="show">
          <button type="clear" name="submit5" value="clear">clear</button>
          </div>       
        </form>  
      </div>
      </div>
</div>
</div> 
</body>
</html>
<?php
include('connection.php');
$customerid=$_POST['customer_id'];
$customername=$_POST['customer_name'];
$phonenumber=$_POST['Phone_number'];
$city=$_POST['city'];
$state=$_POST['state'];
// echo $customerid;
// echo $customername;
// echo $phonenumber;
// echo $city;
// echo $state;
if(isset($_POST['submit1']))
{
  $sql1="INSERT INTO `customertable`(`customerid`, `customername`, `phonenumber`, `city`, `state`) VALUES ('$customerid','$customername','$phonenumber','$city','$state')";
  if(mysqli_query($conn,$sql1))
  {
    ?><span style="color:green;text-transform: capitalize;font-size: 20px;"><?php echo "Row inserted successfully"; ?></span><?php
  }
}
if(isset($_POST['submit2']))
{
  $sql2="UPDATE `customertable` SET `customerid`='$customerid',`customername`='$customername',`phonenumber`='$phonenumber',`city`='$city',`state`='$state' WHERE `customerid`='$customerid'";
  if(mysqli_query($conn,$sql2))
  {
    ?><span style="color:green;text-transform: capitalize;font-size: 20px;"><?php echo "Row Updated successfully, update based on customer_id"; ?></span><?php
  }
}
if(isset($_POST['submit3']))
{
  $sql3="DELETE FROM `customertable` WHERE `customerid`='$customer_id'";
  if(mysqli_query($conn,$sql3))
  {
    ?><span style="color:green;text-transform: capitalize;font-size: 20px;"><?php echo "Row Deleted successfully, deletion based on customer_id"; ?></span><?php
  }
}
if(isset($_POST['submit4']))
{
  $sql4=mysqli_query($conn,"SELECT * FROM `customertable`");
  echo "<table>";
  echo "<tr><th>Customer_Id</th><th>Customer_Name</th><th>Phone_Number</th><th>City</th><th>State</th></tr>";
  while($row=mysqli_fetch_array($sql4))
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


