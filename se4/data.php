<?php

function get_carmodel($name, $carmodel)
{
        /* Database INFO */
	$servername = 'us-cdbr-east-03.cleardb.com';
	$username = 'beb59f30ab670f';
	$password = 'fd9ba7ef';
	$dbname = 'heroku_2d004d87e93034c';

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
                      $p = $row["carmodel"];
      }
    } else {
                     $p = null;
        }

    $conn->close();

if ($p == $carmodel) 
  {
    return "true";
  }
else 
 {
  return "false";

 }

}

?>
