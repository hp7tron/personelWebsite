<?php
 include("baglan.php");
   session_start();


// initializing variables

$email    = "";
$uye      = "uye";

// connect to the database


// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $isim =  mysqli_real_escape_string($baglan , $_POST['isim']);
  $soyisim = mysqli_real_escape_string($baglan , $_POST['soyisim']);
  $email = mysqli_real_escape_string($baglan , $_POST['email']);
  $password_1 = mysqli_real_escape_string($baglan , $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($baglan , $_POST['password_2']);
    
  if ($password_1 == $password_2) {
	$password = $password_1 ;
        
  }
    else {
        echo "passwords dont match";
        
    }

 

  // Finally, register user if there are no errors in the form
  
  	

  	$query = "INSERT INTO uye_bilgileri (ad,soyad,mail, password, durum) 
  			  VALUES('$isim','$soyisim', '$email', '$password','$uye')";
  	mysqli_query($baglan , $query);
  	$_SESSION['success'] = "You are now logged in";
 
}


?>