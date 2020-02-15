<?php
include 'connection.php';
echo "Hi Hamza";

 $sql = "INSERT INTO `visiters` (`ID`, `date_visited`) VALUES (NULL, CURRENT_TIMESTAMP)" ;


if ($conn->query($sql) === TRUE) {   echo "New record created successfully";  } 
   

		  else {   echo "Error: Please try again!" . "<br>" . $conn->error;   }
  



 // $sqls = "SELECT COUNT(*) FROM visiters";
 // $result = $conn->query($sqls);

// if ($result->num_rows > 0) {
//     // output data of each row
//     while($row = $result->fetch_assoc()) 
//   {
//   }
   ?>








