<?php
session_start();
if ($_SESSION['username']) {
    echo "<h4>login was a success " . $_SESSION['username'] . "</h4>";
} else {
    header("location:login.php");
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
</head>

<body>
    <div class="row">
        <div class="col-md-3 ">
            <ul class="nav nav-tabs flex-column">
                <li class="nav-item ">
                    <a href="#tab1" class="nav-link active" data-toggle="tab">
                        reserved tables
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#tab2" class="nav-link" data-toggle="tab">
                        booked-rooms
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#tab3" class="nav-link" data-toggle="tab">
                        payment
                    </a>
                </li>
                <button class="btn btn-danger" id="logout">log out</button>
            </ul>
        </div>
        <div class="col">
            <div class="tab-content">
                <!--========================================tab 1=====================================-->
                <div class="tab-pane active" id="tab1">
                    <?php
                    include('retriving-table-info.php');
                    ?>
                </div>
                <!--========================================tab 2=====================================-->
                <div class="tab-pane" id="tab2">

                    <?php
                    include('room-booking-info.php');
                    ?>
                </div>
                <!--========================================tab 3=====================================-->
                <div class="tab-pane" id="tab3">
                    <p>tab 3</p>
                </div>

                <!--========================================tab 3=====================================-->

            </div>
        </div>
    </div>







    <script src="aos/aos.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="owl.carousel/owl.carousel.min.js"></script>

    <script src="main.js"></script>
    <script>
        $('#logout').click(function() {
            location.replace('login.php');
        });
    </script>
</body>

</html>