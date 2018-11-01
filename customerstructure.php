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
body
{
  background: url(background.jpg);
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
input[type=search]
{
  width: 401px;
  margin-left: -78px;   
  text-align: center;
}
input[type=submit]
{
  text-align: center;
  margin-top: -32px;
  color: white;
  background-color:#2A4863;
  height: 28px;
  margin-top: 0px;
  margin-left: 20px; 
}
input[type=button]
{
  text-align: center;
  margin-top: -32px;
  color: white;
  background-color:#2A4863;
  height: 28px;
  margin-top: 0px;
  margin-left: 20px; 
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
<h1 style="text-align: center;background-color:#2A4863;height: 117px;padding: 35px;color: white;">Customer Representation Table</h1>
</div>
<form action="" method="post">
  <div class="row" style="margin-top: -357px;margin-left: 540px;">
  <input name="search" type="search" Placeholder="Value To Search" autofocus>
  <input type="submit" name="button" value="Filter">
  <input type="button" onclick="goBack()" name="goback" value="Go Back"></button>
  <script>
    function goBack()
    {
       window.history.back();
    }
  </script>
  </div>  
</form>
<?php
include('connection.php');
if(isset($_POST['button']))
{
  $search1=$_POST['search'];
  // echo $search1;
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
?>
</body>
</html>