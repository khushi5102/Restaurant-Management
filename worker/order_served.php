<?php
	$con=mysqli_connect('sql101.epizy.com','epiz_24622903','dYGz1pHYgYMi','epiz_24622903_php_project');
	$qry="update orders set status = 'completed' where order_id = '".$_POST['txtDispOrderID']."'";
	if(mysqli_query($con,$qry))
	{
		header("location:order_management.php");
	}
	else
	{
		echo "Not Updated";
	}

?>