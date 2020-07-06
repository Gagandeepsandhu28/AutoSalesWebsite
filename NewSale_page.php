<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "autosales";

// Create a connection
$connection = new mysqli($servername, $username, $password, $database);

if($connection->connect_error){
	die("Connection failed: " . $connection->connect_error);
}
	

?> 
<style>.table ,th,td {
	
	border: 8px solid gray;
}

</style>

<?php
$sellerName = $_REQUEST['sellerName'];
$addressLine1 = $_REQUEST['addressLine1'];
$addressLine2 = $_REQUEST['addressLine2'];
$city = $_REQUEST['city'];
$state = $_REQUEST['state'];
$zipcode = $_REQUEST['zipcode'];
$phoneNumber = $_REQUEST['phoneNumber'];
$emailAddress = $_REQUEST['emailAddress'];
$bodyType = $_REQUEST['bodyType'];
$year = $_REQUEST['year'];
$vehicleMake = $_REQUEST['vehicleMake'];
$vehicleModel = $_REQUEST['vehicleModel'];
$exteriorColor = $_REQUEST['exteriorColor'];
$kilometers = $_REQUEST['kilometers'];
$link="https://www.jdpower.com/Cars/$year/$vehicleMake/$vehicleModel";
//echo $seller;
//echo $address;
//echo $seller;
//echo $address;
//echo $city;
//echo $phone;
//echo $email;
//echo $Model;
//echo $Make;
//echo $Year;
//echo $link;
//$sql_query="INSERT INTO `seller_table`(`seller name`, `address`, `city`, `phone number`, `email`, `vehicle model`, `vehicle make`, `year`) VALUES ("$seller","$address","$city","$phone","$email","$Model","$Make","$Year")";
$sql_query = "INSERT INTO `newsale` (`sellerName`, `addressLine1`,`addressLine2`, `city`,`state`,`zipcode`, `phoneNumber`, `emailAddress`,`bodyType`, `year`, `vehicleMake`,`vehicleModel`, `exteriorColor`,`kilometers`,`link`) VALUES ('$sellerName', '$addressLine1','$addressLine2','$city','$state','$zipcode', '$phoneNumber', '$emailAddress','$bodyType','$year','$vehicleMake','$vehicleModel', '$exteriorColor','$kilometers','$link')";
$connection->query($sql_query);
?>

<html>
<head>
</head>
<body>
<button type= "button" onclick="window.location.href = 'homepage.html'">home</button> 
<table class="table">
<tr>
<th>Seller Name</th>
<th>Address Line1</th>
<th>Address Line2</th>
<th>City</th>
<th>State</th>
<th>Zipcode</th>
<th>Phone Number</th>
<th>Email Address</th>
<th>Body Type</th>
<th>Year</th>
<th>Vehicle Make</th>
<th>Vehicle Model</th>
<th>Exterior Color</th>
<th>Kilometers</th>
<th>Link</th>

</tr>
<tr>
<td><?php echo $sellerName; ?></td>
<td><?php echo $addressLine1; ?></td>
<td><?php echo $addressLine2; ?></td>
<td><?php echo $city; ?></td>
<td><?php echo $state; ?></td>
<td><?php echo $zipcode; ?></td>
<td><?php echo $phoneNumber; ?></td>
<td><?php echo $emailAddress; ?></td>
<td><?php echo $bodyType; ?></td>
<td><?php echo $year; ?></td>
<td><?php echo $vehicleMake; ?></td>
<td><?php echo $vehicleModel; ?></td>
<td><?php echo $exteriorColor; ?></td>
<td><?php echo $kilometers; ?></td>
<td><a id="meetlink" href="<?php echo $link; ?>"target="_blank"><?php echo $link; ?></a></td>
</tr>

</table>
</body>
</html>