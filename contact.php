<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <style>
*{
  margin: 0%;
            padding: 0%;
}          
        /*form  query start pop*/
        
    
    .overlay {
overflow: hidden;
top: 1064px;
    left: 654px;
    position: absolute;
transform: translate(-50%, -50%);
background-color: #f2f2f2;
padding: 20px;
border-radius: 10px;
width: 428px;
height: 389px;
box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
z-index: 9999;
}
    

    .close-btn {
      position: absolute;
      top: 5px;
      right: 5px;
      cursor: pointer;
    }


    .form_container
{
box-shadow: 1px -2px 13px 0px #86a0b6;
background-color: #86a0b6;
width: 30%;
height: 90%;
color: rgb(255 255 255);
}
.submit_button
{
height:40px;
font-size:x-large;
width:100%;
border: 1px solid white;
background-color: #425f76;
color:white;
}
.submit_button:hover{
background-color:#86a0b6 ;
color:black;
}
.encurey_textarea{
margin-top:-8px;
}
.encurey_textname
{
height: 30px;
margin-right:10%;
margin-top:2px;
}
.encurey_textnumber
{
height: 30px;
margin-top:8px;
}
.encurey_head{
padding:6%;
font-size:40px;
}
.enquirey_name{
margin-top: -54px;
}
a{
text-decoration:none;
color: black;
}



        /* form quesry stop pop*/

        .form_map{

    float: left;
    margin-left: 28px;
        }
        
   .containerbox{
    margin-left: 527px;
    margin-top: 174px;
   }
    .heading{
      font-size: 60px;
    margin-left: -1px;
    margin-top: 232px;
    color: black;
    font-family: Segoe Print;

   }

   .send{
height: 40px;
width: 210px;
border: 0px;
background-color: #7391aa;
font-size: larger;
   }
   .send:hover{
    background-color:#2b3c4b;
    color: antiquewhite;
   }
  
   .form{
    background-color: rgb(18 86 124 / 33%);
    height: 624px;
    width: 50%;
    border: 0ch;
    margin-left: 628px;
    margin-bottom: 58px;

}
   .contactbutton{
    margin-top: 46px;
    margin-left: 605px;
    
}

   
   .help{
    font-size: x-large;
    margin-top: -4px;
    color: black;
    margin-left: 82px;
    font-family:Californian FB;
   }
   .query{
    font-size: x-large;
    margin-top: 4px;
    color: black;
    font-family:Californian FB;
   }
   .linkbutton{
    margin-left: 11px;
   }
   .name_of_person,.send,.phonenumber_of_person,.email_of_person{
    height: 35px;
    width: 50%;
    margin-top: 30px;
    margin-left: 50px;
   }
   .textarea{
    margin-top: 30px;
    margin-left: 50px;
   }


/*imgfram section style*/

.about{
  
  font-family: Segoe Print;
    margin-top: -208px;
    font-size: 40px;
    margin-left: 83px;
    margin-left: 703px;
    color: white;
}

.linkpage{
  margin-top: -2px;
    font-size: 20px;
   
    margin-left: 54%;
    color: white;
    font-family: Se goe Print;
    margin-left: 741px;
}
.headimgabout{
    height: 430px;
    width: 100%;
}


.package {
  width: 253px;
    height: 332px;
    margin-left: 125px;
    padding: 20px;
    border: 2px solid #425f76;
    border-radius: 10px;
    float: left;
    box-shadow: 3px 3px 5px #888888;
    text-align: center;
    font-size: 18px;
}
.package img {
  width: 100%;
  height: auto;
  border-radius: 10px;
}

.package h3 {
  margin-top: 10px;
  margin-bottom: 5px;

}


.pac_query{
  height: 49px;
    width: 295px;
    margin-left: -21px;
    border: none;
    background-color: #425f76;
    color: white;
    border-radius: 0px 0px 10px 10px;
    font-size: 25px;
    margin-top: 11px;
    
   font-family:Segoe Print ;

}
.packages{
    margin-top: 40px;
}
.pak_header{
  font-size: 60px;
    text-align: center;
    margin-top: 124px;
    font-family: Segoe Print;
}
.icontocontact{
  height: 48px;
    width: 43px;
    margin-top: -15px;
    margin-left: 4px 

}
.icontocontact:hover{
  background-color: rgba(0, 0, 0, 0.088);
}

.start{
  font-size: 30px;
margin-top: 29px;
  color: #ffc004;
}
.pakname{
  color: black;
  font-family:Californian FB;
}
.quotes{
  font-size: 20px;
  font-family:Californian FB;
}
</style>
</head>
<body>
<?php  
  include("include/header.php");
  ?>
   
 <!--head img start -->
 <div class="sectionone">
  <div class="aboutusimg">
      <img src="jewwllarypic/contactusfram.jpg" alt="img" class="headimgabout">
      <div cass="wordsonimg">    
             <div class="about">Contact Us</div>
      <div class="linkpage"><a style="color:white;  text-decoration:underline;"href="index.php">Home</a>/<a style="color:white;  text-decoration:underline;" href="Aboutus.php">ContactUs
      </a></div>
  </div>

  </div>
  
</div>

      <!--head img close-->



      <!-- package start -->
      <div class="pak_header">
    Package
    <p class="quotes">Form intimate gatherings to grand celebrations our event packages have something for everyone</p>
      </div>
      <div class="packages">

        <div class="package">
            <img src="jewwllarypic/event3.jpg" alt="Package 1">
            <h2 class="pakname">Package 1</h2>
            <p class="pakname"><strong> $1000</strong></p>
            <p class="start"><strong>&#9733;&#9733;&#9733;&#9733;&#9733;</strong> </p>
         
            <button class="pac_query" onclick="openPopup()">send query</button>
          </div>
        <div class="package">
            <img src="jewwllarypic/venue6.jpeg" alt="Package 2">
            <h2 class="pakname">Package 2</h2>
            <p class="pakname"><strong> $2000</strong></p>
            <p class="start"><strong>&#9733;&#9733;&#9733;&#9733;&#9733;</strong> </p>
            <button class="pac_query" onclick="openPopup()">send query</button>

          </div>
        <div class="package">
            <img src="jewwllarypic/imgd8.jpg" alt="Package 3">
            <h2 class="pakname">Package 3</h2>
            <p class="pakname"><strong> $3000</strong></p>
            <p class="start"><strong>&#9733;&#9733;&#9733;&#9733;&#9733;</strong> </p>
            <button class="pac_query" onclick="openPopup()">send query</button>

          </div>
    </div>


      <!--package end-->
<!--heading containt -->
<div class="bgimg">
    <div class="containerbox">
        <div class="heading">Contact Us</div>
        <div class="help"> Let us help you</div>
        <div class="query">Have queries Befor the apporment?</div>
    </div>
<div class="contactbutton">
    <img src="jewwllarypic/callicon.png" class="icontocontact"></img>
    <img src="jewwllarypic/emailicon.png" class="icontocontact"></img>
    <img src="jewwllarypic/locationicon.png" class="icontocontact"></img>
</div>
</div>
    <div class="form_map">      <iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d57916.58968917988!2d74.59370209286642!3d24.871128320613767!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m5!1s0x3968a08772d308cf%3A0xa0e5d33f2b5d1a0a!2sMewar%20Girls%20College%2C%20Sector5%2C%20Gandhi%20Nagar%2C%20Chittorgarh%2C%20Rajasthan!3m2!1d24.8710791!2d74.63490139999999!4m0!5e0!3m2!1sen!2sin!4v1708000011641!5m2!1sen!2sin" width="600" height="620" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>  
    </div>
    <div class="form">
        <label>
        <input type="text" class="name_of_person" placeholder="Name">
    </label><br>
        <label>
            <input type="text" class="phonenumber_of_person" placeholder="Phone Number">
        </label><br>
        <label>
            <input type="E-mail" class="email_of_person" placeholder="E-mail">

        </label><br>
        <textarea class="textarea"placeholder="Message" cols="60" rows="10"></textarea><br>
        <button type="Send_message" class="send">Send Message</button>

    </div>
   

   
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
      <h2>Login</h2>
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