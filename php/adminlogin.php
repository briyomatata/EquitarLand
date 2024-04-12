<?php

session_start();

include("../php/connection.php");

if(isset($_POST["login"])){
    $email = $_POST["email"];
    $password = $_POST["password"];

    $Sql = "SELECT * FROM admin where email='$email' AND password ='$password'";
    $result = mysqli_query($conn, $Sql);
    $final= mysqli_fetch_assoc($result);

    $_SESSION['email']= $final['email'];   
    $_SESSION['password']=$final['password'];


    if($email=$final['email'] AND $password=$final['password'])
    {
        header('location: ../php/dashboard.php');

   }
   else{
    header('location: ../php/adminlogin.php');
   }

}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="row">
        <form action="adminlogin.php" class="form-horizontal" method="post">
            <div class="box-body">
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="inputEmail3" placeholder="Email" name="email">
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputpassword3" class="col-sm-2 control-label">Password</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" id="inputpassword3" placeholder="Password" name="password">
                    </div>
                </div>
            </div>

            <div class="box-footer">
                <button type="submit" class="btn btn-default">Cancel</button>
                <button type="submit" class="btn btn-info pull right" name="login">Login In</button>
            </div>
        </form>
    </div>
</body>
</html>