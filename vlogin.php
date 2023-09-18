<?php
session_start();


require_once('db.php');
if(isset($_POST['emaillog']) && isset($_POST['passlog'])) {
    $email      = filter_var($_POST['emaillog'], FILTER_VALIDATE_EMAIL) ? $_POST['emaillog'] : '';
    $_SESSION['user_email'] = $_POST['emaillog'];
  
    $password   = $_POST['passlog'];
    if(strlen($email) > 0 && strlen($password) > 0) {
        $conn = mysqli_connect($dbservername, $dbusername, $dbpassword, $dbname);
        // Check connection
        if (!$conn) {
          die("Connection failed: " . mysqli_connect_error());
        }
        $sql = "SELECT id, nev, email, password FROM user
                 WHERE email = '$email'";
        $result = mysqli_query($conn, $sql);
        if($result) {
             if(mysqli_num_rows($result) === 1){
                $row = mysqli_fetch_assoc($result);
                if(password_verify($password, $row['password'])){
                    unset($_SESSION['errorMessage']);
                    $_SESSION['user_id']   = $row['id'];
                    
                    $_SESSION['user_name'] = $row['nev'];
                    
                    
               
                    header('location: user.php');
                } else {
                    $_SESSION['errorMessage'] = 'A felhasználó név vagy a jelszó nem megfelelő';
                    //vissza írányítás
                    header('location: wlogin.php');
                }
             } else {
                $_SESSION['errorMessage'] = 'A felhasználó név vagy a jelszó nem megfelelő';
                //vissza írányítás
                header('location: wlogin.php');
             }
             
        } else {
            $_SESSION['errorMessage'] = 'Ismeretlen hiba';
            //vissza írányítás
            header('location: wlogin.php');
        }
        mysqli_close($conn);

    } else {
        $_SESSION['errorMessage'] = 'Email cím vagy a jelszó nem megfelelő';
        //vissza írányítás
        header('location: wlogin.php');
    }
} else {
    $_SESSION['errorMessage'] = 'Ismeretlen hiba';
    //vissza írányítás
    header('location: wlogin.php');
}