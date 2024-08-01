<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>front</title>
    <link rel="stylesheet" type="text/css" href="frontstyle.css">



    
</head>
<body>
<nav>
        <div  class="nav_container">


<div class="firstbar">
            <div class="subbar">
                <a href="email.html" class="number"><img src="jewwllarypic\email.png" class="firstbaricon">Royalcanvasevent@gmail.com</a>
            <a href="number.html" class="number2"><img src="jewwllarypic\call.png" class="firstbaricon2">91+830 286 3072</a>
          </div>
            <div class="photos">
                <a href="instagram.html"><img src="jewwllarypic\instaicon.png" alt="insta" class="baricons"></a>
                <a href="instagram.html"><img src="jewwllarypic\emailicon.png" alt="whatsap" class="baricons"></a>
                <a href="instagram.html"><img src="jewwllarypic\facebookicon.png" alt="facebook" class="baricons"></a>
                <a href="instagram.html"><img src="jewwllarypic\twittericon.png" alt="twitter" class="baricons"></a>
          </div>
</div>
            
    
    <div class ="secondbar"> 
      <div class="logo">
        <img src="jewwllarypic/logo1.png" class="logo1"></div>
        <div class="menubar">
                <select name="i am looking for" id="looking" class="baroption barnumboptionone" onchange="window.location.href=this.value">
                  <option value="Wedding">i am looking for</option>
                      <option value="wedding.php">Wedding event</option>
                       <option value="Birthday.php">Birthday event</option>
                             <option value="corporate_event.php">Corporate event</option>
                             <option value="Engagement.php">Engagement </option>
                             <option value="Anniversary.php">Anniversary</option>
                      </select>
                       
                      <select name="vendorbar" id="vendorbar" class="baroption  " onchange="window.location.href=this.value">
                  <option value="vendors">Vendors</option>
                      <option value="weddingwear.PHP">Cloths</option>
                       <option value="djvendors.php">Music </option>
                             <option value="decorvandor.php">Decoration</option>
                             <option value="invetationvendor.php">Invitation  </option>
                             <option value="venuevendors.php">Venue</option>
                             <option value="jewellaryvendor.php">Jewellery</option>
                             <option value="mackupvendors.PHP">Makeup</option>

                            </select>
                       
                        <a href="Aboutus.php" class="menulink">About</a> 
                        <a href="contact.php" class="menulink">Contact us</a> 
                        <a href="gallary.php" class="menulink">See our work</a> 
                        <button class="menulink" onclick="document.getElementById('id02').style.display='block'" >Registration</button> 
                        <button class="menulink" onclick="document.getElementById('id01').style.display='block'" >Login</button> 
                        
                      </div>
     </div>
        </div>
    </nav>
  
    <div id="id01" class="modal">
  
  <form class="modal-content animate" action="connection.php" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      
    </div>
    <h3 class="loginpopup">login form</h3>
    <div class="container">
      <label for="username"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="username" class="input" required>

      <label for="password"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="password"  class="input"  required>
        
      <button type="submit" class="database_button">Login</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button"  onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
  </form>
</div>

<div id="id02" class="modal">
  
  <form class="modal-content animate" action="connection2.php" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
      
    </div>
    <h3 class="loginpopup">Registration form</h3>
    <div class="container">
      
  
      <label for="password"><b>Email</b></label><br>
      <input type="email" placeholder="enter your mail"  class="input"  name="email" required><br>

      <label for="username"><b>Username</b></label>
      <input type="text" placeholder="Enter Username"  class="input" name="username" required>

      <label for="password"><b>Password</b></label>
      <input type="password" placeholder="Create Password" class="input"  name="password" required>
        
      <button type="submit" class="database_button">Registration</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button"  onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
      
    </div>
  </form>
</div>


<script>
// Get the modal

var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

<script>
var modal = document.getElementById('id02');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

</script>
