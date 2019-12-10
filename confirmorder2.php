<?php 
require "db.php";
include('session1.php');
$price= $_POST['price'];
$email=$_SESSION['email'];
$sql = mysqli_query($con,"SELECT * from user where email='$email'");
$row = mysqli_fetch_assoc($sql);


$cid=$row['cust_id'];
$date= date("Y-m-d h:i:s");
$date1= date("Y-m-d");
$cardname = $_POST['cardname'];
$cardnumber = $_POST['cardnumber'];
$expmonth = $_POST['expmonth'];
$expyear = $_POST['expyear'];
$cvv = $_POST['cvv'];

$firstline = $_POST['firstline'];
$secondline=$_POST['secondline'];
$pincode = $_POST['pincode'];

echo $cid."</br>";
  echo $date."</br>";
  echo $price."</br>";
  echo $firstline."</br>";
  echo $secondline."</br>";
  echo $pincode."</br>";
 echo $cardname."</br>";
  echo $cardnumber."</br>";
  echo $expmonth."</br>";
  echo $expyear."</br>";
  echo $cvv."</br>";
  echo $pincode."</br>"; 
$sql = "update cart set valid='2', date='$date' where user_id='$cid' and valid='1'";	
	
	
	

if(mysqli_query($con,$sql))
{
	?>
	<script>
	alert("cart successfull");
	//window.location="cart.php";
	</script><?php
	$sql="insert into payment values ('$cid','$cardname','$cardnumber','$expmonth','$expyear','$cvv','$price')";

	
if(mysqli_query($con,$sql))
{ ?>
	<script>
	alert("payment successfull");
	//window.location="cart.php";
	</script><?php
	$sql="insert into ordertable values ('','$cid','$date','$price','Not Delivered','$date','$firstline','$secondline','$pincode')";
	
if(mysqli_query($con,$sql))
{
	
	?>
	
	
	<script>
	alert("Order successfull");
	//window.location="cart.php";
	</script>
<?php }

}} 
?>