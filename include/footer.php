<!--footer-->
  <style>
    .overlayyy {
        overflow: hidden;
    top: 2200px;
    margin-left: 688px;
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
    

    .close-btnyy {
      position: absolute;
      top: 5px;
      right: 5px;
      cursor: pointer;
    }


    .form_containeryy
{
box-shadow: 1px -2px 13px 0px #86a0b6;
background-color: #86a0b6;
width: 30%;
height: 90%;
color: rgb(255 255 255);
}
.submit_buttonyy
{
height:40px;
font-size:x-large;
width:100%;
border: 1px solid white;
background-color: #425f76;
color:white;
}
.submit_buttonyy:hover{
background-color:#86a0b6 ;
color:black;
}
.encurey_textareayy{
margin-top:-8px;
}
.encurey_textnameyy
{
height: 30px;
margin-right:10%;
margin-top:2px;
}
.encurey_textnumberyy
{
height: 30px;
margin-top:8px;
}
.encurey_headyy{
padding:6%;
font-size:40px;
}
.enquirey_nameyy{
margin-top: -54px;
}
a{
text-decoration:none;
color: black;
}


  </style>

<footer>
    <div class="footer_cantainer">
    <div class="nav_bar_list">
        <ul clas="list_ul">
            <li clas="list_item"><img src="">Contact Us</li>
            <li clas="list_item"><img src="">About Us</li>
            <li clas="list_item"><img src="">See Our Work</li>
            <li clas="list_item"><img src="">I'am looking for</li>
            <li clas="list_item"><img src="">Vendors</li>
            <li clas="list_item"><img src="">Venues</li>
        </ul>
    </div>
    <div class="navbar_contact_list">
        <ul clas="list_ul">
            <li clas="list_item"><button class="send_query"  onclick="openPopup()">Send Query</button></li>
            <li clas="list_item"><img src="">Royalcanvasevent@gmail.com</li>
            <li clas="list_item"><img src="">91+ 7850 9097 94</li>
            <li clas="list_item"><img src="">7014 4073 77</li>
            <li clas="list_item"><img src="">Royalcanvasevent</li>
            <li clas="list_item"><img src="">Royalcanvasevent</li>
        </ul>
    </div>
    <div class="map">
      <iframe src="https://www.google.com/maps/embed?pb=!1m21!1m12!1m3!1d57905.04017678791!2d74.29408419309493!3d24.89576400097041!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m6!3e6!4m3!3m2!1d24.895691799999998!2d74.33528419999999!4m0!5e0!3m2!1sen!2sin!4v1707999432074!5m2!1sen!2sin" width="420" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
  </div>
  </footer>
  <!--footer end-->
  
  <script>
    function openPopup() {
      var overlayyy = document.createElement("div");
      overlayyy.classList.add("overlayyy");

      var loginForm = document.createElement("form");
      loginForm.innerHTML = `
        <span class="close-btnyy" onclick="closePopup()">X</span>
        <h2>Login</h2>
        <label  for="Name" autofocus>
	<input class="encurey_textnameyy"type="text" placeholder="enter your Name" ></label>

<label for="Number" autofocus>
	<input class="encurey_textnumberyy" type="TEXT" placeholder="enter your Number" ></label>
<br>
<br>

<label for="message" autofocus>
	<textarea class="encurey_textareayy" placeholder="enter your Quirey" id="message" cols="50" rows="10"></textarea></label>
<br><br>

<label for="button" autofocus>
	<input class="submit_buttonyy" type="button" value="send enquirey" height="10px" width="50px" onclick="queirey" ></label>
      `;

      overlayyy.appendChild(loginForm);
      document.body.appendChild(overlayyy);
    }

    function closePopup() {
      var overlayyy = document.querySelector(".overlayyy");
      overlayyy.parentNode.removeChild(overlayyy);
    }
  </script>
  


  <script type="text/javascript">
    function queirey()
    {
      alert("Successfully sent");
     
    }
    </script>   
  </body>

  </html>
   