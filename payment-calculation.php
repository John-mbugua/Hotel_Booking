<?php
#my data to do calculation
#prices for each room;


#retiving the type of room from the database
$room;
try {
    include('db-connect.php');
   
    #setting the error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $query = "select type_room from book_rooms";
        $stmt = $conn->prepare($query);
        #correct way to pass in values in a prepared statements in php 
        $stmt->execute();

         #setting result to assoctiative array
         
       foreach ($stmt as  $row) {
           $room = $row['type_room'];
       }
       
  
} catch (PDOException $th) {
    $message = $th->getMessage();
}
$conn=null;



?>










<div class="row">
    <div class="col-md-12">
        <!-- Advanced Tables -->
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>Customer id</th>
                                <th>Customer name</th>
                                <th>Room type</th>
                                <th>Gr.Total</th>
                                <th>Print</th>

                            </tr>
                        </thead>
                        <tbody>

                            <?php
                            $sql = "select * from book_roooms";
                            $re = mysqli_query($con, $sql);
                            while ($row = mysqli_fetch_array($re)) {

                                $id = $row['customer_id'];

                                if ($id % 2 == 1) {
                                    echo "<tr class='gradeC'>
                                                    <td>" . $row['customer_id'] . "</td>
													<td>" . $row['first_name'] . " " . $row['second_name'] . "</td>
													<td>" . $row['type_room'] . "</td>

													<td>" . "</td>
													<td><a href=print.php?pid=" . $id . " <button class='btn btn-primary'> <i class='fa fa-print' ></i> Print</button></td>
													</tr>";
                                } else {
                                    echo "<tr class='gradeU'>
                                    <td>" . $row['customer_id'] . "</td>
                                    <td>" . $row['first_name'] . " " . $row['second_name'] . "</td>
                                    <td>" . $row['type_room'] . "</td>

                                    <td>" . $row['fintot'] . "</td> 
													<td><a href=print.php?pid=" . $id . " <button class='btn btn-primary'> <i class='fa fa-print' ></i> Print</button></td>
													</tr>";
                                }
                            }

                            ?>

                        </tbody>
                    </table>
                </div>

            </div>
        </div>

    </div>
</div>