<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link  rel="stylesheet" type="text/css" href="vendorstyle.css" />
    

</head>
<body>
    
        <!-- nevegationbar  start-->
        <?php  
  include("include/header.php");
  ?>
     
            <!-- nevegationbar close-->
    
        <!--head img start -->
<div class="sectionone">
    <div class="aboutusimg">
        <img src="jewwllarypic/mackup2.jpg" alt="img" class="headimgabout">
        <div cass="wordsonimg">    
               <div class="about">Choose your Makeup</div>
        <div class="linkpage"><a href="index.php" style="color:white;">Home</a>/<a href="mackupvendors.php" style="color:white;">Makeup</a></div>
    </div>

    </div>
    
</div>

<h1 class="content">Beauty begins the Movement you decide to be yourself</h1>

        <!--head img close-->

<div class="vendor_conteiner"> 
    <DIV class="box">
        <img src="jewwllarypic\mackup1.jpg" alt="img"  class="vendor_img"/>\
        <DIV class="box2">
                        <div class="Name">HD MAKEUP</div>
        <div class="Price">&#8377; 4033.45</div>
        <button class="query_button" onclick="openPopup()">Send query</button>
        
    </DIV>

    </DIV>
    <DIV class="box">
        <img src="jewwllarypic\mackup2.jpg" alt="img"  class="vendor_img"/>
        <div class="box2">
        <div class="Name">MATTE MAKEUP</div>
        <div class="Price">&#8377; 14333.087</div>
        <button class="query_button" onclick="openPopup()">Send query</button>
        </div>
    </DIV>
    
    <DIV class="box">
        <img src="jewwllarypic\mackup3.jpg" alt="img"  class="vendor_img"/>
        <div class="box2">
        <div class="Name">DEWY MAKEUP</div>
        <div class="Price">&#8377; 14333.670</div>
        <button class="query_button" onclick="openPopup()">Send query</button>
        </div>
    </DIV>
    
    <DIV class="box">
        <img src="jewwllarypic\mackup4.jpg" alt="img"  class="vendor_img"/>
        <div class="box2">
        <div class="Name">AIR BRUSH MAKEUP</div>
        <div class="Price">&#8377; 7433.893</div>
        <button class="query_button" onclick="openPopup()">Send query</button>
        </div>
    </DIV>
    
    <DIV class="box">
        <img src="jewwllarypic\mackup5.jpg" alt="img"  class="vendor_img"/>
        <div class="box2">

        <div class="Name">EDITORIAL MAKEUP</div>
        <div class="Price">&#8377; 7569.09</div>
        <button class="query_button" onclick="openPopup()">Send query</button>
        </div>
    </DIV>
    
    <DIV class="box">
        <img src="jewwllarypic\mackup6.jpg" alt="img"  class="vendor_img"/>
        <div class="box2">

        <div class="Name">CELEBRATY MAKRUP</div>
        <div class="Price">&#8377; 74658.00</div>
        <button class="query_button" onclick="openPopup()">Send query</button>
        </div>
    </DIV>
    
    <DIV class="box">
        <img src="jewwllarypic\mackup7.png" alt="img"  class="vendor_img"/>
        <div class="box2">

        <div class="Name">PERMANENT MAKEUP</div>
        <div class="Price">&#8377; 9640.15</div>
        <button class="query_button" onclick="openPopup()">Send query</button>
        </div>
    </DIV>
    
    <DIV class="box">
        <img src="jewwllarypic\mackup8.jpg" alt="img"  class="vendor_img"/>
        <div class="box2">
        <div class="Name">BRIDAL MAKEUP</div>
        <div class="Price">&#8377; 86211.55</div>
        <button class="query_button" onclick="openPopup()">Send query</button>
        </div>
    </DIV>
    <DIV class="box">
        <img src="jewwllarypic\mackup9.png" alt="img"  class="vendor_img"/>
        <div class="box2">
        <div class="Name">NUDE MAKEUP</div>
        <div class="Price">&#8377; 2033.45</div>
        <button class="query_button" onclick="openPopup()">Send query</button>
        </div>
    </DIV>
</div>



<!--footer-->

<?php  
  include("include/footer.php");
  ?>
<!-- js-->




<script>
    function openPopup() {
      var overlay = document.createElement("div");
      overlay.classList.add("overlay");

      var loginForm = document.createElement("form");
      loginForm.innerHTML = `
        <span class="close-btn" onclick="closePopup()">X</span>
        <h2>Send Query</h2>
        <label  for="Name" autofocus>
	<input class="encurey_textname"type="text" placeholder="enter your Name" ></label>

<label for="Number" autofocus>
	<input class="encurey_textnumber" type="TEXT" placeholder="enter your Number" ></label>
<br>
<br>

<label for="message" autofocus>
	<textarea class="encurey_textarea" placeholder="enter your Quirey" id="message" cols="50" rows="10"></textarea></label>
<br><br>

<label for="button" autofocus>
	<input class="submit_button" type="button" value="send enquirey" height="10px" width="50px" ></label>
      `;

      overlay.appendChild(loginForm);
      document.body.appendChild(overlay);
    }

    function closePopup() {
      var overlay = document.querySelector(".overlay");
      overlay.parentNode.removeChild(overlay);
    }
  </script>
</body>
</html>