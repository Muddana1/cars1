<?php

function get_carmodel($name)
{
        /* Database INFO */
	$servername = "localhost";
	$username = "muddanan1";
	$password = "dszu5s";
	$dbname = "muddanan1_db";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
       }

       $sql = "SELECT carmodel FROM cars WHERE carname = '$name'";
       $result = $conn->query($sql);

        if ($result->num_rows > 0) {
             // output data of each row
             while($row = $result->fetch_assoc()) {
                      $carmodel = $row["carmodel"];
      }
    } else {
                     $carmodel = null;
        }

    $conn->close();

    return $carmodel;
}

?>