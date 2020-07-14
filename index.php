<html>
    <meta charset="utf-8">
    
    <?php
include("baglan.php");
   session_start(); 
?>

<title>
    
ANASAYFA
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
            color: #263f44;
            position: absolute;
            top : 50px;
            text-decoration: none;
            display: block;
            font-size: 14px;
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

        
        .body{
            position: absolute;
            left: 10vw;
            max-width: 80vw;
            width: 100%;
            top : 150px;
        }
        
        .haberler{
            position: absolute;
            border-radius: 20px;
            background-color: #2f3542;
            width: 38vw;
            
        }
        .title{
            color: #70a1ff;
            padding: 10px;
        }
        
        .haberler p{
            text-align: justify;
            color : #eccc68;
            padding: 10px;
            font-size: 15px;
            
        }
        
        .haber-btn{
            position: absolute;
            left: 10px;
            bottom : 10px;
            padding: 5px;
            border-radius: 20px;
        }
        
        .haber-btn:hover{
            color:#0984e3;
        }
        
        .duyurular{
            position: absolute;
            border-radius: 20px;
            background-color: #2f3542;
            width: 38vw;
            right: 0;
        }
        
        
        .duyurular p{
            text-align: justify;
            color : #eccc68;
            padding: 10px;
            font-size: 15px;
            
        }
        
        .duyurular-btn{
            position: absolute;
            left: 10px;
            bottom : 10px;
            padding: 5px;
            border-radius: 20px;
        }
        
        .duyurular-btn:hover{
            color:#0984e3;
        }
        
        
        
        
        footer
        {
            position: absolute;
            bottom: -100px;
            left:10vw;
            width: 80vw;
            background: #dfe6e9;
            border-radius: 20px 20px 0 0;
        }
        
        
        
        #footeryazi{
            color: white;
            
        }
        
        
        .listeler {
            list-style: none;
            text-decoration: none;
            color: black;
            font-size: 12px;
            
        }
        .logo{
            margin-top: 0;
            padding-top: 0;
            
        }
        
        .slider{
            position:absolute;
           padding-top: 100px;
            
            
        }
        
        
        </style>
        
        <!-- BX SLIDER KUTUPHANESİNİ BURADA KULLANIYORUM -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>

  <script>
    $(document).ready(function(){
     $('.bxslider').bxSlider({
        mode: 'fade',
        slideWidth: 600
    });
  
    });
      
  </script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>

  <script>
    $(document).ready(function(){
      $('.slider').bxSlider();
    });
  </script>


    
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
        
         <li>
            <a href="http://192.168.64.2/phpfolder/PROJE/login.php">Kayıt Ol</a>
        </li>  
    </ul>
    
        
        
    </div>
    
    <div class="body">
        
        <?php  

    $query = "SELECT duyuru FROM duyurular where id = 1 ";
  	$result=mysqli_query($baglan , $query);
    $row = mysqli_fetch_array($result);
  	


?>
        
        <div class="haberler">
        <h1 class="title"> Haberler</h1>
       <hr>
        <p>
            <?php echo $row[0]; ?> 
            
        </p>
        <hr>
        <p>
        mauris, vel maximus ex. In odio tortor, placerat in efficitur quis, laoreet in est. Cras lectus quam, pharetra sed ex et, posuere tincidunt turpis. Praesent non ipsum arcu. Fusce tristique commodo nibh a vulputate.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque venenatis bibendum varius. Donec sit amet lectus rutrum, faucibus nibh non, viverra ligula. Integer consectetur erat metus, a 
            <hr>
            <p>
            porta orci lacinia vel. Proin arcu nibh, lobortis non mauris eget, iaculis viverra diam. Proin vehicula condimentum enim, in vehicula est convallis eu. Aliquam bibendum at magna ac varius. Nullam a augue at sem iaculis fringilla. Phasellus eu placerat dui. Phasellus ante massa, sollicitudin luctus molestie vel, eleifend congue ipsum. Aenean eget ligula tempor, faucibus ante non, pharetra odio. Nam luctus ut mauris a auctor. Nulla eu aliquet mauris, vel maximus ex. In odio tortor, placerat in efficitur quis, laoreet in est. Cras lectus quam, pharetra sed ex et, posuere tincidunt turpis. Praesent non ipsum arcu. Fusce tristique commodo nibh a vulputate.</p> 
       
       </div>
        
    
    
    
    
    <div class="duyurular">
      <h1 class="title"> Duyurular</h1>
       <hr>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque venenatis bibendum varius. Donec sit amet lectus rutrum, faucibus nibh non, viverra ligula. Integer consectetur erat metus, a porta orci lacinia vel. Proin arcu nibh, lobortis non mauris eget, iaculis viverra diam. Proin vehicula condimentum enim, in vehicula est convallis eu. Aliquam bibendum at magna ac varius. Nullam a augue at sem iaculis fringilla. Phasellus eu placerat dui. Phasellus ante massa, sollicitudin luctus molestie vel, eleifend congue ipsum. Aenean eget ligula tempor, faucibus ante non, pharetra odio. Nam luctus ut mauris a auctor. Nulla eu aliquet 
        </p>
        <hr>
        <p>
        mauris, vel maximus ex. In odio tortor, placerat in efficitur quis, laoreet in est. Cras lectus quam, pharetra sed ex et, posuere tincidunt turpis. Praesent non ipsum arcu. Fusce tristique commodo nibh a vulputate.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque venenatis bibendum varius. Donec sit amet lectus rutrum, faucibus nibh non, viverra ligula. Integer consectetur erat metus, a 
            <hr>
            <p>
            porta orci lacinia vel. Proin arcu nibh, lobortis non mauris eget, iaculis viverra diam. Proin vehicula condimentum enim, in vehicula est convallis eu. Aliquam bibendum at magna ac varius. Nullam a augue at sem iaculis fringilla. Phasellus eu placerat dui. Phasellus ante massa, sollicitudin luctus molestie vel, eleifend congue ipsum. Aenean eget ligula tempor, faucibus ante non, pharetra odio. Nam luctus ut mauris a auctor. Nulla eu aliquet mauris, vel maximus ex. In odio tortor, placerat in efficitur quis, laoreet in est. Cras lectus quam, pharetra sed ex et, posuere tincidunt turpis. Praesent non ipsum arcu. Fusce tristique commodo nibh a vulputate.</p> 
        
    </div>
  
       
    
    
   
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
        
        
       
    
    
    <!--
 <div id="header">
 <img  src="logo.png" alt="Italian Trulli" width="200" height="200">
 <img  src="Umut%20Erol.png" alt="Italian Trulli" width="1230" height="200">
 
</div>
     
    <ul class="menu">
    <li><a href="Proje.html">Anasayfa</a></li>  
    <li><a href="#">Yazılarım</a>
        <ul id=acilirmenu1>
        <li><a href="yazilarim2019.html">2019</a></li>  
            <li><a href="#">2018</a></li>
            <li><a href="#">2017</a></li>
      
        </ul>
        </li>  
    <li><a href="#">Fotoğraflar</a>
        <ul id=acilirmenu2>
            <li><a href="foto%C4%9Fraflar2019.html">2019</a></li>  
            <li><a href="#">2018</a></li>
            <li><a href="#">2017</a></li>
            
        
        </ul>
        
        </li>  
    <li><a href="#">Önerilerim</a>
         <ul id=acilirmenu3>
            <li><a href="muzikler.html">Müzik</a></li>  
            <li><a href="#">Kitap</a></li>
            <li><a href="#">Film</a></li>
            
        
        </ul>
        
        
        
        </li>  
    <li><a href="hakkimda.html">Hakkımda</a></li>  
    <li><a href="iletisim.html">İletişim</a></li>     
    </ul>
    
    
    
 
    <div class="slider">
    <div><img  src="umut.jpg" alt="Italian Trulli" width="200" height="200"></div>
    <div><img  src="umut2.jpg" alt="Italian Trulli" width="200" height="200"></div>
        <div> <img  src="bugs.jpg" alt="Italian Trulli" width="200" height="200"></div>
  </div>
    <div>
 
    
    <div id="haberler">
        <h1> Haberler</h1>
        <hr>
        <hr>------------------------------------------------------------------
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque venenatis bibendum varius. Donec sit amet lectus rutrum, faucibus nibh non, viverra ligula. Integer consectetur erat metus, a porta orci lacinia vel. Proin arcu nibh, lobortis non mauris eget, iaculis viverra diam. Proin vehicula condimentum enim, in vehicula est convallis eu. Aliquam bibendum at magna ac varius. Nullam a augue at sem iaculis fringilla. Phasellus eu placerat dui. Phasellus ante massa, sollicitudin luctus molestie vel, eleifend congue ipsum. Aenean eget ligula tempor, faucibus ante non, pharetra odio. Nam luctus ut mauris a auctor. Nulla eu aliquet mauris, vel maximus ex. In odio tortor, placerat in efficitur quis, laoreet in est. Cras lectus quam, pharetra sed ex et, posuere tincidunt turpis. Praesent non ipsum arcu. Fusce tristique commodo nibh a vulputate.<span id="dots">...</span><span id="more"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque venenatis bibendum varius. Donec sit amet lectus rutrum, faucibus nibh non, viverra ligula. Integer consectetur erat metus, a porta orci lacinia vel. Proin arcu nibh, lobortis non mauris eget, iaculis viverra diam. Proin vehicula condimentum enim, in vehicula est convallis eu. Aliquam bibendum at magna ac varius. Nullam a augue at sem iaculis fringilla. Phasellus eu placerat dui. Phasellus ante massa, sollicitudin luctus molestie vel, eleifend congue ipsum. Aenean eget ligula tempor, faucibus ante non, pharetra odio. Nam luctus ut mauris a auctor. Nulla eu aliquet mauris, vel maximus ex. In odio tortor, placerat in efficitur quis, laoreet in est. Cras lectus quam, pharetra sed ex et, posuere tincidunt turpis. Praesent non ipsum arcu. Fusce tristique commodo nibh a vulputate.</span></p> 
        <button onclick="myFunction()" id="myBtn">Read more</button>
       </div>
        
    
    
    
    
    <div id="duyurular">
      <h1> Duyurular</h1>
        ------------------------------------------------------------------
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque venenatis bibendum varius. Donec sit amet lectus rutrum, faucibus nibh non, viverra ligula. Integer consectetur erat metus, a porta orci lacinia vel. Proin arcu nibh, lobortis non mauris eget, iaculis viverra diam. Proin vehicula condimentum enim, in vehicula est convallis eu. Aliquam bibendum at magna ac varius. Nullam a augue at sem iaculis fringilla. Phasellus eu placerat dui. Phasellus ante massa, sollicitudin luctus molestie vel, eleifend congue ipsum. Aenean eget ligula tempor, faucibus ante non, pharetra odio. Nam luctus ut mauris a auctor. Nulla eu aliquet mauris, vel maximus ex. In odio tortor, placerat in efficitur quis, laoreet in est. Cras lectus quam, pharetra sed ex et, posuere tincidunt turpis. Praesent non ipsum arcu. Fusce tristique commodo nibh a vulputate.<span id="dots">...</span><span id="more2"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque venenatis bibendum varius. Donec sit amet lectus rutrum, faucibus nibh non, viverra ligula. Integer consectetur erat metus, a porta orci lacinia vel. Proin arcu nibh, lobortis non mauris eget, iaculis viverra diam. Proin vehicula condimentum enim, in vehicula est convallis eu. Aliquam bibendum at magna ac varius. Nullam a augue at sem iaculis fringilla. Phasellus eu placerat dui. Phasellus ante massa, sollicitudin luctus molestie vel, eleifend congue ipsum. Aenean eget ligula tempor, faucibus ante non, pharetra odio. Nam luctus ut mauris a auctor. Nulla eu aliquet mauris, vel maximus ex. In odio tortor, placerat in efficitur quis, laoreet in est. Cras lectus quam, pharetra sed ex et, posuere tincidunt turpis. Praesent non ipsum arcu. Fusce tristique commodo nibh a vulputate.</span></p> 
        <button onclick="myFunction2()" id="myBtn2">Read more</button>
    </div>
        <br/>
            <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>

    
    
       </div>
    

    
    
   <footer>
    <div>
 <a id="instagram" href="http://Instagram.com/uumuterol" target=new><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQQnHa5Sta0aJ4T35hirneAHvnqnq8vIoE1fFnhZQjXNmO8cymT" border="0" width="50px" height="50px"></a>
       
       <a id="linkedin" href="https://www.linkedin.com/in/umuterol/" target=new><img src="https://icons-for-free.com/iconfiles/png/512/linkedin+logo+media+professional+profile+social+icon-1320168598882107551.png" border="0" width="50px" height="50px"></a>
       
       <a id="twitter" href="https://twitter.com/Hp7Tron" target=new><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQbdSBjaI3evSWfkaBaFTKVsogK-IGhjPyyXoQdW8BVvPFf5wp7" border="0" width="50px" height="50px"></a>
       </div>
          
       <center><img  src="umt.jpg" alt="Italian Trulli" width="1000" height="200"> </center>  
    
    </footer> 
-->
    
    
 <script>function myFunction() {
  var dots = document.getElementById("dots");
  var moreText = document.getElementById("more");
  var btnText = document.getElementById("myBtn");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "Read more";
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "Read less";
    moreText.style.display = "inline";
  }
}
    
   function myFunction2() {
  var dots = document.getElementById("dots");
  var moreText = document.getElementById("more2");
  var btnText = document.getElementById("myBtn2");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "Read more";
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "Read less";
    moreText.style.display = "inline";
  }
} 
    
    
    
    
    
    
    
    </script>
</body>
</html>