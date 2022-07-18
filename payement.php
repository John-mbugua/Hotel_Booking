<?php
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
                'username' => $_POST['username'],
                'password' => $_POST['password']
            )
        );
        #looping through the returned data usiing for each loop
        foreach ($stmt as $row) {
            $p = $row['password'];
        }
        
    }
} catch (PDOException $th) {
    $message = $th->getMessage();
}
