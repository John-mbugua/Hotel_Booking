<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>inserting user information </title>

</head>

<body>


    <?php
    //echo " am trying to make php work ";
    #preventing close site scripting using test_input method
    function test_input($data)
    {
        $data = trim($data);
        $data = htmlspecialchars($data);
        $data = stripslashes($data);

        return $data;
    }
    #passing data from the form trough test method
    $fname = test_input($_POST["firstname"]);
    $sname = test_input($_POST["secondname"]);
    $phone = test_input($_POST["phone"]);
    $email = test_input($_POST["email"]);
    $checkin = test_input($_POST["check-in"]);
    $checkout = test_input($_POST["check-out"]);
    $people = test_input($_POST["people"]);
    $room = test_input($_POST["type-of-rooms"]);


    try {
        include('db-connect.php');
        $single_room = 225;
        $bacony = 500;
        $super = 400;
        $executive = 600;
        $dulex = 350;

        $price;
        $days = abs(strtotime($checkout) - strtotime($checkin));
        $days = $days / (60 * 60 * 24);

        if ($room == 1 && $people == 1) {
            $price = $single_room * $days * $people;
        } elseif ($room == 2 && $people == 1) {
            $price = $bacony * $days * $people;
        } elseif ($room == 2 && $people == 2) {
            $price = $bacony * $days * $people;
        } elseif ($room == 3 && $people == 1) {
            $price = $super * $days * $people;
        } elseif ($room == 3 && $people == 2) {
            $price = $super * $days * $people;
        } elseif ($room == 4 && $people == 1) {
            $price = $executive * $days * $people;
        } elseif ($room == 4 && $people == 2) {
            $price = $executive * $days * $people;
        } elseif ($room == 5 && $people == 1) {
            $price = $dulex * $days * $people;
        } elseif ($room == 5 && $people == 2) {
            $price = $dulex * $days * $people;
        } else {
        }

        #setting the pdo error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $stm = $conn->prepare("insert into booking (firstname,secondname,email,phone,check_in,check_out,people,type_room,price)
   values(:fname,:sname,:email,:phone,:checkin,:checkout,:people,:room,:price)");
        $stm->bindParam(':fname', $fname);
        $stm->bindParam(':sname', $sname);
        $stm->bindParam(':email', $email);
        $stm->bindParam(':phone', $phone);
        $stm->bindParam(':checkin', $checkin);
        $stm->bindParam(':checkout', $checkout);
        $stm->bindParam(':people', $people);
        $stm->bindParam(':room', $room);
        $stm->bindParam(':price', $price);
        $stm->execute();

        echo "connected sucessifully";
    } catch (PDOException $th) {
        echo "connection failed" . " " . $th->getMessage();
    }



    $conn = null;
    ?>

</body>

</html>