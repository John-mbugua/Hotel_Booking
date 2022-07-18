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
   function test_input($data){
    $data= trim($data);
    $data= htmlspecialchars($data);
    $data= stripslashes($data);

    return $data;

}
#passing data from the form trough test method
$fname= test_input( $_POST["fname"]);
$sname=test_input( $_POST["sname"]);
$phone=test_input( $_POST["phone"]);
$date1=test_input( $_POST["date1"]);
$time=test_input( $_POST["time"]);
$people=test_input( $_POST["people"]);
$message=test_input( $_POST["message"]);



#using a prepared statement to insert data to the database
$sername="localhost";
$username="shaz";
$pass="Vinnesh23";
$dbname="hotel_project";
try {

   $conn=new PDO("mysql:host=$sername;dbname=$dbname",$username,$pass);
   #setting the pdo error mode to exception
   $conn ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 
   $stm=$conn-> prepare("insert into booking_table (first_name,second_name,phone,date1,reservation_time,no_of_people,message)
   values(:fname,:sname,:phone,:date1,:time,:people,:message)");
   $stm->bindParam(':fname',$fname);
   $stm->bindParam(':sname',$sname);
   $stm->bindParam(':phone',$phone);
   $stm->bindParam(':date1',$date1);
   $stm->bindParam(':time',$time);
   $stm->bindParam(':people',$people);
   $stm->bindParam(':message',$message);
   $stm->execute();
 
 echo "connected sucessifully";
} catch (PDOException $th) {
    echo "connection failed"." ".$th->getMessage();
}
$conn=null;
    
    ?>

</body>
</html>