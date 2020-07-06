<style>.table ,th,td {
	
	border: 8px solid gray;
}

</style>

<html>
<head>
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
$sql = "SELECT sellerName, addressLine1,addressLine2, city,state,zipcode, phoneNumber , emailAddress ,bodyType,year, vehicleMake , vehicleModel ,exteriorColor,kilometers,link FROM newsale order by year";
$result = $connection->query($sql);





   while($row = $result->fetch_assoc()) {
 echo "<tr>
   <td>".$row["sellerName"]."</td>
   <td>".$row["addressLine1"]."</td>
   <td>".$row["addressLine2"]."</td>
   <td>".$row["city"]."</td>
   <td>".$row["state"]."</td>
   <td>".$row["zipcode"]."</td>
   <td>".$row["phoneNumber"]."</td>
   <td>".$row["emailAddress"]."</td>
   <td>".$row["bodyType"]."</td>
   <td>".$row["year"]."</td>
   <td>".$row["vehicleModel"]."</td>
   <td>".$row["vehicleMake"]."</td>
   <td>".$row["exteriorColor"]."</td>
   <td>".$row["kilometers"]."</td>
   <td><a href=".$row["link"].">".$row["link"]."</a></td>
    
   
  </tr>";
   
   }
	
echo "table";
	

$connection->close();

?> 
</table>
</body>
</head>
</html>