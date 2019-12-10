<?php 
$cid=$_POST['uid'];
$pid=$_POST['pid'];
$color=$_POST['color'];
require "db.php";
include('session1.php');
$sql = "delete from cart where user_id='$cid' and prod_id='$pid' and color='$color' and valid='1'";

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
	