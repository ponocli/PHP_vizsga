 <?php
     
 ?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Vizsgamunka</title>
    </head>
    <body>
        
        
       
<header>
<div class="container-fluid">
<nav class="nav justify-content-center">
  <button type="button" class="  p-2 m-3 btn btn-outline-primary">
    <a class="nav-link active" href="#">Kezdőoldal</a>
  </button>
    <button type="button" class="p-2 m-3 btn btn-outline-primary">
    <a class="nav-link active" aria-current="page" href="#">Rólunk</a>
  </button>
    <button type="button" class="p-2 m-3 btn btn-outline-primary">
    <a class="nav-link active" aria-current="page" href="#">Kapcsolat</a>
  </button>
    <button type="button" class="p-2 m-3 btn btn-outline-primary">
    <a class="nav-link active" aria-current="page" href="wlogin.php">Bejelentkezés</a>
  </button>
  </nav>
  </div>
  </header>
        
  <h1 style="text-align: center; padding:35px; margin:30px; background-color: blue; color:white;">Városnéző túráink</h1>     

  
  
  
  
  
  <main>

<div class="container">

<div class="row">

<div class="col-6">

<div class="card">
  <img src="./media/rome.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h2 class="card-title">Róma</h2>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="prices.php" class="btn btn-primary">Kattints az árakért</a>
  </div>
</div>

</div>

<div class="col-6">

<div class="card">
  <img src="./media/paris.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h2 class="card-title">Párizs</h2>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="prices.php" class="btn btn-primary">Kattints az árakért</a>
  </div>
</div>

</div>

</div>
    
<div class="row">

<div class="col-6">

<div class="card my-5">
  <img src="./media/london.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h2 class="card-title">London</h2>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="prices.php" class="btn btn-primary">Kattints az árakért</a>
  </div>
</div>

</div>

<div class="col-6">

<div class="card my-5">
  <img src="./media/newyork.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h2 class="card-title">New York</h2>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="prices.php" class="btn btn-primary">Kattints az árakért</a>
  </div>
</div>

</div>

</div>

</div>
      
      
<h1 style="text-align: center; padding:35px; margin:30px; background-color: red; color:white;">Jelentkezz még ma!</h1> 

<form class="container" style="border: solid black 2px" method="POST" action="regproc.php">
<div class="col-12" style="margin:auto; padding:20px; width:50%">
  <label for="regname" class="form-label">Név:</label>
  <input type="text" class="form-control" id="regname" name="regname" placeholder="Add meg a teljes neved!" required>
</div>
<div class="col-12" style="margin:auto; padding:20px; width:50%">
  <label for="regcity" class="form-label">Email cím:</label>
  <input type="text" class="form-control" id="regcity" name="regcity" placeholder="Budapest" required>
</div>
<div class="col-12" style="margin:auto; padding:20px; width:50%">
  <label for="clientemail" class="form-label">Email cím:</label>
  <input type="email" class="form-control" id="regemail" name="regemail" placeholder="ideirom@gmail.com" required>
</div>
 <div class="col-12" style="margin:auto; padding:20px; width:50%">
  <label for="regpassword" class="form-label">Jelszó:</label>
  <input type="password" class="form-control" id="regpassword" name="regpassword" rows="5" required>
</div>
<div class="col-12" style="margin:auto; padding:20px; width:50%">
  <label for="regpassword1" class="form-label">Jelszó újra:</label>
  <input type="password" class="form-control" id="regpassword1" name="regpassword1" rows="5" required>
</div>
    
 <div class="col-12" style="margin:auto; padding:20px; width:50%">
    <button class="btn btn-primary" type="submit">Regisztráció</button>
  </div>

</form>
      
</main>

  
<footer class="bg-light text-center text-lg-start p-3">
  
  <div class="text-center p-3" style="background-color: unset">
    © 2023 Copyright:
    <a class="text-dark" href="">Poór Zsombor</a>
  </div>
  
</footer>
        

        
        
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    </body>
</html>
