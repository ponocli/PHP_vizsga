<?php

session_start();

include_once 'db.php';
$conn = mysqli_connect($dbservername, $dbusername, $dbpassword, $dbname);
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());

}

$sql  = "SELECT * FROM user WHERE email = '{$_SESSION['user_email']}'";

$result = mysqli_query($conn, $sql);
$datas= [];
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){
            $datas[]=$row;
                }
               }
               foreach($datas as $data){

                   
                }
 

?>


<html>
    <head>
        <meta charset="UTF-8">
        <title>Vizsgamunka</title>
    </head>
    <body>

        
<form class="container" style="border: solid black 2px" method="POST" action="settingsModify.php">
<div class="col-12" style="margin:auto; padding:20px; width:50%">
  <label for="clientname" class="form-label">Név:</label>
  <input type="text" class="form-control" id="setname" name="setname" placeholder="<?php echo $data["nev"];?>">
</div>
       
<div class="col-12" style="margin:auto; padding:20px; width:50%">
  <label for="clientmessage" class="form-label">Város:</label>
  <input type="text" class="form-control" id="setcity" name="setcity" placeholder="<?php echo $data["city"];?>">
</div>
       
<div class="col-12" style="margin:auto; padding:20px; width:50%">
  <label for="clientemail" class="form-label">Email cím:</label>
  <input type="email" class="form-control" id="setemail" name="setemail" placeholder="<?php echo $data["email"];?>">
</div>
       
 <div class="col-12" style="margin:auto; padding:20px; width:50%">
  <label for="clientemail" class="form-label">Jelszó:</label>
  <input type="password" class="form-control" id="setpass" name="setpass" placeholder="">
</div>
       
<div class="col-12" style="margin:auto; padding:20px; width:50%">
  <label for="clientemail" class="form-label">Jelszó mégegyszer:</label>
  <input type="password" class="form-control" id="setpass" name="setpass" placeholder="">
</div>

  <div class="col-12" style="margin:auto; padding:20px; width:50%">
    <button class="btn btn-primary" type="submit">Mentés</button>
  </div>
</form>
     
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> 
    </body>
</html>    
        
        