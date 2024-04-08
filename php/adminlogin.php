<?php

include("../php/connection.php");

if(isset($_POST["login"])){
    $email = $_POST["email"];
    $password = $_POST["password"];

    $Sql = "SELECT * FROM admin where email='$email' AND password ='$password'";
    $result = mysqli_query($conn, $Sql);
    $final= $conn->fetch_assoc();


    if($result){


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
        <form action="loginhandler.php" class="form-horizontal" method="post">
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

                <div class="form-group">
                   <div class="col-sm-offset-2 col-sm-10">
                    <div class="checkbox">
                        <label for="">
                            <input type="checkbox">Remember me
                        </label>
                    </div>

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