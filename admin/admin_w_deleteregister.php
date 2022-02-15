<?php
$con = mysqli_connect('sql101.epizy.com','epiz_24622903','dYGz1pHYgYMi','epiz_24622903_php_project');
$qry="delete from worker where ID = '".$_POST['txtDispId']."'";

if(mysqli_query($con,$qry))
{
    header("location:admin_wregisteration.php");
}
else
{
echo "Could not DELETE!";
}
?>