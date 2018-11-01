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
.navigation
{
	margin-top: -383px !important;
	background-color: #CCCCCC;
	width:100%;
	height:50px;
	padding:15px;
	word-spacing: 12px;
	color: white !important;
}
a
{
	color:#2A4863;
}
a:hover
{
	color: #93113F;
}
.clock 
{
   position: absolute;
   top: 50%;
   left: 50%;
   transform: translateX(-49%) translateY(-49%);
   color: #2A4863;
   font-size: 130px;
   font-family: Orbitron;
   letter-spacing: 7px;
}
body
{
	background:url(background.jpg);
}
</style>
<body>
<div class="header">
<h1 style="text-align: center;background-color:#2A4863;height: 117px;padding: 35px;color: white;">Business App</h1>
</div>
<div class="navigation">
<a href="register.php">REGISTER</a>
<a href="login.php">SIGNIN</a>
<a href="customers.php">USER</a>
<a href="chart.php">CHART</a>
<a href="customertable.php">CUSTOMER_REGISTER</a>
<a href="customerstructure.php">CUSTOMER_SEARCH</a>
<a href="validcustomer.php">VALID_CUSTOMER</a>
<a href="addeditdeletecustomer.php">LIVE_DELETE</a>
<a href="sabee1.php">ADD_EDIT_DELETE_INSERT</a>
</div>
<!-- <img src="quotes.jpg" style="width:100%;height:500px;"></img> -->
<div id="MyClockDisplay" class="clock"></div>
<script>
  function showTime(){
    var date = new Date();
    var h = date.getHours(); // 0 - 23
    var m = date.getMinutes(); // 0 - 59
    var s = date.getSeconds(); // 0 - 59
    var session = "AM";
    
    if(h == 0){
        h = 12;
    }
    
    if(h > 12){
        h = h - 12;
        session = "PM";
    }
    
    h = (h < 10) ? "0" + h : h;
    m = (m < 10) ? "0" + m : m;
    s = (s < 10) ? "0" + s : s;
    
    var time = h + ":" + m + ":" + s + " " + session;
    document.getElementById("MyClockDisplay").innerText = time;    
    setTimeout(showTime, 5000);
    }
    showTime();
</script>
<div class="footer" style="background-color:#2A4863;height:60px;margin-top: 470px;">
<p style="color: white;font-size: 14px;padding: 17px;float: left;width:33%;">Application published by <span style="color: #4DAEB4;">Sabeetha Balakrishnan</span></p>
<p style="color: white;font-size: 14px;padding: 17px;float: left;width:33%;">Email id: <span style="color: #4DAEB4;">sabeetha2797@gmail.com</span></p>
<p style="color: white;font-size: 14px;padding: 17px;float: left;width:33%;">Conatact No: <span style="color: #4DAEB4;">9978376483</span></p>
</div>
</body>
</html>