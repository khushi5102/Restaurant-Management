<html>
    <body>
        <link rel="stylesheet" type="text/css" href="_update.css">
        <h1 >WORKER MENU UPDATION</h1>
        <div class="button">
            <a href="worker_login.php" class="btn">GO BACK TO LOGIN PAGE</a>
        </div>
        <div class="table">
            <table border="1" class="table-u">
                <th>Item No.</th>
                <th>Item Name</th>
                <th>Category</th>
                <th>Price</th>
                    <?php
                        $con=mysqli_connect('sql101.epizy.com','epiz_24622903','dYGz1pHYgYMi','epiz_24622903_php_project');
                        $qry="SELECT * FROM  `menu` ";
                        $rs=mysqli_query($con,$qry);
                        while($row=mysqli_fetch_array($rs))
                        {
                            echo "<tr>";
                            echo "<form action='#' method='post' class='form-table'>";
                            echo "<td><input type='text' name='txtItno1' value = '".$row['Item_No']."'></td>";
                            echo "<td><input type='text' name='txtItnm1' value = '".$row['name']."'></td>";
                            echo "<td><input type='text' name='cat1' value = '".$row['category']."'></td>";
                            echo "<td><input type='text' name='txtPrice1' value = '".$row['rate']."'></td>";
                            echo "<td><input type='submit' name='btnUpdate' value='Update' ></td>";
                            echo "<td><input type='button' name='btnDelete' value='Delete' ></td>";
                            echo "</form>";
                            echo "</tr>";
                        }
                            echo "<tr>";
                            echo "<form action='#' method='post' class='form-table'>";
                            echo "<td><input type='text' name='txtItno'> </td>";
                            echo "<td><input type='text' name='txtItnm'> </td>";
                            echo "<td><input type='text' name='cat'> </td>";
                            echo "<td><input type='text' name='txtPrice' ></td>";
                            echo "<td><input type='submit' name='btnAdd' value='Add' ></td>";
                    ?>
            </table><br>
        <?php
            if(isset($_POST['btnUpdate']))
                {
                    $ItemNo=$_POST['txtItno1'];
                    $ItemName=$_POST['txtItnm1'];
                    $Price=$_POST['txtPrice1'];
                    $Category=$_POST['cat1'];
                    $con1=mysqli_connect('sql101.epizy.com','epiz_24622903','dYGz1pHYgYMi','epiz_24622903_php_project');
                    $qry1="update menu set item_name ='$ItemName', category ='$Category', rate = '$Price' where Item_No = '$ItemNo'";
                    $a=mysqli_query($con1,$qry1);
                }
                if(isset($_POST['btnDelete']))
                {
                    $ItemNo=$_POST['txtItno1'];
                    $con1=mysqli_connect('sql101.epizy.com','epiz_24622903','dYGz1pHYgYMi','epiz_24622903_php_project');
                    $qry1="DELETE  from menu where Item_No = '$ItemNo'";
                }
            if(isset($_POST['btnAdd']))
            {
                $ItemNo=$_POST['txtItno'];
                $ItemName=$_POST['txtItnm'];
                $Price=$_POST['txtPrice'];
                $Category=$_POST['cat'];
                $con1=mysqli_connect('sql101.epizy.com','epiz_24622903','dYGz1pHYgYMi','epiz_24622903_php_project');
                $qry1="INSERT into menu values('$ItemNo','$ItemName','$Category',$Price)";
            }
        ?>
        <div class="button">
            <a href="worker_login.php" class="btn">GO BACK TO LOGIN PAGE</a>
        </div>
        </div>
    </body>
</html>