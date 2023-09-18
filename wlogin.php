<?php

session_start();
 ?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Vizsgamunka</title>
    </head>
    <body>
        <div class="text-center">
  <img src="./media/daffy.jpg" class="rounded" style="padding-top: 30px">
</div>
        
<form class="container-fluid" style="width: 30%; padding-top: 50px"
  method="POST" action="vlogin.php">
  
  <div class="form-outline mb-4">
    <input type="email" id="emaillog" name= emaillog class="form-control" />
    <label class="form-label" for="emaillog">Email cím</label>
  </div>

  
  <div class="form-outline mb-4">
    <input type="password" id="passlog" name=passlog class="form-control" />
    <label class="form-label" for="passlog">Jelszó</label>
  </div>

  <div style="color:red; font-size: 20px; font-weight: bold; text-align: center; padding-bottom: 30px;">
      <?php
        echo $_SESSION['errorMessage'] ?? '';
        
   ?>
  </div>
    
  <div class="row mb-4">
    <div class="col d-flex justify-content-center">
      <!-- Checkbox -->
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked />
        <label class="form-check-label" for="form2Example31"> Emlékezz rám </label>
      </div>
    </div>

    <div class="col">
      
      <a href="#!">Elfelejtett jelszó</a>
    </div>
  </div>

 
  <button type="submit" class="btn btn-primary btn-block mb-4">Belépés</button>

  
  <div class="text-center">
    <p>Még nem vagy regisztrálva? <a href="#!">Regisztráció</a></p>
      </div>

</form>
        
       
     
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> 
    </body>
</html>    
        
        