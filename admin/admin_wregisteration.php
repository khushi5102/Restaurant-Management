<html>
    <body>
        <link rel="stylesheet" type="text/css" href="change.css">
        <div class="container">
    <h1><center>WORKER REGISTRATION</center></h1>
    <br><br>
    <?php
    $con=mysqli_connect('sql101.epizy.com','epiz_24622903','dYGz1pHYgYMi','epiz_24622903_php_project');
    $qry="select * from worker";//select query
    $rs= mysqli_query($con,$qry);
    ?>
        <div class="table-w">
    <table border = '1' class="table-w">
    <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Role</th>
    <th>Date of Joining</th>
    </tr>
    <?php
    while($row = mysqli_fetch_array($rs))
    {

    echo "<tr>";
    echo "<form action='admin_w_updateregister.php' method='post' class='form-input'>";
    echo "<td><input type='text' name='txtDispId' value= '".$row['ID']."'></td>";
    echo "<td><input type='text' name='txtDispName' value= '".$row['name']."'></td>";
    echo "<td><input type='text' name='txtDispRole' value= '".$row['role']."'></td>";
    echo "<td><input type='text' name='txtDispDOJ' value= '".$row['DOJ']."'>";
    echo "<td><input type='submit' value='Update'></td>";
    echo "</form>";
    echo "<form action ='admin_w_deleteregister.php' method='post'>";
    echo "<td><input type='submit' value='Delete' ></td>";
    echo "</form>";
    echo "</tr>";
    }
    echo "<tr>";
    echo "<td><input type='text' name='txtDispId1' ></td>";
    echo "<td><input type='text' name='txtDispName1' ></td>";
    echo "<td><input type='text' name='txtDispRole1' ></td>";
    echo "<td><input type='text' name='txtDispDOJ1' ></td>";
    echo "<td><input type='submit' name='add' value='Add'></td>";
    echo "</tr>";
    ?>
    </table>
            <?php
            if(isset($_POST['add']))
            {
                $link=mysqli_connect('sql101.epizy.com','epiz_24622903','dYGz1pHYgYMi','epiz_24622903_php_project');
                $wid=$_POST['txtDispId1'];
                $wName=$_POST['txtDispName1'];
                $role=$_POST['txtDispRole1'];
                $doj=$_POST['txtDispDOJ1'];

                $qry="INSERT into worker values('$wid','$wName','','$role','$doj') ";
                if(mysqli_query($link,$qry))
                    {
                     header("location:admin_wregisteration.php");
                    }
                else
                    {
                    echo "Failed to Save! Try Again!";
                    }
            }
            ?>
            </div>
        <div class="button">
        <a href="admin_home.php" class="btn">BACK </a>
        </div>
        </div>   
    </body>
</html>