<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>wedding wear</title>
    <link  rel="stylesheet" type="text/css" href="vendorstyle.css" />
    <style>
        .btn-conteiner {
  display: flex;
  justify-content: center;
  --color-text: #ffffff;
  --color-background: #425f76;
  --color-outline: #425f76;
  --color-shadow: #00000080;
}

.btn-content {
    display: flex;
    align-items: center;
    padding: 5px 30px;
    text-decoration: none;
    font-family: 'Poppins', sans-serif;
    margin-bottom: 62px;
    font-weight: 600;
    margin-top: 9px;
    font-size: 30px;
    margin-left: 787px;
    color: var(--color-text);
    background: #354f64;
    transition: 1s;
    border-radius: 100px;
    box-shadow: 0 0 0.2em 0 #7391aa;
}

.btn-content:hover, .btn-content:focus {
  transition: 0.5s;
  -webkit-animation: btn-content 1s;
  animation: btn-content 1s;
  outline: 0.1em solid transparent;
  outline-offset: 0.2em;
  box-shadow: 0 0 0.4em 0 #7319aa;
}

.btn-content .icon-arrow {
  transition: 0.5s;
  margin-right: 0px;
  transform: scale(0.6);
}

.btn-content:hover .icon-arrow {
  transition: 0.5s;
  margin-right: 25px;
}

.icon-arrow {
  width: 20px;
  margin-left: 15px;
  position: relative;
  top: 6%;
}
  
/* SVG */
#arrow-icon-one {
  transition: 0.4s;
  transform: translateX(-60%);
}

#arrow-icon-two {
  transition: 0.5s;
  transform: translateX(-30%);
}

.btn-content:hover #arrow-icon-three {
  animation: color_anim 1s infinite 0.2s;
}

.btn-content:hover #arrow-icon-one {
  transform: translateX(0%);
  animation: color_anim 1s infinite 0.6s;
}

.btn-content:hover #arrow-icon-two {
  transform: translateX(0%);
  animation: color_anim 1s infinite 0.4s;
}

/* SVG animations */
@keyframes color_anim {
  0% {
    fill: white;
  }

  50% {
    fill: #7391aa;
  }

  100% {
    fill: white;
  }
}

/* Button animations */
@-webkit-keyframes btn-content {
  0% {
    outline: 0.2em solid  #7391aa;
    outline-offset: 0;
  }
}

@keyframes btn-content {
  0% {
    outline: 0.2em solid #7391aa;
    outline-offset: 0;
  }
}
    </style>

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
        <img src="jewwllarypic/wedding2.jpg" alt="img" class="headimgabout">
        <div cass="wordsonimg">    
               <div class="about">choose your dresses</div>
        <div class="linkpage"><a href="index.php" style="color:white;">Home</a>/<a href="weddingwear.php" style="color:white;">Wedding</a></div>
    </div>

    </div>
    
</div>

        <!--head img close-->

    
    <div class="vendor_conteiner"> 
    <DIV class="box">
        <img src="jewwllarypic\imgd.jpg" alt="img"  class="vendor_img"/>\
        <DIV class="box2">
                        <div class="Name">BALL GOWN</div>
        <div class="Price">&#8377; 20333.45</div>
        <button class="query_button" onclick="openPopup()">send quary</button>
        
    </DIV>

    </DIV>
    <DIV class="box">
        <img src="jewwllarypic\imgd1.jpg" alt="img"  class="vendor_img"/>
        <div class="box2">
        <div class="Name">MERMAID DRESS</div>
        <div class="Price">&#8377; 140333.087</div>
        <button class="query_button" onclick="openPopup()">send quary</button>
        </div>
    </DIV>
    
    <DIV class="box">
        <img src="jewwllarypic\imgd2.jpg" alt="img"  class="vendor_img"/>
        <div class="box2">
        <div class="Name">LEHENGA</div>
        <div class="Price">&#8377; 146333.670</div>
        <button class="query_button" onclick="openPopup()">send quary</button>
        </div>
    </DIV>
    
    <DIV class="box">
        <img src="jewwllarypic\imgd3.jpg" alt="img"  class="vendor_img"/>
        <div class="box2">
        <div class="Name">TRUMPET DRESS</div>
        <div class="Price">&#8377; 74333.893</div>
        <button class="query_button" onclick="openPopup()">send quary</button>
        </div>
    </DIV>
    
    <DIV class="box">
        <img src="jewwllarypic\imgd4.jpg" alt="img"  class="vendor_img"/>
        <div class="box2">

        <div class="Name">SOUTH INDIAN DRESSES</div>
        <div class="Price">&#8377; 75693.09</div>
        <button class="query_button" onclick="openPopup()">send quary</button>
        </div>
    </DIV>
    
    <DIV class="box">
        <img src="jewwllarypic\imgd5.jpg" alt="img"  class="vendor_img"/>
        <div class="box2">

        <div class="Name">SAREES</div>
        <div class="Price">&#8377; 746458.00</div>
        <button class="query_button" onclick="openPopup()">send quary</button>
        </div>
    </DIV>
    
    <DIV class="box">
        <img src="jewwllarypic\imgd6.jpg" alt="img"  class="vendor_img"/>
        <div class="box2">

        <div class="Name">TURBAN</div>
        <div class="Price">&#8377; 96490.15</div>
        <button class="query_button" onclick="openPopup()">send quary</button>
        </div>
    </DIV>
    
    <DIV class="box">
        <img src="jewwllarypic\imgd7.jpg" alt="img"  class="vendor_img"/>
        <div class="box2">
        <div class="Name">SHERWANI</div>
        <div class="Price">&#8377; 86211.55</div>
        <button class="query_button" onclick="openPopup()">send quary</button>
        </div>
    </DIV>
    <DIV class="box">
        <img src="jewwllarypic\imgd8.jpg" alt="img"  class="vendor_img"/>
        <div class="box2">
        <div class="Name">TWINKALPATEL</div>
        <div class="Price">&#8377; 20333.45</div>
        <button class="query_button" onclick="openPopup()">send quary</button>
        </div>
    </DIV>
</div>


<!-- next button start-->

<div class="btn-conteiner">
  <a class="btn-content" href="djvendors.php">
    <span class="btn-title">NEXT</span>
    <span class="icon-arrow">
      <svg width="66px" height="43px" viewBox="0 0 66 43" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
        <g id="arrow" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
          <path id="arrow-icon-one" d="M40.1543933,3.89485454 L43.9763149,0.139296592 C44.1708311,-0.0518420739 44.4826329,-0.0518571125 44.6771675,0.139262789 L65.6916134,20.7848311 C66.0855801,21.1718824 66.0911863,21.8050225 65.704135,22.1989893 C65.7000188,22.2031791 65.6958657,22.2073326 65.6916762,22.2114492 L44.677098,42.8607841 C44.4825957,43.0519059 44.1708242,43.0519358 43.9762853,42.8608513 L40.1545186,39.1069479 C39.9575152,38.9134427 39.9546793,38.5968729 40.1481845,38.3998695 C40.1502893,38.3977268 40.1524132,38.395603 40.1545562,38.3934985 L56.9937789,21.8567812 C57.1908028,21.6632968 57.193672,21.3467273 57.0001876,21.1497035 C56.9980647,21.1475418 56.9959223,21.1453995 56.9937605,21.1432767 L40.1545208,4.60825197 C39.9574869,4.41477773 39.9546013,4.09820839 40.1480756,3.90117456 C40.1501626,3.89904911 40.1522686,3.89694235 40.1543933,3.89485454 Z" fill="#FFFFFF"></path>
          <path id="arrow-icon-two" d="M20.1543933,3.89485454 L23.9763149,0.139296592 C24.1708311,-0.0518420739 24.4826329,-0.0518571125 24.6771675,0.139262789 L45.6916134,20.7848311 C46.0855801,21.1718824 46.0911863,21.8050225 45.704135,22.1989893 C45.7000188,22.2031791 45.6958657,22.2073326 45.6916762,22.2114492 L24.677098,42.8607841 C24.4825957,43.0519059 24.1708242,43.0519358 23.9762853,42.8608513 L20.1545186,39.1069479 C19.9575152,38.9134427 19.9546793,38.5968729 20.1481845,38.3998695 C20.1502893,38.3977268 20.1524132,38.395603 20.1545562,38.3934985 L36.9937789,21.8567812 C37.1908028,21.6632968 37.193672,21.3467273 37.0001876,21.1497035 C36.9980647,21.1475418 36.9959223,21.1453995 36.9937605,21.1432767 L20.1545208,4.60825197 C19.9574869,4.41477773 19.9546013,4.09820839 20.1480756,3.90117456 C20.1501626,3.89904911 20.1522686,3.89694235 20.1543933,3.89485454 Z" fill="#FFFFFF"></path>
          <path id="arrow-icon-three" d="M0.154393339,3.89485454 L3.97631488,0.139296592 C4.17083111,-0.0518420739 4.48263286,-0.0518571125 4.67716753,0.139262789 L25.6916134,20.7848311 C26.0855801,21.1718824 26.0911863,21.8050225 25.704135,22.1989893 C25.7000188,22.2031791 25.6958657,22.2073326 25.6916762,22.2114492 L4.67709797,42.8607841 C4.48259567,43.0519059 4.17082418,43.0519358 3.97628526,42.8608513 L0.154518591,39.1069479 C-0.0424848215,38.9134427 -0.0453206733,38.5968729 0.148184538,38.3998695 C0.150289256,38.3977268 0.152413239,38.395603 0.154556228,38.3934985 L16.9937789,21.8567812 C17.1908028,21.6632968 17.193672,21.3467273 17.0001876,21.1497035 C16.9980647,21.1475418 16.9959223,21.1453995 16.9937605,21.1432767 L0.15452076,4.60825197 C-0.0425130651,4.41477773 -0.0453986756,4.09820839 0.148075568,3.90117456 C0.150162624,3.89904911 0.152268631,3.89694235 0.154393339,3.89485454 Z" fill="#FFFFFF"></path>
        </g>
      </svg>
    </span> 
  </a>
</div>
<!--next button stop-->
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