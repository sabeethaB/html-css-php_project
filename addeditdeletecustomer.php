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
	height:200px !important;
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
  width: 50%;
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
/*.container
{
  margin-top: -3px;
  margin-left: 680px;
  color: #2A4863;
}*/
</style>
<body>
<div class="header">
<h1 style="text-align: center;background-color:#2A4863;height: 117px;padding: 35px;color: white;">Customer Details</h1>
<input type="button" onclick="goBack()" name="goback" value="Go Back"></button>
              <div class="table-responsive">   
                <div id="live_data"></div>                 
                </div>  
</div> 
<script>
function goBack()
{
  window.history.back();
}
 $(document).ready(function(){  
      function fetch_data()  
      {  
           $.ajax({  
                url:"addeditdeletebackend.php",  
                method:"POST",  
                success:function(data){  
                     $('#live_data').html(data);  
                }  
           });  
      }  
      fetch_data();  
      $(document).on('click', '.btn_delete', function(){  
           var customerid=$(this).data("id5");  
           if(confirm("Are you sure you want to delete this?"))  
           {  
                $.ajax({  
                     url:"deletedataaed.php",  
                     method:"POST",  
                     data:{customerid:customerid},  
                     dataType:"text",  
                     success:function(data){  
                          alert(data);  
                          fetch_data();  
                     }  
                });  
           }  
      });  
 });  
</script>
</body>
</html>
