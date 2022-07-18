
    <?php
    echo "<table class='table table-striped table-hover'>";
    echo "<tr> <th>CUSTOMER ID</th>  <th>FIRSTNAME</th> <th>SECOND NAME</th> <th>EMAIL</th> <th>PHONE NUMBER</th> <th>CHECK-IN</th> " .
        "<th> CHECK-OUT</th> <th>NO OF PPLE</th> <th>TYPE OF ROOMS</th> <th>PRICE FOR THE ROOM</th></tr>";

    class Tablerow extends RecursiveIteratorIterator
    {
        function _construct($it)
        {
            parent::_construct($it, self::leaves_only);
        }
        function current()
        {
            return "<td>" . parent::current() . "</td>";
        }
        function beginChildren()
        {
            echo "<tr>";
        }
        function endChildren()
        {
            echo "</tr>" . "\n";
        }
    }
    try {
        include('db-connect.php');
        echo "<br>";
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        if (empty($_POST['search'])) {
            $stmt = $conn->prepare("select *from booking order by customer_id desc");

            $stmt->execute();

            #setting result to assoctiative array
            $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
            foreach (new Tablerow(new RecursiveArrayIterator($stmt->fetchAll())) as $k => $v) {
                echo $v;
            }
        } 
    } catch (PDOExeption $h) {
        echo "error message" . $h->getMesaage;
    }
    $conn = null;
    echo "</table>";

    ?>

