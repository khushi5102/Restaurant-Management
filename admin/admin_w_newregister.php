<html>
<body>
<center><h1>REGISTRATION FORM</h1>></center>>
<marquee><h3>Please enter the details of the new Worker!!</h3></marquee>
Worker ID<input type="text" name="txtId"><br>
Worker Name<input type="text" name="txtWName"><br>
Role
<select name="cmbRole">
<?php
$con=mysqli_connect('sql101.epizy.com','epiz_24622903','dYGz1pHYgYMi','epiz_24622903_php_project');
$qry="select role from worker";
$rs=mysqli_query($con.$qry);
while($row=mysqli_fetch_array($rs))
{
echo "<option value='$row['role']'>"
echo $row['role'];
echo "</option>";
}
?>
</select><br>
Date of Joining<input type="text" name="txtDOJ"><br>
Password<input type="password" name="txtPass"><br>
Confirm Password<input type="password" name="txtConPass"><br>
<?php
$link=mysqli_connect('sql101.epizy.com','epiz_24622903','dYGz1pHYgYMi','epiz_24622903_php_project');
$wid=$_POST['txtWid'];
        $wName=$_POST['txtWName'];
        $role=$_POST['cmbRole'];
        $dd=$_POST['dd'];
        $mm=$_POST['mm'];
        $yy=$_POST['yyyy'];
        $doj=$yy."-".$mm."-".$dd;
        $pwd=$_POST['pwd'];
        $qry="INSERT into worker value('$wid','$wName','','$doj','$pwd')";
        if(mysqli_query($link,$qry))
        {
        header(location:WRegister.php);
        }
        else
        {
        echo "Failed to Save! Try Again!";
        }
?>
</body>>
</html>