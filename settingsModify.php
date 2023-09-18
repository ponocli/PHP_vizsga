<?php

session_start();

include_once 'db.php';



$conn = mysqli_connect($dbservername, $dbusername, $dbpassword, $dbname);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
   

$sql = "UPDATE user SET ";

if(strlen($_POST['setname'])!=0){
$setname=$_POST['setname'];
$sql.="nev='$setname', ";
}

if(strlen($_POST['setcity'])!=0){
$setcity=$_POST['setcity'];
$sql.="city='$setcity', ";
}
if(strlen($_POST['setemail'])!=0){
$setemail=$_POST['setemail'];
$sql.="email='$setemail', ";
}
$sql.="WHERE id = {$_SESSION['user_id']};";
$cleanedSql= str_replace(", WHERE","  WHERE", $sql);



$result = mysqli_query($conn, $cleanedSql);


if($result){
  echo "Record updated successfully";
} else {
  echo "Error updating record";
}

mysqli_close($conn);


