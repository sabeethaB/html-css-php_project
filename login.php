<?php 
include('connection.php'); ?>
<!DOCTYPE html>
<html>
<head>
  <title>Sabeetha Application</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script> -->
  <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script> -->
</head>
<style>
.header
{
  width:100%;
	height:500px !important;
}
form
{
	width: 40%;
	height:350px;
	background-color: #4DAEB4;
	margin-left: 444px;
  margin-top: -295px;
  text-align: center;
  padding: 50px;
  border: 20px solid #2A4863;
  border-radius: 20px;
  background: transparent;
}
input[type=submit]
{
	padding: 2px;
	text-align: center;
	margin-top: 17px;
	color: white;
	background-color:#2A4863; 
}
input[type=button]
{
  padding: 2px;
  text-align: center;
  margin-top: 17px;
  color: white;
  background-color:#2A4863; 
}
p 
{
margin-top: 20px;
}
a
{
	color:#2A4863;
}
a:hover
{
	color:red;
}
body
{
  background: url(background.jpg);
}
input[type=text]
{
  width: 55%;
}
</style>
<body>
<div class="header">
<h1 style="text-align: center;background-color:#2A4863;height: 117px;padding: 35px;color: white;">Login Page</h1>
</div>
<form method="POST" action="">
Email: <input type="text" name="email"  style="margin-left: 30px;"><br><br>
Password: <input type="text" name="password" ><br><br>
<input type="button" onclick="goBack()" name="goback" value="Go Back"></button>
<input type="submit" value="submit"><br><br>
<script>
function goBack()
{
  window.history.back();
}
</script>
<?php include('test.php'); ?>
<P>if doesn't have any account, <span style="color:white;">please <a href="register.php">Register</a></span></P>
</form>
</body>
</html>
