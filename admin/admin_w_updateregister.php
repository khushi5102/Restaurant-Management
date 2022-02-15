<?php
$con=mysqli_connect('sql101.epizy.com','epiz_24622903','dYGz1pHYgYMi','epiz_24622903_php_project');
$qry="update worker set name = '".$_POST['txtDispName']."', role = '".$_POST['txtDispRole']."', DOJ = '".$_POST['txtDispDOJ']."' where id = '".$_POST['txtDispId']."'";//update query
if(mysqli_query($con,$qry))
{
    header("location:admin_wregisteration.php");
}
else
{
echo "Not Updated!";
}
?>
