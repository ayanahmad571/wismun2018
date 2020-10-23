


<?php
header("Location: index.php");
die();
?>      <?php 
	  include("db_auth.php");
	  $sql = "SELECT GROUP_CONCAT(i_d_email ORDER BY i_d_email ASC SEPARATOR ', ') as abv FROM indv_reg_dele GROUP BY i_valid";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       echo $row['abv'];
    }
} else {
    echo "0 results";
}
	  
	   ?>