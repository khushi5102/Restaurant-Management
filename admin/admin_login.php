<html>
    <HEAD>
        <title>ADMIN LOGIN</title>
    </HEAD>
    <body>
        <link rel="stylesheet" type="text/css" href="admins.css">
        <div class="loginbox">
            <img src="avatar.jpg" class="avatar">
            <H1 align="center">ADMIN LOGIN</H1>
            <form action="#" method="post">
                <div class="form_input"><br>
                    User Name:<input type="text" name="txtUName" placeholder="Enter your username">
                </div><br>
                <div class="form_input">
                    Password<input type="password" name="pwd" placeholder="Enter your password">
                </div><br>
                <input type="submit" name="submit" value="LOGIN"><br>
            </form>
        </div>
        <div class="button">
        <a href="../index.php" class="btn">BACK TO FRONT PAGE</a>
        </div>
        <?php
            if(isset($_POST['submit']))
            {
                $con=mysqli_connect('sql101.epizy.com','epiz_24622903','dYGz1pHYgYMi','epiz_24622903_php_project');
                $Uname=$_POST['txtUName'];
                $password=$_POST['pwd'];
                $qry="Select * from admin where ID='".$Uname."' AND Password= '".$password."'";
                $result=mysqli_query($con,$qry);

                if(mysqli_num_rows($result)>0)
                {
                    header("location:admin_home.php");
                }
                else
                {
                    echo "<p style{color:white;text-align:center;font-size:30px;}>User Name/Password Incorrect</p>";
                    exit();
                }
            }
        ?>  
    </body>
</html>
