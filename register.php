<?php include('connection.php'); ?>
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
form
{
	width: 40%;
	height:500px;
	background-color: #4DAEB4;
	margin-left: 444px;
  margin-top: -313px;
  text-align: center;
  padding: 50px;
  border: 20px solid #2A4863;
  border-radius: 20px;
  background: transparent;
}
button
{
	padding: 5px;
	text-align: center;
	margin-top: 24px;
	color: white;
	background-color:#2A4863; 
}
input[type=button]
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
<h1 style="text-align: center;background-color:#2A4863;height: 117px;padding: 35px;color: white;">Registration Page</h1>
</div>
<form method="POST" action="">
First Name: <input type="text" name="firstname" id="firstname" style="margin-left: 30px;"></input><br><br>
Last Name: <input type="text" name="lastname" id="lastname" style="margin-left: 30px;"></input><br><br>
Email: <input type="text" name="email" id="email" style="margin-left: 65px;"></input><br><br>
<?php
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$password = $_POST['password'];

$check_email = mysqli_query($conn, " SELECT `email` FROM `mydatatable` WHERE email='$email'");
if(mysqli_num_rows($check_email)> 0)
{
    ?><span style="color:red;"><?php echo('Enter valid email'); ?></span></br></br><?php
}
else
{
      $result = mysqli_query($conn, "INSERT INTO `mydatatable`(`firstname`, `lastname`, `email`, `password`) VALUES ('$firstname','$lastname','$email','$password')");
    ?><span style="color:#2F441D;"><?php echo('New Email Registered'); ?></span></br><?php
}
?>
Password: <input type="text" name="password" id="password" style="margin-left: 34px;"></input><br><br>
<input type="button" onclick="goBack()" name="goback" value="Go Back"></button>
<button type="submit" id="submit" class="submit">Register</button>
<script>
function goBack()
{
  window.history.back();
}
</script>
<P>if already have any account, <span style="color:white;">please <a href="login.php">Login</a></span></P>
</form>
</body>
</html>
