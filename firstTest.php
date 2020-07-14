<?php
   include("baglan.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
      
      $sql = "SELECT id FROM admin WHERE username = '$myusername' and passcode = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         session_register("myusername");
         $_SESSION['login_user'] = $myusername;
         
         header("location: welcome.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }
?>
<html>
<title>
    
2.deneme 4.sayfa
    </title>
      <head>
    <style type="text/css">
       *{
            margin: 0;
            padding :0;
            box-sizing: border-box;
            font-family: "Avenir Next";
        }
        
        body{
            background-color: #f6f6f6;
            
        }
        
        .navbar{
            max-width: 80vw;
            width: 100%;
            position: absolute;
            left: 10vw;
            height: 100px;
            background-color: #f6f6f6;
        }
        
        .logo{
            position: absolute;
            left : 10px;
            top : 50px;
        }
        
        .menu{
            width: 50vw;
            height: 100px;
            position: absolute;
            right: 0;
            display : flex; 
            justify-content: space-around;
        }
    
        .menu li{
            list-style: none;
        }
        
        .menu >li > a {
            color: black;
            position: absolute;
            top : 50px;
            text-decoration: none;
            display: block;
            font-size: 14px;
        }
    
        
        .acilirmenu1 {
            display: none;
            position: absolute;
            top:70px;
            z-index: 1;
        }
        
    
        .acilirmenu2 {
            display: none;
            position: absolute;
            top:70px;
            z-index: 1;
            
        }
        .acilirmenu3 {
            display: none;
            position: absolute;
            top:70px;
            z-index: 1;
 
        }
        
        .menu li:hover .acilirmenu1 {
            display: block;
        }
        
          .menu li:hover .acilirmenu2 {
            display: block;
        }
        
          .menu li:hover .acilirmenu3 {
            display: block;
        }

        
        .body{
            position: absolute;
            left: 10vw;
            max-width: 80vw;
            width: 100%;
            top : 150px;
        }
        
        
       footer
        {
            position: absolute;
            bottom: -700px;
            left:10vw;
            width: 80vw;
            background: #dfe6e9;
            border-radius: 20px 20px 0 0;
        }
        
        
        
        #footeryazi{
            color: white;
            
        }
        
        
        
        #baslik{
            padding-left: 20px;
            
            
        }
        
        .aylar {
            
            padding-left: 20px;
            
        }
        
        .dropdown {
          position: absolute;
          top:50px;
        }
        
        .dropdown span{
            font-size: 14px;
        }

        .dropdown-content {
          display: none;
          position: absolute;
          background-color: #f9f9f9;
          min-width: 160px;
          box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
          padding: 12px 16px;
          z-index: 1;
        }

        .dropdown:hover .dropdown-content {
          display: block;
        }
        
                .listeler {
            list-style: none;
            text-decoration: none;
            color: black;
            font-size: 12px;
            
        }
       
  
        .loginEkranim {
            
          position: absolute;
            margin-top: 300px;
            margin-left: 290px;
            width: 60%;
            height: 60%;
            
        
        }
        
     


  .loginEkranim2 {
            
          position: absolute;
            width: 100%;
            height: 100%;
             padding: 16px;
        
        }
        
      
        form {
  border: 3px solid #f1f1f1;
}
        
        input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
            
        
}
        
        button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}
        .cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}
        
        
        
        span.psw {
  float: right;
  padding-top: 16px;
    
}
        
        
          </style>
    </head>
    <body>
    

    <div class="navbar" >
    <div class="logo"> <img src="umut.png" width="80px" height="90px"  alt="Italian Trulli" > </div>
    <ul class="menu">
        
        <li>
            <a href="index.html">Anasayfa</a>
        </li>  
         <li>
        <div class="dropdown">
              <a class="listeler" href="yazilarim2019.html"> Yazılarım </a>
              <div class="dropdown-content">
             <ul >
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
            <a class="listeler" href="foto%C4%9Fraflar2019.html">  Fotoğraflar</a> 
              <div class="dropdown-content">
               <ul >
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
                <ul >
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
        <li><a href="iletisim.html">Giriş</a></li>     
    </ul>
  
    </div>
        
        
        
    <div class="loginEkranim">   

        <form action="action_page.php" method="post">
 
        
        
        <div class="loginEkranim2">
    <label for="uname"><p>Username</p></label>
    <input type="text" placeholder="Enter Username" name="uname" required>

    <label for="psw"><p>Password</p></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <button type="submit">Login</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  
    <button type="button" class="cancelbtn">Cancel</button>
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div>

        
        </form>
        
        </div>    
        
        
        
   
        
        
        
 <footer>
    <center> 
        <div id="iconlar">
        <a id="instagram" href="http://Instagram.com/uumuterol" target=new><img src="https://www.freepnglogos.com/uploads/instagram-logos-png-images-free-download-2.png" border="0" width="50px" height="50px"></a>
       
       <a id="linkedin" href="https://www.linkedin.com/in/umuterol/" target=new><img src="https://icons-for-free.com/iconfiles/png/512/linkedin+logo+media+professional+profile+social+icon-1320168598882107551.png" border="0" width="50px" height="50px"></a>
       
       <a id="twitter" href="https://twitter.com/Hp7Tron" target=new><img src="http://assets.stickpng.com/thumbs/580b57fcd9996e24bc43c53e.png" border="0" width="50px" height="50px"></a>
       </div>
        
        <h3 id="footeryazi"> Umut Erol 2019 | Tüm hakları saklıdır  </h3> 
      </center>
    
    </footer> 
        
    </body>
    
</html>
