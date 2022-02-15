<html>
    <body>
        <link rel="stylesheet" type="text/css" href="billsrch.css">
        <h1 align="centre">BILL SEARCH</h1>
        <h4><marquee>..enter the bill number you want to search for..</marquee></h4>
        <div class="box">
        <form action="#" method="post" class="form">
            <?php
                $con=mysqli_connect('sql101.epizy.com','epiz_24622903','dYGz1pHYgYMi','epiz_24622903_php_project');
                $qry="select * from bill INNER JOIN orders ON bill.order_id=orders.order_id ";
                $rs=mysqli_query($con,$qry);
            ?>

            <label>Enter Bill No</label> <input type="text" name="txtBillNo"><br>

            <input type="submit" name="btnSearch" value="Search">

            <table border ='1' >
                <tr>
                    <th style{color:white;}>Item Number</th>
                    <th  style{color:white;}>Name</th>
                    <th  style{color:white;}>Amount</th>
                    <th style{color:white;}>Quantity</th>
                </tr>
            <?php
                $con=mysqli_connect('sql101.epizy.com','epiz_24622903','dYGz1pHYgYMi','epiz_24622903_php_project');
                $qry="select * from bill INNER JOIN orders ON bill.order_id=orders.order_id  where Bill_No='".$_POST['txtBillNo']."'";
                $rs=mysqli_query($con,$qry);
                if(isset($_POST['btnSearch']))
                {
                    while($row=mysqli_fetch_array($rs))
                    {
                        echo "<tr>";
                        echo "<form action='' method = 'post' class='form'>";
                        echo "<td><input type='text' name='txtItemNo' value = '".$row['Item_No']."'></td>";
                        echo "<td><input type='text' name='txtName' value = '".$row['customer_name']."'></td>";
                        echo "<td><input type='text' name='txtAmount' value = '".$row['Amount']."'></td>";
                        echo "<td><input type='text' name='txtQty' value = '".$row['quantity']."'></td>";
                        echo "</form>";
                        echo "</tr>";
                    }
                }
            ?>
            </table><br>
            <button>
         <a href="admin_home.php" class="btn">BACK TO PERSONAL PAGE</a>
    </button>
        </form>
        </div>
        
    </body>
</html>