<html>
<body>
    <link rel="stylesheet" type="text/css" href="manageorder.css">
    <H1 align="center">ORDER MANAGEMENT</H1>
	<table border='1' class="table">
		<tr>
			<th>Order ID</th>
			<th>Customer Name</th>
			<th>Item</th>
			<th>Quantity</th>
            <th></th>
		</tr>
            <h3>PENDING ORDERS</h3>
			<?php
				$con=mysqli_connect('sql101.epizy.com','epiz_24622903','dYGz1pHYgYMi','epiz_24622903_php_project');
				$qry="SELECT * FROM `orders` INNER JOIN `menu` on `orders`.Item_No = `menu`.`Item_No` WHERE `status`='pending'";
                $rs=mysqli_query($con,$qry);
				while($row=mysqli_fetch_array($rs))
				{
					echo "<tr>";
                    echo "<form action='order_served.php' method='post'>";
					echo "<td><input type='text' name='txtDispOrderID' value = '".$row['order_id']."'></td>";
					echo "<td><input type='text' name='txtDispCustName' value = '".$row['customer_name']."'></td>";
					echo "<td><input type='text' name='txtDispItem' value = '".$row['name']."'></td>";
					echo "<td><input type='text' name='txtDispQuantity' value = '".$row['quantity']."'></td>";
					echo "<td><input type='submit' name='btnServed' value='Serve'></td>";
					echo "</form>";
                    echo "</tr>";
				}
			?>
	</table>
	<table border='1' class="table">
		<tr>
			<th>Order ID</th>
			<th>Customer Name</th>
			<th>Item</th>
			<th>Quantity</th>
		</tr>
        <h3>COMPLETED ORDERS</h3>
		<?php
			$tempcon=mysqli_connect('sql101.epizy.com','epiz_24622903','dYGz1pHYgYMi','epiz_24622903_php_project');
			$tempqry="SELECT * FROM `orders` INNER JOIN `menu` on `orders`.Item_No = `menu`.`Item_No` WHERE `status`='completed'";
            $temprs=mysqli_query($tempcon,$tempqry);
			while($row=mysqli_fetch_array($temprs))	
			{
                echo "<tr>";
				echo "<td><input type='text' name='txtDispOrderID' value = '".$row['order_id']."'></td>";
				echo "<td><input type='text' name='txtDispCustName' value = '".$row['customer_name']."'></td>";
                echo "<td><input type='text' name='txtDispItem' value = '".$row['name']."'></td>";
                echo "<td><input type='text' name='txtDispQuantity' value = '".$row['quantity']."'></td>";
                echo "</tr>";
            }
       ?>
	</table>
     <a href="update_menu.php" class="btn">UPDATE MENU</a>
        <a href="worker_login.php" class="btn">GO BACK TO LOGIN PAGE</a>
</body>
</html>






















































