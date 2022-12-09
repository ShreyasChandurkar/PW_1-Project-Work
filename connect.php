<!-- <?php

// $wname = $_POST['wname'];
// $wemail = $_POST['wemail'];
// $wmob = $_POST['wmob'];
// $wrole = $_POST['wrole'];

// $conn = new mysqli('localhost','root','','mumbailocal')

// if($conn->connect_error){
//     die('Connection Failed : '.$conn->connect_error);
// }
// else{
//     $stmt = $conn->prepare("insert into workersdata(ID,Name,Email,Contact,Designation) values(?,?,?,?,?)");
//     $stmt->bin_param($id,"ssis",$wname,$wemail,$wmob,$wrole);
//     $stmt->execute();
//     echo"completed"
//     $stmt->close();
//     $conn->close();
// }
?> -->


<?php
$wname = $_POST['wname'];
$wemail = $_POST['wemail'];
$wmob = $_POST['wmob'];
$wrole = $_POST['wrole'];

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
 
echo "Connected successfully";
 
$sql = "INSERT INTO workersdata (Name,Email,Contact,Designation) VALUES ('$wname', '$wemail', '$wmob','$wrole')";
// echo '<script>alert("Worker Added")</script>';
// // echo '<script>window.location.href="adm_login.html"</script>';
if (mysqli_query($conn, $sql)) {
      echo "New record created successfully";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>
