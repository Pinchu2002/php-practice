<?php
$email = $_REQUEST['email'];
$pwd = $_REQUEST['pwd'];
$gender = $_REQUEST['gender'];
$dscp = $_REQUEST['dscp'];
$address = $_REQUEST['add'];
// connection
$conn = new mysqli("localhost","root", "" ,"form");

if($conn == false){
    die("Error: Could not connect!" .mysqli_connect_error());
}

$sql = "INSERT INTO data VALUES('$email', '$pwd', '$gender', '$dscp', '$address')";

if(mysqli_query($conn, $sql)){
    echo "<h3> Data Saved <h3>";
}
else{
    echo "Error: Hush! Sorry $sql." .$mysqli_error($conn);
}

mysqli_close($conn);

?>