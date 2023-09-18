<?php


require_once('db.php');

if((isset($_POST['regname'])) 
 &&(isset($_POST['regcity']))
 &&(isset($_POST['regname'])) 
 &&(isset($_POST['regpassword']))
 &&(isset($_POST['regpassword1']))){
     
$regname=$_POST['regname'];
$regcity=$_POST['regcity'];
$regemail=$_POST['regemail'];


if($_POST['regpassword']===$_POST['regpassword1']){
   $regpassword=$_POST['regpassword']; 
    $hashed = hash("sha512", $regpassword);
}else{
   echo 'A két jelszó nem egyezik meg! Próbáld újra.';
    exit();
}
 
$conn = mysqli_connect($dbservername, $dbusername, $dbpassword, $dbname);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
}
$sqlvalidate="SELECT * FROM user WHERE email='$regemail';";
$res=mysqli_query($conn,$sqlvalidate);

      
        
        $row = mysqli_fetch_assoc($res);
        if($regemail==isset($row['email'])){
        
            	echo "Az email cím már létezik!";
        
 exit();
 }
$sql = "INSERT INTO user VALUES (DEFAULT, '$regname', '$regcity', '$regemail', '$hashed')";
$result = mysqli_query($conn,$sql);

if($result){
   echo "A regisztráció elkészült. Most már be tudsz jelentkezni!";
 }else{
 echo "A regisztráció sikertelen. Próbáld meg újra!";
     }
mysqli_close($conn);

