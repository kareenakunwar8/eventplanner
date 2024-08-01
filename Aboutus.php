
    <style>
        
*{
    margin: 0%;
    padding: 0%;
}
/* img heading*/

.sectiontwo{
    height: 494px;
    width: 100%;
    position: absolute;
    margin-top: 28px;
}
.sectionthree{
    background-color: #afcde5;
    height: 248px;
    width: 100%;
    position: absolute;
    margin-top: 543px;
}
.sectionfour{
    height: 478px;
    width: 100%;
    margin-top: 814px;
    margin-bottom: 70px;
}

.introimg{
    margin-top: 54px;
    margin-left: 87px;
    height: 301px;
    width: 305px;
    border: 18px solid #425f76;
    float: left;
}
.intro{
    margin-top: 54px;
    margin-left: 280px;
    height: 377px;
    width: 503px;
    float: left;
    font-family:Californian FB;
    font-size: 25px;
  
}
.nameheadingourteam{
    text-align: center;

}
.ourteam{
    font-size: 40px;
    font-family:Segoe Print ;

}
.headinteam{
  font-family:Californian FB;
    font-size: 30px;

}
.we4img{
  height: 138px;
    width: 140px;
    border-radius: 100%;
    margin-left: 49px;
    border: 6px solid #425f76;
    margin-top: 20px;
}
.socilmedia{
    height: 35px;
    width: 35px;
    margin-left: 3px;
}
.socialmedia_contain{
    margin-left: 65px;
    margin-top: 17px;
}
.name{
    font-size: 25px;
    font-family:Californian FB;
text-align: center;}
.work{
    font-size: 20px;
    text-align: center;
    font-family:Californian FB;
}

.imgcontainerr{
  float: left;
    height: 353px;
    width: 269px;
    margin-top: 48px;
    margin-left: 54px;
    box-shadow: 0px 0px 10px #888888

}
.headimgabout{
    height: 493px;
    width: 100%;
  
}
.about{
    
    margin-top: -240px;
    position: absolute;
    font-size: 40px;
    margin-left: 50%;
    font-family:Segoe Print ;

}

.linkpage{
    margin-top: -190px;
    position: absolute;
    font-size: 20px;
    text-decoration: none;
    margin-left: 50%;
    font-family:Segoe Print ;

  
}
/*count chart start*/

.countdown {
   
   align-items: center;
   justify-content: center;
   font-family: Arial, sans-serif;
   float: left;
 margin-left:69px;
   color: #333;
   float: left;
 }
 .countdown .icon {
   margin-right: 10px;
   float: left;
 }
 .noplate
 {
   font-size: 30px;
   text-align: center;
   font-family:Californian FB;
 }
 .numbercount
 {
   font-size: 70px;
   text-align: center;
 }
 .verticalline3
 {
   background-color:  black;
   height: 150px;
   width:2px;
   float:left;
   margin-left: 30px;
 }
 .verticalline1
 {
   background-color:  black;
   height: 150px;
   width:2px;
   float:left;
   margin-left: 30px;
 }
 .verticalline2
 {
   background-color:  black;
   height: 150px;
   width:2px;
   float:left;
   margin-left: 30px;
 }
 .count_container{
  margin-left: 158px;
    margin-top: 51px;
 }
 .reting {
    margin-left: 51px;
    font-size: 40px;
    color: #ffcb02;

}
    </style>
</head>
<body>
        <!--navigation bar start-->
        <?php  
  include("include/header.php");
  ?>
    <!--navigation bar close-->


        <!--head img start -->
<div class="sectionone">
    <div class="aboutusimg">
        <img src="jewwllarypic/decor9.jpg" alt="img" class="headimgabout">
        <div cass="wordsonimg">    
               <div class="about">About Us</div>
        <div class="linkpage"><a style="color:rgb(9, 8, 8);"href="index.php">Home</a>/<a style="color:rgb(2, 2, 2);" href="Aboutus.php">About Us</a></div>
    </div>

    </div>
    
</div>

        <!--head img close-->

        <!--section two introduction start -->
        <div class="sectiontwo">
                <div class="imgtwo"><img src="jewwllarypic/introimg.jpg" alt="imgtwo" class="introimg"></div>
                <p class="intro"> Welcome to Royal Canvas Event, where moments turn into memories and connections are
                   made. Our team is dedicated to curating unforgettable experiences that leave a lasting impression."
                  <BR><br>
                 we believe in the power of bringing people together. With a passion for 
                  creating exceptional events, we strive to inspire, entertain, and unite communities through
                   unique and engaging experiences."</p>
                
            </div>
        <!--section two introduction end -->
                <!-- number section start  -->
                    <div class="sectionthree">
                      <div class="count_container">
                        <div class="countdown" id="countdown1">
                          <span class="numbercount">100</span><br>
                          <p class="noplate">Happy Couples</p>
                        </div>
                        <div class="verticalline3"></div>
                        <div class="countdown " id="countdown2">
                          <span class="numbercount">500</span><br>
                          <p class="noplate">Wedding</p>
                      
                        </div>
                        <div class="verticalline1"></div>
                        <div class="countdown" id="countdown3">
                          <span class="numbercount">1000</span><br>
                          <p class="noplate">Decoration</p>
                      
                        </div>
                        <div class="verticalline2"></div>
                        <div class="countdown" id="countdown4">
                          <span class="numbercount">1000</span><br>
                          <p class="noplate">Location</p>
                      
                        </div>
                      </div>
                    </div>
                <!-- number section   end -->


                                 <!--  team introduction start -->
<div class="sectionfour">
    <div class="nameheadingourteam">
                <div class="ourteam">Our Team</div>
                    <div class="headinteam">Meet our Planners</div>
                </div>
                    <div class="imgcontainerr">
                        <img src="jewwllarypic/kareena.jpg" alt="img" class="we4img">
                        <div class="name">Kareena Kunwar Rao</div>
                        <div class="work">Jewellary Desiner</div>
                        <p class="reting"><strong>&#9733;&#9733;&#9733;&#9733;&#9733;</strong> </p>

                        <div class="socialmedia_contain">
                            <a href="https://myaccount.google.com/u/1/security?pageId=none"><img src="jewwllarypic/emailicon.png" class="socilmedia"></a>
                            <a href="https://www.instagram.com/kareena_singh_sakrodiya?igsh=bnIyYnM5aHg3NXcz"><img src="jewwllarypic/instaicon.png" class="socilmedia"></a>
                            <a href="https://www.instagram.com/kareena_singh_sakrodiya?igsh=bnIyYnM5aHg3NXcz"><img src="jewwllarypic/facebookicon.png" class="socilmedia"></a>
                        </div>
                    </div>

                    <div class="imgcontainerr">
                        <img src="jewwllarypic/khushi.jpg" alt="img" class="we4img">
                        <div class="name">Khushi joshi </div>
                        <div class="work">Photography</div>
                        <p class="reting"><strong>&#9733;&#9733;&#9733;&#9733;&#9733;</strong> </p>

                        <div class="socialmedia_contain">
                        <a href="https://myaccount.google.com/?tab=kk"><img src="jewwllarypic/emailicon.png" class="socilmedia"></a>
                            <a href="https://www.instagram.com/khushijoshi7306?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw=="><img src="jewwllarypic/instaicon.png" class="socilmedia"></a>
                            <a href="https://www.instagram.com/khushijoshi7306?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw=="><img src="jewwllarypic/facebookicon.png" class="socilmedia"></a>
                        </div>
                    </div>

                    <div class="imgcontainerr">
                        <img src="jewwllarypic/diksha.jpg" alt="img" class="we4img">
                        <div class="name">Diksha patwa</div>
                        <div class="work">Cloth</div>
                        <p class="reting"><strong>&#9733;&#9733;&#9733;&#9733;&#9733;</strong> </p>

                        <div class="socialmedia_contain">
                            <a href="https://myaccount.google.com/?tab=kk"><img src="jewwllarypic/emailicon.png" class="socilmedia"></a>
                            <a href="https://www.instagram.com/diksha.patwa_?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw=="><img src="jewwllarypic/instaicon.png" class="socilmedia"></a>
                            <a href="https://www.instagram.com/diksha.patwa_?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw=="><img src="jewwllarypic/facebookicon.png" class="socilmedia"></a>
                        </div></div>

                    <div class="imgcontainerr">
                        <img src="jewwllarypic/makup.jpg" alt="img" class="we4img">
                        <div class="name">Afiya shek</div>
                        <div class="work">Makeup artist</div>
                        <p class="reting"><strong>&#9733;&#9733;&#9733;&#9733;&#9733;</strong> </p>

                        <div class="socialmedia_contain">
                        <a href=""><img src="jewwllarypic/emailicon.png" class="socilmedia"></a>
                        <a href="https://www.instagram.com/btw_i.afiyaa?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw=="><img src="jewwllarypic/instaicon.png" class="socilmedia"></a>
                        <a href="https://www.instagram.com/btw_i.afiyaa?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw=="><img src="jewwllarypic/facebookicon.png" class="socilmedia"></a>
                    </div>
                    </div>
                    
</div>
    
                       

                                <!--  team introduction end  -->

                                <!--footer-->
                                <?php  
  include("include/footer.php");
  ?>
  <!--footer end-->

<!--number section script-->
  <script>
    function animateCount(element, start, end, duration) {
      let range = end - start;
      let current = start;
      let increment = end > start ? 1 : -1;
      let stepTime = Math.abs(Math.floor(duration / range));
      let timer = setInterval(function() {
        current += increment;
        element.textContent = current;
        if (current == end) {
          clearInterval(timer);
        }
      }, stepTime);
    }

    function startCountdown() {
      animateCount(document.getElementById('countdown1').querySelector('.numbercount'), 1000, 100, 3000);
      animateCount(document.getElementById('countdown2').querySelector('.numbercount'), 100, 700, 400);
      animateCount(document.getElementById('countdown3').querySelector('.numbercount'), 100, 400, 500);
      animateCount(document.getElementById('countdown4').querySelector('.numbercount'), 230, 1100, 3000);

    }

    startCountdown();
  </script>


  
</body>
</html>