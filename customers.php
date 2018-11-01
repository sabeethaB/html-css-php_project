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
  background-size: auto;
}
table
{
  /*border: 5px solid #2A4863;*/
  border-collapse: collapse;
  width: 70%;
  height: 500px;
  background: transparent;
  margin-top: -370px;
  margin-left: 219px;
  border-radius: 20px !important;
  padding: 5px !important;
}
th
{
  color: white;
  background-color: #2A4863;
  /*height:5px;*/
  padding: 5px !important;
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
input[type=button]
{
  padding: 5px;
  text-align: center;
  margin-top: 5px;
  color: white;
  background-color:#2A4863;
  margin-left: 88px; 
}
</style>
<body>
<form action="" method="POST">
<div class="header">
<h1 style="text-align: center;background-color:#2A4863;height: 117px;padding: 35px;color: white;">Customer Details</h1>
<input type="submit" name="signout" value="Sign_out" style="float:right;margin-top: -85px;margin-right: 46px;background-color:#2A4863 ;color:white;">
<input type="button" onclick="goBack()" name="goback" value="Go Back"></button>
</div>
</form>
<script>
function goBack()
{
  window.history.back();
}
</script>
</body>
</html>
<?php
include('connection.php');
mysqli_select_db("mydatabase");
$detail=mysqli_query($conn, "SELECT `firstname`, `lastname`, `email`, `password` FROM `mydatatable`");
echo "<table>";
echo "<tr><th>First Name</th><th>Last Name</th><th>Email</th><th>Password</th></tr>";
while($row=mysqli_fetch_array($detail, MYSQLI_ASSOC))
{
  echo "<tr><td>";
  echo $row['firstname'];
  echo "</td><td>";
  echo $row['lastname'];
  echo "</td><td>";
  echo $row['email'];
  echo "</td><td>";
  echo $row['password'];
  echo "</td></tr>";
}
echo "</table>";
if(isset($_POST['signout']))
{
  header('Location:login.php');
}
?>
