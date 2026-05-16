<?php
include("connection.php");

$sql = "CREATE TABLE inv_info(
    id INT AUTO_INCREMENT PRIMARY KEY,
    Client VARCHAR(255) NOT NULL,
    Device_Model VARCHAR(255) NOT NULL,
    Plate_Number VARCHAR(255) NOT NULL,
    Device_IMEI VARCHAR(255) NOT NULL,
    Technician VARCHAR(255) NOT NULL,
    Date_Installed TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    Jobs VARCHAR(255) NOT NULL
    
)";

if(mysqli_query($conn , $sql)){

   echo "table created successfully";
    
   } else {
    echo "Error creating table" . mysqli_error($conn);
   }
 


?>