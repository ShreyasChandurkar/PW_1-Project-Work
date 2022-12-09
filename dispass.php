<html>
    <head>
        <title>Passenger Data</title>
        <link rel="stylesheet" href="CSS/dispass.css">
    </head>
    <body>
        <h1><b>Passengers Data</b></h1><hr><br><br>
<?php
$servername = "localhost";
$database = "mumbailocal";
$username = "root";
$password = "";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


$result = mysqli_query($conn,"SELECT * FROM passengersdetails;");

echo "<table border='1'>
<tr>
<th>Name</th>
<th>Age</th>
<th>Contact Number</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['P_Name'] . "</td>";
echo "<td>" . $row['Age'] . "</td>";
echo "<td>" . $row['Mobile_No'] . "</td>";
echo "</tr>";
}
echo "</table>";

// if (mysqli_query($conn, $sql)) {
//     //echo "Record Updated successfully";
// } else {
//     //echo "Error: " . $sql . "<br>" . mysqli_error($conn);
// }
mysqli_close($conn);
?>
    </body>
</html>