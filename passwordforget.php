<?php
   include("baglan.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $username = mysqli_real_escape_string($baglan,$_POST['username']);
      $mail = mysqli_real_escape_string($baglan,$_POST['mail']); 
      
      $sql = "SELECT ad FROM uye_bilgileri WHERE mail = '$mail'";
      $result = mysqli_query($baglan,$sql);
      $row = mysqli_fetch_array($result);
      //$active = $row['active'];
      
      //$count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($row[0] == $username) {
        
         
        echo 'mail atıldı';
      }else {
         $error = "Your Login Name or Password is invalid";
           echo 'salak';
           echo $row[0];
      }
   }
?>

<html>
<style>
   /*  CSS'in bazı kısımlarını buradan aldım https://www.w3schools.com/howto/howto_css_login_form.asp  */


   body {
      background-color: whitesmoke;
      font-family: Arial, Helvetica, sans-serif;
   }

   * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: "Avenir Next";
   }

   input[type=text],
   input[type=email],
   input[type=password] {
      width: 100%;
      padding: 15px;
      margin: 5px 0 22px 0;
      display: inline-block;
      /border-style: solid;/
      border: none;
      background: #f6f6f6;
   }

   input[type=text],
   input[type=email],
   input[type=password] {
      background-color: #ddd;
      outline: none;
   }

   hr {
      border: 1px solid #f1f1f1;
      margin-bottom: 25px;
   }

   button {
      background-color: #e17055;
      color: white;
      padding: 14px 20px;
      margin: 8px 0;
      border: none;
      cursor: pointer;
      width: 100%;
      opacity: 0.9;
   }

   @media screen and (max-width: 300px) {

      .cancelbtn,
      .signupbtn {
         width: 100%;
      }
   }

   .clearfix::after {
      content: "";
      clear: both;
      display: table;
   }

   .cancelbtn {
      padding: 14px 20px;
      background-color: #f44336;
   }

   .cancelbtn,
   .signupbtn {
      float: left;
      width: 50%;
   }

   .navbar {
      max-width: 80vw;
      width: 100%;
      border-style: hidden;
      padding-left: 30px;
      padding-right: 30px;
      left: 10vw;
      height: 70px;
      background-color: #f6f6f6;
   }

   .logo {
      position: absolute;
      left: 10px;
      top: 50px;
      margin-left: 40px;
   }

   .menu {
      width: 50vw;
      height: 100px;
      position: absolute;
      right: 0;
      display: flex;
      justify-content: space-around;
   }

   .menu li {
      list-style: none;
   }

   .menu>li>a {
      color: #263f44;
      position: absolute;
      top: 50px;
      text-decoration: none;
      display: block;
      font-size: 14px;
   }

   .dropdown {
      position: absolute;
      top: 50px;
   }

   .dropdown span {
      font-size: 14px;
   }

   .dropdown-content {
      display: none;
      position: absolute;
      background-color: #f6f6f6;
      min-width: 160px;
      box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
      padding: 12px 16px;
      z-index: 1;
   }

   .dropdown:hover .dropdown-content {
      display: block;
   }

   .body {
      position: absolute;
      left: 10vw;
      max-width: 80vw;
      width: 100%;
      top: 150px;
      background-color: black;
   }

   .haberler {
      position: absolute;
      border-radius: 20px;
      background-color: #2f3542;
      width: 38vw;

   }

   .title {
      color: #70a1ff;
      padding: 10px;
   }

   .haberler p {
      text-align: justify;
      color: #eccc68;
      padding: 10px;
      font-size: 15px;

   }

   .haber-btn {
      position: absolute;
      left: 10px;
      bottom: 10px;
      padding: 5px;
      border-radius: 20px;
   }

   .haber-btn:hover {
      color: #0984e3;
   }

   .duyurular {
      position: absolute;
      border-radius: 20px;
      background-color: #2f3542;
      width: 38vw;
      right: 0;
   }

   .duyurular p {
      text-align: justify;
      color: #eccc68;
      padding: 10px;
      font-size: 15px;
   }

   .duyurular-btn {
      position: absolute;
      left: 10px;
      bottom: 10px;
      padding: 5px;
      border-radius: 20px;
   }

   .duyurular-btn:hover {
      color: #0984e3;
   }

   footer {
      position: absolute;
      bottom: 0px;
      left: 10vw;
      width: 80vw;
      background: #dfe6e9;
      border-radius: 20px 20px 0 0;
   }

   .listeler {
      list-style: none;
      text-decoration: none;
      color: black;
      font-size: 12px;

   }

   .logo {
      margin-top: 0;
      padding-top: 0;
   }

   .slider {
      position: absolute;
      padding-top: 100px;
   }


   .container {
      display: block;
      position: relative;
      padding-left: 35px;
      margin-bottom: 12px;
      cursor: pointer;
      padding-top: 4px;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
   }

   .container input {
      position: absolute;
      opacity: 0;
      cursor: pointer;
      height: 0;
      width: 0;
   }

   .checkmark {
      position: absolute;
      top: 0;
      left: 0;
      height: 25px;
      width: 25px;
      background-color: #eee;
   }

   .container:hover input~.checkmark {
      background-color: #ccc;
   }

   .container input:checked~.checkmark {
      background-color: #2196F3;
   }

   .checkmark:after {
      content: "";
      position: absolute;
      display: none;
   }

   .container input:checked~.checkmark:after {
      display: block;
   }

   .container .checkmark:after {
      left: 9px;
      top: 5px;
      width: 5px;
      height: 10px;
      border: solid white;
      border-width: 0 3px 3px 0;
      -webkit-transform: rotate(45deg);
      -ms-transform: rotate(45deg);
      transform: rotate(45deg);
   }

   span.psw {
      float: right;
   }
</style>

<head>
   <title>Giriş Sayfası</title>



</head>

<body>

   <div class="navbar">
      <div class="logo"> <img src="umut.png" width="80px" height="90px" alt="Italian Trulli"> </div>
      <ul class="menu">
         <li>
            <a href="index.html">Anasayfa</a>
         </li>
         <li>
            <div class="dropdown">
               <a class="listeler" href="yazilarim2019.html"> Yazılarım </a>
               <div class="dropdown-content">
                  <ul>
                     <li>
                        <a class="listeler" href="yazilarim2019.html"> 2019</a>
                     </li>
                     <li>
                        <a class="listeler" href="yazilarim2018.html"> 2018</a>
                     </li>
                  </ul>
               </div>
            </div>
         </li>

         <li>
            <div class="dropdown">
               <a class="listeler" href="foto%C4%9Fraflar2019.html"> Fotoğraflar</a>
               <div class="dropdown-content">
                  <ul>
                     <li>
                        <a class="listeler" href="foto%C4%9Fraflar2019.html"> 2019</a>
                     </li>
                  </ul>
               </div>
            </div>
         </li>

         <li>
            <div class="dropdown">
               <a class="listeler" href="muzikler.html"> Önerilerim</a>
               <div class="dropdown-content">
                  <ul>
                     <li>
                        <a class="listeler" href="muzikler.html"> Müzik</a>
                     </li>
                     <li>
                        <a class="listeler" href="kitaplar.html"> Kitap</a>
                     </li>

                  </ul>
               </div>
            </div>
         </li>

         <li><a href="hakkimda.html">Hakkımda</a></li>
         <li><a href="iletisim.html">İletişim</a></li>

         <li style="padding-right: 80px;">
            <a href="http://192.168.64.2/phpfolder/PROJE/login.php">Kayıt Ol</a>
         </li>
      </ul>
   </div>

   <form action="" style="border:1px solid black; ;margin-top: 100px; margin-right: 30px; margin-left: 30px;"
      method="post">
      <div style="padding-top: 20px; padding-bottom: 20px; padding-left: 50px; padding-right: 50px;">
         <div>
            <label>İsminiz</label>
            <input type="text" name="username">
         </div>

         <div class="input-group">
            <label>Mailiniz</label>
            <input type="text" name="mail">
         </div>

         <div class="input-group">
            <button style="font-size: 15px;" type="submit" class="btn" name="sign_user">Şifremi sıfırla</button>
         </div>
   </form>


</body>
<footer style="margin-top: 250px;">
   <center>
      <div id="iconlar">
         <a id="instagram" href="http://Instagram.com/uumuterol" target=new><img
               src="https://www.freepnglogos.com/uploads/instagram-logos-png-images-free-download-2.png" border="0"
               width="50px" height="50px"></a>

         <a id="linkedin" href="https://www.linkedin.com/in/umuterol/" target=new><img
               src="https://icons-for-free.com/iconfiles/png/512/linkedin+logo+media+professional+profile+social+icon-1320168598882107551.png"
               border="0" width="50px" height="50px"></a>

         <a id="twitter" href="https://twitter.com/Hp7Tron" target=new><img
               src="http://assets.stickpng.com/thumbs/580b57fcd9996e24bc43c53e.png" border="0" width="50px"
               height="50px"></a>
      </div>

      <h3 id="footeryazi"> Umut Erol 2019 | Tüm hakları saklıdır </h3>
      </>

</footer>

</html>