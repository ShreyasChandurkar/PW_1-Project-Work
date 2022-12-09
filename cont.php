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
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$msg = $_POST['msg'];

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
 
$sql = "INSERT INTO feedback(First_Name,Last_Name,Email,Mobile_No,Message) VALUES ('$first_name', '$last_name','$email','$mobile','$msg')";
// echo '<script>alert("Worker Added")</script>';
// // echo '<script>window.location.href="adm_login.html"</script>';
if (mysqli_query($conn, $sql)) {
      echo "New record created successfully";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>
