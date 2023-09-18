<?php


require_once('db.php');

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT City FROM cities WHERE id='0'";
$result = mysqli_query($conn,$sql);

if($result){
    while($row=mysqli_fetch_assoc($result)){
       $newWord = rtrim($row['City'],",");
       print($newWord);
       
    }
}
mysqli_close($conn);
