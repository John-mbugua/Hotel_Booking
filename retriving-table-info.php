<?php
                    echo "<table class='table table-striped table-hover'>";
                    echo "<tr> <th>FIRSTNAME</th> <th>SECOND NAME</th> <th>PHONE NUMBER</th> <th>BOOKING DATE</th> " .
                        "<th> RESERVATION TIME</th> <th>NO OF PPLE</th> <th>COMMENT</th> <th>CUSTOMER ID</th> </tr>";

                    class Tablerows extends RecursiveIteratorIterator
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

                        $stmt = $conn->prepare("select *from booking order by customer_id desc");

                        $stmt->execute();

                        #setting result to assoctiative array
                        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
                        foreach (new Tablerows(new RecursiveArrayIterator($stmt->fetchAll())) as $k => $v) {
                            # code...
                            echo $v;
                        }
                    } catch (PDOExeption $h) {
                        echo "error message" . $h->getMesaage;
                    }
                    $conn = null;
                    echo "</table>";


                    ?>