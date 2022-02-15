<html>
    <body>
        <link rel="stylesheet" href="srch-worker.css">
        <h1 align="center">SEARCH WORKER FORM</h1>
        <marquee><h4>Select the radio button as per your requirement and fill the entry and click on the search button to get the output in the TABLE BELOW!!</h4></marquee><br>
        <h2>Search on the basis of:</h2><br>
        <form action="#" method="post" class="form">
            <div class="box">
            <input type= "radio" name="rdb" value="ID"><lable>ID</lable>
            <select name="cmbID">
                <?php
                    $con=mysqli_connect('sql101.epizy.com','epiz_24622903','dYGz1pHYgYMi','epiz_24622903_php_project');
                    $qry="select * from worker";
                    $rs=mysqli_query($con,$qry);
                        while($row=mysqli_fetch_array($rs))
                        {
                            $id=$row['ID'];
                            echo "<option value = '$id'>";
                            echo $id;
                            echo "</option>";
                        }
                    ?>
            </select>
            <input type="submit" value="Search" name="btnSearchId"><br>

            <input type= "radio" name="rdb" value="Name"><lable>Name</lable>
            <input type= "text" name="txtName">
            <input type="submit" value="Search" name="btnSearchName"><br>

            <input type= "radio" name="rdb" value="Role"><lable>Role</lable>
            <select name="cmbRole">
                <?php
                    $con=mysqli_connect('sql101.epizy.com','epiz_24622903','dYGz1pHYgYMi','epiz_24622903_php_project');
                    $qry="select DISTINCT role from worker";
                    $rs=mysqli_query($con,$qry);
                        while($row=mysqli_fetch_array($rs))
                        {
                            $Role=$row['role'];
                            echo "<option value = '$Role'>";
                            echo $Role;
                            echo "</option>";
                        }
                ?>
            </select>
            <input type="submit" value="Search" name="btnSearchRole"><br>
            <input type= "radio" name="rdb" value="DOJ"><lable>DOJ</lable>
            <input type="text" name="txtDOJ" placeholder="YYYY-MM-DD">
            <input type="submit" value="Search" name="btnSearchDOJ"><br>
            </div>
            <div class="table">
                <?php
                    if(isset($_POST['btnSearchId']))
                    {
                        $con=mysqli_connect('sql101.epizy.com','epiz_24622903','dYGz1pHYgYMi','epiz_24622903_php_project');
                        $q1="select * from worker where id = '".$_POST['cmbID']."'";
                        $rs=mysqli_query($con,$q1);
                        echo "<table  border='1' class='table-w'>";
                        echo "<tr>";
                        echo "<th>ID</th>";
                        echo "<th>Name</th>";
                        echo "<th>Role</th>";
                        echo "<th>Date of Joining</th>";
                        echo "</tr>";
                        while($row=mysqli_fetch_array($rs))
                        {
                            echo "<tr>";
                            echo "<td><input type='text' name='txtId' value = '".$row['ID']."'></td>";
                            echo "<td><input type='text' name='txtName' value = '".$row['name']."'></td>";
                            echo "<td><input type='text' name='txtRole' value = '".$row['role']."'></td>";
                            echo "<td><input type='text' name='txtDOJ' value = '".$row['DOJ']."'></td>";
                            echo "</tr>";
                        }
                        echo "</table>";
                    }

                    if(isset($_POST['btnSearchName']))
                    {
                        $con1=mysqli_connect('sql101.epizy.com','epiz_24622903','dYGz1pHYgYMi','epiz_24622903_php_project');
                        $qry1="select * from worker where name = '".$_POST['txtName']."'";
                        $rs1=mysqli_query($con1,$qry1);
                        echo "<table  border='1' class='table-w'>";
                        echo "<tr>";
                        echo "<th>ID</th>";
                        echo "<th>Name</th>";
                        echo "<th>Role</th>";
                        echo "<th>Date of Joining</th>";
                        echo "</tr>";
                        while($row1=mysqli_fetch_array($rs1))
                        {
                            echo "<tr>";
                            echo "<td><input type='text' name='txtId' value = '".$row1['ID']."'></td>";
                            echo "<td><input type='text' name='txtName' value = '".$row1['name']."'></td>";
                            echo "<td><input type='text' name='txtRole' value = '".$row1['role']."'></td>";
                            echo "<td><input type='text' name='txtDOJ' value = '".$row1['DOJ']."'></td>";
                            echo "</tr>";
                        }
                        echo "</table>";
                    }

                if(isset($_POST['btnSearchRole']))
                {
                    $con=mysqli_connect('sql101.epizy.com','epiz_24622903','dYGz1pHYgYMi','epiz_24622903_php_project');
                    $qry="select * from worker where role = '".$_POST['cmbRole']."'";
                    $rs=mysqli_query($con,$qry);
                    echo "<table   border='1'class='table-w'>";
                    echo "<tr>";
                    echo "<th>ID</th>";
                    echo "<th>Name</th>";
                    echo "<th>Role</th>";
                    echo "<th>Date of Joining</th>";
                    echo "</tr>";
                    while($row=mysqli_fetch_array($rs))
                        {
                        echo "<tr>";
                        echo "<td><input type='text' name='txtId' value = '".$row['ID']."'></td>";
                        echo "<td><input type='text' name='txtName' value = '".$row['name']."'></td>";
                        echo "<td><input type='text' name='txtRole' value = '".$row['role']."'></td>";
                        echo "<td><input type='text' name='txtDOJ' value = '".$row['DOJ']."'></td>";
                        echo "</tr>";
                        }
                    echo "</table>";
                    }

                if(isset($_POST['btnSearchDOJ']))
                {
                    $con=mysqli_connect('sql101.epizy.com','epiz_24622903','dYGz1pHYgYMi','epiz_24622903_php_project');
                    $qry="select * from worker where DOJ='".$_POST['txtDOJ']."'";
                    $rs=mysqli_query($con,$qry);
                    echo "<table   border='1'class='table-w'>";
                    echo "<tr>";
                    echo "<th>ID</th>";
                    echo "<th>Name</th>";
                    echo "<th>Role</th>";
                    echo "<th>Date of Joining</th>";
                    echo "</tr>";
                    while($row=mysqli_fetch_array($rs))
                    {
                        echo "<tr>";
                        echo "<td><input type='text' name='txtId' value = '".$row['ID']."'></td>";
                        echo "<td><input type='text' name='txtName' value = '".$row['name']."'></td>";
                        echo "<td><input type='text' name='txtRole' value = '".$row['role']."'></td>";
                        echo "<td><input type='text' name='txtDOJ' value = '".$row['DOJ']."'></td>";
                        echo "</tr>";
                    }
                    echo "</table>";
                }
            ?>
         </div>
                <a href="admin_home.php" class="btn">GO BACK TO PERSONAL PAGE</a>
        </form>
    </body>
</html>