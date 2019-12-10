<?php 
require "db.php";
include('session1.php');

$email=$_SESSION['email'];
$sql = mysqli_query($con,"SELECT * from user where email='$email'");
$row = mysqli_fetch_assoc($sql);


$cid=$row['cust_id'];

$sql = "delete from cart where user_id='$cid' and valid='1'";

if(mysqli_query($con,$sql))
{
	?>
	
	
	<script>
	alert("Cart cleared");
	window.location="cart.php";
	</script>
	<?php
}
	?>
	