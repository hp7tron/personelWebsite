<?php 

include("baglan.php");
   session_start();
/*

if($_SERVER["REQUEST_METHOD"] == "POST") {
  // receive all input values from the form
    
    $email = mysqli_real_escape_string($baglan , $_POST['email']);                                                                       //iletişim kısmı
    $sql ="SELECT * FROM uye_bilgileri WHERE mail = '$email' ";
    $result = mysqli_query($baglan, $sql);
    $row = mysqli_fetch_array($result);
    
   
    
 
  
 
} 
*/ 
if (isset($_POST['submit'])) {
  if ($_POST['submit'] == 'limon2') {
    
      $email = mysqli_real_escape_string($baglan , $_POST['email']);                                                                       //iletişim kısmı
      $sql ="SELECT * FROM uye_bilgileri WHERE mail = '$email' ";
     $result = mysqli_query($baglan, $sql);
     $iletisimRow = mysqli_fetch_array($result);
    
  } else if($_POST['submit'] == 'limon') {
    // Activate user
  }
}
     $email = mysqli_real_escape_string($baglan , $_POST['email']);                                                                     //iletişim kısmı
      $sql ="SELECT * FROM uye_bilgileri WHERE mail = '$email' ";
     $result = mysqli_query($baglan, $sql);
     $iletisimRow = mysqli_fetch_array($result);



$erdem = 'salaksalksalk';

/*else if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    $yenidurum = "misafir";
   
    $email2 = mysqli_real_escape_string($baglan , $_POST['email2']);
    $sql1 = "SELECT durum FROM uye_bilgileri where mail ='$email2' ";
    $result = mysqli_query($baglan,$sql1);
    $row1 = mysqli_fetch_array($result);
    $sql2 ="UPDATE uye_bilgileri SET durum = '$yenidurum'' where mail = '$email2' ";
    $result2 = mysqli_query($baglan,$sql2);
    $sql3 = "SELECT durum FROM uye_bilgileri where mail ='$email2' ";
    $result3 = mysqli_query($baglan,$sql3);
    $row3 = mysqli_fetch_array($result3);
}
*/



?>

<html lang="en">
<title>Umut Erol - Admin Panel</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<!--framework-->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
<style>
    body,
    h1,
    h2,
    h3,
    h4,
    h5 {
        font-family: "Poppins", sans-serif
    }

    body {
        font-size: 16px;
    }

    .w3-half img {
        margin-bottom: -6px;
        margin-top: 16px;
        opacity: 0.8;
        cursor: pointer
    }

    .w3-half img:hover {
        opacity: 1
    }
</style>

<body>

    <!-- Sidebar/menu -->
    <nav class="w3-sidebar w3-red w3-collapse w3-top w3-large w3-padding"
        style="z-index:3;width:300px;font-weight:bold;" id="mySidebar"><br>
        <a href="javascript:void(0)" onclick="w3_close()" class="w3-button w3-hide-large w3-display-topleft"
            style="width:100%;font-size:22px">Menüyü Kapat</a>
        <div class="w3-container">
        <h3 class="w3-padding-64"><b>UMUT<br>EROL</b></h3>
        </div>
        <div class="w3-bar-block">
            <a href="#izindegistir" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">İzin Değiştirme</a>
            <a href="#iletisim" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">İletişim</a>
            <a href="#duyuru" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Duyuru</a>
            <a href="#hakkinda" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Hakkında</a>
            <a href="#" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">yukarı çık</a>
        </div>
    </nav>

    <!-- Top menu on small screens -->
    <header class="w3-container w3-top w3-hide-large w3-red w3-xlarge w3-padding">
        <a href="javascript:void(0)" class="w3-button w3-red w3-margin-right" onclick="w3_open()">☰</a>
        <span>Umut Erol</span>
    </header>

    <!-- Overlay effect when opening sidebar on small screens -->
    <div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu"
        id="myOverlay">
    </div>

    <div id="id01" class="w3-modal">
        <div class="w3-modal-content">
          <div class="w3-container">
            <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-display-topright">&times;</span>
            <p> 
             
                <?php echo $erdem     ?>
                 
              </p>
          </div>
        </div>
      </div>
    </div>

    <!-- İLETİŞİM -->
    
    <div id="id02" class="w3-modal">
            <div class="w3-modal-content">
                <div class="w3-container">
                    <span onclick="document.getElementById('id02').style.display='none'"
                        class="w3-button w3-display-topright">&times;</span>
                    <p> <?php echo $iletisimRow[0];       ?>  </p>
                </div>
            </div>
        </div>
            
    
    
    
    
    
    <!-- !PAGE CONTENT! -->
    <div class="w3-main" style="margin-left:340px;margin-right:40px">
        <!-- İZİN DEĞİŞTİRME -->
        <div class="w3-container" style="margin-top:80px" id="izindegistir">
            <!-- <h1 class="w3-jumbo"><b>Interior Design</b></h1> -->
            <h1 class="w3-xxxlarge w3-text-red"><b>İzin Değiştirme</b></h1>
            <hr style="width:50px;border:5px solid red" class="w3-round">
            <form action="submit" id="adminupload" method="post">
                <div class="w3-panel w3-border w3-border-black w3-border" style="border: 4px;">
                    <div class="w3-panel w3-padding-16">
                        <label>İzni değiştirilecek kişinin email adresi : </label>
                        <input type="text" name="email2">
                     </div>
                     <div class="w3-panel w3-padding-16 input-group">
                        <button id="btn" onclick="document.getElementById('id01').style.display='block'" style="font-size: 15px;" type="submit" class="btn" name="limon2" value="izin">İzin değiştir</button>
                     </div>
                     
                </div>
            </form>
        </div>
        <script>
            // Get the modal
            var modal = document.getElementById("id01");
            
            // Get the button that opens the modal
            var btn = document.getElementById("btn");
            
            // Get the <span> element that closes the modal
            var span = document.getElementsByClassName("close")[0];

            btn.addEventListener("click", function(event){
            event.preventDefault()
            });
            
            // When the user clicks the button, open the modal 
            btn.onclick = function() {
              modal.style.display = "block";
            }
            
            // When the user clicks on <span> (x), close the modal
            span.onclick = function() {
              modal.style.display = "none";
            }
            
            // When the user clicks anywhere outside of the modal, close it
            window.onclick = function(event) {
              if (event.target == modal) {
                modal.style.display = "none";
              }
            }
            </script>

    

        
        
        
        
        
        
        
        <!-- İLETİŞİM -->
        <div class="w3-container" id="iletisim" style="margin-top:75px">
            <h1 class="w3-xxxlarge w3-text-red"><b>İletişim</b></h1>
            <hr style="width:50px;border:5px solid red" class="w3-round">
            <form action="submit" method="post">
                <div class="w3-panel w3-border w3-border-black w3-border" style="border: 4px;">
                    <div class="w3-panel w3-padding-16">
                        <label>Aranan kişinin email adresi : </label>
                        <input type="text" name="email">
                    </div>
                    <div class="w3-panel w3-padding-16 input-group">
                        <button style="font-size: 15px;" onclick="document.getElementById('id02').style.display='block'"  type="submit" id="finduser" class="btn" name="limon" value="iletisim">Kullanıcı
                            Ara</button>
                    </div>
                    <script>
                        var getmodal = document.getElementById("id02");

                        var kavun = document.getElementById("finduser");

                        var span2 = document.getElementsByClassName("close")[0];

                        kavun.addEventListener("click", function (event) {
                            event.preventDefault()
                        });

                        btn.onclick = function () {
                            modal.style.display = "block";
                        }

                        span.onclick = function () {
                            modal.style.display = "none";
                        }

                        window.onclick = function (event) {
                            if (event.target == modal) {
                                modal.style.display = "none";
                            }
                        }
                    </script>
                </div>
            </form>
        </div>

        
           
        
       

        <!-- DUYURU -->
        <div class="w3-container" id="duyuru" style="margin-top:75px">
            <h1 class="w3-xxxlarge w3-text-red"><b>Duyuru</b></h1>
            <hr style="width:50px;border:5px solid red" class="w3-round">
            <p>The best team in the world.</p>
            <p>We are lorem ipsum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                commodo consequat. Duis aute irure
                dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
                occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
                consectetur adipiscing elit, sed do eiusmod tempor
                incididunt ut labore et quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat.
            </p>
            <p><b>Our designers are thoughtfully chosen</b>:</p>
        </div>


        <!-- HAKKINDA -->
        <div class="w3-container" id="hakkinda" style="margin-top:75px">
            <h1 class="w3-xxxlarge w3-text-red"><b>Hakkında</b></h1>
            <hr style="width:50px;border:5px solid red" class="w3-round">
            <p>Some text our prices. Lorem ipsum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                aliquip ex ea commodo consequat. Duis aute irure</p>
        </div>




    </div>

    <!-- W3.CSS Container -->
    <div class="w3-light-grey w3-container w3-padding-32" style="margin-top:75px;padding-right:58px">
        <p class="w3-right">Powered by <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS"
                target="_blank" class="w3-hover-opacity">w3.css</a></p>
    </div>

    <script>
        // Script to open and close sidebar
        function w3_open() {
            document.getElementById("mySidebar").style.display = "block";
            document.getElementById("myOverlay").style.display = "block";
        }

        function w3_close() {
            document.getElementById("mySidebar").style.display = "none";
            document.getElementById("myOverlay").style.display = "none";
        }

        // Modal Image Gallery
        function onClick(element) {
            document.getElementById("img01").src = element.src;
            document.getElementById("modal01").style.display = "block";
            var captionText = document.getElementById("caption");
            captionText.innerHTML = element.alt;
        }
    </script>

</body>

</html>