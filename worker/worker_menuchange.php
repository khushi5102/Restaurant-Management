<html>
<body>
    <h1 ALIGN="CENTER">WORKER MENU UPDATION</h1>
    <?php
    $con=mysqli_connect('localhost','root','','php_project');
    $qry="select * from menu";
    $res=mysqli_query($con,$qry);
    ?>
<form action="#" method="post">

Item No.<input type="text" name="txtItno"><br><br>
Item Name<input type="text" name="txtItnm"><br><br>
Select Category<select name="cat" >
             <?php
				$con=mysqli_connect('localhost','root','','php_project');
				$qry="select DISTINCT category from menu";
				$rs=mysqli_query($con,$qry);
				while($row=mysqli_fetch_array($rs))
				{
					echo "<option value ='".$row['category']."'>";
					echo $row['category'];
					echo "</option>";
				}
			?>   
    </select><br><br>
Price<input type="text" name="txtPrice"><br><br>
<table border="1">
<th>Item No.</th>
<th>Item Name</th>
<th>Category</th>
<th>Price</th>
</table><br><br>
<input type="submit" name="btnUpdate" value="Update">
<input type="button" name="btnNew" value="New">
<input type="button" name="btnDelete" value="Delete">
<input type="Submit" name="btnSubmit" value="Submit">
<?php
$ItemNo=$_POST['txtItno'];
$ItemName=$_POST['txtItnm'];
$Price=$_POST['txtPrice'];
if(isset($_POST['btnUpdate']))
{
$con1=mysqli_connect('localhost','root','','php_project');
$qry1="update from menu set item_name = '.$ItemName.', category = 'Burgers', price = '.$Price.' where item_no = '.$ItemNo ";
$a=mysqli_query($con1,$qry1);

}
?>
    <a href="worker_login.php" class="btn">GO BACK TO LOGIN PAGE</a>
    </form>
    </body>
</html>