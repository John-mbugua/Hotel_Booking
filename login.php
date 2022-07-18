<?php
session_start();

try {
    include('db-connect.php');
   
    #setting the error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if (isset($_POST['login'])) {
        $query = "select * from admin_login where username=:username and password= :password";
        $stmt = $conn->prepare($query);
        #correct way to pass in values in a prepared statements in php 
        $stmt->execute(
            array(
                'username' => $_POST['uname'],
                'password' => $_POST['password']
            )
        );

        $count = $stmt->rowCount(); //use to rowcount method in php

        #use of counting returned rows to verify the password
        if ($count > 0) {
            $_SESSION['username'] = $_POST['uname'];
            header("location:admin-functions.php");
            $message = "login is a success";
        } else {
            $message = "incorrect credentials";
        }
    }
} catch (PDOException $th) {
    $message = $th->getMessage();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login form</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="aos/aos.css">
    <link rel="stylesheet" href="owl.carousel/assets/owl.carousel.css">
    <link rel="stylesheet" href="icofont/icofont.min.css">
    <link rel="stylesheet" href="boxicons/css/boxicons.min.css">
    <link rel="stylesheet" href="">
    <style>
        <?php include "styling.css"?>
    </style>

</head>

<body>
    <?php
    if (isset($message)) {
        echo "<label class='text-danger'>" . $message . "</label>";
    }
    ?>

    <form action="" method="POST" style="width: 400px;" class="text-center ">

        <div class="input-group mb-3 ">
            <div class="input-group-prepend">
                <span class="input-group-text"> username</span>
            </div>
            <input type="text" class="form-control" placeholder="user name" name="uname" required id="uname">
        </div>

        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text"> password</span>
            </div>
            <input type="password" class="form-control pass" placeholder="password" name="password" required> <br>
            
        </div>

        <input type="submit" class=" btn btn-outline-success" value="login" name="login">
    </form>
    <script src="aos/aos.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="owl.carousel/owl.carousel.min.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>