<?php      
include("baglan.php");
   session_start();


if (isset($_POST['finduser'])) {
  // receive all input values from the form
  $email = mysqli_real_escape_string($baglan , $_POST['email']);
  
    $sql ="SELECT * FROM uye_bilgileri where mail = '$email' ";
$result = mysqli_query($baglan,$sql);
$row = mysqli_fetch_array($result);

    
    $_SESSION['$row'] = $var_value;

 

  // Finally, register user if there are no errors in the form
  
  	

  	$query = "INSERT INTO uye_bilgileri (ad,soyad,mail, password, durum) 
  			  VALUES('$isim','$soyisim', '$email', '$password','$uye')";
  	mysqli_query($baglan , $query);
  	$_SESSION['success'] = "You are now logged in";
 
} else if (isset($_POST['limon'])) {
    
   // $yenidurum = mysqli_real_escape_string($baglan , $_POST['limon']);
    $email = mysqli_real_escape_string($baglan , $_POST['email']);
    $sql ="UPDATE uye_bilgileri SET durum = '$yenidurum'' where mail = '$email' ";
    $result = mysqli_query($baglan,$sql);
    $row = mysqli_fetch_array($result);
    

    
}














?>






