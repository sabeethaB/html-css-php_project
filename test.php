<?php
// include"login.php";
include"connection.php";
$email=$_POST['email'];
$password=$_POST['password'];
$db = mysqli_query($conn, "SELECT `email`, `password` FROM `mydatatable` where `email`='$email' and `password`='$password'");
$array=array();
while($con=mysqli_fetch_array($db))
{
$obj=new stdclass();
$obj->email=$con['email'];
$obj->password=$con['password'];
array_push($array,$obj);
}
// // echo json_encode($array);
// echo "<br>";
// print_r($array);
// echo "<br>";
for($i=0;$i<count($array);$i++)
{
	if($array[$i]->email!=NULL)
	{
		header("location:customers.php");
	}
    else
    {
	    ?><span style="color:red;font-size: 18px;"><?php echo "Enter valid details"; ?></span><?php
    }

	// echo "<br>";
	// print_r($array[$i]->password);
}
// foreach ($array as $value ) {
// 	print_r($value);
// 	foreach ($value as $val) {
// 		echo $val['email'];
// 	}
// 	# code...
// }

?>