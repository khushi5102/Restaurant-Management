<html>
    <head>
    <titile>WORKER LOGIN</titile>
    </head>
    <body>
        <link rel="stylesheet" type="text/css" href="worker.css">
        <div class="loginbox">
            <img src="login.jpeg" class="login">
            <H1 ALIGN="CENTER">WORKER LOGIN</H1>
            <form action="#" method="post">
                <div class="form_input"><br>
                User Name:<input type="text" name="txtUName" placeholder="Enter your username">
                </div><br>
                <div class="form_input">
                Password<input type="password" name="pwd" placeholder="Enter your password">
                </div><br>
                <input type="submit" name="submit" value="LOGIN" class="btn" >
            </form><br>
        
            <div class="button">
              <center>  <a href="../index.php" class="btn"> BACK TO FRONT PAGE</a></center>
            </div>
        </div>
        <?php
        $con=mysqli_connect('sql101.epizy.com','epiz_24622903','dYGz1pHYgYMi','epiz_24622903_php_project');
        if(isset($_POST['submit']))
            {
                $Uname=$_POST['txtUName'];
                $password=$_POST['pwd'];
                $qry="Select * from worker where ID='".$Uname."' AND Password= '".$password."'";
                $result=mysqli_query($con,$qry);

            if(mysqli_num_rows($result)>0)
                {
                  header("location:order_management.php");
                }
            else
                {
                echo "<p style{color:white;text-align:center; font-size:30px;}>User Name/Password Incorrect</p>";
                exit();
                }
            }
        ?>    
    </body>
</html>
